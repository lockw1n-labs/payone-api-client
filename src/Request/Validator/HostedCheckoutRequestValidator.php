<?php

/**
 * MIT License
 * For full license information, please view the LICENSE file that was distributed with this source code.
 */

namespace Lockw1nLabs\PayoneApiClient\Request\Validator;

use Lockw1nLabs\PayoneApiClient\Dto\HostedCheckoutRequestDataTransfer;

class HostedCheckoutRequestValidator
{
    public function validate(HostedCheckoutRequestDataTransfer $hostedCheckoutRequest): void
    {
        $hostedCheckoutRequest->requireOrder()
            ->getOrder()
            ->requireAmountOfMoney()
                ->getAmountOfMoney()
                ->requireAmount()
                ->requireCurrencyCode();
    }
}
