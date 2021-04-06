<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\User;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;

class PossessorCreateTest extends TestCase
{
    use RefreshDatabase;

    public function test_possessor_create_screen_can_be_rendered()
    {
        $user = User::factory()->create();
        $response = $this->actingAs($user)->get('/possessors/create');

        $response->assertStatus(200);
    }

    public function test_user_can_create_possessor()
    {
        Storage::fake('avatars');
        $file = UploadedFile::fake()->image('avatars.jpg');
        $user = User::factory()->create();
        $response = $this->actingAs($user)->post('/possessors', [
            'name' => 'Test User',
            'image' => $file,
            'age' => '12',
            'score' => '12',
            
        ]);

        
        $response->assertRedirect('/possessors');
    }
}
