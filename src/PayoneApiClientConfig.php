<?php

/**
 * MIT License
 * For full license information, please view the LICENSE file that was distributed with this source code.
 */

namespace Lockw1nLabs\PayoneApiClient;

use function PHPUnit\Framework\isFalse;

class PayoneApiClientConfig
{
    /**
     * Defines HTTP method POST.
     *
     * @var string
     */
    public const HTTP_METHOD_POST = 'POST';

    /**
     * Defines HTTP method GET.
     *
     * @var string
     */
    public const HTTP_METHOD_GET = 'GET';

    /**
     * Defines Payone base API url.
     *
     * @var string
     */
    public const PAYONE_API_BASE_URL_TEST = 'https://payment.preprod.payone.com';

    /**
     * Defines Payone API version.
     *
     * @var string
     */
    public const PAYONE_API_VERSION = 'v2';

    public function getApiBaseUrl(string $apiMode)
    {
        return static::PAYONE_API_BASE_URL_TEST;
    }
}
