<?php

/**
 * MIT License
 * For full license information, please view the LICENSE file that was distributed with this source code.
 */

namespace Lockw1nLabs\PayoneApiClient;

final class PayoneApiClient implements PayoneApiClientInterface
{
    public function __construct(private readonly string $apiMode = 'live') {
        $possibleApiModes = [
            PayoneApiClientConstants::PAYONE_API_MODE_LIVE,
            PayoneApiClientConstants::PAYONE_API_MODE_TEST,
        ];
        if (!in_array($this->apiMode, $possibleApiModes)) {
            throw new \Exception('Payone API mode specified incorrectly. Possible values: "live" or "test"');
        }
    }

    private function getFactory(): PayoneApiClientFactory
    {
        return PayoneApiClientFactory::create($this->apiMode);
    }

    public function createHostedCheckout(string $merchantId, array $data): array
    {
        return $this->getFactory()
            ->createHostedCheckoutRequest()
            ->createHostedCheckout($merchantId, $data);
    }

    public function getHostedCheckoutStatus(string $merchantId, string $hostedCheckoutId)
    {
        return $this->getFactory()
            ->createHostedCheckoutRequest()
            ->getHostedCheckoutStatus($merchantId, $hostedCheckoutId);
    }

    public function createHostedTokenization()
    {
        // TODO: Implement createHostedTokenization() method.
    }

    public function getHostedTokenization()
    {
        // TODO: Implement getHostedTokenization() method.
    }

    public function createPaymentLink()
    {
        // TODO: Implement createPaymentLink() method.
    }

    public function getPaymentLink()
    {
        // TODO: Implement getPaymentLink() method.
    }
}
