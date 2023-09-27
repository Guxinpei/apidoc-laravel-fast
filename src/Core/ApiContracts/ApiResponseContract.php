<?php

namespace ApiDocLaravelFast\Core\ApiContracts;


/**
 * Interface ApiResponseContract
 * @package ApiDocLaravelFast\Core\ApiContracts;
 * @property string $responseType
 * @property int $responseCode
 * @property ApiDoc $responseDesc
 * @property array $responseData
 */
interface ApiResponseContract extends ApiParamCollectContract
{
    /**
     * Get response type
     * like json,xml,jpg
     * @return string
     */
    public function getResponseType():string;

    /**
     * Get response code
     * like 200,400,500
     * @return int
     */
    public function getResponseCode():int;

    /**
     * Get response desc
     * You can write some desc for response
     * support markdown,text
     * @return ApiDoc
     */
    public function getResponseDesc():ApiDoc;

    /**
     * Get response data
     * @return mixed
     */
    public function getResponseData():mixed;
}