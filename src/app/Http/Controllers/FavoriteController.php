<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Models\Item;
use App\Http\Models\Favorite;

class FavoriteController extends Controller
{
    public function favorite(Request $request, Item $item)
    {
        $user = Auth::id();
        $isLikedBy = $user->favorites()->where('item_id', $item->id)->exists();

        if ($isLikedBy) {
            $user->favorites()->detach($item);
        } else {
            $user->favorites()->attach($item);
        }

        return back();
    }
}
