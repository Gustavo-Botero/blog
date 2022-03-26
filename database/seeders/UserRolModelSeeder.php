<?php

namespace Database\Seeders;

use App\Models\UserRolModel;
use Illuminate\Database\Seeder;

class UserRolModelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $fUserRol = database_path('json/userRol.json');
        $jUserRol = file_get_contents($fUserRol);

        foreach (json_decode($jUserRol) as $row) {
            UserRolModel::create([
                'user_id' => $row->user_id,
                'rol_id' => $row->rol_id
            ]);
        }
    }
}
