<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;

class UserModelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $fUser = database_path('json/user.json');
        $jUser = file_get_contents($fUser);
        
        foreach (json_decode($jUser) as $row) {
            User::create([
                'name' => $row->name,
                'email' => $row->email,
                'email_verified_at' => now(),
                'password' => encrypt($row->password),
                'remember_token' => Str::random(10),
            ]);
        }
    }
}
