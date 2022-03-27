<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class RolModel extends Model
{
    use HasFactory;

    protected $table = 'rol';

    protected $fillable = [
        'id',
        'rol',
    ];

    /**
     * Relación con la tabla user_rol
     *
     * @return void
     */
    public function usersRol()
    {
        return $this->hasMany(UserRolModel::class);
    }
}
