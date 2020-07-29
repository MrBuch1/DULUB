<?php

use Illuminate\Database\Seeder;

class VendedorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('vendedores')->insert([
            'nome' => 'Adilson',
            'coordenador' => 'Fulano',
            'uf' => 'BA',
            'email' => 'adilson@dulub.com',
            'password' => '123',
        ]);
    }
}
