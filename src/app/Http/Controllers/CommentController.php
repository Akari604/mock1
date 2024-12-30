<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Item;
use App\Models\Comment;
use App\Http\Requests\CommentRequest;


class CommentController extends Controller
{
    public function commentStore(CommentRequest $request, $id)
    {
        $people = Auth::user();
        $comment = new Comment();
        $comment->body = $request->input('body');
        $comment->save();
        $people->comments()->attach($id, $request->body);

        // $body = Comment::all();
        // $people->comments()->attach($id, ['body' => $body]);
        

        return back();
    }

    public function commentDestroy(Request $request)
    {
        $people = Auth::user();
        $people->comments()->attach($request->item_id, ['body' => $body]);
        
        return back();
    }
}
