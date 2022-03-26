<?php

namespace Database\Factories;

use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;
use Illuminate\Database\Eloquent\Factories\Factory;

class BlogModelFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        Storage::fake('local');
        return [
            'titulo' => $this->faker->title,
            'descripcion' => $this->faker->text,
            'imagen' => UploadedFile::fake()->image('photo.png'),
            'user_id' => 1
        ];
    }
}
