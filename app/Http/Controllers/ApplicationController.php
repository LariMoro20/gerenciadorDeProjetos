<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ApplicationController extends Controller
{
    public function index(){
        
        return view('admin.includes.header',['title' => 'Bem vindo!']).view('admin.landpage').view('admin.includes.footer');
    }
}
