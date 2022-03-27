<?php

namespace Database\Factories;

use App\Models\RolModel;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class UserRolModelFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'user_id' => User::factory()->create(),
            'rol_id' => RolModel::factory()->create()
        ];
    }
}
