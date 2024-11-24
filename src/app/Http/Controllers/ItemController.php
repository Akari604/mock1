<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\AddressRequest;
use App\Models\Item;

class ItemController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function create(AddressRequest $request)
    {
        // $profiles = $request->all();
        // return view('edit', compact('profiles'));
        return view('edit');
    }

    public function getDetail($item_id)
    {

        return view('detail');
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
}
