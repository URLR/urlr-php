<?php
/**
 * AccessTokensApi
 * PHP version 8.1
 *
 * @package  URLR
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * URLR API Reference
 *
 * API powering the features of URLR.<br><br>Note that in order to facilitate integration, we provide SDKs for various languages at https://github.com/URLR.<br><br>Key API principles:<br>         <ul><li>All dates follow **ISO-8601** format</li><li>Most errors follow **RFC 9457** standard</li><li>All responses are delivered in English</li></ul>
 *
 * The version of the OpenAPI document: 1.4
 * Contact: contact@urlr.me
 * @generated Generated by: https://openapi-generator.tech
 * Generator version: 7.9.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace URLR\Api;

use InvalidArgumentException;
use GuzzleHttp\Client;
use GuzzleHttp\ClientInterface;
use GuzzleHttp\Exception\ConnectException;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Psr7\MultipartStream;
use GuzzleHttp\Psr7\Request;
use GuzzleHttp\RequestOptions;
use GuzzleHttp\Promise\PromiseInterface;
use URLR\ApiException;
use URLR\Configuration;
use URLR\HeaderSelector;
use URLR\ObjectSerializer;

/**
 * AccessTokensApi Class Doc Comment
 *
 * @package  URLR
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class AccessTokensApi
{
    /**
     * @var ClientInterface
     */
    protected ClientInterface $client;

    /**
     * @var Configuration
     */
    protected Configuration $config;

    /**
     * @var HeaderSelector
     */
    protected HeaderSelector $headerSelector;

    /**
     * @var int Host index
     */
    protected int $hostIndex;

    /** @var string[] $contentTypes **/
    public const contentTypes = [
        'createAccessToken' => [
            'application/json',
        ],
        'refreshAccessToken' => [
            'application/json',
        ],
    ];

    /**
     * @param ClientInterface|null $client
     * @param Configuration|null   $config
     * @param HeaderSelector|null  $selector
     * @param int                  $hostIndex (Optional) host index to select the list of hosts if defined in the OpenAPI spec
     */
    public function __construct(
        ClientInterface $client = null,
        Configuration $config = null,
        HeaderSelector $selector = null,
        int $hostIndex = 0
    ) {
        $this->client = $client ?: new Client();
        $this->config = $config ?: Configuration::getDefaultConfiguration();
        $this->headerSelector = $selector ?: new HeaderSelector();
        $this->hostIndex = $hostIndex;
    }

    /**
     * Set the host index
     *
     * @param int $hostIndex Host index (required)
     */
    public function setHostIndex(int $hostIndex): void
    {
        $this->hostIndex = $hostIndex;
    }

    /**
     * Get the host index
     *
     * @return int Host index
     */
    public function getHostIndex(): int
    {
        return $this->hostIndex;
    }

    /**
     * @return Configuration
     */
    public function getConfig(): Configuration
    {
        return $this->config;
    }

    /**
     * Operation createAccessToken
     *
     * Get an access token
     *
     * @param  \URLR\Model\CreateAccessTokenRequest|null $createAccessTokenRequest You can use this endpoint to get an access token to access the API. (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['createAccessToken'] to see the possible values for this operation
     *
     * @throws ApiException on non-2xx response or if the response body is not in the expected format
     * @throws InvalidArgumentException
     * @return \URLR\Model\CreateAccessToken200Response|\URLR\Model\CreateAccessToken401Response
     */
    public function createAccessToken(
        ?\URLR\Model\CreateAccessTokenRequest $createAccessTokenRequest = null,
        string $contentType = self::contentTypes['createAccessToken'][0]
    ): \URLR\Model\CreateAccessToken200Response
    {
        list($response) = $this->createAccessTokenWithHttpInfo($createAccessTokenRequest, $contentType);
        return $response;
    }

    /**
     * Operation createAccessTokenWithHttpInfo
     *
     * Get an access token
     *
     * @param  \URLR\Model\CreateAccessTokenRequest|null $createAccessTokenRequest You can use this endpoint to get an access token to access the API. (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['createAccessToken'] to see the possible values for this operation
     *
     * @throws ApiException on non-2xx response or if the response body is not in the expected format
     * @throws InvalidArgumentException
     * @return array of \URLR\Model\CreateAccessToken200Response|\URLR\Model\CreateAccessToken401Response, HTTP status code, HTTP response headers (array of strings)
     */
    public function createAccessTokenWithHttpInfo(
        ?\URLR\Model\CreateAccessTokenRequest $createAccessTokenRequest = null,
        string $contentType = self::contentTypes['createAccessToken'][0]
    ): array
    {
        $request = $this->createAccessTokenRequest($createAccessTokenRequest, $contentType);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? (string) $e->getResponse()->getBody() : null
                );
            } catch (ConnectException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    null,
                    null
                );
            }

            $statusCode = $response->getStatusCode();


            switch($statusCode) {
                case 200:
                    if (in_array('\URLR\Model\CreateAccessToken200Response', ['\SplFileObject', '\Psr\Http\Message\StreamInterface'])) {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('\URLR\Model\CreateAccessToken200Response' !== 'string') {
                            try {
                                $content = json_decode($content, false, 512, JSON_THROW_ON_ERROR);
                            } catch (\JsonException $exception) {
                                throw new ApiException(
                                    sprintf(
                                        'Error JSON decoding server response (%s)',
                                        $request->getUri()
                                    ),
                                    $statusCode,
                                    $response->getHeaders(),
                                    $content
                                );
                            }
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\URLR\Model\CreateAccessToken200Response', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 401:
                    if (in_array('\URLR\Model\CreateAccessToken401Response', ['\SplFileObject', '\Psr\Http\Message\StreamInterface'])) {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('\URLR\Model\CreateAccessToken401Response' !== 'string') {
                            try {
                                $content = json_decode($content, false, 512, JSON_THROW_ON_ERROR);
                            } catch (\JsonException $exception) {
                                throw new ApiException(
                                    sprintf(
                                        'Error JSON decoding server response (%s)',
                                        $request->getUri()
                                    ),
                                    $statusCode,
                                    $response->getHeaders(),
                                    $content
                                );
                            }
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\URLR\Model\CreateAccessToken401Response', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        (string) $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    (string) $response->getBody()
                );
            }

            $returnType = '\URLR\Model\CreateAccessToken200Response';
            if (in_array($returnType, ['\SplFileObject', '\Psr\Http\Message\StreamInterface'])) {
                $content = $response->getBody(); //stream goes to serializer
            } else {
                $content = (string) $response->getBody();
                if ($returnType !== 'string') {
                    try {
                        $content = json_decode($content, false, 512, JSON_THROW_ON_ERROR);
                    } catch (\JsonException $exception) {
                        throw new ApiException(
                            sprintf(
                                'Error JSON decoding server response (%s)',
                                $request->getUri()
                            ),
                            $statusCode,
                            $response->getHeaders(),
                            $content
                        );
                    }
                }
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\URLR\Model\CreateAccessToken200Response',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 401:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\URLR\Model\CreateAccessToken401Response',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation createAccessTokenAsync
     *
     * Get an access token
     *
     * @param  \URLR\Model\CreateAccessTokenRequest|null $createAccessTokenRequest You can use this endpoint to get an access token to access the API. (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['createAccessToken'] to see the possible values for this operation
     *
     * @throws InvalidArgumentException
     * @return PromiseInterface
     */
    public function createAccessTokenAsync(
        ?\URLR\Model\CreateAccessTokenRequest $createAccessTokenRequest = null,
        string $contentType = self::contentTypes['createAccessToken'][0]
    ): PromiseInterface
    {
        return $this->createAccessTokenAsyncWithHttpInfo($createAccessTokenRequest, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation createAccessTokenAsyncWithHttpInfo
     *
     * Get an access token
     *
     * @param  \URLR\Model\CreateAccessTokenRequest|null $createAccessTokenRequest You can use this endpoint to get an access token to access the API. (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['createAccessToken'] to see the possible values for this operation
     *
     * @throws InvalidArgumentException
     * @return PromiseInterface
     */
    public function createAccessTokenAsyncWithHttpInfo(
        $createAccessTokenRequest = null,
        string $contentType = self::contentTypes['createAccessToken'][0]
    ): PromiseInterface
    {
        $returnType = '\URLR\Model\CreateAccessToken200Response';
        $request = $this->createAccessTokenRequest($createAccessTokenRequest, $contentType);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    if (in_array($returnType, ['\SplFileObject', '\Psr\Http\Message\StreamInterface'])) {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ($returnType !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, $returnType, []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        (string) $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'createAccessToken'
     *
     * @param  \URLR\Model\CreateAccessTokenRequest|null $createAccessTokenRequest You can use this endpoint to get an access token to access the API. (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['createAccessToken'] to see the possible values for this operation
     *
     * @throws InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function createAccessTokenRequest(
        $createAccessTokenRequest = null,
        string $contentType = self::contentTypes['createAccessToken'][0]
    ): Request
    {



        $resourcePath = '/access_tokens/create';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;





        $headers = $this->headerSelector->selectHeaders(
            ['application/json', ],
            $contentType,
            $multipart
        );

        // for model (json/xml)
        if (isset($createAccessTokenRequest)) {
            if (stripos($headers['Content-Type'], 'application/json') !== false) {
                # if Content-Type contains "application/json", json_encode the body
                $httpBody = \GuzzleHttp\Utils::jsonEncode(ObjectSerializer::sanitizeForSerialization($createAccessTokenRequest));
            } else {
                $httpBody = $createAccessTokenRequest;
            }
        } elseif (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $formParamValueItems = is_array($formParamValue) ? $formParamValue : [$formParamValue];
                    foreach ($formParamValueItems as $formParamValueItem) {
                        $multipartContents[] = [
                            'name' => $formParamName,
                            'contents' => $formParamValueItem
                        ];
                    }
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif (stripos($headers['Content-Type'], 'application/json') !== false) {
                # if Content-Type contains "application/json", json_encode the form parameters
                $httpBody = \GuzzleHttp\Utils::jsonEncode($formParams);
            } else {
                // for HTTP post (form)
                $httpBody = ObjectSerializer::buildQuery($formParams);
            }
        }


        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $operationHost = $this->config->getHost();
        $query = ObjectSerializer::buildQuery($queryParams);
        return new Request(
            'POST',
            $operationHost . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation refreshAccessToken
     *
     * Refresh an access token
     *
     * @param  \URLR\Model\RefreshAccessTokenRequest|null $refreshAccessTokenRequest You can use this endpoint to refresh your access token without credentials. (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['refreshAccessToken'] to see the possible values for this operation
     *
     * @throws ApiException on non-2xx response or if the response body is not in the expected format
     * @throws InvalidArgumentException
     * @return \URLR\Model\CreateAccessToken200Response|\URLR\Model\RefreshAccessToken401Response
     */
    public function refreshAccessToken(
        ?\URLR\Model\RefreshAccessTokenRequest $refreshAccessTokenRequest = null,
        string $contentType = self::contentTypes['refreshAccessToken'][0]
    ): \URLR\Model\CreateAccessToken200Response
    {
        list($response) = $this->refreshAccessTokenWithHttpInfo($refreshAccessTokenRequest, $contentType);
        return $response;
    }

    /**
     * Operation refreshAccessTokenWithHttpInfo
     *
     * Refresh an access token
     *
     * @param  \URLR\Model\RefreshAccessTokenRequest|null $refreshAccessTokenRequest You can use this endpoint to refresh your access token without credentials. (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['refreshAccessToken'] to see the possible values for this operation
     *
     * @throws ApiException on non-2xx response or if the response body is not in the expected format
     * @throws InvalidArgumentException
     * @return array of \URLR\Model\CreateAccessToken200Response|\URLR\Model\RefreshAccessToken401Response, HTTP status code, HTTP response headers (array of strings)
     */
    public function refreshAccessTokenWithHttpInfo(
        ?\URLR\Model\RefreshAccessTokenRequest $refreshAccessTokenRequest = null,
        string $contentType = self::contentTypes['refreshAccessToken'][0]
    ): array
    {
        $request = $this->refreshAccessTokenRequest($refreshAccessTokenRequest, $contentType);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? (string) $e->getResponse()->getBody() : null
                );
            } catch (ConnectException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    null,
                    null
                );
            }

            $statusCode = $response->getStatusCode();


            switch($statusCode) {
                case 200:
                    if (in_array('\URLR\Model\CreateAccessToken200Response', ['\SplFileObject', '\Psr\Http\Message\StreamInterface'])) {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('\URLR\Model\CreateAccessToken200Response' !== 'string') {
                            try {
                                $content = json_decode($content, false, 512, JSON_THROW_ON_ERROR);
                            } catch (\JsonException $exception) {
                                throw new ApiException(
                                    sprintf(
                                        'Error JSON decoding server response (%s)',
                                        $request->getUri()
                                    ),
                                    $statusCode,
                                    $response->getHeaders(),
                                    $content
                                );
                            }
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\URLR\Model\CreateAccessToken200Response', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 401:
                    if (in_array('\URLR\Model\RefreshAccessToken401Response', ['\SplFileObject', '\Psr\Http\Message\StreamInterface'])) {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('\URLR\Model\RefreshAccessToken401Response' !== 'string') {
                            try {
                                $content = json_decode($content, false, 512, JSON_THROW_ON_ERROR);
                            } catch (\JsonException $exception) {
                                throw new ApiException(
                                    sprintf(
                                        'Error JSON decoding server response (%s)',
                                        $request->getUri()
                                    ),
                                    $statusCode,
                                    $response->getHeaders(),
                                    $content
                                );
                            }
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\URLR\Model\RefreshAccessToken401Response', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        (string) $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    (string) $response->getBody()
                );
            }

            $returnType = '\URLR\Model\CreateAccessToken200Response';
            if (in_array($returnType, ['\SplFileObject', '\Psr\Http\Message\StreamInterface'])) {
                $content = $response->getBody(); //stream goes to serializer
            } else {
                $content = (string) $response->getBody();
                if ($returnType !== 'string') {
                    try {
                        $content = json_decode($content, false, 512, JSON_THROW_ON_ERROR);
                    } catch (\JsonException $exception) {
                        throw new ApiException(
                            sprintf(
                                'Error JSON decoding server response (%s)',
                                $request->getUri()
                            ),
                            $statusCode,
                            $response->getHeaders(),
                            $content
                        );
                    }
                }
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\URLR\Model\CreateAccessToken200Response',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 401:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\URLR\Model\RefreshAccessToken401Response',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation refreshAccessTokenAsync
     *
     * Refresh an access token
     *
     * @param  \URLR\Model\RefreshAccessTokenRequest|null $refreshAccessTokenRequest You can use this endpoint to refresh your access token without credentials. (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['refreshAccessToken'] to see the possible values for this operation
     *
     * @throws InvalidArgumentException
     * @return PromiseInterface
     */
    public function refreshAccessTokenAsync(
        ?\URLR\Model\RefreshAccessTokenRequest $refreshAccessTokenRequest = null,
        string $contentType = self::contentTypes['refreshAccessToken'][0]
    ): PromiseInterface
    {
        return $this->refreshAccessTokenAsyncWithHttpInfo($refreshAccessTokenRequest, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation refreshAccessTokenAsyncWithHttpInfo
     *
     * Refresh an access token
     *
     * @param  \URLR\Model\RefreshAccessTokenRequest|null $refreshAccessTokenRequest You can use this endpoint to refresh your access token without credentials. (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['refreshAccessToken'] to see the possible values for this operation
     *
     * @throws InvalidArgumentException
     * @return PromiseInterface
     */
    public function refreshAccessTokenAsyncWithHttpInfo(
        $refreshAccessTokenRequest = null,
        string $contentType = self::contentTypes['refreshAccessToken'][0]
    ): PromiseInterface
    {
        $returnType = '\URLR\Model\CreateAccessToken200Response';
        $request = $this->refreshAccessTokenRequest($refreshAccessTokenRequest, $contentType);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    if (in_array($returnType, ['\SplFileObject', '\Psr\Http\Message\StreamInterface'])) {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ($returnType !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, $returnType, []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        (string) $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'refreshAccessToken'
     *
     * @param  \URLR\Model\RefreshAccessTokenRequest|null $refreshAccessTokenRequest You can use this endpoint to refresh your access token without credentials. (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['refreshAccessToken'] to see the possible values for this operation
     *
     * @throws InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function refreshAccessTokenRequest(
        $refreshAccessTokenRequest = null,
        string $contentType = self::contentTypes['refreshAccessToken'][0]
    ): Request
    {



        $resourcePath = '/access_tokens/refresh';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;





        $headers = $this->headerSelector->selectHeaders(
            ['application/json', ],
            $contentType,
            $multipart
        );

        // for model (json/xml)
        if (isset($refreshAccessTokenRequest)) {
            if (stripos($headers['Content-Type'], 'application/json') !== false) {
                # if Content-Type contains "application/json", json_encode the body
                $httpBody = \GuzzleHttp\Utils::jsonEncode(ObjectSerializer::sanitizeForSerialization($refreshAccessTokenRequest));
            } else {
                $httpBody = $refreshAccessTokenRequest;
            }
        } elseif (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $formParamValueItems = is_array($formParamValue) ? $formParamValue : [$formParamValue];
                    foreach ($formParamValueItems as $formParamValueItem) {
                        $multipartContents[] = [
                            'name' => $formParamName,
                            'contents' => $formParamValueItem
                        ];
                    }
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif (stripos($headers['Content-Type'], 'application/json') !== false) {
                # if Content-Type contains "application/json", json_encode the form parameters
                $httpBody = \GuzzleHttp\Utils::jsonEncode($formParams);
            } else {
                // for HTTP post (form)
                $httpBody = ObjectSerializer::buildQuery($formParams);
            }
        }


        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $operationHost = $this->config->getHost();
        $query = ObjectSerializer::buildQuery($queryParams);
        return new Request(
            'POST',
            $operationHost . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Create http client option
     *
     * @throws \RuntimeException on file opening failure
     * @return array of http client options
     */
    protected function createHttpClientOption(): array
    {
        $options = [];
        if ($this->config->getDebug()) {
            $options[RequestOptions::DEBUG] = fopen($this->config->getDebugFile(), 'a');
            if (!$options[RequestOptions::DEBUG]) {
                throw new \RuntimeException('Failed to open the debug file: ' . $this->config->getDebugFile());
            }
        }

        return $options;
    }
}
