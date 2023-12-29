<?php

/**
 * MIT License
 * For full license information, please view the LICENSE file that was distributed with this source code.
 */

namespace Lockw1nLabs\PayoneApiClient\Dto;

class OrderDataTransfer extends AbstractDataTransfer
{
    private const PROPERTY_AMOUNT_OF_MONEY = 'amountOfMoney';
    private const PROPERTY_CUSTOMER = 'customer';

    private ?CustomerDataTransfer $customer;
    private ?AmountOfMoneyDataTransfer $amountOfMoney;

    /**
     * @return AmountOfMoneyDataTransfer|null
     */
    public function getAmountOfMoney(): ?AmountOfMoneyDataTransfer
    {
        return $this->amountOfMoney;
    }

    /**
     * @param AmountOfMoneyDataTransfer $amountOfMoney
     *
     * @return void
     */
    public function setAmountOfMoney(AmountOfMoneyDataTransfer $amountOfMoney): void
    {
        $this->properties[] = self::PROPERTY_AMOUNT_OF_MONEY;
        $this->amountOfMoney = $amountOfMoney;
    }

    public function requireAmountOfMoney(): self
    {
        $this->assertPropertyIsSet(self::PROPERTY_AMOUNT_OF_MONEY);

        return $this;
    }

    /**
     * @return CustomerDataTransfer|null
     */
    public function getCustomer(): ?CustomerDataTransfer
    {
        return $this->customer;
    }

    /**
     * @param CustomerDataTransfer $customer
     *
     * @return void
     */
    public function setCustomer(CustomerDataTransfer $customer): void
    {
        $this->properties[] = self::PROPERTY_CUSTOMER;
        $this->customer = $customer;
    }
}
