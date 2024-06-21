<?php

namespace laravelApiBase\boundedContext1\api\controllers;


use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class statusController
{

    public function __construct()
    {
    }

    public function __invoke(Request $request): JsonResponse
    {
        return response()->json(['status' => 'ok']);
    }

}
