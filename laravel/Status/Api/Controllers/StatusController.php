<?php

namespace Laravel\Status\Api\Controllers;

use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class StatusController
{
    public function __construct()
    {
    }

    public function __invoke(Request $request): JsonResponse
    {
        return response()->json(['status' => 'ok']);
    }
}
