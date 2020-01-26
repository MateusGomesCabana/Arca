<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        //Inserir as categorias
        DB::table('categorias')->insert([
            'categoria' =>  'Auto'
        ]);
        DB::table('categorias')->insert([
            'categoria' =>  'Beauty and Fitness '
        ]);
        DB::table('categorias')->insert([
            'categoria' =>  'Entertainment'
        ]);
        DB::table('categorias')->insert([
            'categoria' =>  'Food and Dining '
        ]);
        DB::table('categorias')->insert([
            'categoria' =>  'Health'
        ]);
        DB::table('categorias')->insert([
            'categoria' =>  'Sports'
        ]);
        DB::table('categorias')->insert([
            'categoria' =>  'Travel'
        ]);
        //Inserir Empresas
        DB::table('empresas')->insert([
            'name' =>  'Auto',
            'description' => 'Empresa teste Auto'
        ]);
        DB::table('empresas')->insert([
            'name' =>  'Empresa Fitness Teste',
            'description' => 'Empresa Fitness Teste'
        ]);
        DB::table('empresas')->insert([
            'name' =>  'Empresa Entertainment',
            'description' => 'Empresa Entertainment teste'
        ]);
        DB::table('empresas')->insert([
            'name' =>  'Empresa Food',
            'description' => 'Empresa Food Teste'
        ]);
        DB::table('empresas')->insert([
            'name' =>  'Empresa Dining',
            'description' => 'Empresa Dining Teste'
        ]);
        DB::table('empresas')->insert([
            'name' =>  'Empresa Health',
            'description' => 'Empresa Health Teste'
        ]);
        DB::table('empresas')->insert([
            'name' =>  'Empresa Sports',
            'description' => 'Empresa Sports Teste'
        ]);
        DB::table('empresas')->insert([
            'name' =>  'Empresa Travel',
            'description' => 'Empresa Travel Teste'
        ]);
        DB::table('empresas')->insert([
            'name' =>  'Empresa Beauty',
            'description' => 'Empresa Beauty Teste'
        ]);
        DB::table('empresas')->insert([
            'name' =>  'Empresa Teste 10',
            'description' => 'Empresa Teste 10 de 10'
        ]);
        //empresa_categorias
        DB::table('empresa_categorias')->insert([
            'empresa_id' =>  '1',
            'categoria_id' => '1'
        ]);
        DB::table('empresa_categorias')->insert([
            'empresa_id' =>  '2',
            'categoria_id' => '2'
        ]);
        DB::table('empresa_categorias')->insert([
            'empresa_id' =>  '3',
            'categoria_id' => '3'
        ]);
        DB::table('empresa_categorias')->insert([
            'empresa_id' =>  '4',
            'categoria_id' => '4'
        ]);
        DB::table('empresa_categorias')->insert([
            'empresa_id' =>  '5',
            'categoria_id' => '4'
        ]);
        DB::table('empresa_categorias')->insert([
            'empresa_id' =>  '6',
            'categoria_id' => '5'
        ]);
        DB::table('empresa_categorias')->insert([
            'empresa_id' =>  '7',
            'categoria_id' => '6'
        ]);
        DB::table('empresa_categorias')->insert([
            'empresa_id' =>  '8',
            'categoria_id' => '7'
        ]);
        DB::table('empresa_categorias')->insert([
            'empresa_id' =>  '9',
            'categoria_id' => '2'
        ]);
        DB::table('empresa_categorias')->insert([
            'empresa_id' =>  '10',
            'categoria_id' => '1'
        ]);
        DB::table('empresa_categorias')->insert([
            'empresa_id' =>  '10',
            'categoria_id' => '3'
        ]);
        // enderecos
        DB::table('enderecos')->insert([
            'endereco' =>  'Rua Empresa AUTO',
            'cidade' => 'Bauru',
            'estado' => 'São Paulo',
            'cep' => '11111111',
            'empresa_id' => '1'
        ]);
        DB::table('enderecos')->insert([
            'endereco' =>  'Rua Empresa 2',
            'cidade' => 'Bauru',
            'estado' => 'São Paulo',
            'cep' => '222222',
            'empresa_id' => '2'
        ]);
        DB::table('enderecos')->insert([
            'endereco' =>  'Rua Empresa 3',
            'cidade' => 'Bauru',
            'estado' => 'São Paulo',
            'cep' => '333333',
            'empresa_id' => '3'
        ]);
        DB::table('enderecos')->insert([
            'endereco' =>  'Rua Empresa 4',
            'cidade' => 'Bauru',
            'estado' => 'São Paulo',
            'cep' => '4444444',
            'empresa_id' => '4'
        ]);
        DB::table('enderecos')->insert([
            'endereco' =>  'Rua Empresa 5',
            'cidade' => 'Bauru',
            'estado' => 'São Paulo',
            'cep' => '5555555',
            'empresa_id' => '5'
        ]);
        DB::table('enderecos')->insert([
            'endereco' =>  'Rua Empresa 6',
            'cidade' => 'Bauru',
            'estado' => 'São Paulo',
            'cep' => '6666666',
            'empresa_id' => '6'
        ]);
        DB::table('enderecos')->insert([
            'endereco' =>  'Rua Empresa 7',
            'cidade' => 'Bauru',
            'estado' => 'São Paulo',
            'cep' => '77777777',
            'empresa_id' => '7'
        ]);
        DB::table('enderecos')->insert([
            'endereco' =>  'Rua Empresa 8',
            'cidade' => 'Bauru',
            'estado' => 'São Paulo',
            'cep' => '88888888',
            'empresa_id' => '8'
        ]);
        DB::table('enderecos')->insert([
            'endereco' =>  'Rua Empresa 9',
            'cidade' => 'Bauru',
            'estado' => 'São Paulo',
            'cep' => '99999999',
            'empresa_id' => '9'
        ]);
        DB::table('enderecos')->insert([
            'endereco' =>  'Rua Empresa 10',
            'cidade' => 'Bauru',
            'estado' => 'São Paulo',
            'cep' => '99999999',
            'empresa_id' => '10'
        ]);
        // $this->call(UsersTableSeeder::class);
    }
}
