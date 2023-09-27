<?php
namespace ApiDocLaravelFast\Core\ApiContracts;


/**
 * Interface ApiContract
 * @package ApiDocLaravelFast\Core\ApiContracts
 * @property string $uri
 * @property string $method
 * @property array $params
 * @property array $body
 * @property ApiResponseContract $response
 * @property ApiDoc $desc
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
     * @return ApiParamCollectContract|null
     */
    public function getParam($key):?ApiParamCollectContract;


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
     * Get Response Object
     * @return ApiResponseContract|null
     */
    public function getResponse():?ApiResponseContract;

    /**
     * Get api desc
     * @return ApiDoc|null
     */
    public function getDesc():?ApiDoc;


}