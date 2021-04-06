<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class ViewTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_a_possessor_view_can_be_rendered()
    {
        $view = $this->view('possessor.list', ['name' => 'Example']);

        $view->assertSee('Example');
    }
    public function test_a_pokemon_view_can_be_rendered()
    {
        $view = $this->view('pokemon.list', ['name' => 'Example']);

        $view->assertSee('Example');
    }
}
