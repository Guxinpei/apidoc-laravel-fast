<?php

namespace ApiDocLaravelFast\Core;

use ApiDocLaravelFast\Core\ApiContracts\ApiContract;

/**
 * Interface LoadContract
 * Use that to load data from any source,witch saved by SaveContract
 * @package ApiDocLaravelFast\Core
 * @property ApiContract $api
 * @property mixed $source
 * @property string $type
 */
interface LoadContract
{
    /**
     * @param mixed $data source data,can be any type of SaveContract saved
     * @return self
     */
    public function from(mixed $data):self;

    /**
     * @return ApiContract
     */
    public function loadApi():ApiContract;

}