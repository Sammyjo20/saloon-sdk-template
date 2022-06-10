<?php

namespace Author\SDK\Requests;

use Author\SDK\SDK;
use Sammyjo20\Saloon\Http\SaloonRequest;

class Request extends SaloonRequest
{
    /**
     * @var string|null
     */
    protected ?string $connector = SDK::class;
}
