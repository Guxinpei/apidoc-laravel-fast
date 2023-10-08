<?php
namespace ApiDocLaravelFast\Core\Factory;

use ApiDocLaravelFast\Core\Api\Api;
use ApiDocLaravelFast\Core\ApiContracts\ApiContract;
use ApiDocLaravelFast\Core\ApiContracts\ApiDoc;
use ApiDocLaravelFast\Core\ApiContracts\ApiParamCollectContract;
use ApiDocLaravelFast\Core\ApiContracts\ApiResponseCollectionContract;

Class ApiFactory  {

    protected ?ApiParamCollectContract $params = null;
    protected ?ApiParamCollectContract $body = null;
    protected ?ApiParamCollectContract $headers = null;
    protected ?ApiDoc $desc = null;
    private ?ApiResponseCollectionContract $response = null;

    public function __construct (
        public string $menu='',
        public string $uri='',
        public string $method='',
    )
    {

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
        $this->response = $response;
        return $this;
    }

    public function setDesc(ApiDoc $desc):self
    {
        $this->desc = $desc;
        return $this;
    }

    public function build():ApiContract
    {
        return new Api(
            $this->menu,
            $this->uri,
            $this->method,
            $this->params,
            $this->body,
            $this->headers,
            $this->response,
            $this->desc
        );
    }





}