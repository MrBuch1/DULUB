<?php

use Illuminate\Database\Seeder;

class CategoriasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categorias')->insert([
            'nome' => 'Ciclo Otto'
        ]);

        DB::table('categorias')->insert([
            'nome' => 'Ciclo Diesel'
        ]);

        DB::table('categorias')->insert([
            'nome' => 'Motocicletas'
        ]);

        DB::table('categorias')->insert([
            'nome' => 'Transmissao'
        ]);

        db::table('categorias')->insert([
            'nome' => 'Hidraulicos'
        ]);
    }
}
