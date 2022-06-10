<?php

namespace Codepotato\SDK\Requests;

use Codepotato\SDK\SDK;
use Sammyjo20\Saloon\Http\SaloonRequest;

class Request extends SaloonRequest
{
    /**
     * @var string|null
     */
    protected ?string $connector = SDK::class;
}
