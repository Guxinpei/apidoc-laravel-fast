<?php

namespace ApiDocLaravelFast\Tests\Core;

use ApiDocLaravelFast\Core\Api\ApiDoc;
use PHPUnit\Framework\TestCase;

/**
 * @coversDefaultClass \ApiDocLaravelFast\Core\Api\ApiDoc
 */
class ApiDocTest extends TestCase
{

    /**
     * @covers \ApiDocLaravelFast\Core\Api\ApiDoc::__construct
     * @covers \ApiDocLaravelFast\Core\Api\ApiDoc::getType
     * @covers \ApiDocLaravelFast\Core\Api\ApiDoc::getContent
     * @return void
     */
    public function testApiDocBasicMethod(): void
    {
        $apiDoc = new ApiDoc('string', 'content');
        $this->assertEquals('string', $apiDoc->getType());
        $this->assertEquals('content', $apiDoc->getContent());
        $apiDoc->setType('int');
        $apiDoc->setContent('content2');
        $this->assertEquals('int', $apiDoc->getType());
        $this->assertEquals('content2', $apiDoc->getContent());
    }
}
