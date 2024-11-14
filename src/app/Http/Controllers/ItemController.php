<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ItemController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function create()
    {
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
}
