<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    use HasFactory;

    protected $fillable = [
        'product_name',
        'price',
        'description',
        'img_url',
    ];

    // public function users()
    // {
    //     return $this->belongsToMany(User::class, 'favorites')
    //         ->using(Favorite::class);
    // }

    public function people()
    {
        return $this->belongsToMany(User::class, 'comments')
            ->using(Comment::class);
    } 

    public function conditions()
    {
        return $this->belongsTo(Condition::class);
    }
}
