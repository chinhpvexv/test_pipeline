<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Test;
use App\Services\TestService;

class TestController extends Controller
{
    protected $testService;

    public function __construct(
        TestService $testService
    ) {
        $this->testService = $testService;
    }

    public function demoTest(Request $request) {
        $test = $this->testService->demoTest();
        return $test;
    }
}
