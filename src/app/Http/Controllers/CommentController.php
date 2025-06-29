<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Comment;


class CommentController extends Controller
{
    public function commentPost(Request $request, $item_id)
    {
        $body = $request->only(['body']);
        $people = Auth::user();
        $people->comments()->attach($item_id, ['body' => $body]);

        return back();
    }
}
