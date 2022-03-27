<?php

namespace Tests\Unit\Models;

use Tests\TestCase;
use App\Models\User;
use Illuminate\Database\Eloquent\Collection;

class UserTest extends TestCase
{
    public function test_has_many_blogs()
    {
        $user = new User;

        $this->assertInstanceOf(Collection::class, $user->blogs);
    }

    public function test_has_many_users_rol()
    {
        $user = new User;

        $this->assertInstanceOf(Collection::class, $user->usersRol);
    }
}
