<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comment;
use App\Models\User;

class CommentController extends Controller
{
    public function getRegister()
    {
        $comment = new Comment();
        $comment->comment = $request->comment;
        $comment->item_id = $request->item_id;
        $comment->user_id = Auth::user()->id;
        $comment->save();

        return redirect('/item/{item_id}');
    }

    public function destroy(Request $request)
    {
        $comment = Comment::find($request->comment_id);
        $comment->delete();

        return redirect('/item/{item_id}');
    }
}
