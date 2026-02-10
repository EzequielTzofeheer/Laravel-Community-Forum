<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Question extends Model
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
        'user_id', 'category_id',
        'subject', 'text',
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class);
    }
}
