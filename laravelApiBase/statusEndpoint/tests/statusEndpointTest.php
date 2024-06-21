<?php

namespace laravelApiBase\statusEndpoint\tests;

use PHPUnit\Framework\Attributes\Test;
use Tests\TestCase;

class statusEndpointTest extends TestCase
{
    #[test]
    public function checkStatusOk(): void
    {
        $response = $this->get(route("status"));

        $response->assertStatus(200);

        $expectedResponse = '{"status":"ok"}';
        $response->assertContent($expectedResponse);
    }
}
