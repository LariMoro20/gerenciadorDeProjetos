<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Projeto;

class ProjetoController extends Controller
{
    public function index(){
        $projeto=Projeto::get();
        return view('admin.projetos.projetos', [
            'projeto' => $projeto,
        ]);
    }
    public function create(){
        return view('admin.projetos.create');
    }

    public function store(Request $request ){
        Projeto::create($request->all());
        return redirect()->route('produtos.listagem');

    }
}
