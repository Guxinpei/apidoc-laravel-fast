<?php

namespace ApiDocLaravelFast\Core\Api;

use ApiDocLaravelFast\Core\ApiContracts\ApiResponseCollectionContract;
use ApiDocLaravelFast\Core\ApiContracts\ApiResponseContract;
use Illuminate\Support\Collection;

class ApiResponseCollection implements ApiResponseCollectionContract
{

    public function __construct(
        protected ?Collection $responses = null
    )
    {
        $this->responses = collect($responses);
    }

    public function getResponses(): array
    {
        return $this->responses->toArray();
    }

    public function addResponse(ApiResponseContract $responseContract): ApiResponseCollectionContract
    {
        $this->responses->put($responseContract->getResponseName(),$responseContract);
        return $this;
    }

    public function getResponse(string $key): ApiResponseContract
    {
        return $this->responses->get($key);
    }

    public function hasResponse(string $key): bool
    {
        return $this->responses->has($key);
    }
}