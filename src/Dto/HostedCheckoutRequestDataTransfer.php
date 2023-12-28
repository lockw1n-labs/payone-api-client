<?php

/**
 * MIT License
 * For full license information, please view the LICENSE file that was distributed with this source code.
 */

namespace Lockw1nLabs\PayoneApiClient\Dto;

class HostedCheckoutRequestDataTransfer extends AbstractDataTransfer
{
    private const PROPERTY_ORDER = 'order';

    private ?OrderDataTransfer $order;

    /**
     * @return OrderDataTransfer|null
     */
    public function getOrder(): ?OrderDataTransfer
    {
        return $this->order;
    }

    /**
     * @param OrderDataTransfer $order
     *
     * @return void
     */
    public function setOrder(OrderDataTransfer $order): void
    {
        $this->properties[] = self::PROPERTY_ORDER;
        $this->order = $order;
    }

    public function requireOrder(): self
    {
        $this->assertPropertyIsSet(self::PROPERTY_ORDER);

        return $this;
    }
}
