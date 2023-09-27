<?php

namespace ApiDocLaravelFast\Core\ApiContracts;


/**
 * Interface ApiDoc
 * @package ApiDocLaravelFast\Core\ApiContracts
 * @property string $type
 * @property string $content
 */
interface ApiDoc
{
    /**
     * Get api doc type
     * like markdown,text
     * @return string
     */
    public function getType():string;

    /**
     * Get api doc content
     * @return string
     */
    public function getContent():string;
}