<?php

namespace Tests\Unit\Models;

use App\Models\RolModel;
use App\Models\User;
use App\Models\UserRolModel;
use Tests\TestCase;

class UserRolModelTest extends TestCase
{
    public function test_belongs_to_user()
    {
        $userRol = UserRolModel::factory()->create();

        $this->assertInstanceOf(User::class, $userRol->user);
    }

    public function test_belongs_to_rol()
    {
        $userRol = UserRolModel::factory()->create();

        $this->assertInstanceOf(RolModel::class, $userRol->rol);
    }
}
