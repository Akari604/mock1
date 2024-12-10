<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Favorite;

class FavoriteController extends Controller
{
    public function like(Request $request)
    {
        $user_id = Auth::user()->id; //1.ログインユーザーのid取得
        $item_id = $request->item_id; //2.投稿idの取得
        $already_liked = Favorite::where('user_id', $user_id)->where('item_id', $item_id)->first(); //3.
        
        if (!$already_liked) { //もしこのユーザーがこの投稿にまだいいねしてなかったら
            $favorite = new Favorite; //4.Likeクラスのインスタンスを作成
            $favorite->item_id = $item_id; //Likeインスタンスにreview_id,user_idをセット
            $favorite->user_id = $user_id;
            $favorite->save();
        } else { //もしこのユーザーがこの投稿に既にいいねしてたらdelete
            Favorite::where('item_id', $item_id)->where('user_id', $user_id)->delete();
        }
        //5.この投稿の最新の総いいね数を取得
        $item_likes_count = Item::withCount('likes')->findOrFail($item_id)->likes_count;
        $param = [
            'item_likes_count' => $item_likes_count,
        ];
        return response()->json($param); //6.JSONデータをjQueryに返す
    }
}
