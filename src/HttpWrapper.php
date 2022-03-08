<?php

namespace URLR;

use Psr\Http\Client\ClientInterface;
use Psr\Http\Message\RequestFactoryInterface;
use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\StreamFactoryInterface;

class HttpWrapper
{
    /**
     * @var ClientInterface
     */
    private $httpClient;

    /**
     * @var RequestFactoryInterface
     */
    private $requestFactory;

    /**
     * @var StreamFactoryInterface
     */
    private $streamFactory;

    public function __construct()
    {
        $this->httpClient = Urlr::getHttpClient();
        $this->requestFactory = Urlr::getRequestFactory();
        $this->streamFactory = Urlr::getStreamFactory();
    }

    /**
     * GET query to the API.
     *
     * @param string $endpoint Endpoint
     * @param array $headers Headers provided to the request
     *
     * @return ResponseInterface response of the query
     */
    public function get(
        string $endpoint,
        array $headers = []
    ): ResponseInterface {
        $request = $this->requestFactory->createRequest('GET', Urlr::BASE_URL . $endpoint);
        $request = $this->addHeadersToRequest($request, $headers);

        try {
            return $this->httpClient->sendRequest($request);
        } catch (\Exception $e) {
            throw new \Exception('Can\'t handle HTTP request: ' . $e->getMessage());
        }
    }

    /**
     * POST query to the API.
     *
     * @param string $endpoint Endpoint
     * @param mixed $body Body fields provided to the request
     * @param bool $json Whether the body need to be JSON encoded or not
     * @param array $headers Headers provided to the request
     *
     * @return ResponseInterface response of the query
     */
    public function post(
        string $endpoint,
        $body = [],
        bool $json = true,
        array $headers = []
    ): ResponseInterface {
        $request = $this->requestFactory->createRequest('POST', Urlr::BASE_URL . $endpoint);
        $request = $this->addHeadersToRequest($request, $headers);

        if (!empty($body) && is_array($body)) {
            $body = $json ? json_encode($body) : http_build_query($body);
            $request = $this->addBodyToRequest($request, $body);
        }

        try {
            return $this->httpClient->sendRequest($request);
        } catch (\Exception $e) {
            throw new \Exception('Can\'t handle HTTP request: ' . $e->getMessage());
        }
    }

    private function addHeadersToRequest(RequestInterface $request, array $headers): RequestInterface
    {
        $commonHeaders = [
            'Accept' => 'application/json',
            'Content-Type' => 'application/json'
        ];
        $headers = array_merge($headers, $commonHeaders);

        foreach ($headers as $headerKey => $headerValue) {
            $request = $request->withHeader($headerKey, $headerValue);
        }

        return $request;
    }

    private function addBodyToRequest(RequestInterface $request, string $body): RequestInterface
    {
        $stream = $this->streamFactory->createStream($body);
        $request = $request->withBody($stream);

        return $request;
    }
}
