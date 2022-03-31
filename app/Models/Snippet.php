<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;
use Astrotomic\Translatable\Translatable;

class Snippet extends Model
{
    use HasFactory;
    use Translatable;
    protected $guarded = [];

    protected $casts = [
        'published' => 'boolean',
    ];

    public $translatedAttributes = ['title', 'subtitle', 'description', 'slug', 'published'];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
