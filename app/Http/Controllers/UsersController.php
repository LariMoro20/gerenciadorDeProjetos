<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
class UsersController extends Controller
{
    public function index(){
        $users=User::get();
        return view('admin.usuarios.usuarios', [
            'users' => $users,
        ]);
    }
    public function create(){
        $users=User::get();
        return view('admin.usuarios.create', [
            'users' => $users,
        ]);
    }

    public function store(Request $request ){
        User::create($request->all());
        return redirect()->route('users.listagem');

    }
}
