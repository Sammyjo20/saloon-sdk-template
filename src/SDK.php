<?php

namespace VendorName\SDK;

use VendorName\SDK\Responses\SDKResponse;
use Sammyjo20\Saloon\Http\SaloonConnector;
use Sammyjo20\Saloon\Traits\Plugins\AcceptsJson;
use VendorName\SDK\Requests\ExampleRequestCollection;

/**
 * @method ExampleRequestCollection example
 */
class SDK extends SaloonConnector
{
    use AcceptsJson;

    /**
     * Define the base URL for the API
     *
     * @var string
     */
    protected string $apiBaseUrl = ':base_url';

    /**
     * Custom response that all requests will return.
     *
     * @var string|null
     */
    protected ?string $response = SDKResponse::class;

    /**
     * The requests/services on the SDK.
     *
     * @var array
     */
    protected array $requests = [
        'example' => ExampleRequestCollection::class,
    ];

    /**
     * Define the base URL of the API.
     *
     * @return string
     */
    public function defineBaseUrl(): string
    {
        return $this->apiBaseUrl;
    }

    /**
     * @param string|null $baseUrl
     */
    public function __construct(string $baseUrl = null)
    {
        if (isset($baseUrl)) {
            $this->apiBaseUrl = $baseUrl;
        }
    }

    /**
     * Define any default headers.
     *
     * @return array
     */
    public function defaultHeaders(): array
    {
        return [];
    }

    /**
     * Define any default config.
     *
     * @return array
     */
    public function defaultConfig(): array
    {
        return [];
    }
}
