<?php

namespace ApiDocLaravelFast\Core\Api;

use ApiDocLaravelFast\Core\ApiContracts\ApiContract;
use ApiDocLaravelFast\Core\ApiContracts\ApiDoc;
use ApiDocLaravelFast\Core\ApiContracts\ApiParamCollectContract;
use ApiDocLaravelFast\Core\ApiContracts\ApiParamContract;
use ApiDocLaravelFast\Core\ApiContracts\ApiResponseCollectionContract;
use ApiDocLaravelFast\Core\ApiContracts\ApiResponseContract;

Class Api implements ApiContract
{
    public function __construct(
       protected string $menu='',
       protected string $uri='',
       protected string $method='',
       protected ?ApiParamCollectContract $params = null,
       protected ?ApiParamCollectContract $body = null,
       protected ?ApiParamCollectContract $headers = null,
       protected ?ApiResponseCollectionContract $responses = null,
       protected ?ApiDoc $desc = null
    )
    {

    }

    /**
     * Get api menu
     * @return string
     */
    public function getMenu(): string
    {
        return $this->menu;
    }

    /**
     * Get uri
     * @return string
     */
    public function getUri(): string
    {
            return $this->uri??'';
    }

    /**
     * Get method
     * @return string
     */
    public function getMethod(): string
    {
        return $this->method??'';
    }

    /**
     * Get all params
     * @return ApiParamCollectContract|null
     */
    public function getParams():?ApiParamCollectContract
    {
        return $this->params;
    }

    /**
     * Get all body
     * @return ApiParamCollectContract|null
     */
    public function getBody(): ?ApiParamCollectContract
    {
        return $this->body;
    }

    /**
     * @return ApiParamCollectContract|null
     */
    public function getHeaders(): ?ApiParamCollectContract
    {
        return $this->headers;
    }

    public function getResponse($name):?ApiResponseContract
    {
        return $this->response->getResponse($name);
    }

    public function getDesc(): ?ApiDoc
    {
        return $this->desc;
    }


    public function menu(): string
    {
        return $this->menu;
    }

    public function getParam($key): ?ApiParamContract
    {
        return $this->params->getCollect()->where('paramName',$key)->first();
    }

    public function getResponses(): ?ApiResponseCollectionContract
    {
        return $this->responses;
    }
    public function setMenu(string $menu):self
    {
        $this->menu = $menu;
        return $this;
    }

    public function setUri(string $uri):self
    {
        $this->uri = $uri;
        return $this;
    }

    public function setMethod(string $method):self
    {
        $this->method = $method;
        return $this;
    }

    public function setParams(ApiParamCollectContract $params):self
    {
        $this->params = $params;
        return $this;
    }

    public function setBody(ApiParamCollectContract $body):self
    {
        $this->body = $body;
        return $this;
    }

    public function setHeaders(ApiParamCollectContract $headers):self
    {
        $this->headers = $headers;
        return $this;
    }

    public function setResponse(ApiResponseCollectionContract $response):self
    {
        $this->responses = $response;
        return $this;
    }

    public function setDesc(ApiDoc $desc):self
    {
        $this->desc = $desc;
        return $this;
    }

    public function getHeader(string $string)
    {
        return $this->headers->getCollect()->where('paramName',$string)->first();
    }

}