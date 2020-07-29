<?php

use Illuminate\Database\Seeder;

class ProdutosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        //CICLO OTTO
        ##########################################################################################
        DB::table('produtos')->insert([
            'nome' => 'FLUIDTECH 5W30 SN',
            'uso' => '• GASOLINA, ETANOL, FLEX E GNV',
            'descricao' => 'Lubrificante  100% sintético  de última geração para 
            motores  a gasolina, etanol, flex e GNV.  É 
            recomendado para uso em todos os motores de 
            alta performance. Seu pacote de aditivos garante
            maior limpeza dos pistões, redução de formação 
            de borra  e conservação do sistema  catalítico dos 
            automóveis. Atende as especificações  API SN / 
            ILSAC GF-5. Grau SAE 5W30.',            
            'comp_quimica' => 'Composição química: básico do grupo III, 
            anticorrosivo,  antidesgaste,  antiespumante, 
            antioxidante, detergente, dispersante,  agente de 
            reserva alcalina,  melhorador  de índice de 
            viscosidade e abaixador de ponto de fluidez.',
            //'valor' => 999.99,
            'imagem' => 'images/Produtos/img-fluidtech-5w30-1.png',
            'categoria_id' => 1,
            'ficha' => "Fichas tecnicas Dulub atualizadas/fichas tecnicas e fispq's ciclo otto/DULUB FLUIDTECH 5W30 SN rev 19.pdf",
            'fispq' => "Fichas tecnicas Dulub atualizadas/fichas tecnicas e fispq's ciclo otto/FISPQ Dulub Fluidtech 5W30 SN rev 19.pdf"   
        ]);

        DB::table('produtos')->insert([
            'nome' => 'FLUIDTECH 5W40 SN',
            'uso' => '• GASOLINA, ETANOL, FLEX E GNV',
            'descricao' => 'Lubrificante 100% sintético de última geração para 
            motores a gasolina, etanol, flex e GNV. É 
            recomendado para uso em todos os motores de 
            alta performance. Seu pacote de aditivos garante 
            maior limpeza dos pistões, redução de formação 
            de borra e conservação do sistema catalítico dos 
            automóveis. Atende as especificações API SN / 
            ILSAC GF-5. Grau SAE 5W40.',            
            'comp_quimica' => 'Composição química: básico do grupo III, 
            anticorrosivo, antidesgaste, antiespumante, 
            antioxidante, detergente, dispersante, agente de 
            reserva alcalina, melhorador  de índice de 
            viscosidade e abaixador de ponto de fluidez.',
            //'valor' => 999.99,
            'imagem' => 'images/Produtos/img-fluidtech-5w40-1.png',
            'categoria_id' => 1,
            'ficha' => "Fichas tecnicas Dulub atualizadas/fichas tecnicas e fispq's ciclo otto/DULUB FLUIDTECH 5W40 SN rev 19.pdf",
            'fispq' => "Fichas tecnicas Dulub atualizadas/fichas tecnicas e fispq's ciclo otto/FISPQ Dulub Fluidtech 5W40 SN rev 19.pdf"
        ]);

        DB::table('produtos')->insert([
            'nome' => 'FLUIDTECH 10W30 SN',
            'uso' => '• GASOLINA, ETANOL, FLEX E GNV',
            'descricao' => 'Lubrificante 100% sintético de última geração para 
            motores a gasolina, etanol, flex e GNV. É 
            recomendado para uso em todos os motores de 
            alta performance. Seu pacote de aditivos garante 
            maior limpeza dos pistões, redução de formação 
            de borra e conservação do sistema catalítico dos 
            automóveis. Atende as especificações API SN / 
            ILSAC GF-5. Grau SAE 10W30.',            
            'comp_quimica' => 'Composição química: básico do grupo III, 
            anticorrosivo, antidesgaste, antiespumante, 
            antioxidante, detergente, dispersante, agente de 
            reserva alcalina, melhorador de índice de 
            viscosidade e abaixador de ponto de fluidez.',
            //'valor' => 999.99,
            'imagem' => 'images/Produtos/img-fluidtech-10w30-1.png',
            'categoria_id' => 1,
            'ficha' => "Fichas tecnicas Dulub atualizadas/fichas tecnicas e fispq's ciclo otto/DULUB FLUIDTECH 10W30 SN rev 19.pdf",
            'fispq' => "Fichas tecnicas Dulub atualizadas/fichas tecnicas e fispq's ciclo otto/FISPQ Dulub Fluidtech 10W30 SN rev 19.pdf"
        ]);

        DB::table('produtos')->insert([
            'nome' => 'FLUIDTECH 10W40 SN',
            'uso' => '• GASOLINA, ETANOL, FLEX E GNV',
            'descricao' => 'Lubrificante 100% sintético de última geração para 
            motores a gasolina, etanol, flex e GNV. É 
            recomendado para uso em todos os motores de 
            alta performance. Seu pacote de aditivos garante 
            maior limpeza dos pistões, redução de formação 
            de borra e conservação do sistema catalítico dos 
            automóveis. Atende especificação API SN. Grau 
            SAE 10W40.',            
            'comp_quimica' => 'Composição química: básico do grupo III, 
            anticorrosivo, antidesgaste, antiespumante, 
            antioxidante, detergente, dispersante, agente de 
            reserva alcalina, melhorador de índice de 
            viscosidade e abaixador de ponto de fluidez.',
            //'valor' => 999.99,
            'imagem' => 'images/Produtos/img-fluidtech-10w40-1.png',
            'categoria_id' => 1,
            'ficha' => "Fichas tecnicas Dulub atualizadas/fichas tecnicas e fispq's ciclo otto/DULUB FLUIDTECH 10W40 SN rev 19.pdf",
            'fispq' => "Fichas tecnicas Dulub atualizadas/fichas tecnicas e fispq's ciclo otto/FISPQ Dulub Fluidtech 10W40 SN rev 19.pdf"
        ]);

        DB::table('produtos')->insert([
            'nome' => 'PROBASIC 5W30 SN',
            'uso' => '• GASOLINA, ETANOL, FLEX E GNV',
            'descricao' => 'Lubrificante semissintético para motores a 
            gasolina, etanol, flex e GNV. É recomendado para 
            uso em motores de alta performance dotados de 
            injeção eletrônica, multiválvulas de turbo 
            alimentados. Proporciona menor consumo de 
            lubrificante e economia de combustível. Atende as 
            especificações API SN / ILSAC GF-5. Grau SAE 
            5W30.',            
            'comp_quimica' => 'Composição química: óleo mineral  e  básicos  do 
            grupo III e aditivos anticorrosivo, antidesgaste,
            antiespumante, antioxidante, detergente, 
            dispersante, agente de reserva alcalina,
            melhorador de índice de viscosidade e abaixador
            de ponto de fluidez.',
            //'valor' => 999.99,
            'imagem' => 'images/Produtos/img-probasic-5w30.png',
            'categoria_id' => 1,
            'ficha' => "Fichas tecnicas Dulub atualizadas/fichas tecnicas e fispq's ciclo otto/DULUB PROBASIC 5W30 SN rev 19.pdf",
            'fispq' => "Fichas tecnicas Dulub atualizadas/fichas tecnicas e fispq's ciclo otto/FISPQ Dulub Probasic 5W30 SN rev 19.pdf"
        ]);

        DB::table('produtos')->insert([
            'nome' => 'PROBASIC 10W30 SN',
            'uso' => '• GASOLINA, ETANOL, FLEX E GNV',
            'descricao' => 'Lubrificante semissintético para motores a 
            gasolina, etanol, flex e GNV. É recomendado para 
            uso em motores de alta performance dotados de 
            injeção eletrônica, multiválvulas de turbo 
            alimentados. Proporciona menor consumo de 
            lubrificante e economia de combustível. Atende as 
            especificações API SN / ILSAC GF-5. Grau SAE 
            10W30.',            
            'comp_quimica' => 'Composição química: óleo mineral  e  básicos  do 
            grupo III e aditivos  anticorrosivo, antidesgaste,
            antiespumante, antioxidante, detergente, 
            dispersante, agente de reserva alcalina,
            melhorador de índice de viscosidade e abaixador
            de ponto de fluidez.',
            //'valor' => 999.99,
            'imagem' => 'images/Produtos/img-probasic-10w30-1.png',
            'categoria_id' => 1,
            'ficha' => "Fichas tecnicas Dulub atualizadas/fichas tecnicas e fispq's ciclo otto/DULUB PROBASIC 10W30 SN rev 19.pdf",
            'fispq' => "Fichas tecnicas Dulub atualizadas/fichas tecnicas e fispq's ciclo otto/FISPQ Dulub Probasic 10W30 SN rev 19.pdf"
        ]);

        DB::table('produtos')->insert([
            'nome' => 'PROBASIC 10W40 SN',
            'uso' => '• GASOLINA, ETANOL, FLEX E GNV',
            'descricao' => 'Lubrificante semissintético para motores a 
            gasolina, etanol, flex e GNV. É recomendado para 
            uso em motores de alta performance dotados de 
            injeção eletrônica, multiválvulas de turbo 
            alimentados. Proporciona menor consumo de 
            lubrificante e economia de combustível. Atende 
            especificação API SN. Grau SAE 10W40.',            
            'comp_quimica' => 'Composição química: óleo mineral  e  básicos  do 
            grupo III e aditivos anticorrosivo, antidesgaste,
            antiespumante, antioxidante, detergente, 
            dispersante, agente de reserva alcalina,
            melhorador de índice de viscosidade e abaixador
            de ponto de fluidez.',
            //'valor' => 999.99,
            'imagem' => 'images/Produtos/img-probasic-10w40-1.png',
            'categoria_id' => 1,
            'ficha' => "Fichas eécnicas Dulub atualizadas/fichas tecnicas e fispq's ciclo otto/DULUB PROBASIC 10W40 SN rev 19.pdf",
            'fispq' => "Fichas tecnicas Dulub atualizadas/fichas tecnicas e fispq's ciclo otto/FISPQ Dulub Probasic 10W40 SN rev 19.pdf"  
        ]);

        DB::table('produtos')->insert([
            'nome' => 'PROBASIC 15W40 SN',
            'uso' => '• GASOLINA, ETANOL, FLEX E GNV',
            'descricao' => 'Lubrificante semissintético para motores a 
            gasolina, etanol, flex e GNV. É recomendado para 
            uso em motores de alta performance dotados de 
            injeção eletrônica, multiválvulas de turbo 
            alimentados. Proporciona menor consumo de 
            lubrificante e economia de combustível. Atende 
            especificação API SN. Grau SAE 15W40.',            
            'comp_quimica' => 'Composição química: óleo mineral e básicos  do 
            grupo III e aditivos anticorrosivo, antidesgaste,
            antiespumante, antioxidante, detergente, 
            dispersante, agente de reserva alcalina,
            melhorador de índice de viscosidade e abaixador
            de ponto de fluidez.',
            //'valor' => 999.99,
            'imagem' => 'images/Produtos/img-probasic-15w40-1.png',
            'categoria_id' => 1,
            'ficha' => "Fichas tecnicas Dulub atualizadas/fichas tecnicas e fispq's ciclo otto/DULUB PROBASIC 15W40 SN rev 19.pdf",
            'fispq' => "Fichas tecnicas Dulub atualizadas/fichas tecnicas e fispq's ciclo otto/FISPQ Dulub Probasic 15W40 SN rev 19.pdf"
        ]);

        DB::table('produtos')->insert([
            'nome' => 'UNITECH SAE 30 SL',
            'uso' => '• GASOLINA, ETANOL E GNV',
            'descricao' => 'Óleo lubrificante mineral monoviscoso de última
            geração para  motores a gasolina, etanol  e
            automóveis adaptados para uso de GNV.  O  Dulub 
            Unitech atende ao nível de desempenho API SL 
            e é compatível com todos os lubrificantes com esta
            especificação disponíveis no mercado. Possui 
            Grau SAE 30.',            
            'comp_quimica' => 'Composição Química: óleo mineral e aditivos 
            anticorrosivo, antidesgaste, antiespumante, 
            antioxidante e agente de reserva alcalina.',
            //'valor' => 999.99,
            'imagem' => 'images/Produtos/UNITECH_SAE30.jpg',
            'categoria_id' => 1,
            'ficha' => "Fichas tecnicas Dulub atualizadas/fichas tecnicas e fispq's ciclo otto/gasolina ciclo otto/DULUB UNITECH SAE 30 rev 19.pdf",
            'fispq' => "Fichas tecnicas Dulub atualizadas/fichas tecnicas e fispq's ciclo otto/gasolina ciclo otto/FISPQ Dulub Unitech SAE 30.pdf" 
        ]);

        DB::table('produtos')->insert([
            'nome' => 'UNITECH SAE 40 SL',
            'uso' => '• GASOLINA, ETANOL E GNV',
            'descricao' => 'Óleo lubrificante mineral monoviscoso de última
            geração para motores a gasolina, etanol  e
            automóveis adaptados para uso de GNV.  O  Dulub 
            Unitech atende ao nível de desempenho API SL 
            e é compatível com todos os lubrificantes com esta
            especificação disponíveis no mercado. Possui 
            Grau SAE 40.',            
            'comp_quimica' => 'Composição Química: óleo mineral e aditivos 
            anticorrosivo, antidesgaste, antiespumante, 
            antioxidante e agente de reserva alcalina.',
            //'valor' => 999.99,
            'imagem' => 'images/Produtos/UNITECH_SAE40.jpg',
            'categoria_id' => 1,
            'ficha' => "Fichas tecnicas Dulub atualizadas/fichas tecnicas e fispq's ciclo otto/gasolina ciclo otto/DULUB UNITECH SAE 40 rev 19.pdf",
            'fispq' => "Fichas tecnicas Dulub atualizadas/fichas tecnicas e fispq's ciclo otto/gasolina ciclo otto/FISPQ Dulub Unitech SAE 40.pdf" 
        ]);

        DB::table('produtos')->insert([
            'nome' => 'UNITECH SAE 50 SL',
            'uso' => '• GASOLINA, ETANOL E GNV',
            'descricao' => 'Óleo lubrificante mineral monoviscoso de última
            geração para  motores a gasolina, etanol  e
            automóveis adaptados para uso de GNV.  O  Dulub 
            Unitech atende ao nível de desempenho API SL 
            e é compatível com todos os lubrificantes com esta
            especificação disponíveis no mercado. Possui 
            Grau SAE 50.',            
            'comp_quimica' => 'Composição Química: óleo mineral e aditivos 
            anticorrosivo, antidesgaste, antiespumante, 
            antioxidante e agente de reserva alcalina.',
            //'valor' => 999.99,
            'imagem' => 'images/Produtos/UNITECH_SAE50.jpg',
            'categoria_id' => 1,
            'ficha' => "Fichas tecnicas Dulub atualizadas/fichas tecnicas e fispq's ciclo otto/gasolina ciclo otto/DULUB UNITECH SAE 50 rev 19.pdf",
            'fispq' => "Fichas tecnicas Dulub atualizadas/fichas tecnicas e fispq's ciclo otto/gasolina ciclo otto/FISPQ Dulub Unitech SAE 50.pdf" 
        ]);

        DB::table('produtos')->insert([
            'nome' => 'SUPREME 15W40 SL',
            'uso' => '• GASOLINA, ETANOL E GNV',
            'descricao' => 'Óleo lubrificante mineral multiviscoso de 
            desempenho superior para uso em modernos 
            motores a gasolina, etanol, flex e GNV. Atende  ao 
            nível de desempenho API SL. Pode ser usado em 
            substituição aos óleos com nível API SF, SG, SH e 
            SJ. Grau SAE 15W40.',            
            'comp_quimica' => 'Composição Química: óleo mineral e aditivos 
            anticorrosivo, antidesgaste, antiespumante, 
            antioxidante, detergente, dispersante, agente de 
            reserva alcalina e melhorador de fluidez.',
            //'valor' => 999.99,
            'imagem' => 'images/Produtos/img-supreme-15w40-3.png',
            'categoria_id' => 17,
            'ficha' => "Fichas tecnicas Dulub atualizadas/fichas tecnicas e fispq's ciclo otto/DULUB SUPREME 15W40 SN rev 19.pdf",
            'fispq' => "Fichas tecnicas Dulub atualizadas/fichas tecnicas e fispq's ciclo otto/FISPQ Dulub Supreme 15W40 SN rev 19.pdf" 
        ]);

        DB::table('produtos')->insert([
            'nome' => 'SUPREME 20W50 SL',
            'uso' => '• GASOLINA, ETANOL E GNV',
            'descricao' => 'Óleo lubrificante mineral multiviscoso de última 
            geração utilizado em modernos motores  de
            automóveis atuais. Garante uma perfeita 
            lubrificação do motor, tanto nas partidas a  frio 
            quanto nas temperaturas de funcionamento do 
            veículo. O Dulub Supreme atende ao nível de 
            desempenho API SL e é indicado para todos os 
            motores a gasolina, etanol ou GNV de todas as 
            marcas e potências. Possui Grau SAE 20w50.',            
            'comp_quimica' => 'Composição Química: óleo mineral e aditivos 
            anticorrosivo, antidesgaste, antiespumante, 
            antioxidante, detergente, dispersante, agente de 
            reserva alcalina e melhorador de fluidez.',
            //'valor' => 999.99,
            'imagem' => 'images/Produtos/img-supreme-20w50-1.png',
            'categoria_id' => 17,
            'ficha' => "Fichas tecnicas Dulub atualizadas/fichas tecnicas e fispq's ciclo otto/DULUB SUPREME 20W50 SN rev 19.pdf",
            'fispq' => "Fichas tecnicas Dulub atualizadas/fichas tecnicas e fispq's ciclo otto/FISPQ Dulub Supreme 20W50 SN rev 19.pdf"  
        ]);
        ##########################################################################################
        ##########################################################################################

        //CICLO DIESEL
        ##########################################################################################
        DB::table('produtos')->insert([
            'nome' => 'MAX 2 TURBO 15W40 CH-4',
            'uso' => '• MOTOR DIESEL',
            'descricao' => 'Óleo lubrificante de base mineral multiviscoso
            para motores diesel turbo alimentados de todas as 
            marcas e potência que requeiram do lubrificante 
            especificação API CH-4. Max 2 Turbo CH-4 
            proporciona menor desgaste das partes móveis do 
            motor. Possui Grau SAE 15W40. Atende  a 
            especificação API CH-4.',            
            'comp_quimica' => 'Composição Química: óleo mineral e aditivos
            anticorrosivo, antiatrito, antidesgaste,
            antiespumante, antioxidante, detergente, 
            dispersante, melhorador de índice de viscosidade e 
            abaixador de ponto de fluidez.',
            //'valor' => 999.99,
            'imagem' => 'images/Produtos/img-max2turbo-15w40.png',
            'categoria_id' => 2,
            'ficha' => "Fichas tecnicas Dulub atualizadas/fichas tecnicas e fispq's ciclo diesel/DULUB MAX 2 15W40 CH4 rev 19.pdf",
            'fispq' => "Fichas tecnicas Dulub atualizadas/fichas tecnicas e fispq's ciclo diesel/FISPQ Dulub Max2 Turbo 15W40 CH-4 rev 19.pdf"
        ]);

        DB::table('produtos')->insert([
            'nome' => 'MAX 3 TURBO 10W40 CI-4',
            'uso' => '• MOTOR DIESEL',
            'descricao' => 'Lubrificante semissintético multiviscoso para 
            motores diesel turbinados que operem em 
            condições extremas de severidade. Desenvolvido 
            para atender totalmente as exigências dos 
            modernos motores. Possui Grau SAE 10W40 e 
            atende as especificações API CI-4, ACEA E7-12, 
            ACEA A3/B3/B4-12, MB 229.1, MB 228.3, VOLVO 
            VDS-3 e MAN3275-1.',            
            'comp_quimica' => 'Composição química: óleo mineral, base sintética
            do grupo III e aditivos anticorrosivo, antiatrito, 
            antidesgaste, antiespumante, antioxidante, 
            detergente, dispersante, melhorador de índice de 
            viscosidade e abaixador de ponto de fluidez.',
            //'valor' => 999.99,
            'imagem' => 'images/Produtos/img-max3turbo-10w40-1.png',
            'categoria_id' => 2,
            'ficha' => "Fichas tecnicas Dulub atualizadas/fichas tecnicas e fispq's ciclo diesel/DULUB MAX 3 10W40 CI-4 rev 19.pdf",
            'fispq' => "Fichas tecnicas Dulub atualizadas/fichas tecnicas e fispq's ciclo diesel/FISPQ Dulub Max3 Turbo 10W40 CI-4 rev 19.pdf"
        ]);

        DB::table('produtos')->insert([
            'nome' => 'MAX 3 TURBO 15W40 CI-4',
            'uso' => '• MOTOR DIESEL',
            'descricao' => 'Lubrificante mineral multiviscoso para motores 
            diesel turbinados que operam em condições 
            extremas de severidade. Desenvolvido para 
            atender as totais exigências dos modernos 
            motores, Possui Grau SAE 15W40. Atende as 
            especificações API CI-4, ACEA E7-12, MB 229.1, 
            MB 228.3, VOLVO VDS-3 e MAN3275-1.',            
            'comp_quimica' => 'Composição química: óleo mineral e aditivos
            anticorrosivo, antiatrito, antidesgaste,
            antiespumante, antioxidante, detergente, 
            dispersante, melhorador de índice de viscosidade e 
            abaixador de ponto de fluidez.',
            //'valor' => 999.99,
            'imagem' => 'images/Produtos/img-max3turbo-15w40-1.png',
            'categoria_id' => 2,
            'ficha' => "Fichas tecnicas Dulub atualizadas/fichas tecnicas e fispq's ciclo diesel/DULUB MAX 3 15W40 CI-4 rev 19.pdf",
            'fispq' => "Fichas tecnicas Dulub atualizadas/fichas tecnicas e fispq's ciclo diesel/FISPQ Dulub Max3 Turbo 15W40 CI-4 rev 19.pdf"
        ]);

        DB::table('produtos')->insert([
            'nome' => 'MAX 4 TURBO 15W40 CJ-4',
            'uso' => '• MOTOR DIESEL',
            'descricao' => 'Óleo lubrificante mineral de última geração para 
            motores diesel turbinados de alta performance e de 
            baixa emissões atmosféricas, Possui Grau SAE 
            15W40. Atende as especificações API CJ-4 ACEA 
            E9-12, MB 228.31, MAN M3575, Cummins CES 
            20081, Caterpillar ECF-3, Volvo VDS-4.',            
            'comp_quimica' => 'Composição química: óleo mineral selecionado 
            do grupo II e aditivos anticorrosivo, antiatrito, 
            antidesgaste, antiespumante, antioxidante, 
            detergente, dispersante, melhorador de índice de 
            viscosidade e abaixador de ponto de fluidez.',
            //'valor' => 999.99,
            'imagem' => 'images/Produtos/img-max4turbo-15w40-1.png',
            'categoria_id' => 2,
            'ficha' => "Fichas tecnicas Dulub atualizadas/fichas tecnicas e fispq's ciclo diesel/DULUB MAX 4 15W40 CJ-4 rev 19.pdf",
            'fispq' => "Fichas tecnicas Dulub atualizadas/fichas tecnicas e fispq's ciclo diesel/FISPQ Dulub Max4 Turbo 15W40 CJ-4 rev 19.pdf"
        ]);

        DB::table('produtos')->insert([
            'nome' => 'STOP DIESEL SAE 30 CF',
            'uso' => '• MOTOR DIESEL',
            'descricao' => 'Óleo lubrificante mineral monoviscoso composto 
            por lubrificantes básicos e aditivos para uso em 
            motores estacionários, ferroviários e marítimos. 
            Recomendado para motores ciclo diesel atendendo 
            as especificações API CF e SAE 30.',            
            'comp_quimica' => 'Composição química: óleo mineral e aditivos
            anticorrosivo, antidesgaste, antioxidante, 
            antiespumante e agente de reserva alcalina.',
            //'valor' => 999.99,
            'imagem' => 'images/Produtos/STOP-DIESEL-30.jpg',
            'categoria_id' => 2,
            'ficha' => "Fichas tecnicas Dulub atualizadas/fichas tecnicas e fispq's ciclo diesel/DULUB STOP DIESEL SAE 30 rev 19.pdf",
            'fispq' => "Fichas tecnicas Dulub atualizadas/fichas tecnicas e fispq's ciclo diesel/FISPQ Dulub Stop Diesel SAE 30.pdf"
        ]);

        DB::table('produtos')->insert([
            'nome' => 'STOP DIESEL SAE 40 CF',
            'uso' => '• MOTOR DIESEL',
            'descricao' => 'Óleo lubrificante mineral monoviscoso composto 
            por lubrificantes básicos e aditivos para uso em 
            motores estacionários, ferroviários e marítimos. 
            Recomendado para motores ciclo diesel atendendo 
            as especificações API CF e SAE 40.',            
            'comp_quimica' => 'Composição química: óleo mineral e aditivos
            anticorrosivo, antidesgaste, antioxidante, 
            antiespumante e agente de reserva alcalina.',
            //'valor' => 999.99,
            'imagem' => 'images/Produtos/STOP-DIESEL-40.jpg',
            'categoria_id' => 2,
            'ficha' => "Fichas tecnicas Dulub atualizadas/fichas tecnicas e fispq's ciclo diesel/DULUB STOP DIESEL SAE 40 rev 19.pdf",
            'fispq' => "Fichas tecnicas Dulub atualizadas/fichas tecnicas e fispq's ciclo diesel/FISPQ Dulub Stop Diesel SAE 40.pdf"
        ]);

        DB::table('produtos')->insert([
            'nome' => 'STOP DIESEL SAE 50 CF',
            'uso' => '• MOTOR DIESEL',
            'descricao' => 'Óleo lubrificante mineral monoviscoso composto 
            por lubrificantes básicos e aditivos para uso em 
            motores estacionários, ferroviários e marítimos. 
            Recomendado para motores ciclo diesel atendendo 
            as especificações API CF e SAE 50.',            
            'comp_quimica' => 'Composição química: óleo mineral e aditivos
            anticorrosivo, antidesgaste, antioxidante, 
            antiespumante e agente de reserva alcalina.',
            //'valor' => 999.99,
            'imagem' => 'images/Produtos/STOP-DIESEL-50.jpg',
            'categoria_id' => 2,
            'ficha' => "Fichas tecnicas Dulub atualizadas/fichas tecnicas e fispq's ciclo diesel/DULUB STOP DIESEL SAE 50 rev 19.pdf",
            'fispq' => "Fichas tecnicas Dulub atualizadas/fichas tecnicas e fispq's ciclo diesel/FISPQ Dulub Stop Diesel SAE 50.pdf"
        ]);
        ##########################################################################################
        ##########################################################################################

        //MOTOCICLETAS
        ##########################################################################################
        DB::table('produtos')->insert([
            'nome' => 'ULTRA MOTO 4T 10W30 SN',
            'uso' => '• MOTOCICLETAS',
            'descricao' => 'Óleo lubrificante semissintético de alta
            performance e elevada estabilidade, desenvolvido 
            para proporcionar superior proteção contra o 
            desgaste e esforços mecânicos. Para uso em 
            motores de motocicleta quatro tempos de alta 
            rotação. Atende as especificações de serviços API 
            SN/JASO MA2. Disponível no grau SAE 10W30.',            
            'comp_quimica' => 'Composição Química: óleo mineral do grupo II, 
            base sintética GIII e aditivos antidesgaste, 
            antiespumante, antioxidante, detergente, 
            dispersante, agente de reserva alcalina, 
            modificador de viscosidade e depressor de ponto 
            de fluidez.',
            //'valor' => 999.99,
            'imagem' => 'images/Produtos/Moto_Ultra_R.jpg',
            'categoria_id' => 3,
            'ficha' => "Fichas tecnicas Dulub atualizadas/fichas tecnicas e fispq's motocicletas/DULUB ULTRA MOTO 4T rev 19.pdf",
            'fispq' => "Fichas tecnicas Dulub atualizadas/fichas tecnicas e fispq's motocicletas/FISPQ Dulub Ultra Moto 4T 10W30 SN JASO MA2.pdf"
        ]);

        DB::table('produtos')->insert([
            'nome' => 'POWER MOTO 4T 10W40 SN',
            'uso' => '• MOTOCICLETAS',
            'descricao' => 'Óleo lubrificante de alta performance e elevada 
            estabilidade, elaborado com tecnologia
            semissintética. Dulub Power Moto 4T foi 
            desenvolvido para proporcionar excelente  limpeza 
            e proteção contra o desgaste. Recomendado para
            motores de motocicletas 4 tempos de alta rotação. 
            Atende as especificações de serviços  API 
            SN/JASO MA2. Disponível no grau SAE 10W40.',            
            'comp_quimica' => 'Composição Química: óleo mineral  do grupo II, 
            base sintética GIII e aditivos  antidesgaste, 
            antiespumante, antioxidante, detergente, 
            dispersante, agente de reserva alcalina, 
            modificador de viscosidade e depressor de ponto 
            de fluidez.',
            //'valor' => 999.99,
            'imagem' => 'images/Produtos/Moto_Power_G.jpg',
            'categoria_id' => 3,
            'ficha' => "Fichas tecnicas Dulub atualizadas/fichas tecnicas e fispq's motocicletas/DULUB POWER MOTO 4T rev 19.pdf",
            'fispq' => "Fichas tecnicas Dulub atualizadas/fichas tecnicas e fispq's motocicletas/FISPQ Dulub Power Moto 4T 10W40 SN MA2.pdf"
        ]);

        DB::table('produtos')->insert([
            'nome' => 'PRO MOTO 4T 20W50 SN',
            'uso' => '• MOTOCICLETAS',
            'descricao' => 'Avançado óleo lubrificante semissintético para 
            motores 4 tempos de última geração e alta 
            performance. Sua tecnologia garante elevado nível 
            de proteção e limpeza. Recomendado para
            motores de motocicletas 4 tempos de alto 
            desempenho. Atende as especificações de 
            serviços API SN/JASO MA2. Disponível no grau 
            SAE 20W50.',            
            'comp_quimica' => 'Composição Química: óleo mineral do grupo  II, 
            base sintética GIII e aditivos antidesgaste, 
            antiespumante, antioxidante, detergente, 
            dispersante, agente de reserva alcalina, 
            modificador de viscosidade e depressor de ponto 
            de fluidez.',
            //'valor' => 999.99,
            'imagem' => 'images/Produtos/Moto_Pro_B.jpg',
            'categoria_id' => 3,
            'ficha' => "Fichas tecnicas Dulub atualizadas/fichas tecnicas e fispq's motocicletas/DULUB PRO MOTO 4T rev 19.pdf",
            'fispq' => "Fichas tecnicas Dulub atualizadas/fichas tecnicas e fispq's motocicletas/FISPQ Dulub Pro Moto 4T 20W50 SN JASO MA2.pdf"
        ]);

        DB::table('produtos')->insert([
            'nome' => 'RACE MOTO 4T 15W50 SN',
            'uso' => '• MOTOCICLETAS',
            'descricao' => 'Avançado óleo lubrificante semissintético para 
            motores 4 tempos de alto desempenho e elevada 
            estabilidade. Desenvolvido com tecnologia para
            proporcionar elevado nível de proteção e 
            performance. Recomendado para motores de 
            motocicletas 4 tempos de alta rotação. Atende as 
            especificações de serviços API SN/JASO MA2. 
            Disponível no grau SAE 15W50.',            
            'comp_quimica' => 'Composição Química: óleo mineral do grupo II, 
            base sintética GIII e aditivos antidesgaste, 
            antiespumante, antioxidante, detergente, 
            dispersante, agente de reserva alcalina, 
            modificador de viscosidade e depressor de ponto 
            de fluidez.',
            //'valor' => 999.99,
            'imagem' => 'images/Produtos/Moto_Race_Y.jpg',
            'categoria_id' => 3,
            'ficha' => "Fichas tecnicas Dulub atualizadas/fichas tecnicas e fispq's motocicletas/DULUB RACE MOTO 4T rev 19.pdf",
            'fispq' => "Fichas tecnicas Dulub atualizadas/fichas tecnicas e fispq's motocicletas/FISPQ Dulub Race Moto 4T 15W50 SN JASO MA2.pdf"
        ]);

        DB::table('produtos')->insert([
            'nome' => 'MOTO 4T EXTREME 20W50 SL',
            'uso' => '• MOTOCICLETAS',
            'descricao' => 'Óleo lubrificante multiviscoso mineral de avançada 
            tecnologia para uso em motores de motocicleta
            quatro tempos de alta rotação.  Atende  as 
            especificações de serviços API SL e JASO MA. 
            Disponível no grau SAE 20W50.
            
            Dulub Moto 4T Extreme é recomendado para o uso em todos os motores de motocicletas 4 tempos, 
            e especialmente desenvolvido para proporcionar superior performance aos motores que operam em condições extremas.',            
            'comp_quimica' => 'Composição Química: óleo mineral  e aditivos 
            anticorrosivo, antidesgaste, antiespumante, 
            antioxidante, detergente, dispersante, agente de 
            reserva alcalina e melhorador de fluidez.',
            //'valor' => 999.99,
            'imagem' => 'images/Produtos/novo-moto-extreme.png',
            'categoria_id' => 3,
            'ficha' => "Fichas tecnicas Dulub atualizadas/fichas tecnicas e fispq's motocicletas/DULUB MOTO 4T EXTREME rev 19.pdf",
            'fispq' => "Fichas tecnicas Dulub atualizadas/fichas tecnicas e fispq's motocicletas/FISPQ Dulub Moto 4T Extreme rev 19.pdf"
        ]);

        DB::table('produtos')->insert([
            'nome' => 'MOTO 2T',
            'uso' => '• MOTOCICLETAS',
            'descricao' => 'Óleo lubrificante monoviscoso mineral para uso em 
            motores dois tempos movidos a gasolina, 
            lubrificados por mistura ou injeção de lubrificante. 
            Atende as especificações API TC/JASO FC e SAE 
            30.',            
            'comp_quimica' => 'Composição Química: óleo mineral e aditivos 
            anticorrosivo, antidesgaste, antiespumante, 
            antioxidante, detergente, dispersante, agente de 
            reserva alcalina e melhorador de fluidez.',
            //'valor' => 999.99,
            'imagem' => 'images/Produtos/moto2t-att.jpg',
            'categoria_id' => 3,
            'ficha' => "Fichas tecnicas Dulub atualizadas/fichas tecnicas e fispq's motocicletas/DULUB MOTO 2T TC rev 19.pdf",
            'fispq' => "Fichas tecnicas Dulub atualizadas/fichas tecnicas e fispq's motocicletas/FISPQ Dulub Moto 2T TC rev 19.pdf"
        ]);
        ##########################################################################################
        ##########################################################################################

        //TRANSMISSÃO
        ##########################################################################################
        DB::table('produtos')->insert([
            'nome' => 'ATF 10W20 – SUFIXO A',
            'uso' => '• TRANSMISSÃO',
            'descricao' => 'Fluido adequado para a maioria dos sistemas de transmissões automáticos, direções hidráulicas e sistemas 
            hidráulicos industriais. O Óleo Dulub ATF é produto estável ao cisalhamento e mantém a sua viscosidade ao 
            longo do tempo. Atendendo especificação tipo A sufixo A. Grau SAE 10W20.',            
            'comp_quimica' => 'Composição Química: óleos minerais e aditivos 
            detergente, dispersante, melhorador de índice de 
            viscosidade, antidesgaste, antioxidante,
            anticorrosivo e corante vermelho.',
            //'valor' => 999.99,
            'imagem' => 'images/Produtos/ATF_2.jpg',
            'categoria_id' => 4,
            'ficha' => "Fichas tecnicas Dulub atualizadas/fichas tecnicas e fispqs transmissao/DULUB ATF SAE 10W20 SUFIXO A rev 19.pdf",
            'fispq' => "Fichas tecnicas Dulub atualizadas/fichas tecnicas e fispqs transmissao/FISPQ Dulub ATF SAE 10W20 SUFIXO A rev 19.pdf"
        ]);

        DB::table('produtos')->insert([
            'nome' => 'MAX TRACTOR TDH MT6 10W30',
            'uso' => '• TRANSMISSÃO',
            'descricao' => 'Óleo lubrificante mineral multiviscoso para 
            transmissões, sistemas hidráulicos, conversores de 
            torque, freios banhados a óleo e sistema de 
            arranque. Atende aos níveis de desempenho API 
            GL5 e grau SAE 10W30.',
            'comp_quimica' => 'Composição Química: óleos minerais e aditivos 
            anticorrosivo, antidesgaste, antiespumante, 
            antioxidante.',
            //'valor' => 999.99,
            'imagem' => 'images/Produtos/MAX_TRACTOR.jpg',
            'categoria_id' => 4,
            'ficha' => "Fichas tecnicas Dulub atualizadas/fichas tecnicas e fispqs transmissao/DULUB MAX TRACTOR TDH MT6 rev 19.pdf",
            'fispq' => "Fichas tecnicas Dulub atualizadas/fichas tecnicas e fispqs transmissao/FISPQ Dulub MAX TRACTOR TDH MT6 rev 19.pdf"
        ]);

        DB::table('produtos')->insert([
            'nome' => 'DULUB TDH TRACTOR SAE 30',
            'uso' => '• TRANSMISSÃO',
            'descricao' => 'Óleo lubrificante mineral monoviscoso para 
            transmissões, sistemas hidráulicos, freios 
            banhados a óleo e comandos finais. Atende aos 
            níveis de desempenho API GL4 e grau SAE 30.',
            'comp_quimica' => 'óleos minerais e aditivos
            anticorrosivo, antidesgaste, antiespumante, 
            antioxidante e extrema pressão.',
            //'valor' => 999.99,
            'imagem' => 'images/Produtos/TDH_TRACTOR.jpg',
            'categoria_id' => 4,
            'ficha' => "Fichas tecnicas Dulub atualizadas/fichas tecnicas e fispqs transmissao/DULUB TDH TRACTOR rev 19.pdf",
            'fispq' => "Fichas tecnicas Dulub atualizadas/fichas tecnicas e fispqs transmissao/FISPQ Dulub TDH TRACTOR rev 19.pdf"
        ]);

        DB::table('produtos')->insert([
            'nome' => 'DULUB TOTAC SÉRIE',
            'uso' => '• TRANSMISSÃO',
            'descricao' => 'Óleo lubrificante mineral monoviscoso para 
            conversores de torque e sistemas hidráulicos.
            Atende as especificações de desempenho Allison
            C-4 e CF-2. Disponível nos graus SAE 10W/30/50.',
            'comp_quimica' => 'óleos minerais e aditivos 
            anticorrosivo, antidesgaste, antiferrugem, 
            antioxidante, abaixador de ponto de fluidez e
            modificador de fricção.',
            //'valor' => 999.99,
            'imagem' => 'images/Produtos/TOTAC.jpg',
            'categoria_id' => 4,
            'ficha' => "Fichas tecnicas Dulub atualizadas/fichas tecnicas e fispqs transmissao/DULUB TOTAC_ALL.rar",
            'fispq' => "Fichas tecnicas Dulub atualizadas/fichas tecnicas e fispqs transmissao/FISPQ Dulub TOTAC_ALL.rar"
        ]);

        DB::table('produtos')->insert([
            'nome' => 'HIPÓIDE 80W GL-4',
            'uso' => '• TRANSMISSÃO',
            'descricao' => 'Óleo lubrificante mineral de diferenciais hipoidais,
            alguns tipos de caixas de mudanças manuais, 
            caixas de direção e caixas de embreagem 
            automotivas em condições de elevada severidade.
            Atende aos níveis de desempenho API GL4 e grau 
            SAE 80.',            
            'comp_quimica' => 'Composição Química: óleos minerais e aditivos 
            antioxidante, antidesgaste, antiespumante e 
            extrema pressão.',
            //'valor' => 999.99,
            'imagem' => 'images/Produtos/HIPOIDE_80W_GL4.jpg',
            'categoria_id' => 5,
            'ficha' => "Fichas tecnicas Dulub atualizadas/fichas tecnicas e fispqs transmissao/DULUB HIPOIDE 80W GL4 rev 19.pdf",
            'fispq' => "Fichas tecnicas Dulub atualizadas/fichas tecnicas e fispqs transmissao/FISPQ Dulub HIPOIDE 80W GL4 rev 19.pdf"
        ]);

        DB::table('produtos')->insert([
            'nome' => 'HIPÓIDE S 85W140 GL5',
            'uso' => '• TRANSMISSÃO',
            'descricao' => 'Óleo lubrificante mineral multiviscoso para
            diferenciais hipoidais, alguns tipos de caixas de 
            mudanças manuais, caixas de direção e caixas de 
            embreagem automotivas em condições de elevada 
            severidade. Atende aos níveis de desempenho API 
            GL5 e grau SAE 85W140.',            
            'comp_quimica' => 'Composição Química: óleos minerais e aditivos 
            antioxidante, antidesgaste, antiespumante, 
            depressor de ponto de fluidez e extrema pressão.',
            //'valor' => 999.99,
            'imagem' => 'images/Produtos/HIPOIDE_85W40_GL5.jpg',
            'categoria_id' => 5,
            'ficha' => "Fichas tecnicas Dulub atualizadas/fichas tecnicas e fispqs transmissao/DULUB HIPOIDE S 85W140 GL5 rev 19.pdf",
            'fispq' => "Fichas tecnicas Dulub atualizadas/fichas tecnicas e fispqs transmissao/FISPQ Dulub HIPOIDE S 85W140 GL5 rev 19.pdf"
        ]);

        DB::table('produtos')->insert([
            'nome' => 'HIPÓIDE 90 GL-4',
            'uso' => '• TRANSMISSÃO',
            'descricao' => 'Óleo lubrificante mineral de diferenciais hipoidais,
            alguns tipos de caixas de mudanças manuais, 
            caixas de direção e caixas de embreagem 
            automotivas em condições de elevada severidade.
            Atende aos níveis de desempenho API GL4 e grau
            SAE 90.',            
            'comp_quimica' => 'Composição Química: Óleos minerais e aditivos antioxidante, antidesgaste, antiespumante, e extrema pressão.',
            //'valor' => 999.99,
            'imagem' => 'images/Produtos/HIPOIDE_90_GL4.jpg',
            'categoria_id' => 5,
            'ficha' => "Fichas tecnicas Dulub atualizadas/fichas tecnicas e fispqs transmissao/DULUB HIPOIDE 90 GL4 rev 19.pdf",
            'fispq' => "Fichas tecnicas Dulub atualizadas/fichas tecnicas e fispqs transmissao/FISPQ Dulub HIPOIDE 90 GL4 rev 19.pdf"
        ]);

        DB::table('produtos')->insert([
            'nome' => 'HIPÓIDE S 90 GL5',
            'uso' => '• TRANSMISSÃO',
            'descricao' => 'Óleo lubrificante mineral monoviscoso para
            diferenciais hipoidais, alguns tipos de caixas de 
            mudanças manuais, caixas de direção e caixas de 
            embreagem automotivas em condições de elevada 
            severidade. Atende aos níveis de desempenho API 
            GL5 e grau SAE 90.',            
            'comp_quimica' => 'Composição Química: Óleos minerais e aditivos antioxidante, antidesgaste, antiespumante, e extrema pressão.',
            //'valor' => 999.99,
            'imagem' => 'images/Produtos/HIPOIDE_90_GL5.jpg',
            'categoria_id' => 5,
            'ficha' => "Fichas tecnicas Dulub atualizadas/fichas tecnicas e fispqs transmissao/DULUB HIPOIDE S 90 GL5 rev 19.pdf",
            'fispq' => "Fichas tecnicas Dulub atualizadas/fichas tecnicas e fispqs transmissao/FISPQ Dulub HIPOIDE S 90 GL5 rev 19.pdf"
        ]);

        DB::table('produtos')->insert([
            'nome' => 'HIPÓIDE 140 GL-4',
            'uso' => '• TRANSMISSÃO',
            'descricao' => 'Óleo lubrificante mineral de diferenciais hipoidais,
            alguns tipos de caixas de mudanças manuais, 
            caixas de direção e caixas de embreagem 
            automotivas em condições de elevada severidade.
            Atende aos níveis de desempenho API GL4 e grau
            SAE 140.',            
            'comp_quimica' => 'Composição Química: Óleos minerais e aditivos antioxidante, antidesgaste, antiespumante, e extrema pressão.',
            //'valor' => 999.99,
            'imagem' => 'images/Produtos/HIPOIDE_140_GL4.jpg',
            'categoria_id' => 5,
            'ficha' => "Fichas tecnicas Dulub atualizadas/fichas tecnicas e fispqs transmissao/DULUB HIPOIDE 140 GL4 rev 19.pdf",
            'fispq' => "Fichas tecnicas Dulub atualizadas/fichas tecnicas e fispqs transmissao/FISPQ Dulub HIPOIDE 140 GL4 rev 19.pdf"
        ]);

        DB::table('produtos')->insert([
            'nome' => 'HIPÓIDE S 140 GL5',
            'uso' => '• TRANSMISSÃO',
            'descricao' => 'Óleo lubrificante mineral monoviscoso para
            diferenciais hipoidais, alguns tipos de caixas de 
            mudanças manuais, caixas de direção e caixas de 
            embreagem automotivas em condições de elevada 
            severidade. Atende aos níveis de desempenho API 
            GL5 e grau SAE 140.',            
            'comp_quimica' => 'Composição Química: Óleos minerais e aditivos antioxidante, antidesgaste, antiespumante, e extrema pressão.',
            //'valor' => 999.99,
            'imagem' => 'images/Produtos/HIPOIDE_140_GL5.jpg',
            'categoria_id' => 5,
            'ficha' => "Fichas tecnicas Dulub atualizadas/fichas tecnicas e fispqs transmissao/DULUB HIPOIDE S 140 GL5 rev 19.pdf",
            'fispq' => "Fichas tecnicas Dulub atualizadas/fichas tecnicas e fispqs transmissao/FISPQ Dulub HIPOIDE S 140 GL5 rev 19.pdf"
        ]);

        DB::table('produtos')->insert([
            'nome' => 'HIPÓIDE 250 GL-4',
            'uso' => '• TRANSMISSÃO',
            'descricao' => 'Óleo lubrificante mineral de diferenciais hipoidais,
            alguns tipos de caixas de mudanças manuais, 
            caixas de direção e caixas de embreagem 
            automotivas em condições de elevada severidade.
            Atende aos níveis de desempenho API GL4 e grau
            SAE 250.',            
            'comp_quimica' => 'Composição Química: Óleos minerais e aditivos antioxidante, antidesgaste, antiespumante, e extrema pressão.',
            //'valor' => 999.99,
            'imagem' => 'images/Produtos/HIPOIDE_250_GL4.jpg',
            'categoria_id' => 5,
            'ficha' => "Fichas tecnicas Dulub atualizadas/fichas tecnicas e fispqs transmissao/DULUB HIPOIDE 250 GL4 rev 19.pdf",
            'fispq' => "Fichas tecnicas Dulub atualizadas/fichas tecnicas e fispqs transmissao/FISPQ Dulub HIPOIDE 250 GL4 rev 19.pdf"
        ]);
        ##########################################################################################
        ##########################################################################################

        //GRAXAS
        DB::table('produtos')->insert([
            'nome' => 'GRAXLUB CA2',
            'uso' => '• ROLAMENTOS, EIXOS, CHASSIS AUTOMOTIVOS',
            'descricao' => 'Graxa lubrificante desenvolvida a base de sabão 
            de cálcio e óleos minerais. Possui excelente 
            adesividade e resistência a água.
            DULUB GRAXLUB CA-2  possui propriedades de 
            lubricidade, anticorrosivas e antidesgaste. Sua 
            formulação proporciona lubrificação em pontos e 
            peças expostas a vibrações e intempéries.',
            'comp_quimica' => 'Composição Química: óleo mineral, sabão de 
            cálcio e aditivos.',
            //'valor' => 999.99,
            'imagem' => 'images/Produtos/GRAXLUB.jpg',
            'categoria_id' => 6,
            'ficha' => "Fichas tecnicas Dulub atualizadas/graxas/DULUB GRAXLUB CA2 rev 19.pdf",
            'fispq' => "Fichas tecnicas Dulub atualizadas/graxas/FISPQ DULUB GRAXLUB CA-2 rev 19.pdf"
        ]);
        ##########################################################################################
        ##########################################################################################

        //RENOX
        ##########################################################################################
        DB::table('produtos')->insert([
            'nome' => 'RENOX 32',
            'uso' => '• REDUÇÃO DE NOX',
            'descricao' => 'É um Agente Redutor Líquido de NOX Automotivo
            (ARLA), necessário a tecnologia SCR (Redução 
            Catalítica Seletiva), presente nos veículos 
            automotores a diesel classificados como 
            comerciais pesados e semipesados (acima de 16 
            ton), fabricados a partir de janeiro de 2012.',            
            'comp_quimica' => 'Composição química:
            •  32,5 % (m/m) de ureia técnica;
            •  67,5% (m/m) de água desmineralizada (grau 3 – ISO 3696/1987).',
            //'valor' => 999.99,
            'imagem' => 'images/Produtos/Renox.jpg',
            'categoria_id' => 7,
            'ficha' => "Fichas tecnicas Dulub atualizadas//ARLA 32/RENOX 32 rev 19.pdf",
            'fispq' => "Fichas tecnicas Dulub atualizadas//ARLA 32/FISPQ RENOX 32.pdf"
        ]);
        ##########################################################################################
        ##########################################################################################

        //EQUIPAMENTOS
        ##########################################################################################
        DB::table('produtos')->insert([
            'nome' => 'EQUIPAMENTOS X',
            'uso' => '• EQUIPAMENTOS',
            'descricao' => 'N sei tbm',
            //'valor' => 999.99,
            'imagem' => 'images/Produtos/alguma graxa aqui.jpg',
            'categoria_id' => 8,
            'ficha' => "Fichas tecnicas Dulub atualizadas/fichas tecnicas e fispqs equipamentos/graxa.pdf",
            'fispq' => "Fichas tecnicas Dulub atualizadas/fichas tecnicas e fispqs equipamentos/graxa2.pdf"
        ]);
        ##########################################################################################
        ##########################################################################################

        //HIDRAULICOS
        ##########################################################################################
        DB::table('produtos')->insert([
            'nome' => 'HIDRAULICO 68 ISO VG 68',
            'uso' => '• HIDRÁULICOS',
            'descricao' => 'Óleo lubrificante mineral para sistemas hidráulicos 
            e circulatórios que operam em condições 
            moderadas de pressão e temperatura.
            DULUB  HIDRÁULICO 68  é recomendado para 
            aplicações em redutores, sistemas circulatórios, 
            máquinas hidráulicas (prensas, elevadores em 
            serviços leves), motores elétricos lubrificados a 
            óleo, mancais simples e rolamentos.',
            'comp_quimica' => 'Composição química:  óleo mineral e aditivos
            antidesgaste, antioxidante, antiespumante e 
            extrema pressão.',
            //'valor' => 999.99,
            'imagem' => 'images/Produtos/HIDRAULICO68.jpg',
            'categoria_id' => 9,
            'ficha' => "Fichas tecnicas Dulub atualizadas/fichas tecnicas e fispq's hidraulicos/DULUB HIDRÁULICO 68 rev 19.pdf",
            'fispq' => "Fichas tecnicas Dulub atualizadas/fichas tecnicas e fispq's hidraulicos/FISPQ Dulub hidráulico 68 rev 19.pdf"
        ]);

        DB::table('produtos')->insert([
            'nome' => 'MAX HIDRO EP SÉRIE',
            'uso' => '• HIDRÁULICOS',
            'descricao' => 'É um lubrificante hidráulico premium recomendado 
            para sistemas hidráulicos de alto rendimento,
            submetidos a elevadas temperatura e pressão.
            A linha DULUB MAX HIDRO EP é recomendada para 
            lubrificação de máquinas e ferramentas  que
            exigem produtos com propriedades antidesgaste.',
            'comp_quimica' => 'Composição química: óleo mineral e aditivos
            anticorrosivo, antidesgaste, agente de extrema 
            pressão, antiespumante e antiferrugem.',
            //'valor' => 999.99,
            'imagem' => 'images/Produtos/MAX HIDRO.jpg',
            'categoria_id' => 9,
            'ficha' => "Fichas tecnicas Dulub atualizadas/fichas tecnicas e fispq's hidraulicos/DULUB MAX HIDRO_ALL rev 19.pdf",
            'fispq' => "Fichas tecnicas Dulub atualizadas/fichas tecnicas e fispq's hidraulicos/FISPQ Dulub MAX HIDRO_ALL rev 19.pdf"
        ]);

        DB::table('produtos')->insert([
            'nome' => 'VHP SÉRIE',
            'uso' => '• HIDRÁULICOS',
            'descricao' => 'Óleo mineral de alta qualidade especialmente 
            desenvolvido para lubrificação de bombas de 
            vácuo em geral, sistemas hidráulicos que operem 
            em condições moderadas e sistemas spray de 
            circuitos pneumáticos que necessitem de produtos 
            com alta estabilidade e característica antidesgaste. 
            Apresenta grau ISO VG 10.',
            'comp_quimica' => 'óleo básico mineral  e 
            aditivos antioxidante, antidesgaste e 
            antiespumante.',
            //'valor' => 999.99,
            'imagem' => 'images/Produtos/VHP.jpg',
            'categoria_id' => 9,
            'ficha' => "Fichas tecnicas Dulub atualizadas/fichas tecnicas e fispqs industriais/DULUB VHP_ALL.rar",
            'fispq' => "Fichas tecnicas Dulub atualizadas/fichas tecnicas e fispqs industriais/FISPQ Dulub VHP_ALL.rar"
        ]);
        ##########################################################################################
        ##########################################################################################

        //REFRIGERAÇÃO
        ##########################################################################################
        DB::table('produtos')->insert([
            'nome' => 'COLDTECH 32',
            'uso' => '• REFRIGERAÇÃO',
            'descricao' => 'Óleo lubrificante semissintético para uso em todos 
            os tipos de sistemas de refrigeração que utilizem 
            gases refrigerantes como NH3, CO2, CH3Cl, Freon, 
            R-11, R-12, R-22, R-123, R-134, R-408, R-409, R-502, entre outros.
            DULUB  COLDTECH  32  possui elevada 
            estabilidade química, apresentando resistência a 
            oxidação e formação de borra ou goma. É 
            praticamente isento de parafinas e mantém os 
            compressores de frio trabalhando livres de 
            depósitos.',
            'comp_quimica' => 'Composição química:  base sintética  do grupo  III, 
            básicos naftênicos, aditivos antioxidante e 
            melhorador de ponto de fluidez.',
            //'valor' => 999.99,
            'imagem' => 'images/Produtos/COLDTECH32.jpg',
            'categoria_id' => 10,
            'ficha' => "Fichas tecnicas Dulub atualizadas/fichas tecnicas e fispq's hidraulicos/DULUB COLDTECH 32 rev 19.pdf",
            'fispq' => "Fichas tecnicas Dulub atualizadas/fichas tecnicas e fispq's hidraulicos/FISPQ Dulub Coldtech 32 rev 19.pdf"
        ]);

        DB::table('produtos')->insert([
            'nome' => 'CR TECH',
            'uso' => '• REFRIGERAÇÃO',
            'descricao' => 'Óleo lubrificante mineral de base naftênica 
            especialmente desenvolvido para aplicação em 
            sistemas de refrigeração que trabalhem com gases 
            refrigerantes como freons, genetrons, isotrons, 
            carrene, amônia, cloreto de metila, anidrido 
            sulfuroso, dióxido de carbono e outros.',
            'comp_quimica' => 'Composição química: óleo neutro básico  mineral
            e aditivos antioxidante e melhorador de fluidez.',
            //'valor' => 999.99,
            'imagem' => 'images/Produtos/CRTECH.jpg',
            'categoria_id' => 10,
            'ficha' => "Fichas tecnicas Dulub atualizadas/fichas tecnicas e fispq's hidraulicos/DULUB CR TECH 46 rev 19.rar",
            'fispq' => "Fichas tecnicas Dulub atualizadas/fichas tecnicas e fispq's hidraulicos/FISPQ Dulub CR TECH.rar"
        ]);
        ##########################################################################################
        ##########################################################################################

        //COMPRESSORES-TURBINAS
        ##########################################################################################
        DB::table('produtos')->insert([
            'nome' => 'DULUB TC TECH',
            'uso' => '• COMPRESSORES/TRUBINAS',
            'descricao' => 'Óleo lubrificante mineral para uso em turbinas, 
            compressores rotativos, sistemas circulatórios e 
            hidráulicos, máquinas operatrizes e redutores 
            operando em condições moderadamente leves.
            Lubrificante formulado 
            com óleos básicos parafínicos e pacote de aditivos 
            de última geração, proporcionando melhor 
            resistência a oxidação e elevada demulsibilidade.',
            'comp_quimica' => 'Composição química: óleos básicos parafínicos e 
            aditivos antidesgaste, agente demulsificante, 
            antioxidante e antiespumante.',
            //'valor' => 999.99,
            'imagem' => 'images/Produtos/TCTECH.jpg',
            'categoria_id' => 11,
            'ficha' => "Fichas tecnicas Dulub atualizadas/fichas tecnicas e fispq's hidraulicos/DULUB TC TECH.rar",
            'fispq' => "Fichas tecnicas Dulub atualizadas/fichas tecnicas e fispq's hidraulicos/FISPQ Dulub TC TECH.rar"
        ]);

        DB::table('produtos')->insert([
            'nome' => 'DULUB STC TECH',
            'uso' => '• COMPRESSORES/TRUBINAS',
            'descricao' => 'Óleo lubrificante sintético hidráulico de alta 
            qualidade, formulado a partir de bases sintéticas, 
            polialfaolefinas  (PAO), e aditivos especiais para a 
            lubrificação de turbinas e compressores de ar de 
            alta perfomance.',
            'comp_quimica' => 'Composição química: base sintética e aditivos 
            antidesgaste, agente demulsificante, antioxidante e 
            antiespumante.',
            //'valor' => 999.99,
            'imagem' => 'images/Produtos/STC TECH.jpg',
            'categoria_id' => 11,
            'ficha' => "Fichas tecnicas Dulub atualizadas/fichas tecnicas e fispq's hidraulicos/DULUB STC TECH_ALL.rar",
            'fispq' => "Fichas tecnicas Dulub atualizadas/fichas tecnicas e fispq's hidraulicos/FISPQ Dulub STC TECH_ALL.rar"
        ]);

        DB::table('produtos')->insert([
            'nome' => 'MAX P SÉRIE',
            'uso' => '• COMPRESSORES/TRUBINAS',
            'descricao' => 'É um lubrificante  premium  recomendado para 
            ferramentas pneumáticas, compressores de ar tipo 
            pistão e barramentos de máquinas operatrizes. 
            Disponível no grau ISO 46. Recomendado para a 
            lubrificação de marteletes, compressores de ar a 
            pistão, britadores e máquinas operatrizes de uso 
            geral.',
            'comp_quimica' => 'Composição química: óleo básico mineral e 
            aditivos anticorrosivo, antidesgaste, agente de 
            extrema pressão, antiespumante e antiferrugem.',
            //'valor' => 999.99,
            'imagem' => 'images/Produtos/MAX P.jpg',
            'categoria_id' => 11,
            'ficha' => "Fichas tecnicas Dulub atualizadas/fichas tecnicas e fispqs industriais/DULUB MAX P_ALL.rar",
            'fispq' => "Fichas tecnicas Dulub atualizadas/fichas tecnicas e fispqs industriais/FISPQ Dulub Max P_ALL.rar"
        ]);

        //ENGRENAGENS
        ##########################################################################################
        DB::table('produtos')->insert([
            'nome' => 'DULUB RBM SÉRIE',
            'uso' => '• ENGRENAGENS',
            'descricao' => 'Óleo lubrificante recomendado para redutores e 
            engrenagens fechadas industriais cilíndricas, 
            helicoidais e cônicas que operam a temperaturas 
            de até 100ºC. Particularmente, são adequados 
            para engrenagens que trabalham com cargas 
            pesadas ou de choque.
            A linha DULUB RBM controla o desgaste e a corrosão 
            das partes lubrificadas. Sua aditivação permite 
            garantir características de extrema pressão, 
            resistência a oxidação e a formação de espuma.',
            'comp_quimica' => 'Composição química: óleo básico mineral e 
            aditivos antidesgaste, aditivos de extrema pressão, 
            antiespumante, antioxidante e anticorrosivo.',
            //'valor' => 999.99,
            'imagem' => 'images/Produtos/RBM.jpg',
            'categoria_id' => 12,
            'ficha' => "Fichas tecnicas Dulub atualizadas/fichas tecnicas e fispqs industriais/DULUB RBM_ALL rev 19.pdf",
            'fispq' => "Fichas tecnicas Dulub atualizadas/fichas tecnicas e fispqs industriais/FISPQ Dulub RBM_ALL rev 19.pdf"
        ]);

        DB::table('produtos')->insert([
            'nome' => 'DULUB RBM AD SÉRIE',
            'uso' => '• ENGRENAGENS',
            'descricao' => 'Óleo lubrificante recomendado para redutores e 
            engrenagens fechadas industriais cilíndricas, 
            helicoidais e cônicas que operam a temperaturas 
            de até 100ºC. Particularmente, são adequados 
            para engrenagens que trabalham com cargas 
            pesadas ou de choque.
            A linha DULUB RBM controla o desgaste e a corrosão 
            das partes lubrificadas. Sua aditivação permite 
            garantir características de extrema pressão, 
            resistência a oxidação e a formação de espuma.',
            'comp_quimica' => 'Composição química: óleo básico mineral e 
            aditivos antidesgaste, aditivos de extrema pressão, 
            antiespumante, antioxidante e anticorrosivo.',
            //'valor' => 999.99,
            'imagem' => 'images/Produtos/RBM_AD.jpg',
            'categoria_id' => 12,
            'ficha' => "Fichas tecnicas Dulub atualizadas/fichas tecnicas e fispqs industriais/DULUB RBM AD_ALL rev 19.pdf",
            'fispq' => "Fichas tecnicas Dulub atualizadas/fichas tecnicas e fispqs industriais/FISPQ Dulub RBM AD_ALL rev 19.pdf"
        ]);

        DB::table('produtos')->insert([
            'nome' => 'DULUB ULTRA M SÉRIE',
            'uso' => '• ENGRENAGENS',
            'descricao' => 'Óleo lubrificante de base sintética com aditivação 
            de extrema-pressão, aplicado em engrenagens 
            abertas, mancais de moendas de cana de açúcar e 
            álcool e máquinas similares.
            A linha DULUB ULTRA M S7 possui aditivação de 
            extrema pressão, isenta de chumbo e 
            contaminantes asfálticos que confere 
            características de adesividade e resistência a 
            lavagem por água. Evita o desgaste das peças 
            lubrificadas.',
            'comp_quimica' => 'Composição química: óleo básico sintético e 
            aditivos anticorrosivo, antidesgaste e agente de 
            extrema pressão.',
            //'valor' => 999.99,
            'imagem' => 'images/Produtos/ULTRAM.jpg',
            'categoria_id' => 12,
            'ficha' => "Fichas tecnicas Dulub atualizadas/fichas tecnicas e fispqs industriais/DULUB UTRA M_ALL rev 19.pdf",
            'fispq' => "Fichas tecnicas Dulub atualizadas/fichas tecnicas e fispqs industriais/FISPQ Dulub Ultra M_ALL rev 19.pdf"
        ]);
        ##########################################################################################
        ##########################################################################################

        //TÉRMICOS
        ##########################################################################################
        DB::table('produtos')->insert([
            'nome' => 'DULUB THERMO SÉRIE',
            'uso' => '• TÉRMICOS',
            'descricao' => 'Óleo lubrificante mineral de base parafínica para 
            ação térmica e transferência de calor em sistemas 
            circulatórios de aquecimento indireto.
            É aplicado em sistemas 
            abertos com temperaturas de operação da ordem 
            de 180ºC a 200ºC. Em sistemas fechados, selados 
            por gás inerte, o óleo apresenta bom desempenho 
            a temperaturas em até 280ºC, sem alterações de 
            suas características físico-químicas, desde que 
            observadas as condições adequadas de 
            aquecimento e circulação do óleo.',
            'comp_quimica' => 'Composição química: óleos básicos  óleo neutro 
            básico e aditivos antioxidante, anticorrosivo e 
            antiferrugem.',
            //'valor' => 999.99,
            'imagem' => 'images/Produtos/THERMO_20L.jpg',
            'categoria_id' => 13,
            'ficha' => "Fichas tecnicas Dulub atualizadas/fichas tecnicas e fispqs industriais/DULUB THERMO.rar",
            'fispq' => "Fichas tecnicas Dulub atualizadas/fichas tecnicas e fispqs industriais/FISPQ Dulub THERMO.rar"
        ]);

        //DESMOLDANTES
        ##########################################################################################
        DB::table('produtos')->insert([
            'nome' => 'DESMOLD FP68/FP140',
            'uso' => '• DESMOLDANTES',
            'descricao' => 'Óleo mineral de alta estabilidade térmica, baixo 
            escoamento e fácil aplicação para desmoldagem 
            de formas metálicas, poliméricas, madeiras 
            naturais e/ou industrializadas. Desenvolvido 
            especialmente para a indústria de espumação em 
            geral, garantindo qualidade superior quanto a 
            uniformidade e homogeneidade no processo.',
            'comp_quimica' => 'Composição química:  óleo mineral e aditivos 
            detergentes, dispersantes, antiferrugem e 
            antioxidante.',
            //'valor' => 999.99,
            'imagem' => 'images/Produtos/DESMOLD.jpg',
            'categoria_id' => 14,
            'ficha' => "Fichas tecnicas Dulub atualizadas/fichas tecnicas e fispqs industriais/DULUB DESMOLD_ALL.pdf",
            'fispq' => "Fichas tecnicas Dulub atualizadas/fichas tecnicas e fispqs industriais/FISPQ Dulub Desmold_ALL.pdf"
        ]);
        ##########################################################################################
        ##########################################################################################
        

        //TÊXTIL
        ##########################################################################################
        DB::table('produtos')->insert([
            'nome' => 'BASICO 10 ISO VG 22',
            'uso' => '• TÊXTIL',
            'descricao' => 'É um óleo lubrificante de cor clara de alta 
            qualidade, formulado a partir de óleo básico 
            mineral de petróleo selecionado. Possui grau ISO 
            VG 22.
            DULUB  BÁSICO 10  é recomendado para a 
            lubrificação e limpeza de equipamentos industriais, 
            máquinas de tecelagens, máquinas de costura e 
            uso em sistemas circulatórios que exijam do óleo 
            resistência à oxidação e proteção contra a 
            corrosão.',
            'comp_quimica' => 'Composição química:  óleo básico mineral e 
            aditivos antiespumante, anticorrosivo e 
            antioxidante.',
            //'valor' => 999.99,
            'imagem' => 'images/Produtos/BASICO10.jpg',
            'categoria_id' => 15,
            'ficha' => "Fichas tecnicas Dulub atualizadas/fichas tecnicas e fispqs industriais/DULUB BASICO 10 rev 19.pdf",
            'fispq' => "Fichas tecnicas Dulub atualizadas/fichas tecnicas e fispqs industriais/FISPQ Dulub Basico 10 rev 19.pdf"
        ]);

        DB::table('produtos')->insert([
            'nome' => 'BASICO C-10 ISO VG 22',
            'uso' => '• TÊXTIL',
            'descricao' => 'É um óleo lubrificante  neutro, de cor clara  e alta 
            qualidade, formulado a partir de óleo básico 
            mineral de petróleo selecionado. Possui grau ISO 
            VG 32.
            DULUB  BÁSICO  C-10  é recomendado para a
            lubrificação e limpeza  de equipamentos industriais, 
            máquinas de costura e uso em sistemas 
            circulatórios que exijam do óleo resistência à 
            oxidação e proteção contra a corrosão.',
            'comp_quimica' => 'Composição química: óleo básico mineral e 
            aditivos antiespumante, anticorrosivo e 
            antioxidante.',
            //'valor' => 999.99,
            'imagem' => 'images/Produtos/BASICO_C10.jpg',
            'categoria_id' => 15,
            'ficha' => "Fichas tecnicas Dulub atualizadas/fichas tecnicas e fispqs industriais/DULUB BASICO C-10 rev 19.pdf",
            'fispq' => "Fichas tecnicas Dulub atualizadas/fichas tecnicas e fispqs industriais/FISPQ Dulub Basico C-10 rev 19.pdf"
        ]);

        DB::table('produtos')->insert([
            'nome' => 'INTEX 32',
            'uso' => '• TÊXTIL',
            'descricao' => 'Óleo lubrificante lavável de rápida remoção
            indicado para lubrificação de agulhas e  platinas, 
            indicado em máquinas circulares,  retilíneas e de 
            meias.
            DULUB  INTEX 32  possui tensoativos que evitam 
            manchas nas fibras têxteis quando lavado.',
            'comp_quimica' => 'Composição química: óleos  básicos  e aditivos
            anticorrosivo, antidesgaste, antiferrugem e 
            tensoativos.',
            //'valor' => 999.99,
            'imagem' => 'images/Produtos/INTEX32.jpg',
            'categoria_id' => 15,
            'ficha' => "Fichas tecnicas Dulub atualizadas/fichas tecnicas e fispqs industriais/DULUB INTEX 32 rev 19.pdf",
            'fispq' => "Fichas tecnicas Dulub atualizadas/fichas tecnicas e fispqs industriais/FISPQ Dulub Intex 32 rev 19.pdf"
        ]);
        ##########################################################################################
        ##########################################################################################

        //TRANSFORMADORES
        ##########################################################################################
        DB::table('produtos')->insert([
            'nome' => 'DULUB TRAFFO',
            'uso' => '• TRANSFORMADORES',
            'descricao' => 'Óleo isolante naftênico  contendo inibidor de 
            oxidação  para aplicação em transformadores de 
            todas as classes de tensão.
            DULUB  TRAFFO  é recomendado como fluido 
            isolante para transformadores, disjuntores e 
            equipamentos de manobra operando sob qualquer 
            classe de tensão.',
            'comp_quimica' => 'óleo básico naftênico e 
            aditivo  antioxidante BHT (DBPC) a 0,3% em 
            massa.',
            //'valor' => 999.99,
            'imagem' => 'images/Produtos/TRAFFO.jpg',
            'categoria_id' => 16,
            'ficha' => "Fichas tecnicas Dulub atualizadas/fichas tecnicas e fispqs industriais/DULUB TRAFFO rev 19.pdf",
            'fispq' => "Fichas tecnicas Dulub atualizadas/fichas tecnicas e fispqs industriais/FISPQ Dulub Traffo rev 19.pdf"
        ]);
        ##########################################################################################
        ##########################################################################################
    }
}
