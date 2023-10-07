<?php

namespace ApiDocLaravelFast\Tests\Core;

use ApiDocLaravelFast\Core\Api\Api;
use ApiDocLaravelFast\Core\Api\ApiParam;
use ApiDocLaravelFast\Core\Api\ApiParamCollect;
use PHPUnit\Framework\TestCase;

class ApiTest extends TestCase
{
    public function testApiMenu(): void
    {
        $api = new Api(menu:'menu-kid');
        $this->assertEquals('menu-kid', $api->getMenu());
        $api->setMenu('menu-kid2');
        $this->assertEquals('menu-kid2', $api->getMenu());
    }

    public function testApiUri(): void
    {
        $api = new Api(uri:'/uri');
        $this->assertEquals('/uri', $api->getUri());
        $api->setUri('/uri-kid');
        $this->assertEquals('/uri-kid', $api->getUri());
    }

    public function testMethod():void
    {
        $api = new Api(method: 'GET');
        $this->assertEquals('GET', $api->getMethod());
        $api->setMethod('POST');
        $this->assertEquals('POST', $api->getMethod());
    }

    public function testParams():void
    {
        $api = new Api(params: null);
        $this->assertNull($api->getParams());
        $paramCollect = new ApiParamCollect();
        $api->setParams($paramCollect);
        $this->assertInstanceOf(ApiParamCollect::class, $api->getParams());
        $param = new ApiParam();
        $param->setParamName('name');
        $param->setDefaultValue('default');
        $api->setParams($paramCollect->addParam($param));
        $this->assertEquals('default', $api->getParam('name')->getDefaultValue());
    }

    public function testHeader():void
    {
        $api = new Api(headers: null);
        $this->assertNull($api->getHeaders());
        $paramCollect = new ApiParamCollect();
        $api->setHeaders($paramCollect);
        $this->assertInstanceOf(ApiParamCollect::class, $api->getHeaders());
        $param = new ApiParam();
        $param->setParamName('header-name');
        $param->setDefaultValue('header-default');
        $api->setHeaders($paramCollect->addParam($param));
        $this->assertEquals('header-default', $api->getHeader('header-name')->getDefaultValue());
    }


}
