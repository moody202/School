<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
<<<<<<< HEAD
    public function testBasicTest()
=======
    public function test_the_application_returns_a_successful_response()
>>>>>>> 17ede32943ad6eadf9d7dc698ac5e73d6c1a7730
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }
}
