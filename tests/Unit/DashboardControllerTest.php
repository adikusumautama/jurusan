<?php

namespace Tests\Unit;

use Tests\TestCase; 
use Illuminate\Foundation\Testing\WithFaker; 
use Illuminate\Foundation\Testing\RefreshDatabase;

class DashboardControllerTest extends TestCase { 
    /** * A basic unit test example. * 
     * * @return void / 
     * /* @test */ 
    public function testIndex() { 
    // Menggunakan URL yang sesuai dengan route dashboard 
    $response = $this->get('/dashboard'); 
    // Memastikan status 200 (OK) 
    $response->assertStatus(200); 
    // Memastikan melihat kata 'Dashboard' di view 
    $response->assertSee('/dashboard'); 
} 
}