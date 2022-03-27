<?php

namespace Tests\Unit\Models;

use Tests\TestCase;
use App\Models\RolModel;
use Illuminate\Database\Eloquent\Collection;

class RolModelTest extends TestCase
{
    public function test_has_many_user_rol()
    {
        $rol = new RolModel;

        $this->assertInstanceOf(Collection::class, $rol->usersRol);
    }
}
