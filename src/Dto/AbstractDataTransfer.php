<?php

/**
 * MIT License
 * For full license information, please view the LICENSE file that was distributed with this source code.
 */

namespace Lockw1nLabs\PayoneApiClient\Dto;

use Serializable;

class AbstractDataTransfer implements Serializable
{
    public function __construct(protected $properties = []) {}


    /**
     * @return string|null
     */
    public function serialize():? string
    {
        return json_encode(serialize($this)) ?: null;
    }

    /**
     * @param string $data
     *
     * @return void
     */
    public function unserialize(string $data): void
    {
        unserialize(json_decode($data, true));
    }

    /**
     * @return array
     */
    public function __serialize(): array
    {
        $objectData = [];

        foreach ($this->properties as $property) {
            if (is_object($this->$property)) {
                $objectData[$property] = serialize($this->$property);
            }
            $objectData[$property] = $this->$property;
        }

        return $objectData;
    }

    /**
     * @param array $data
     *
     * @return void
     */
    public function __unserialize(array $data): void
    {
        foreach ($data as $property => $value) {
            $this->$property = $value;
        }
    }
}
