<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserRolModel extends Model
{
    use HasFactory;

    protected $table = 'user_rol';

    protected $fillable = [
        'id',
        'user_id',
        'rol_id',
    ];
}
