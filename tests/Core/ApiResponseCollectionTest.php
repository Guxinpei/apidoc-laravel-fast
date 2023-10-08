<?php

namespace ApiDocLaravelFast\Tests\Core;

use ApiDocLaravelFast\Core\Api\ApiResponse;
use PHPUnit\Framework\TestCase;

/**
 * @coversDefaultClass \ApiDocLaravelFast\Core\Api\ApiResponseCollection
 */
class ApiResponseCollectionTest extends TestCase
{
    /**
     * @covers \ApiDocLaravelFast\Core\Api\ApiResponseCollection::__construct
     * @covers \ApiDocLaravelFast\Core\Api\ApiResponseCollection::addResponse
     * @covers \ApiDocLaravelFast\Core\Api\ApiResponseCollection::getResponses
     * @covers \ApiDocLaravelFast\Core\Api\ApiResponseCollection::hasResponse
     * @covers \ApiDocLaravelFast\Core\Api\ApiResponseCollection::getResponse
     * @return void
     */
    public function testApiResponseCollectionBasicMethod(): void
    {
        $apiResponse = new \ApiDocLaravelFast\Core\Api\ApiResponseCollection();
        $this->assertInstanceOf(\ApiDocLaravelFast\Core\Api\ApiResponseCollection::class, $apiResponse);
        $apiResponse->addResponse(new ApiResponse('string', 'type'));
        $this->assertCount(1, $apiResponse->getResponses());
        $apiResponse->addResponse(new ApiResponse('string2', 'type2'));
        $this->assertCount(2, $apiResponse->getResponses());
        $apiResponse->getResponse('string')->setResponseCode(200);
        $this->assertEquals(200, $apiResponse->getResponse('string')->getResponseCode());
        $this->assertTrue($apiResponse->hasResponse('string'));
        $this->assertFalse($apiResponse->hasResponse('string3'));
        echo 123;
    }
}
