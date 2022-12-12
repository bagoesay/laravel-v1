<?php

namespace App\Http\Controllers;

use App\Models\Menus;
use Illuminate\Http\Request;

class MenuController extends Controller
{
    public function index()
    {
        return view('menus.menus-index');
    }

    public function get_menus()
    {
        $data = Menus::all();
        return response()->json([
            'data'=>$data
        ]);
    }
}
