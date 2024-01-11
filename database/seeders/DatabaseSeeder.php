<?php

namespace Database\Seeders;
use Illuminate\Database\Eloquent\Model;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();
        Model::unguard( );
        $this->call(ProdutoTableSeeder::class);
        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
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

        
    }
}
