<?php

namespace App\Http\Controllers;
use App\Http\Requests\StoreUpdateProject;

use Illuminate\Http\Request;
use App\Models\Project;
class ProjectController extends Controller
{
    public function index(){
        $projeto=Project::get();
        return view('admin.includes.header',['title' => 'Projetos']).view('admin.projetos.projetos', [
            'projeto' => $projeto,
           
        ]).view('admin.includes.footer');
    }
    public function create(){
        return view('admin.includes.header',['title' => 'Adicionar Projeto']).view('admin.projetos.create').view('admin.includes.footer');
    }

    public function store(StoreUpdateProject $request ){
        Project::create($request->all());
        return redirect()->route('projeto.listagem');
    }
    public function delete(Request $request ){
        $project = Project::find($request->id);
        $project->delete();
    }
   
    public function edit($id){
       
        if(!$proj=Project::find($id)){
            return redirect()->back();
        }       
        return view('admin.includes.header',['title' => 'Editar '.$proj->title]).view('admin.projetos.edit', [
            'projeto' =>$proj,
        
        ]).view('admin.includes.footer');
    }

    public function update(StoreUpdateProject $request,$id){
        if(!$proj=Project::find($id)){
            return redirect()->back();
        }
        $proj->update($request->all());
        return redirect()->route('projeto.listagem');
     }
    
}
