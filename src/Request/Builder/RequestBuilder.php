<?php

/**
 * MIT License
 * For full license information, please view the LICENSE file that was distributed with this source code.
 */

namespace Lockw1nLabs\PayoneApiClient\Request\Builder;

use Lockw1nLabs\PayoneApiClient\PayoneApiClientConfig;
use Lockw1nLabs\PayoneApiClient\PayoneApiClientConstants;

class RequestBuilder
{
    public function __construct(private readonly PayoneApiClientConfig $config) {}

    /**
     * @param string $merchantId
     * @param string $endpoint
     * @param string|null $parameter
     *
     * @return string
     */
    public function buildRequestUrl(string $merchantId, string $endpoint, ?string $parameter = null): string
    {
        $urlParameters = [
            $this->config->getApiBaseUrl(),
            PayoneApiClientConstants::PAYONE_API_VERSION,
            $merchantId,
            $endpoint,
            $parameter
        ];

        return implode('/', array_filter($urlParameters));
    }
}
