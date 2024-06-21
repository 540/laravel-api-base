<?php

namespace laravelApiBase\Status\Tests;

use PHPUnit\Framework\Attributes\Test;
use Tests\TestCase;

class statusControllerTest extends TestCase
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
