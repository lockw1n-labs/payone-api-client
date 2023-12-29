<?php

/**
 * MIT License
 * For full license information, please view the LICENSE file that was distributed with this source code.
 */

namespace Lockw1nLabs\PayoneApiClient\Response;

use Symfony\Contracts\HttpClient\ResponseInterface;

class HostedCheckoutResponse
{
    public function processHttpResponse(ResponseInterface $response)
    {
        if ($response->getStatusCode() !== 200) {
            return [];
        }

        return [];
    }
}
