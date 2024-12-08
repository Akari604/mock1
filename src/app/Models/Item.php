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

    protected $guarded = [
        'id',
    ];

    public function comments() {
        return $this->belongsTo(Comment::class);
    }
    
    public function favorites() {
        return $this->hasMany(Favorite::class);
    }
}
