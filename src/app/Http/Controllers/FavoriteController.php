<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class FavoriteController extends Controller
{
    public function likeStore($id)
    {
        $user = Auth::user();
        // if (!$user->favorites($id)) {
        //     $user->favorites()->attach($id);
        // } else {
        //     $user->favorites()->detach($id);
        // }
        $user->favorites()->attach($id);

        return back();
    }

    public function likeDestroy($id)
    {
        $user = Auth::user();
        // if ($user->favorites($id)) {
        //     $user->favorites()->detach($id);
        // } else {
        //     $user->favorites()->attach($id);
        // }
        $user->favorites()->detach($id);
        
        return back();
    }
}
