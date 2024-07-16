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
    protected $fillable = ['title','description','image','category_id'];
    use HasFactory;
    public function category(): BelongsTo
    {
        return $this->BelongsTo(Category::class);
    }
    public function tags(): BelongsToMany
    {
        return $this->BelongstoMany(Tag::class,'post_tags');
    }
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
