<?php
namespace ApiDocLaravelFast\Core\ApiContracts;


use Illuminate\Support\Collection;

/**
 * Interface ApiContract
 * @package ApiDocLaravelFast\Core\ApiContracts
 */
interface ApiContract
{
    /**
     * Get api name
     * you can write the menu of api
     * like book-chapter-create
     * use `-` to split
     * @return string
     */
    public function menu():string;
    /**
     * Get uri
     * @return string
     */
    public function getUri():string;

    /**
     * Get method
     * like GET,POST,PUT,DELETE
     * @return string
     */
    public function getMethod():string;

    /**
     * Get params
     * @return ApiParamCollectContract|null
     */
    public function getParams():?ApiParamCollectContract;

    /**
     * @param $key
     * @return ApiParamContract|null
     */
    public function getParam($key):?ApiParamContract;


    /**
     * @return ApiParamCollectContract|null
     */
    public function getBody():?ApiParamCollectContract;

    /**
     * Get all headers
     * @return ApiParamCollectContract|null
     */
    public function getHeaders():?ApiParamCollectContract;

    /**
     * Get a response object by name
     * @param $name
     * @return ApiResponseContract|null
     */
    public function getResponse($name):?ApiResponseContract;

    /**
     * Get all responses
     * @return ApiResponseCollectionContract|null
     */
    public function getResponses():?ApiResponseCollectionContract;


    /**
     * Get api desc
     * @return ApiDoc|null
     */
    public function getDesc():?ApiDoc;


}