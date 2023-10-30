<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Concession;

class ConcessionController extends Controller
{
    public function index($id)
    {
        $concession = Concession::find($id);
        return view('concession',['concession'=>$concession]);
    }
    public function showAll()
    {
        $concessions = Concession::all();
        return view('concessions',['concessions'=>$concessions]);
    }
    public function showForm()
    {
        $form = Concession::all();
        return view('ConcessionCreate');
    }
    public function create(Request $request)
    {
        $Concession=newConcession();
        $Concession->name=$request->name;
        $Concession->siret=$request->siret;
        $Concession->license=$request->license;
        return view('ConcessionCreateSuccess');
    }
}
