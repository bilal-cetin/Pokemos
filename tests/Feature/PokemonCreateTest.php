<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\User;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;

class PokemonCreateTest extends TestCase
{
    use RefreshDatabase;

    public function test_pokemon_create_screen_can_be_rendered()
    {
        $user = User::factory()->create();
        $response = $this->actingAs($user)->get('/pokemons/create');

        $response->assertStatus(200);
    }

    public function test_user_can_create_pokemon()
    {
        Storage::fake('avatars');
        $file = UploadedFile::fake()->image('avatar.jpg');
        $user = User::factory()->create();
        $response = $this->actingAs($user)->post('/pokemons', [
            'name' => 'Test User',
            'image' => $file,
            'age' => '12',
            'height'=>'1.2',
            'evolves_from'=>'example',
            'evolves_to'=>'example',
            'weakness'=>'example',
            'ability'=>'example',
            
        ]);

        
        $response->assertRedirect('/pokemons');
    }
}
