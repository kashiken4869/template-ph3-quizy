<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;

class HelloTest extends TestCase
{

    public function testHello()
    {
        $this->assertTrue(true);

        $arr = [];
        $this->assertEmpty($arr);

        $msg = "Hello";
        $this->assertEquals('Hello', $msg);

        $n = random_int(0, 100);
        $this->assertLessThan(100, $n);
    }

    public function testExample()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }
}
