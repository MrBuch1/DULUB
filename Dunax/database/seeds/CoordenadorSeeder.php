<?php

use Illuminate\Database\Seeder;

class CoordenadorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('coordenadores')->insert([
            'nome' => '',
            'uf' => '',
        ]);
    }
}
