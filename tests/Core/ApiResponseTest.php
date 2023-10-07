<?php

namespace ApiDocLaravelFast\Tests\Core;

use ApiDocLaravelFast\Core\Api\ApiResponse;
use PHPUnit\Framework\TestCase;

class ApiResponseTest extends TestCase
{
    public function testApiResponseBasicMethod(): void
    {
        $apiResponse = new ApiResponse('string', 'type');
        $this->assertEquals('string', $apiResponse->getResponseName());
        $this->assertEquals('type', $apiResponse->getResponseType());

    }
}
