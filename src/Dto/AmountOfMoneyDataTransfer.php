<?php

/**
 * MIT License
 * For full license information, please view the LICENSE file that was distributed with this source code.
 */

namespace Lockw1nLabs\PayoneApiClient\Dto;

class AmountOfMoneyDataTransfer extends AbstractDataTransfer
{
    private const PROPERTY_AMOUNT = 'amount';
    private const PROPERTY_CURRENCY_CODE = 'currencyCode';

    private ?int $amount;
    private ?string $currencyCode;

    /**
     * @return int|null
     */
    public function getAmount(): ?int
    {
        return $this->amount;
    }

    public function setAmount(int $amount): void
    {
        $this->properties[] = self::PROPERTY_AMOUNT;
        $this->amount = $amount;
    }

    public function requireAmount(): self
    {
        $this->assertPropertyIsSet(self::PROPERTY_AMOUNT);

        return $this;
    }

    public function getCurrencyCode(): ?string
    {
        return $this->currencyCode;
    }

    public function setCurrencyCode(string $currencyCode): void
    {
        $this->properties[] = self::PROPERTY_CURRENCY_CODE;
        $this->currencyCode = $currencyCode;
    }

    public function requireCurrencyCode(): self
    {
        $this->assertPropertyIsSet(self::PROPERTY_CURRENCY_CODE);

        return $this;
    }
}
