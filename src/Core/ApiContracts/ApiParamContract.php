<?php

namespace ApiDocLaravelFast\Core\ApiContracts;


/**
 * Interface ApiParamContract
 * @package ApiDocLaravelFast\Core\ApiContracts
 * @property string $paramName
 * @property string $paramType
 * @property ApiDoc $paramDesc
 * @property string $defaultValue
 * @property string $nullable
 */
interface ApiParamContract
{
    /**
     * Get param type
     * like string,int
     * @return string
     */
    public function getParamType():string;

    /**
     * @return string
     */
    public function getParamName():string;

    public function getParamDesc():ApiDoc;

    public function getDefaultValue():string;

    public function isNullable():bool;

}