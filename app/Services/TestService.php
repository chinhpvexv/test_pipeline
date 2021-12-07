<?php

namespace App\Services;

use App\Models\Test;
use Illuminate\Http\Request;

class TestService
{
    public function demoTest() {
        $test = Test::first();
        if ($test) {
            return $test->id;
        }
        return null;
    }

    public function demoTestSeeder() {
        $test = Test::where('name', 'test')->first();
        if ($test) {
            return $test->flg;
        }
        return null;
    }
}
