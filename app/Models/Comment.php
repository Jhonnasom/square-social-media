<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Iluminate\Database\Eloquent\Relations\BelongsTo;


class Comment extends Model
{
    use HasFactory;

    protected $fillable=[
        'user_id',
        'post_id',
        'description'
      ];
      
      public function user(): BelongsTo{
        return $this->belongsTo(User::class);
      }

      public function post(): BelongsTo{
        return $this->belongsTo(Post::class);
      }

      public function likes(): HasMany{
        return $this->hasMany(Like::class);
      }

}
