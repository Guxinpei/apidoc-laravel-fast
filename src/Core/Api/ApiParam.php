<?php

namespace ApiDocLaravelFast\Core\Api;

use ApiDocLaravelFast\Core\ApiContracts\ApiDoc;
use ApiDocLaravelFast\Core\ApiContracts\ApiParamContract;

/**
 * @class ApiParam
 * basic class for ApiParam
 * in this class we can set and get all the ApiParam properties
 * it doesn't have any logic,just a data class
 */
class ApiParam implements ApiParamContract
{

    public function __construct(
        public string $paramName='',
        public string $paramType='',
        public ?ApiDoc $apiDoc=null,
        public string $defaultValue = '',
        public bool $nullable = true
    ){

    }

    public function getParamType(): string
    {
        return $this->paramType;
    }

    public function getParamName(): string
    {
        return $this->paramName;
    }

    public function getParamDesc(): ApiDoc
    {
        return $this->apiDoc;
    }

    public function getDefaultValue(): string
    {
        return $this->defaultValue;
    }

    public function isNullable(): bool
    {
        return $this->nullable;
    }

    public function setParamType(string $paramType):self
    {
        $this->paramType = $paramType;
        return $this;
    }

    public function setParamName(string $paramName):self
    {
        $this->paramName = $paramName;
        return $this;
    }

    public function setParamDesc(ApiDoc $apiDoc):self
    {
        $this->apiDoc = $apiDoc;
        return $this;
    }

    public function setDefaultValue(string $defaultValue):self
    {
        $this->defaultValue = $defaultValue;
        return $this;
    }

    public function setNullable(bool $nullable):self
    {
        $this->nullable = $nullable;
        return $this;
    }

    public function getApiDoc(): ?ApiDoc
    {
        return $this->apiDoc;
    }

    public function setApiDoc(?ApiDoc $apiDoc):self
    {
        $this->apiDoc = $apiDoc;
        return $this;
    }

    public function getName(): string
    {
        return $this->paramName;
    }

    public function getType(): string
    {
        return $this->paramType;
    }

}