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
        $profiles = Profile::all();
        return view('index', compact('profiles'));
    }

    public function store(Request $request)
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
