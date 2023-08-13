<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Laravel\Sanctum\HasApiTokens;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class User extends Authenticatable implements HasMedia
{
    use InteractsWithMedia;
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'alias',
        'description',
        
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];

    public function posts():HasMany{
      return $this->hasMany(Post::class);
    }

    public function likes():HasMany{
      return $this->hasMany(Like::class);
    }

    public function shares():HasMany{
      return $this->hasMany(Share::class);
    }

    public function saveds():HasMany{
      return $this->hasMany(Saved::class);
    }

    public function notifications():HasMany{
      return $this->hasMany(Notification::class);
    }

    public function comments():HasMany{
      return $this->hasMany(Comment::class);
    }

    public function followers():BelongsToMany{
      return $this->belongsToMany(static::class, 'followers', 'followed_id', 'follower_id');
    }

    public function following():BelongsToMany{
      return $this->belongsToMany(static::class, 'followers', 'follower_id', 'followed_id');
    }
}
