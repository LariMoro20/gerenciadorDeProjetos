<?php

namespace App\Http\Controllers;
use App\Http\Requests\StoreUpdateUserRequest;

use Illuminate\Http\Request;
use App\Models\User;

class UsersControllerAPI extends Controller
{
    public function index(){
        $users = User::all();
        return response()->json($users);
    }

    public function show($id){
        $users = User::find($id);
        if(!$users) {
            return response()->json([
                'message'   => 'Funcionario não encontrado',
            ], 404);
        }
        return response()->json($users);
    }
    
    public function store(StoreUpdateUserRequest $request){
        $user = new User();
        $user->fill($request->all());
        $user->save();
        return response()->json($user, 201);
    }

    public function update(StoreUpdateUserRequest $request, $id){
        $user = User::find($id);
        if(!$user) {
            return response()->json([
                'message'   => 'Funcionario não encontrado',
            ], 404);
        }
        $user->fill($request->all());
        $user->save();
        return response()->json($user);
    }

    public function delete($id){
        $user = User::find($id);
        if(!$user) {
            return response()->json([
                'message'   => 'Funcionario não encontrado',
            ], 404);
        }
        $user->delete();
        return response()->json([
            'message'   => 'Funcionario deletado com sucesso',
        ], 200);
    }

}
