<?php

namespace ApiDocLaravelFast\Core\Api;

use ApiDocLaravelFast\Core\ApiContracts\ApiContract;
use ApiDocLaravelFast\Core\ApiContracts\ApiDoc;
use ApiDocLaravelFast\Core\ApiContracts\ApiParamCollectContract;
use ApiDocLaravelFast\Core\ApiContracts\ApiResponseContract;

abstract Class Api implements ApiContract
{
    public function __construct(
       protected string $menu,
       protected string $uri,
       protected string $method,
       protected ?ApiParamCollectContract $params = null,
       protected ?ApiParamCollectContract $body = null,
       protected ?ApiParamCollectContract $headers = null,
       protected ?ApiResponseContract $response = null,
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

    public function getResponse():?ApiResponseContract
    {
        return $this->response;
    }

    public function getDesc(): ?ApiDoc
    {
        return $this->desc;
    }




}