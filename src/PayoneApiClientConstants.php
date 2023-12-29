<?php

/**
 * MIT License
 * For full license information, please view the LICENSE file that was distributed with this source code.
 */

namespace Lockw1nLabs\PayoneApiClient;

class PayoneApiClientConstants
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
     * Defines LIVE Payone base API mode.
     *
     * @var string
     */
    public const PAYONE_API_MODE_LIVE = 'live';

    /**
     * Defines TEST Payone base API mode.
     *
     * @var string
     */
    public const PAYONE_API_MODE_TEST = 'test';

    /**
     * Defines TEST Payone base API url.
     *
     * @var string
     */
    public const PAYONE_API_BASE_URL_TEST = 'https://payment.preprod.payone.com';

    /**
     * Defines Payone base API url.
     *
     * @var string
     */
    public const PAYONE_API_BASE_URL_LIVE = 'https://payment.preprod.payone.com';

    /**
     * Defines Payone API version.
     *
     * @var string
     */
    public const PAYONE_API_VERSION = 'v2';

    /**
     * Defines Payone API hosted checkout endpoint.
     *
     * @var string
     */
    public const PAYONE_API_ENDPOINT_HOSTED_CHECKOUT = 'hostedcheckouts';
}
