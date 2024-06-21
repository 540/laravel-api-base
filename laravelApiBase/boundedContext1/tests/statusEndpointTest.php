<?php

namespace laravelApiBase\boundedContext1\tests;

use PHPUnit\Framework\Attributes\Test;
use Tests\TestCase;

class statusEndpointTest extends TestCase
{
    #[test]
    public function checkStatusOk(): void
    {
        $response = $this->get("/boundedContext1");

        $response->assertStatus(200);

        $expectedResponse = '{"status":"ok"}';

        $response->assertContent($expectedResponse);
    }
}
