<?php

/**
 * MIT License
 * For full license information, please view the LICENSE file that was distributed with this source code.
 */

namespace Lockw1nLabs\PayoneApiClient;

class PayoneApiClientConfig
{
    public function __construct(private readonly string $apiMode) {}

    public function getApiBaseUrl(): string
    {
        if ($this->apiMode === PayoneApiClientConstants::PAYONE_API_MODE_LIVE) {
            return PayoneApiClientConstants::PAYONE_API_BASE_URL_LIVE;
        }

        return PayoneApiClientConstants::PAYONE_API_BASE_URL_TEST;
    }
}
