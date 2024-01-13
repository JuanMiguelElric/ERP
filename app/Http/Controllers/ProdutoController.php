<?php

namespace App\Http\Controllers;

use App\Models\Produto;
use App\Http\Controllers\Controller;
use Request;
use Illuminate\Support\Facades\DB;

class ProdutoController extends Controller
{
    public function lista()
    {
      

        //$produtos = DB::select("select * from estoque_laravel");
        $produtos = Produto::all();     
        return view('produto/listagem')->with('produtos', $produtos);

    }

    public function mostrar($id) {
        $resposta = DB::table('estoque_laravel')->where('id', $id)->first();
    
        if (empty($resposta)) {
            return "Esse produto não existe";
        }
    
        return view('produto.detalhes')->with('p', $resposta);
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
    public function Home(){
        echo 'pagina inicial';
    }
    public function listaJson(){
        //$produtos = DB::select('select * from estoque_laravel');
        $produtos = Produto::all();
        return response()->json($produtos);
    }
    public function Remover($id)
{
    $produto = Produto::find($id);

        if (!$produto) {
            return view('produto/remove');
        }

        $produto->delete();

        return view('produto/formulario');
    }
    
}
