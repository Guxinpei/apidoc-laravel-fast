<?php

namespace ApiDocLaravelFast\Core;

use ApiDocLaravelFast\Core\ApiContracts\ApiContract;

interface DisplayContract
{
    /**
     * @param ApiContract $api
     * @return void
     */
    public function setApi(ApiContract $api):void;

    /**
     * @return bool
     */
    public function display():bool;
}