<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Request;
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
    public function novo(){
        return view('produto/formulario');
    }
    public function Adiciona(){
        $nome = Request::Input('nome');
        $descricao = Request::Input('descricao');
        $preco = Request::Input('preco');
        $tamanho = Request::Input('tamanho');
        $concluida = true;

        DB::insert('insert into estoque_laravel
        (nome, descricao, preco, tamanho, concluida) values (?, ?, ?, ?, ?)',
        array($nome, $descricao, $preco, $tamanho, $concluida));
    

        return view('produto/adicionado');
    }
}
