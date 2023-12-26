<?php

/**
 * MIT License
 * For full license information, please view the LICENSE file that was distributed with this source code.
 */

namespace Lockw1nLabs\PayoneApiClient\Request;

use Lockw1nLabs\PayoneApiClient\PayoneApiClientConstants;
use Lockw1nLabs\PayoneApiClient\Request\Builder\RequestBuilder;
use Symfony\Contracts\HttpClient\HttpClientInterface;

class HostedCheckoutRequest
{
    public function __construct(
        private readonly HttpClientInterface $httpClient,
        private readonly RequestBuilder $requestBuilder
    ) {}

    public function createHostedCheckout(string $merchantId, array $requestData)
    {
        $response = $this->httpClient->request(
            PayoneApiClientConstants::HTTP_METHOD_POST,
            $this->requestBuilder
                ->buildRequestUrl(
                    $merchantId,
                    PayoneApiClientConstants::PAYONE_API_ENDPOINT_HOSTED_CHECKOUT
                ),
            ['json' => $this->requestBuilder->buildRequestParams($requestData)]
        );

        $headers = $response->getHeaders();
        $statusCode = $response->getStatusCode();
        $content = $response->getContent();

        return [];
    }

    public function getHostedCheckoutStatus(string $merchantId, string $hostedCheckoutId)
    {
        $response = $this->httpClient->request(
            PayoneApiClientConstants::HTTP_METHOD_GET,
            $this->requestBuilder
                ->buildRequestUrl(
                    $merchantId,
                    PayoneApiClientConstants::PAYONE_API_ENDPOINT_HOSTED_CHECKOUT,
                    $hostedCheckoutId
                )
        );

        $headers = $response->getHeaders();
        $statusCode = $response->getStatusCode();
        $content = $response->getContent();

        return [];
    }
}
