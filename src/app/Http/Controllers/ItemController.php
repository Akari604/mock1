<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\AddressRequest;
use App\Models\User;
use App\Models\Item;
use App\Models\Profile;
use App\Models\Condition;
use Illuminate\Support\Facades\Auth;
use App\Models\Comment;
use Illuminate\Support\Facades\Storage;

class ItemController extends Controller
{
    public function index(Request $request)
    {
        $items = Item::all();

        $keyword = $request->input('keyword');
        $query = Item::query();

        if ($request->filled('keyword')) {

            $keyword = $request->input('keyword');
            $query->where('product_name','like','%'.$keyword.'%');
        }

        $items = $query->get();

        return view('index', compact('items', 'keyword'));
    }

    public function getMypage()
    {
        return view('mylist');
    }

    public function editProfile(Request $request)
    {
        $profiles = $request->only('image','name','number','address','building','user_id');

        return view('edit_profile', compact('profiles'));
    }

    public function updateProfile(AddressRequest $request)
    {
        $img = $request->file('image');
        
        try {
            //code...
            $img_url = Storage::disk('local')->put('public/imges', $img);
        } catch (\Throwable $th) {
            throw $th;
        }

        Profile::create(
                $request->only([
                    'name',
                    'number',
                    'address',
                    'building',
                    'image'
                ])
            );

        return redirect('/');
    }

    public function getDetail(Request $request, $id)
    {
        $item = Item::find($id);
        $condition = Condition::find($request->condition_id);
        $users = User::all();
        $user = Auth::id();
        $comment = Comment::get('text_body');

        return view('detail', compact('item', 'condition', 'users', 'user', 'comment'));
    }

    public function getPurchase($id)
    {
        $item = Item::find($id);
        $auth_user = Auth::id();
        $users = Profile::where('user_id', $auth_user)->get();
                
        return view('purchase', compact('item', 'users'));
    }

    public function getAddress($id)
    {
        
        return view('change');
    }

    public function getSell()
    {
        
        return view('exhibit');
    }

    public function upload(ItemRequest $request)
    {
        $img = $request->file('image');
        
        try {
            //code...
            $img_url = Storage::disk('local')->put('public/imges', $img);
        } catch (\Throwable $th) {
            throw $th;
        }

        $item_data = new Item();
        $item_data->name= $_POST["item_name"];
        $item_data->price= $_POST["item_price"];
        $item_data->image= 'storage/' . $img . '/' . $img_url;
        $item_data->description= $_POST["item_description"];
        $item_data->save();

        $items = Item::all();
        
        return redirect('/');
    }
}