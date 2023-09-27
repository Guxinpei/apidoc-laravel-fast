<?php

namespace ApiDocLaravelFast\Core;

use ApiDocLaravelFast\Core\ApiContracts\ApiContract;

/**
 * Interface GenerateContracts
 * Use that to generate data from any source
 * @package ApiDocLaravelFast\Core
 * @property ApiContract $api
 * @property mixed $source
 */
interface GenerateContracts
{

    /**
     * From source
     * should be any type of data
     * like Controller Request Attributes
     * @param mixed $source
     * @return GenerateContracts
     */
    public function from(mixed $source):self;

    /**
     * @return ApiContract
     */
    public function generate():ApiContract;
}