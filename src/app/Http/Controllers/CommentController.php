<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Item;
use App\Models\Comment;
use App\Http\Requests\CommentRequest;


class CommentController extends Controller
{
    public function create(Request $request, $item_id)
    {
        $comments = $request['text_body'];
        $people = Auth::user();
// echo '-------1------';
// echo $request->aaaaa;

        $body = new Comment();
        $body->user_id = $request->user_id;
        $body->item_id = $request->item_id;
        $body->text_body = $comments;
        $body->save();
        // dd($body);

        // $people->comments()->attach($item_id, ['text_body' => $comments]);

        return back();
    }
}
