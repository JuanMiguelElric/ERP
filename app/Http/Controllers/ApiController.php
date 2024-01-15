<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class ApiController extends Controller
{
    public function __invoke()
    {
        try{
            $response = Http::get('http://servicodados.ibge.gov.br/api/v3/noticias/');

            if($response->successful()){
                return $response->json();
            } else{
                return response()->json(['error'=>'Error ao obter dados do site IBGE']);
            }
        } catch(\Exception $e){
            return response()->json(['error'=>'Erro na solicitação'],500);
        }
        
    }
}
