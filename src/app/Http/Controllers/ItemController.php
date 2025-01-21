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

        return view('index', compact('items', 'keyword'));
    }

    public function getMypage()
    {
        return view('profile');
    }

    public function editProfile(Request $request)
    {
        return view('edit_profile');
    }

    public function updateProfile(AddressRequest $request)
    {
        $dir = 'images';

        $file_name = $request->file('image')->getClientOriginalName();
        $request->file('image')->storeAs('public/' . $dir, $file_name);


        // $form = $request->only(['name', 'number', 'address', 'building', 'image']);
        // Profile::create($form);

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
    
        return view('detail', compact('item', 'condition', 'users'));
    }

    public function commentPost(Request $request)
    {
        $comment = $request->only(['body']);
        Comment::create($comment);

        return view('/item/{item_id}');
    }

    public function getPurchase($id)
    {
        $item = Item::find($id);
        
        return view('purchase', compact('item'));
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
        $dir = 'images';

        $file_name = $request->file('item_image')->getClientOriginalName();
        $request->file('item_image')->storeAs('public/' . $dir, $file_name);

        $item_data = new Item();
        $item_data->name= $_POST["item_name"];
        $item_data->price= $_POST["item_price"];
        $item_data->image= 'storage/' . $dir . '/' . $file_name;
        $item_data->description= $_POST["item_description"];
        $item_data->save();

        $items = Item::all();
        
        return redirect('/');
    }
}