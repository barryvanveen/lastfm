<?php

declare(strict_types=1);

namespace Barryvanveen\Lastfm;

use Barryvanveen\Lastfm\Exceptions\ResponseException;
use GuzzleHttp\Client;
use Psr\Http\Message\ResponseInterface;

class DataFetcher
{
    /** @var Client */
    protected $client;

    /** @var ResponseInterface */
    protected $responseString;

    /** @var array */
    protected $responseData;

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
     * @param string $url
     *
     * @return array
     */
    public function get($url)
    {
        $this->fetchResponse($url);

        $this->parseResponse();

        $this->validateResponse();

        return $this->responseData;
    }

    /**
     * Fetch the response using a Guzzle client.
     *
     * @param string $url
     */
    protected function fetchResponse($url)
    {
        $this->responseString = $this->client->get($url);
    }

    /**
     * Parse JSON response into an associative array.
     */
    protected function parseResponse()
    {
        $this->responseData = json_decode((string) $this->responseString->getBody(), true);
    }

    /**
     * Throw an exception of the status code of the response is not 200 OK.
     *
     * @throws ResponseException
     */
    protected function validateResponse()
    {
        if ($this->responseString->getStatusCode() == 200 && !isset($this->responseData['error'])) {
            return;
        }

        $errorMessage = 'Lastfm API error '.$this->responseData['error'].': '.$this->responseData['message'];

        throw new ResponseException($errorMessage);
    }
}
