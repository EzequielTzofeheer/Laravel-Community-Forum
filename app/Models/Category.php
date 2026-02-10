<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Concerns\HasUuids;

class Category extends Model
{
    use HasUuids;
    use HasFactory;

    /**
     * Define que a chave primária não é auto-incremental.
     */
    public $incrementing = false;

    /**
     * Define que a chave primária é do tipo string (UUID).
     */
    protected $keyType = 'string';

    protected $fillable = [
        'name', 'description',
    ];
}
