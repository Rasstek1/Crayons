<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class CrayonControllerTest extends TestCase
{
    /**
     * A basic feature test example.
     */
    public function test_example(): void
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }
    public function test_index_method_returns_a_view()
    {
        $response = $this->get('/crayons');
        $response->assertStatus(200);
        $response->assertViewHas('crayons');
    }
    public function test_create_method_returns_a_view()
    {
        $response = $this->get('/crayons/create');
        $response->assertStatus(200);
    }
    public function test_store_method_creates_a_crayon()
    {
        $data = [
            'type' => 'Crayon de couleur',
            // Ajoutez les autres attributs ici...
        ];
        $response = $this->post('/crayons', $data);
        $response->assertRedirect('/crayons');
        $this->assertDatabaseHas('crayons', $data);
    }


}
