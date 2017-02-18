<?php

declare(strict_types=1);

namespace Barryvanveen\Lastfm;

use Barryvanveen\Lastfm\Exceptions\MalformedDataException;
use Barryvanveen\Lastfm\Exceptions\ResponseException;
use GuzzleHttp\Client;
use Psr\Http\Message\ResponseInterface;

class DataFetcher
{
    const LASTFM_API_BASEURL = 'http://ws.audioscrobbler.com/2.0/';

    /** @var Client */
    protected $client;

    /** @var ResponseInterface */
    protected $responseString;

    /** @var array */
    protected $data;

    /**
     * DataFetcher constructor.
     */
    public function __construct()
    {
        $this->client = new Client([
            'http_errors' => false,
        ]);
    }

    /**
     * Get, parse and validate a response from the given url.
     *
     * @param array       $query
     * @param null|string $pluck
     *
     * @return mixed
     */
    public function get(array $query, $pluck = null)
    {
        $this->responseString = $this->client->get(self::LASTFM_API_BASEURL, [
            'query' => $query,
        ]);

        $this->data = json_decode((string) $this->responseString->getBody(), true);

        if ($this->responseString->getStatusCode() !== 200) {
            $this->throwResponseException();
        }

        if (isset($pluck)) {
            return $this->pluckData($this->data, $pluck);
        }

        return $this->data;
    }

    /**
     * @throws ResponseException
     */
    protected function throwResponseException()
    {
        if ($this->data === null) {
            throw new ResponseException('Undecodable response was returned.');
        }

        if (isset($this->data['error'], $this->data['message'])) {
            throw new ResponseException($this->data['message'], $this->data['error']);
        }

        throw new ResponseException('Unknown error');
    }

    protected function pluckData($data, $pluck)
    {
        if (isset($data[$pluck])) {
            return $data[$pluck];
        }

        if (strpos($pluck, '.') !== false) {
            $keys = explode('.', $pluck);

            $return = $data;
            foreach ($keys as $key) {
                if (!isset($return[$key])) {
                    throw new MalformedDataException('Malformed response data. Could not return requested array key.');
                }

                $return = $return[$key];
            }

            return $return;
        }

        throw new MalformedDataException('Malformed response data. Could not return requested array key.');
    }
}
