<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class RegisterTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testExample()
    {
        // $this->assertTrue(true);
         $response = $this->json('POST', '/store', [
		      'm_name'     => '1',
		      'm_type'    => '1'
		    ]);
        $response->assertStatus(200);
    }
}
