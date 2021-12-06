<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Support\Facades\Artisan;
use Tests\TestCase;
use App\Services\TestService;
use App\Http\Controllers\TestController;

class DemoTestMigrate extends TestCase
{
    public function setUp(): void
    {
        parent::setUp();
        Artisan::call('migrate', ['--path' => 'database/migrations/2021_12_01_031227_create_tests_table.php']);
        Artisan::call('db:seed', ['--class' => 'TestMigrateSeeder']);
    }

    public function tearDown(): void
    {
        //Artisan::call('migrate:reset', ['--path' => 'database/migrations/2021_12_01_031227_create_tests_table.php']);
        parent::tearDown();
    }

    /**
     * Test data
     *
     * @return void
     */
    public function testFunction(): void
    {
        $expected = 1;
        $testService = new TestService();
        $actual = $testService->demoTest();
        $this->assertEquals(
            $expected,
            $actual,
            "actual value is not equals to expected"
        );
    }
}
