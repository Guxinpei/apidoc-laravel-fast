<?php

namespace ApiDocLaravelFast\Tests\Core;

use ApiDocLaravelFast\Core\Api\ApiParam;
use ApiDocLaravelFast\Core\Api\ApiParamCollect;
use PHPUnit\Framework\TestCase;

/**
 * @coversDefaultClass \ApiDocLaravelFast\Core\Api\ApiParamCollect
 */
class ApiParamCollectTest extends TestCase
{
    public function test__construct(): void
    {
       $apiParamCollect = new ApiParamCollect();
       $this->assertInstanceOf(ApiParamCollect::class,$apiParamCollect);

    }

    public function testAddParam(): void
    {
        $apiParamCollect = new ApiParamCollect();
        $apiParam = new ApiParam();
        $apiParamCollect->addParam($apiParam->setParamName('param1'));
        $this->assertCount(1, $apiParamCollect->getParams());
        $testResult = $apiParamCollect->getParam($apiParam->getParamName());
        $this->assertEquals($apiParam, $testResult);
    }

    public function testGetParams():void
    {
        $apiParamCollect = new ApiParamCollect();
        $apiParam = new ApiParam();
        $apiParamCollect->addParam($apiParam);
        $this->assertCount(1, $apiParamCollect->getParams());
        $testResult = $apiParamCollect->getParams();
        $this->assertEquals([$apiParam->getParamName()=>$apiParam], $testResult);
    }

    public function testAddParams():void
    {
        $apiParamCollect = new ApiParamCollect();
        $apiParam = (new ApiParam())->setParamName('param1');
        $apiParamCollect->addParams([$apiParam]);
        $this->assertCount(1, $apiParamCollect->getParams());
        $testResult = $apiParamCollect->getParams();
        $this->assertEquals([$apiParam->getParamName()=>$apiParam], $testResult);
    }

    public function testHasParam():void
    {
        $apiParamCollect = new ApiParamCollect();
        $apiParam = (new ApiParam())->setParamName('param1');
        $apiParamCollect->addParam($apiParam);
        $this->assertTrue($apiParamCollect->hasParam($apiParam->getParamName()));
    }

    public function testIsEmpty():void
    {
        $apiParamCollect = new ApiParamCollect();
        $this->assertTrue($apiParamCollect->isEmpty());
    }



}
