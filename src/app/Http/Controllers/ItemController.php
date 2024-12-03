<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\AddressRequest;
use App\Models\Item;
use App\Models\Profile;

class ItemController extends Controller
{
    public function index(Request $request)
    {
        $items = Item::all();
        return view('index', compact('items'));
    }

    public function store()
    {
        return view('edit');
    }

    public function create(AddressRequest $request)
    {
        $form = $request->all();
        Profile::create($form);
        return redirect('/');
    }

    public function getDetail($item_id)
    {
        $item = Item::find($item_id);

        return view('detail', compact('item'));
    }

    public function getProfile()
    {
        
        return view('profile');
    }

    public function getPurchase($item_id)
    {
        
        return view('purchase');
    }

    public function getAddress($item_id)
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
