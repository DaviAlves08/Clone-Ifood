<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Estabelecimentos;
use IIlluminate\Support\Facedes\DB;


class EstabelecimentosController extends Controller
{
    public function estabelecimentos(){

        $ifood = Estabelecimentos::all();

        return view('lojas.estabelecimentos')->with('lojas',$ifood);
    }


    public function show(Estabelecimentos $loja)
{
    return view('lojas.show')->with('loja', $loja);

}


}