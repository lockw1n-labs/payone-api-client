<?php

/**
 * MIT License
 * For full license information, please view the LICENSE file that was distributed with this source code.
 */

namespace Lockw1nLabs\PayoneApiClient\Request\Builder;

use ArrayObject;

class RequestBuilder
{
    public function buildRequestParams(array $data)
    {
        return $this->removeRedundantParams($data);
    }

    public function buildRequestUrl(string $merchantId, string $endpoint, string $parameter = '')
    {
        $urlParameters = [
            'https://payment.preprod.payone.com',
            'v2',
            $merchantId,
            $endpoint,
            $parameter
        ];

        return implode(
            '/',
            $this->removeRedundantParams($urlParameters)
        );
    }

    /**
     * @param array $data
     *
     * @return array
     */
    private function removeRedundantParams(array $data): array
    {
        $data = array_filter($data, function ($item) {
            if ($item instanceof ArrayObject) {
                return $item->count() !== 0;
            }

            return $item !== null;
        });

        foreach ($data as $key => $value) {
            if (is_array($value) || $value instanceof ArrayObject) {
                $data[$key] = $this->removeRedundantParams((array)$value);
            }
        }

        return $data;
    }
}
