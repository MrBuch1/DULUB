<?php

use Illuminate\Database\Seeder;

class NoticiasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        date_default_timezone_set('America/Sao_Paulo');

        DB::table('noticias')->insert([
            'titulo' => 'Dulub investe na fabricação de Graxas',
            'conteudo' => 'A Dulub insveste pesado no segmento de Graxas, com investimento superior a 1,1 milhões de reais em 2015 numa moderna planta industrial, 
            dedicada exclusivamente a produção deste produto.

            A empresa dispõe agora de quatro reatores térmicos que produzem simultaneamente 15 toneladas de Graxas de Sabão de Cálcio por ciclo de produção. 
            A Dulub disponibilizará, já em Março de 2016, 108 Ton/Mês de Graxa de Cálcio CA-2 ao mercado nacional.',
            'imagem' => 'images/Noticias/dunax-graxa-01.jpg',
            'created_at' => date("Y-m-d H:i:s"),
        ]);
    }
}
