<?php

namespace VendorName\SDK\Responses;

use Sammyjo20\Saloon\Http\SaloonResponse;
use VendorName\SDK\Exceptions\SDKRequestException;

class SDKResponse extends SaloonResponse
{
    /**
     * Create an exception if a server or client error occurred.
     *
     * @return SDKRequestException
     */
    public function toException(): SDKRequestException
    {
        if ($this->failed()) {
            $body = $this->response?->getBody()?->getContents();

            return new SDKRequestException($this, $body, 0, $this->getGuzzleException());
        }
    }
}
