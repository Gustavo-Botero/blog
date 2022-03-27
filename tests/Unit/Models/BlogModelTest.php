<?php

namespace Tests\Unit\Models;

use Tests\TestCase;
use App\Models\User;
use App\Models\BlogModel;

class BlogModelTest extends TestCase
{
    public function test_belongs_to_user()
    {
        $blog = BlogModel::factory()->create();

        $this->assertInstanceOf(User::class, $blog->user);
    }
}
