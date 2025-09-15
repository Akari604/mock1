<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class FavoriteController extends Controller
{
    public function likeStore($id)
    {
        $user = Auth::user();
        $user->favorites()->attach($id); 

        return back();
    }

    public function likeDestroy($id)
    {
        $user = Auth::user();
        $user->favorites()->detach($id);

        return back();
    }
}
