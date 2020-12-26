<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Project;

class ProjectControllerAPI extends Controller
{
    public function index(){
        $proj = Project::all();
        return response()->json($proj);
    }

    public function show($id){
        $proj = Project::find($id);
        if(!$proj) {
            return response()->json([
                'message'   => 'Projeto não encontrado',
            ], 404);
        }
        return response()->json($proj);
    }
    
    public function store(Request $request){
        $proj = new Project();
        $proj->fill($request->all());
        $proj->save();
        return response()->json($proj, 201);
    }

    public function update(Request $request, $id){
        $proj = Project::find($id);
        if(!$proj) {
            return response()->json([
                'message'   => 'Projeto não encontrado',
            ], 404);
        }
        $proj->fill($request->all());
        $proj->save();
        return response()->json($proj);
    }

    public function delete($id){
        $proj = Project::find($id);
        if(!$proj) {
            return response()->json([
                'message'   => 'Projeto não encontrado',
            ], 404);
        }
        $proj->delete();
        return response()->json([
            'message'   => 'Projeto deletado com sucesso',
        ], 200);
    }
}
