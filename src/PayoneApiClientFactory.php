<?php

/**
 * MIT License
 * For full license information, please view the LICENSE file that was distributed with this source code.
 */

namespace Lockw1nLabs\PayoneApiClient;

use Exception;
use Lockw1nLabs\PayoneApiClient\Request\Builder\RequestBuilder;
use Lockw1nLabs\PayoneApiClient\Request\HostedCheckoutRequest;
use Symfony\Component\HttpClient\HttpClient;

class PayoneApiClientFactory
{
    private static PayoneApiClientFactory $instance;

    private PayoneApiClientConfig $config;

    private function __construct() {}

    protected function __clone() { }

    /**
     * @throws Exception
     */
    public function __wakeup()
    {
        throw new Exception('Cannot unserialize a singleton.');
    }

    public static function create(string $apiMode): self
    {
        if (!isset(self::$instance)) {
            self::$instance = new static();
            self::$instance->config = new PayoneApiClientConfig($apiMode);
        }

        return self::$instance;
    }



    public function createHostedCheckoutRequest()
    {
        return new HostedCheckoutRequest(
            $this->createHttpClient(),
            $this->createRequestBuilder()
        );
    }

    protected function createRequestBuilder()
    {
        return new RequestBuilder($this->config);
    }

    protected function createHttpClient()
    {
        return HttpClient::create();
    }
}
