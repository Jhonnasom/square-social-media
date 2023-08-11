<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Post extends Model
{
    use HasFactory;

    protected $fillable=[
        'user_id',
        'description',
        'parent_id',
    ];

    public function user(): BelongsTo{
        return $this->belongsTo(User::class);
    }

    public function comments(): HasMany{
        return $this->hasMany(Comment::class);
    }

    public function likes(): HasMany{
        return $this->hasMany(Like::class);
    }

    public function shares(): HasMany{
        return $this->hasMany(Share::class);
    }

    public function saveds(): HasMany{
        return $this->hasMany(Saved::class);
    }

    public function parent(): BelongsTo{
        return $this->belongsTo(Post::class);
    }
}
