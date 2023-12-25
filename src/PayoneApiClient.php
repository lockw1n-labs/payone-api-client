<?php

/**
 * MIT License
 * For full license information, please view the LICENSE file that was distributed with this source code.
 */

namespace Lockw1nLabs\PayoneApiClient;

final class PayoneApiClient implements PayoneApiClientInterface
{
    private $factory;

    public function __construct()
    {
        $this->factory = PayoneApiClientFactory::create();
    }

    public function createHostedCheckout(string $merchantId, array $data, string $apiMode = 'live'): array
    {
        return $this->factory->createHostedCheckoutRequest()->createHostedCheckout($merchantId, $data);
    }

    public function getHostedCheckoutStatus(string $merchantId, string $hostedCheckoutId)
    {
        return $this->factory->createHostedCheckoutRequest()->getHostedCheckoutStatus($merchantId, $hostedCheckoutId);
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
