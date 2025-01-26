<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;


class CommentController extends Controller
{
    public function commentStore(Request $request, $id)
    {
        $people = Auth::user();
        $body = 
        $people->comments()->attach($id, ['body' => $body]);
        
        return back();
    }
}
