<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
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
    ];

    public function comments() {
        return $this->hasMany(Comment::class);
    }
    
    public function favorites() {
        return $this->hasMany(Favorite::class, 'favorites', 'user_id', 'item_id')->withTimestamps();

        if($exist) {
            return false;
        } else {
            $this->favorites()->attach($itemId);
            return true;
        }
    }

    public function unfavorite($itemId)
    {
        $exist = $this->is_favorites($itemId);
        return true;
    } else {
        return false;
    }

    public function is_favorite($itemId)
    {
        return $this->favorites()->where('item_id', $itemId)->exist();
    }
}
