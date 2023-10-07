<?php

namespace ApiDocLaravelFast\Tests\Core;

use ApiDocLaravelFast\Core\Api\ApiDoc;
use ApiDocLaravelFast\Core\Api\ApiParam;
use PHPUnit\Framework\TestCase;

class ApiParamTest extends TestCase
{

    /**
     * test every situation of __construct
     * @covers \ApiDocLaravelFast\Core\Api\ApiParam::__construct
     * @return void
     */
    public function test__construct(): void
    {
        $apiParam = new ApiParam();
        $this->assertInstanceOf(ApiParam::class, $apiParam);
        $this->assertInstanceOf(ApiParam::class,new ApiParam('name'));
        $this->assertInstanceOf(ApiParam::class,new ApiParam('name','string'));
        $apiDoc = new ApiDoc('string','content');
        $this->assertInstanceOf(ApiParam::class,new ApiParam('name','string',$apiDoc));
        $this->assertInstanceOf(ApiParam::class,new ApiParam('name','string',$apiDoc,'default'));
        $this->assertInstanceOf(ApiParam::class,new ApiParam('name','string',$apiDoc,'default'),true);
    }

    /**
     * test all get and set method
     * @covers \ApiDocLaravelFast\Core\Api\ApiParam::getParamType
     * @covers \ApiDocLaravelFast\Core\Api\ApiParam::getParamName
     * @covers \ApiDocLaravelFast\Core\Api\ApiParam::getParamDesc
     * @covers \ApiDocLaravelFast\Core\Api\ApiParam::getDefaultValue
     * @covers \ApiDocLaravelFast\Core\Api\ApiParam::isNullable
     * @covers \ApiDocLaravelFast\Core\Api\ApiParam::setParamType
     * @covers \ApiDocLaravelFast\Core\Api\ApiParam::setParamName
     * @covers \ApiDocLaravelFast\Core\Api\ApiParam::setParamDesc
     * @covers \ApiDocLaravelFast\Core\Api\ApiParam::setDefaultValue
     * @covers \ApiDocLaravelFast\Core\Api\ApiParam::setNullable
     * @return void
     */
    public function testGetSetMethod(): void
    {
        $apiParam = new ApiParam();
        //testDefaultValue
        $this->assertEquals('', $apiParam->getParamName());
        $this->assertEquals('', $apiParam->getParamType());
        $this->assertEquals('', $apiParam->getDefaultValue());
        $this->assertTrue($apiParam->isNullable());
        //testSetValue
        $apiDoc = new ApiDoc('string','content');
        $apiParam->setParamName('name');
        $apiParam->setParamType('string');
        $apiParam->setDefaultValue('default');
        $apiParam->setNullable(false);
        $apiParam->setParamDesc($apiDoc);
        $this->assertEquals('name', $apiParam->getParamName());
        $this->assertEquals('string', $apiParam->getParamType());
        $this->assertEquals('default', $apiParam->getDefaultValue());
        $this->assertFalse($apiParam->isNullable());
        $this->assertEquals($apiDoc, $apiParam->getParamDesc());
    }
}
