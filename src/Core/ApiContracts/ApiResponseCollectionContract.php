<?php

namespace ApiDocLaravelFast\Core\ApiContracts;

interface ApiResponseCollectionContract
{
    /**
     * @return ApiResponseContract[]
     */
    public function getResponses():array;

    public function addResponse(ApiResponseContract $responseContract):self;

    public function getResponse(string $key):ApiResponseContract;

    public function hasResponse(string $key):bool;

}