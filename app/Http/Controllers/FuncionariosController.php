<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FuncionariosController extends Controller
{
    public function index (){
        return view('index');
    }

    public function telacadastro (){
        return view('telacadastro');
    }

    public function telalogin (){
        return view('telalogin');
    }
}