<?php

/**
 * MIT License
 * For full license information, please view the LICENSE file that was distributed with this source code.
 */

namespace Lockw1nLabs\PayoneApiClient;

use Lockw1nLabs\PayoneApiClient\Request\Builder\RequestBuilder;
use Lockw1nLabs\PayoneApiClient\Request\HostedCheckoutRequest;
use Symfony\Component\HttpClient\HttpClient;

class PayoneApiClientFactory
{
    private static $instance;

    private function __construct() {}

    protected function __clone() { }

    public function __wakeup()
    {
        throw new \Exception("Cannot unserialize a singleton.");
    }

    public static function create(): self
    {
        if (!isset(self::$instance)) {
            self::$instance = new static();
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
        return new RequestBuilder();
    }

    protected function createHttpClient()
    {
        return HttpClient::create();
    }
}
