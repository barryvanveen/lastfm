<?php

declare(strict_types=1);

namespace Barryvanveen\Lastfm;

use Barryvanveen\Lastfm\Exceptions\MalformedDataException;
use Barryvanveen\Lastfm\Exceptions\ResponseException;
use Exception;
use Fig\Http\Message\StatusCodeInterface;
use GuzzleHttp\Client;
use Psr\Http\Message\ResponseInterface;

class DataFetcher
{
    public const LASTFM_API_BASEURL = 'http://ws.audioscrobbler.com/2.0/';

    protected Client $client;

    protected ResponseInterface $responseString;

    protected ?array $data;

    /**
     * DataFetcher constructor.
     *
     * @param Client $client
     */
    public function __construct(Client $client)
    {
        $this->client = $client;
    }

    /**
     * Get, parse and validate a response from the given url.
     *
     * @param array $query
     * @param null $pluck
     *
     * @throws MalformedDataException
     * @throws ResponseException
     * @return mixed
     */
    public function get(array $query, $pluck = null)
    {
        try {
            $this->responseString = $this->client->get(self::LASTFM_API_BASEURL, [
                'http_errors' => false,
                'query' => $query,
            ]);

            $this->data = json_decode((string) $this->responseString->getBody(), true);
        } catch (Exception $exception) {
            throw new ResponseException('Something when wrong getting data from Last.fm', $exception->getCode(), $exception);
        }

        if (StatusCodeInterface::STATUS_OK !== $this->responseString->getStatusCode() || null === $this->data) {
            $this->throwResponseException();
        }

        if (isset($pluck)) {
            return $this->pluckData($this->data, $pluck);
        }

        return $this->data;
    }

    /**
     * Throw an exception detailing what went wrong with this request.
     *
     * @throws ResponseException
     */
    protected function throwResponseException(): void
    {
        if (null === $this->data) {
            throw new ResponseException('Undecodable response was returned.');
        }

        if (isset($this->data['error'], $this->data['message'])) {
            throw new ResponseException($this->data['message'], $this->data['error']);
        }

        throw new ResponseException('Unknown error');
    }

    /**
     * Pluck a specific index from the data array. $pluck may be a classic index or a dot-notated index, in which
     * case the data array will be walked through recursively.
     *
     * Example 1: $data = ['foo' => 'bar', 'baz' => 'asd'],     $pluck = 'foo',      return = 'bar'
     * Example 2: $data = ['foo' => ['bar' => 'baz']],          $pluck = 'foo.bar',  return = 'baz'
     * Example 3: $data = ['foo' => [0 => 'bar', 1 => 'asd']],  $pluck = 'foo.1',    return = 'asd'
     * Example 4: $data = ['foo' => 'bar', 'baz' => 'asd'],     $pluck = '123',      MalformedDataException
     *
     * @param array  $data
     * @param string $pluck
     *
     * @throws MalformedDataException
     *
     * @return mixed
     */
    protected function pluckData($data, $pluck)
    {
        if (isset($data[$pluck])) {
            return $data[$pluck];
        }

        if (!$this->isNestedPluckString($pluck)) {
            throw new MalformedDataException('Malformed response data. Could not return requested array key.');
        }

        $firstPluckPart = $this->getFirstPluckPart($pluck);

        if (!isset($data[$firstPluckPart])) {
            throw new MalformedDataException('Malformed response data. Could not return requested array key.');
        }

        $remainingPluckPart = $this->getRemainingPluckPart($pluck);

        return $this->pluckData($data[$firstPluckPart], $remainingPluckPart);
    }

    protected function isNestedPluckString(string $pluck): bool
    {
        return false !== strpos($pluck, '.');
    }

    protected function getFirstPluckPart(string $pluck): string
    {
        $parts = $this->getPluckParts($pluck);

        return array_shift($parts);
    }

    protected function getRemainingPluckPart(string $pluck): string
    {
        $parts = $this->getPluckParts($pluck);

        array_shift($parts);

        return implode('.', $parts);
    }

    protected function getPluckParts(string $pluck): array
    {
        return explode('.', $pluck);
    }
}
