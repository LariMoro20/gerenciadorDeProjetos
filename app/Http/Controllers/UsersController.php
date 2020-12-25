<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Project;
use App\Models\UserTypes;


//use App\Models\UserProjeto;

class UsersController extends Controller
{
    public function index(){
        $users=User::join('user_types', 'users.type', '=', 'user_types.id')
        ->join('projects', 'users.project', '=', 'projects.id')
        //->join('users as muser', 'users.manager', '=', 'muser.id')
        ->select('users.*', 'user_types.type', 'projects.title')
        ->get();
        return view('admin.includes.header',['title' => 'Funcionarios']).view('admin.usuarios.usuarios', [
            'users' => $users,
        ]).view('admin.includes.footer');
    }
    public function create(){
        $users=User::get();
        $gerentes=User::where('type', 2)->get();
        $projeto=Project::get();
        return view('admin.includes.header',['title' => 'Adicionando Funcionario']).view('admin.usuarios.create', [
            'users' => $users,
            'gerentes'=> $gerentes,
            'projeto' => $projeto

        ]).view('admin.includes.footer');
    }

    public function store(Request $request ){
       $user= User::create($request->all());
        return redirect()->route('users.listagem');
    }
    public function delete(Request $request ){
        $user = User::find($request->id);
        $user->delete();
    }

    public function edit($id){
       
        if(!$user=User::find($id)){
            return redirect()->back();
        }       
        $allusers=User::get();
        $gerentes=User::where('type', 2)->get();
        $projetos=Project::get();
        $projeto=Project::find($user->project);
        $manager=User::find($user->manager);
        $type=UserTypes::find($user->type);
        return view('admin.includes.header',['title' => 'Editar '.$user->name]).view('admin.usuarios.edit', [
            'users' => $allusers,
            'gerentes'=> $gerentes,
            'projetos' => $projetos,
            'user' => $user,
            'projeto' =>$projeto,
            'manager' =>@$manager,
            'type' =>@$type
        ]).view('admin.includes.footer');
    }
    public function update(Request $request,$id){
        if(!$user=User::find($id)){
            return redirect()->back();
        }
        $user->update($request->all());
        return redirect()->route('users.listagem');
     }
    
    
}
