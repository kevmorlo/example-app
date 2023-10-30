<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mine;

class MineController extends Controller
{
    public function index($id)
    {
        $mine = Mine::find($id);
        return view('mine',['mine'=>$mine]);
    }
    public function showAll()
    {
        $mines = mine::all();
        return view('mines',['mines'=>$mines]);
    }
}
