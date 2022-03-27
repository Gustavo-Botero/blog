<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class BlogModel extends Model
{
    use HasFactory;

    protected $table = 'blog';

    protected $fillable = [
        'id',
        'titulo',
        'descripcion',
        'imagen',
        'user_id',
    ];

    /**
     * Relación con la tabal user
     *
     * @return void
     */
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
