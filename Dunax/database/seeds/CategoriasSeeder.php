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

        DB::table('categorias')->insert([
            'nome' => 'Engrenagens'
        ]);

        db::table('categorias')->insert([
            'nome' => 'Graxas'
        ]);

        db::table('categorias')->insert([
            'nome' => 'Arla 32'
        ]);

        db::table('categorias')->insert([
            'nome' => 'Equipamentos'
        ]);

        db::table('categorias')->insert([
            'nome' => 'Hidraulicos'
        ]);

        db::table('categorias')->insert([
            'nome' => 'Refrigeracao'
        ]);

        db::table('categorias')->insert([
            'nome' => 'Compressores'
        ]);

        db::table('categorias')->insert([
            'nome' => 'Engrenagens Industriais'
        ]);

        db::table('categorias')->insert([
            'nome' => 'Termicos'
        ]);

        db::table('categorias')->insert([
            'nome' => 'Desmoldantes'
        ]);

        db::table('categorias')->insert([
            'nome' => 'Textil'
        ]);

        db::table('categorias')->insert([
            'nome' => 'Transformadores'
        ]);

        db::table('categorias')->insert([
            'nome' => 'Supreme'
        ]);
    }
}
