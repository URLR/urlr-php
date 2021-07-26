<?php

namespace URLR;

use URLR\Urlr;
use Http\Client\HttpClient;
use Http\Message\MessageFactory;

class HttpWrapper
{
    /**
     * @var HttpClient
     */
    private $httpClient;

    /**
     * @var MessageFactory
     */
    private $messageFactory;

    public function __construct()
    {
        $this->httpClient = Urlr::getHttpClient();
        $this->messageFactory = Urlr::getMessageFactory();
    }

    /**
     * GET query to the API.
     *
     * @param string $endpoint Endpoint
     * @param array $headers Headers provided to the request
     *
     * @return object response of the query
     */
    public function get(
        string $endpoint,
        array $headers = []
    ): object {
        $headers = $this->generateHeaders($headers);

        return $this->httpClient->sendRequest(
            $this->messageFactory->createRequest('GET', Urlr::BASE_URL . $endpoint, $headers)
        );
    }

    /**
     * POST query to the API.
     *
     * @param string $endpoint Endpoint
     * @param mixed $body Body fields provided to the request
     * @param bool $json Whether the body need to be JSON encoded or not
     * @param array $headers Headers provided to the request
     *
     * @return object response of the query
     */
    public function post(
        string $endpoint,
        $body = [],
        bool $json = true,
        array $headers = []
    ): object {
        if (!empty($body) && is_array($body)) {
            if ($json) {
                $body = json_encode($body);
            } else {
                $body = http_build_query($body);
            }
        }

        $headers = $this->generateHeaders($headers);

        return $this->httpClient->sendRequest(
            $this->messageFactory->createRequest('POST', Urlr::BASE_URL . $endpoint, $headers, $body)
        );
    }

    /**
     * Generate header for the query.
     *
     * @param array $headers Headers of the request
     *
     * @return array Final headers
     */
    private function generateHeaders(array $headers): array
    {
        $commonHeaders = [
            'Accept' => 'application/json',
            'Content-Type' => 'application/json'
        ];

        $headers = array_merge($headers, $commonHeaders);

        return $headers;
    }
}
