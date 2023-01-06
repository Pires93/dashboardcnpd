<?php

namespace App\Http\Controllers;

use App\Models\Legislacao;
use Illuminate\Http\Request;

class LegislacaoController extends Controller
{

    public function index()
    {
        return Legislacao::all();
       /* $listar = Legislacao::all();
        return view('legislacao')->with('users',$listar);*/
    }


    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }


    public function destroy($id)
    {
        //
    }
}
