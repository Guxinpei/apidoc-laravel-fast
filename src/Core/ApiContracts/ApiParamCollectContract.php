<?php

namespace ApiDocLaravelFast\Core\ApiContracts;

interface ApiParamCollectContract
{
    /**
     * @return ApiParamContract[]
     */
    public function getParams():array;

    public function addParam(ApiParamContract $apiParamContract):self;

    public function getParam(string $key):ApiParamContract;

    public function hasParam(string $key):bool;


}