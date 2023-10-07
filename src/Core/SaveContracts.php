<?php

namespace ApiDocLaravelFast\Core;

use ApiDocLaravelFast\Core\ApiContracts\ApiContract;

/**
 * Interface SaveContracts
 * Use that to save data from any source,witch loaded by LoadContract
 * @package ApiDocLaravelFast\Core
 * @property ApiContract $api
 */
interface SaveContracts
{
    /**
     * @param ApiContract $api
     * @return SaveContracts
     */
    public function from(ApiContract $api):self;

    /**
     * @return bool
     */
    public function save():bool;

}