<?php

namespace Tests\Feature;

// use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     */
    public function test_the_application_returns_a_successful_response(): void
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }

    public function test_homepage_uses_dynamic_student_data(): void
    {
        $response = $this->get('/');

        $response->assertOk();
        $response->assertSeeText('Carl Matthew T. Castro');
        $response->assertSeeText('0123-0616');
        $response->assertSeeText('ITST 302 - Client-Server Technologies');

        $this->assertStringNotContainsString('08/07/2026', file_get_contents(resource_path('views/welcome.blade.php')));
        $this->assertStringNotContainsString("'name' => 'Carl Matthew T. Castro'", file_get_contents(base_path('routes/web.php')));
    }
}
