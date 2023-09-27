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
     * Get all params key list
     * @return string[]
     */
    public function getParamsKeyList():array;

    /**
     * Get params by key
     * @param $key
     * @return ApiParamContract
     */
    public function getParams($key):ApiParamContract;

    /**
     * @return ApiParamContract[]
     */
    public function getBody():array;

    /**
     * Get all headers
     * @return ApiParamContract[]
     */
    public function getHeaders():array;

    /**
     * Get Response Object
     * @return ApiResponseContract
     */
    public function getResponse():ApiResponseContract;

    /**
     * Get api desc
     * @return ApiDoc
     */
    public function getDesc():ApiDoc;


}