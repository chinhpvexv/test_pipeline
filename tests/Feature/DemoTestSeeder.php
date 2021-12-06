<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Support\Facades\Artisan;
use Tests\TestCase;
use App\Services\TestService;
use App\Http\Controllers\TestController;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class DemoTestSeeder extends TestCase
{
    use DatabaseTransactions;

    public function setUp(): void
    {
        parent::setUp();
        Artisan::call('db:seed', ['--class' => 'TestSeeder']);
        Artisan::call('db:seed', ['--class' => 'Test2Seeder']);
    }

    public function tearDown(): void
    {
        parent::tearDown();
    }

    /**
     * Test data
     *
     * @return void
     */
    public function testFunction(): void
    {
        $expected = 0;
        $testService = new TestService();
        $actual = $testService->demoTestSeeder();
        $this->assertEquals(
            $expected,
            $actual,
            "actual value is not equals to expected"
        );
    }
}
