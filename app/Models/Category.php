<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class Category extends Model
{
    use HasFactory;
    use HasUuids;
    use SoftDeletes;

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

    public function questions(): HasMany
    {
        return $this->hasMany(Question::class);
    }
}
