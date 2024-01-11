<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;



class ProdutoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('estoque_laravel')->insert([
            'nome' => 'Exemplo de Produto',
            'descricao' => 'Descrição do produto de exemplo',
            'preco' => 100.00,
            'tamanho' => 'M',
            'concluida' => true,
        ]);
        DB::table('estoque_laravel')->insert([
            'nome' => 'AirFryer',
            'descricao' => 'Descrição do produto de exemplo',
            'preco' => 600.00,
            'tamanho' => 'M',
            'concluida' => true,
        ]);
        DB::table('estoque_laravel')->insert([
            'nome' => 'Panela de Pressão',
            'descricao' => 'Descrição do produto de exemplo',
            'preco' => 50.00,
            'tamanho' => 'M',
            'concluida' => true,
        ]);

        
    }
}
