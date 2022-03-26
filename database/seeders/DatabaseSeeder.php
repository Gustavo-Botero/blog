<?php

namespace Database\Seeders;

use App\Models\BlogModel;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        $this->call(UserModelSeeder::class);
        $this->call(RolModelSeeder::class);
        $this->call(UserRolModelSeeder::class);
        BlogModel::factory()->create();

    }
}
