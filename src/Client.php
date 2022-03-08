<?php

namespace URLR;

use Psr\Http\Client\ClientInterface;

class Client
{
    private HttpWrapper $httpWrapper;
    private string $username;
    private string $password;
    private string $token;

    /**
     * @param ClientInterface|null $httpClient Client to do HTTP requests, if not set, auto discovery will be used to find a HTTP client
     */
    public function __construct(?ClientInterface $httpClient = null)
    {
        $this->username = '';
        $this->password = '';
        $this->token = '';

        Urlr::setHttpClient($httpClient);
        Urlr::setRequestFactory();
        Urlr::setStreamFactory();

        $this->httpWrapper = new HttpWrapper();
    }

    /**
     * API Authentication.
     *
     * @param string $username Username
     * @param string $password Password
     *
     * @return bool response of the query
     */
    public function authenticate(string $username, string $password): bool
    {
        $this->username = $username;
        $this->password = $password;
        return $this->generateToken();
    }

    /**
     * Reduce a link.
     *
     * @param array $data
     *
     * @return object response of the query
     */
    public function reduceLink(array $data): ?object
    {
        if (!$this->token) {
            return null;
        }

        $headers = [
            'Authorization' => 'Bearer ' . $this->token
        ];

        $body = [
            'url' => isset($data['url']) ? $data['url'] : '',
            'team' => isset($data['team']) ? $data['team'] : '',
            'folder' => isset($data['folder']) ? $data['folder'] : '',
            'code' => isset($data['code']) ? $data['code'] : ''
        ];

        $response = $this->httpWrapper->post('reduce-link', $body, true, $headers);

        $statusCode = $response->getStatusCode();
        if ($statusCode === 200) {
            // All went well, get token
            return json_decode($response->getBody());
        } elseif ($statusCode === 401) {
            // Token expired
            if ($this->generateToken()) {
                return $this->reduceLink($data);
            }
        } else {
            // Error
            return json_decode($response->getBody());
        }
        return null;
    }

    /**
     * Get statistics of a link.
     *
     * @param array $data
     *
     * @return object response of the query
     */
    public function getStatistics(array $data): ?object
    {
        if (!$this->token) {
            return null;
        }

        $headers = [
            'Authorization' => 'Bearer ' . $this->token
        ];

        $body = [
            'code' => isset($data['code']) ? $data['code'] : '',
            'from' => isset($data['from']) ? $data['from'] : null,
            'to' => isset($data['to']) ? $data['to'] : null,
            'includeBots' => isset($data['includeBots']) ? (bool) $data['includeBots'] : false
        ];

        $response = $this->httpWrapper->post('stats', $body, true, $headers);

        $statusCode = $response->getStatusCode();
        if ($statusCode === 200) {
            // All went well, get token
            return json_decode($response->getBody());
        } elseif ($statusCode === 401) {
            // Token expired
            if ($this->generateToken()) {
                return $this->getStatistics($data);
            }
        } else {
            // Error
            return json_decode($response->getBody());
        }
        return null;
    }

    /**
     * Reduce a link
     *
     * @return bool whether success or not
     */
    private function generateToken(): bool
    {
        $body = [
            'username' => $this->username,
            'password' => $this->password
        ];

        $response = $this->httpWrapper->post('login_check', $body, true);

        $statusCode = $response->getStatusCode();
        if ($statusCode === 200) {
            // All went well, get token
            $responseJson = json_decode($response->getBody());
            $this->token = $responseJson->token;
            return true;
        } elseif ($statusCode === 401) {
            throw new \Exception('Invalid credentials.');
        } else {
            throw new \Exception('Unknown error. Status code: ' . $statusCode);
        }
    }
}
