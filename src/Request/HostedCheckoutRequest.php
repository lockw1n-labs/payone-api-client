<?php

/**
 * MIT License
 * For full license information, please view the LICENSE file that was distributed with this source code.
 */

namespace Lockw1nLabs\PayoneApiClient\Request;

use Lockw1nLabs\PayoneApiClient\Dto\HostedCheckoutRequestDataTransfer;
use Lockw1nLabs\PayoneApiClient\PayoneApiClientConstants;
use Lockw1nLabs\PayoneApiClient\Request\Builder\RequestBuilder;
use Lockw1nLabs\PayoneApiClient\Request\Validator\HostedCheckoutRequestValidator;
use Symfony\Contracts\HttpClient\HttpClientInterface;

class HostedCheckoutRequest
{
    public function __construct(
        private readonly HttpClientInterface $httpClient,
        private readonly RequestBuilder $requestBuilder,
        private readonly HostedCheckoutRequestValidator $hostedCheckoutRequestValidator
    ) {}

    public function createHostedCheckout(
        string $merchantId,
        HostedCheckoutRequestDataTransfer $hostedCheckoutRequest
    ) {
        $this->hostedCheckoutRequestValidator->validate($hostedCheckoutRequest);

        $response = $this->httpClient->request(
            PayoneApiClientConstants::HTTP_METHOD_POST,
            $this->requestBuilder
                ->buildRequestUrl(
                    $merchantId,
                    PayoneApiClientConstants::PAYONE_API_ENDPOINT_HOSTED_CHECKOUT
                ),
            ['json' => $hostedCheckoutRequest->serialize()]
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
