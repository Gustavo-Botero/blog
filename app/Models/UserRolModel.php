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

    /**
     * Relación con la tabla users
     *
     * @return void
     */
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    /**
     * Relación con la tabla rol
     *
     * @return void
     */
    public function rol()
    {
        return $this->belongsTo(RolModel::class, 'rol_id');
    }
}
