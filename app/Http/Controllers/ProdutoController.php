<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProdutoController extends Controller
{
    public function lista()
    {
      

        $produtos = DB::select("select * from estoque_laravel");

        
        return view('produto/listagem')->with('produtos', $produtos);

    }

    public function mostrar(){
        $id = 1;
        $resposta = DB::select('select * from estoque_laravel where id= ?',[$id]);
        if(empty($resposta)){
            return "Esse produto não existe";
        }
        return view('produto/detalhes')->with('p',$resposta[0]);
    }
    public function Adicionar(){
        return view('produto/formulario');
    }
}
