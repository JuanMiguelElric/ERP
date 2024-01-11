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

        

        return view('listagem', ['produtos' => $produtos]);
    }

    public function Funcionarios()
    {
        if(DB::connection()->getPdo())
        {
            echo "Successfully connected to the database => ".DB::connection()->getDatabaseName();
        }
        else{
            echo "error";
        }

    }
}
