<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class FavoriteController extends Controller
{
    public function likeStore($id)
    {
        $user = Auth::user();
        // if (!$user->favorites($itemId)) {
        //     $user->favorites()->attach($itemId);
        // }
        $user->favorites()->attach($id);

        return back();
    }

    public function likeDestroy(Request $request)
    {
        $user = \Auth::user();
        if ($user->favorites($itemId)) {
            $user->favorites()->detach($itemId);
        }

        return back();
    }
}
