<?php

/**
 * MIT License
 * For full license information, please view the LICENSE file that was distributed with this source code.
 */

namespace Lockw1nLabs\PayoneApiClient;

interface PayoneApiClientInterface
{
    public function createHostedCheckout(string $merchantId, array $data);

    public function getHostedCheckoutStatus(string $merchantId, string $hostedCheckoutId);

    public function createHostedTokenization();

    public function getHostedTokenization();

    public function createPaymentLink();

    public function getPaymentLink();
}
