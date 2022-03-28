<?php

namespace Tests\Feature\Http\Controllers\Api\V1;

use App\Models\User;
use Tests\TestCase;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class BlogControllerTest extends TestCase
{
    use WithFaker, RefreshDatabase;
    
    public function test_invitado()
    {
        $this->get('api/v1/blog')->assertRedirect('login');
        $this->get('api/v1/blog/1')->assertRedirect('login');
        $this->put('api/v1/blog/1')->assertRedirect('login');
        $this->delete('api/v1/blog/1')->assertRedirect('login');
        $this->post('api/v1/blog', [])->assertRedirect('login');

    }

    public function test_store()
    {
        Storage::fake('local');

        $user = User::factory()->create();
        
        $data = [
            'titulo' => $this->faker->title,
            'descripcion' => $this->faker->text,
            'imagen' => UploadedFile::fake()->image('photo.png'),
            // 'user_id' => $user->id
        ];

        $this->actingAs($user)->post('api/v1/blog', $data)->assertRedirect('api/v1/blog');

        $this->assertDatabaseHas('blog', $data);

    }
}
