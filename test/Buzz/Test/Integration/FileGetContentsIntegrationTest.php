<?php

namespace Buzz\Test\Integration;

use Buzz\Client\FileGetContents;

class FileGetContentsIntegrationTest extends BaseIntegrationTest
{
    protected function createHttpAdapter()
    {
        $client = new FileGetContents();

        return $client;
    }

    public function testSendWithInvalidUri()
    {
        $this->markTestSkipped('We do not support HTTPlugs exceptions');
    }
}
