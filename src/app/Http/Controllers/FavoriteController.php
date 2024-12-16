<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class FavoriteController extends Controller
{
    public function likeStore(Request $request)
    {
        $user_id = \Auth::user();
        if (!$user->favorites($itemId)) {
            $user->favorites()->attach($itemId);
        }

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
