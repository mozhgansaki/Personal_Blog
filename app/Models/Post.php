<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Post extends Model
{
    use HasFactory;
    public function category(): BelongsTo
    {
        return $this->BelongsTo(Category::class);
    }
    public function tags(): BelongsToMany
    {
        return $this->BelongstoMany(Tag::class);
    }
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
