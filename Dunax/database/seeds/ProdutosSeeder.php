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

        DB::table('produtos')->insert([
            'nome' => 'PROBASIC 5W30 SN',
            'uso' => '• GASOLINA, ETANOL, FLEX E GNV',
            'descricao' => 'Lubrificante semissintético para motores a gasolina, etanol, flex e GNV. É recomendado para uso em motores de alta 
            performance dotados de injeção eletrônica, multiválvulas de turbo alimentados. Proporciona menor consumo de 
            lubrificante e economia de combustível. Atende as especificações API SN / ILSAC GF-5. Grau SAE 5W30.
            
            Composição química: Óleo mineral e Básico do grupo III, anticorrosivo, antidesgastante, antiespumante, 
            antioxidante, detergente, dispersante e agente de reserva alcalina, melhorador de índice de viscosidade e 
            abaixador de fluidez.',
            //'valor' => 999.99,
            'imagem' => 'images/Produtos/img-probasic-5w30.png',
            'categoria_id' => 1,
            'ficha' => "Fichas técnicas Dulub atualizadas/fichas técnicas e fispq's ciclo otto/DULUB PROBASIC 5W30 SN rev 19.pdf",
            'fispq' => "Fichas técnicas Dulub atualizadas/fichas técnicas e fispq's ciclo otto/FISPQ Dulub Probasic 5W30 SN rev 19.pdf"
        ]);

        DB::table('produtos')->insert([
            'nome' => 'PROBASIC 10W30 SN',
            'uso' => '• GASOLINA, ETANOL, FLEX E GNV',
            'descricao' => 'Lubrificante semissintético para motores a gasolina, etanol, flex e GNV. É recomendado para uso em motores de 
            alta performance dotados de injeção eletrônica, multiválvulas de turbo alimentados. Proporciona menor consumo 
            de lubrificante e economia de combustível. Atende as especificações API SN / ILSAC GF-5. Grau SAE 10W30.
            
            Composição química: Óleo mineral e Básico do grupo III, anticorrosivo, antidesgastante, antiespumante, 
            antioxidante, detergente, dispersante e agente de reserva alcalina, melhorador de índice de viscosidade e 
            abaixador de fluidez.',
            //'valor' => 999.99,
            'imagem' => 'images/Produtos/img-probasic-10w40-1.png',
            'categoria_id' => 1,
            'ficha' => "Fichas técnicas Dulub atualizadas/fichas técnicas e fispq's ciclo otto/DULUB PROBASIC 10W30 SN rev 19.pdf",
            'fispq' => "Fichas técnicas Dulub atualizadas/fichas técnicas e fispq's ciclo otto/FISPQ Dulub Probasic 10W30 SN rev 19.pdf"
        ]);

        DB::table('produtos')->insert([
            'nome' => 'PROBASIC 10W40 SN',
            'uso' => '• GASOLINA, ETANOL, FLEX E GNV',
            'descricao' => 'Lubrificante semissintético para motores a gasolina, etanol, flex e GNV. É recomendado para uso em motores de 
            alta performance dotados de injeção eletrônica, multiválvulas de turbo alimentados. Proporciona menor consumo de 
            lubrificante e economia de combustível. Atende especificação API SN. Grau SAE 10W40.
            
            Composição química: Óleo mineral e Básico do grupo III, anticorrosivo, antidesgastante, antiespumante, 
            antioxidante, detergente, dispersante e agente de reserva alcalina, melhorador de índice de viscosidade e 
            abaixador de fluidez.',
            //'valor' => 999.99,
            'imagem' => 'images/Produtos/img-probasic-10w40-1.png',
            'categoria_id' => 1,
            'ficha' => "Fichas técnicas Dulub atualizadas/fichas técnicas e fispq's ciclo otto/DULUB PROBASIC 10W40 SN rev 19.pdf",
            'fispq' => "Fichas técnicas Dulub atualizadas/fichas técnicas e fispq's ciclo otto/FISPQ Dulub Probasic 10W40 SN rev 19.pdf"  
        ]);

        DB::table('produtos')->insert([
            'nome' => 'PROBASIC 15W40 SN',
            'uso' => '• GASOLINA, ETANOL, FLEX E GNV',
            'descricao' => 'Lubrificante semissintético para motores a gasolina, etanol, flex e GNV. É recomendado para uso em motores de 
            alta performance dotados de injeção eletrônica, multiválvulas de turbo alimentados. Proporciona menor consumo de 
            lubrificante e economia de combustível. Atende especificação API SN. Grau SAE 15W40.
            
            Composição química: Óleo mineral e Básico do grupo III, anticorrosivo, antidesgastante, antiespumante, 
            antioxidante, detergente, dispersante e agente de reserva alcalina, melhorador de índice de viscosidade e 
            abaixador de fluidez.',
            //'valor' => 999.99,
            'imagem' => 'images/Produtos/img-probasic-15w40-1.png',
            'categoria_id' => 1,
            'ficha' => "Fichas técnicas Dulub atualizadas/fichas técnicas e fispq's ciclo otto/DULUB PROBASIC 15W40 SN rev 19.pdf",
            'fispq' => "Fichas técnicas Dulub atualizadas/fichas técnicas e fispq's ciclo otto/FISPQ Dulub Probasic 15W40 SN rev 19.pdf"
        ]);

        /* DB::table('produtos')->insert([
            'nome' => 'SINTECH 5W40 SL',
            'descricao' => '• GASOLINA, ETANOL E GNV
            Lubrificante multigrade, totalmente sintético de última geração, para motores a gasolina, etanol, Flex e GNV. 
            É recomendado para uso em motores de alta perfomance com injeção eletrônica, multiválvulas e turboalimentados, 
            sendo compatível com conversores catalíticos. Grau SAE 5w40.
            
            Composição Química: Base Sintética tipo III, Aditivo anti desgaste, anti corrosivo, anti oxidante, detergente, 
            dispersante, anti espumante, abaixador do ponto de fluidez, melhorador do índice de viscosidade e agente de 
            reserva alcalina.',
            //'valor' => 999.99,
            'imagem' => 'images/Produtos/SINTECH-5W40-SL.jpg',
            'categoria_id' => 1,
            'ficha' => "Fichas técnicas Dulub atualizadas/fichas técnicas e fispq's ciclo otto/",
            'fispq' => "Fichas técnicas Dulub atualizadas/fichas técnicas e fispq's ciclo otto/"
        ]); */

        DB::table('produtos')->insert([
            'nome' => 'SUPREME 15W40 SN',
            'uso' => '• GASOLINA, ETANOL E GNV',
            'descricao' => 'Óleo lubrificante mineral multiviscoso de desempenho superior para uso em modernos motores a gasolina, 
            etanol, flex e GNV. Atende nível de desempenho API SN. Pode ser usado em substituição aos óleos com nível 
            API SF, SG, SH e SJ. Grau SAE 15W40.
            
            Composição Química: Óleo mineral selecionado, anti corrosivo, anti desgaste, anti espumante, anti oxidante, 
            detergente, dispersante, agente de reserva alcalina, melhorador do índice de viscosidade e abaixador do 
            ponto de fluidez.',
            //'valor' => 999.99,
            'imagem' => 'images/Produtos/img-supreme-15w40-3.png',
            'categoria_id' => 1,
            'ficha' => "Fichas técnicas Dulub atualizadas/fichas técnicas e fispq's ciclo otto/DULUB SUPREME 15W40 SN rev 19.pdf",
            'fispq' => "Fichas técnicas Dulub atualizadas/fichas técnicas e fispq's ciclo otto/FISPQ Dulub Supreme 15W40 SN rev 19.pdf" 
        ]);

        DB::table('produtos')->insert([
            'nome' => 'SUPREME 20W50 SN',
            'uso' => '• GASOLINA, ETANOL E GNV',
            'descricao' => 'Óleo lubrificante mineral multiviscoso de última geração utilizado em modernos motoresdos automóveis atuais. 
            Garante uma perfeita lubrificação do motor, tanto nas partidas frio quanto nas temperaturas de funcionamento do 
            veículo. O óleo Dulub Supreme atende ao nível de desempenho API SL e é indicado para todos os motores a gasolina, 
            etanol ou GNV de todas as marcas e potências. Possui Grau SAE 20w50.
            
            Composição Química: Óleo mineral selecionado, anti corrosivo, anti desgaste, anti espumante, anti oxidante, 
            detergente, dispersante, agente de reserva alcalina, melhorador do índice de viscosidade e abaixador do ponto 
            de fluidez.',
            //'valor' => 999.99,
            'imagem' => 'images/Produtos/img-supreme-20w50-1.png',
            'categoria_id' => 1,
            'ficha' => "Fichas técnicas Dulub atualizadas/fichas técnicas e fispq's ciclo otto/DULUB SUPREME 20W50 SN rev 19.pdf",
            'fispq' => "Fichas técnicas Dulub atualizadas/fichas técnicas e fispq's ciclo otto/FISPQ Dulub Supreme 20W50 SN rev 19.pdf"  
        ]);

        DB::table('produtos')->insert([
            'nome' => 'FLUIDTECH 5W30 SN',
            'uso' => '• GASOLINA, ETANOL, FLEX E GNV',
            'descricao' => 'Lubrificante 100% sintético de última geração para motores a gasolina, etanol, flex e GNV. É recomendado para 
            uso em todos os motores de alta performance. Seu pacote de aditivos garante maior limpeza dos pistões, redução de 
            formação de borra e conservação do sistema catalítico dos automóveis. Atende as especificações API SN / ILSAC GF-5. 
            Grau SAE 5W30.
            
            Composição química: Básico do grupo III, anticorrosivo, antidesgaste, antiespumante, antioxidante, detergente, 
            dispersante e agente de reserva alcalina, melhorador de índice de viscosidade e abaixador de fluidez.',
            //'valor' => 999.99,
            'imagem' => 'images/Produtos/img-fluidtech-5w30-1.png',
            'categoria_id' => 1,
            'ficha' => "Fichas técnicas Dulub atualizadas/fichas técnicas e fispq's ciclo otto/DULUB FLUIDTECH 5W30 SN rev 19.pdf",
            'fispq' => "Fichas técnicas Dulub atualizadas/fichas técnicas e fispq's ciclo otto/FISPQ Dulub Fluidtech 5W30 SN rev 19.pdf"   
        ]);

        DB::table('produtos')->insert([
            'nome' => 'FLUIDTECH 5W40 SN',
            'uso' => '• GASOLINA, ETANOL, FLEX E GNV',
            'descricao' => 'Lubrificante 100% sintético de última geração para motores a gasolina, etanol, flex e GNV. 
            É recomendado para uso em todos os motores de alta performance. Seu pacote de aditivos garante maior limpeza 
            dos pistões, redução de formação de borra e conservação do sistema catalítico dos automóveis. 
            Atende as especificações API SN / ILSAC GF-5. Grau SAE 5W40
            
            Composição química: Básico do grupo III, anticorrosivo, antidesgaste, antiespumante, antioxidante, detergente, 
            dispersante e agente de reserva alcalina, melhorador de índice de viscosidade e abaixador de fluidez.',
            //'valor' => 999.99,
            'imagem' => 'images/Produtos/img-fluidtech-5w40-1.png',
            'categoria_id' => 1,
            'ficha' => "Fichas técnicas Dulub atualizadas/fichas técnicas e fispq's ciclo otto/DULUB FLUIDTECH 5W40 SN rev 19.pdf",
            'fispq' => "Fichas técnicas Dulub atualizadas/fichas técnicas e fispq's ciclo otto/FISPQ Dulub Fluidtech 5W40 SN rev 19.pdf"
        ]);

        DB::table('produtos')->insert([
            'nome' => 'FLUIDTECH 10W30 SN',
            'uso' => '• GASOLINA, ETANOL, FLEX E GNV',
            'descricao' => 'Lubrificante 100% sintético de última geração para motores a gasolina, etanol, flex e GNV. 
            É recomendado para uso em todos os motores de alta performance. Seu pacote de aditivos garante maior 
            limpeza dos pistões, redução de formação de borra e conservação do sistema catalítico dos automóveis. 
            Atende as especificações API SN / ILSAC GF-5. Grau SAE 10W30.
            
            Composição química: Básico do grupo III, anticorrosivo, antidesgaste, antiespumante, antioxidante, 
            detergente, dispersante e agente de reserva alcalina, melhorador de índice de viscosidade e abaixador 
            de fluidez.',
            //'valor' => 999.99,
            'imagem' => 'images/Produtos/img-fluidtech-10w30-1.png',
            'categoria_id' => 1,
            'ficha' => "Fichas técnicas Dulub atualizadas/fichas técnicas e fispq's ciclo otto/DULUB FLUIDTECH 10W30 SN rev 19.pdf",
            'fispq' => "Fichas técnicas Dulub atualizadas/fichas técnicas e fispq's ciclo otto/FISPQ Dulub Fluidtech 10W30 SN rev 19.pdf"
        ]);

        DB::table('produtos')->insert([
            'nome' => 'FLUIDTECH 10W40 SN',
            'uso' => '• GASOLINA, ETANOL, FLEX E GNV',
            'descricao' => 'Lubrificante 100% sintético de última geração para motores a gasolina, etanol, flex e GNV. 
            É recomendado para uso em todos os motores de alta performance. Seu pacote de aditivos garante maior limpeza 
            dos pistões, redução de formação de borra e conservação do sistema catalítico dos automóveis. 
            Atende especificação API SN. Grau SAE 10W40.
            
            Composição química: Básico do grupo III, anticorrosivo, antidesgaste, antiespumante, antioxidante, detergente, 
            dispersante e agente de reserva alcalina, melhorador de índice de viscosidade e abaixador de fluidez.',
            //'valor' => 999.99,
            'imagem' => 'images/Produtos/img-fluidtech-10w40-1.png',
            'categoria_id' => 1,
            'ficha' => "Fichas técnicas Dulub atualizadas/fichas técnicas e fispq's ciclo otto/DULUB FLUIDTECH 10W40 SN rev 19.pdf",
            'fispq' => "Fichas técnicas Dulub atualizadas/fichas técnicas e fispq's ciclo otto/FISPQ Dulub Fluidtech 10W40 SN rev 19.pdf"
        ]);

        DB::table('produtos')->insert([
            'nome' => 'MAX 2 TURBO 15W40',
            'uso' => '• MOTOR DIESEL',
            'descricao' => 'Óleo de base mineral multiviscoso para motores diesel turbo alimentado e/ou motores de alta potência de todas as marcas.
            
            Óleo MAX 2 TURBO API-CH4, possui a capacidade de reduzir o desgaste das partes móveis do motor além de 
            proteger contra corrosão. Possui Grau SAE 15W40. Atende as especificações API-CH4.
            
            Composição Química: Óleos minerais e aditivos detergente dispersante, anti espumante, anti desgaste e anti oxidante.',
            //'valor' => 999.99,
            'imagem' => 'images/Produtos/img-max2turbo-15w40.png',
            'categoria_id' => 2,
            'ficha' => "Fichas técnicas Dulub atualizadas/fichas técnicas e fispq's ciclo diesel/DULUB MAX 2 15W40 CH4 rev 19.pdf",
            'fispq' => "Fichas técnicas Dulub atualizadas/fichas técnicas e fispq's ciclo diesel/FISPQ Dulub Max2 Turbo 15W40 CH-4 rev 19.pdf"
        ]);

        DB::table('produtos')->insert([
            'nome' => 'MAX 3 TURBO 10W40',
            'uso' => '• MOTOR DIESEL',
            'descricao' => 'Lubrificante semissintético multiviscoso para motores diesel turbinados que operam em condições extremas 
            de severidade. Desenvolvido para atender as totais exigências dos modernos motores, Possui Grau SAE 10W40. 
            Atende as especificações API CI-4, ACEA E7-12, ACEA A3/B3/B4-12, MB 229.1, MB 228.3, VOLVO VDS-3 e MAN3275-1.
            
            Composição química: óleo mineral, base sintética  grupo III e aditivos detergentes, dispersante, 
            antiespumante, antidesgaste, antiatrito e antioxidantes.',
            //'valor' => 999.99,
            'imagem' => 'images/Produtos/img-max3turbo-10w40-1.png',
            'categoria_id' => 2,
            'ficha' => "Fichas técnicas Dulub atualizadas/fichas técnicas e fispq's ciclo diesel/DULUB MAX 3 10W40 CI-4 rev 19.pdf",
            'fispq' => "Fichas técnicas Dulub atualizadas/fichas técnicas e fispq's ciclo diesel/FISPQ Dulub Max3 Turbo 10W40 CI-4 rev 19.pdf"
        ]);

        DB::table('produtos')->insert([
            'nome' => 'MAX 3 TURBO 15W40',
            'uso' => '• MOTOR DIESEL',
            'descricao' => 'Lubrificante mineral multiviscoso para motores diesel turbinados que operam em condições extremas de 
            severidade. Desenvolvido para atender as totais exigências dos modernos motores, Possui Grau SAE 15W40. 
            Atende as especificações API CI-4, ACEA E7-12, MB 229.1, MB 228.3, VOLVO VDS-3 e MAN3275-1.
            
            Composição química: óleo mineral selecionado e aditivos detergentes, dispersante, antiespumante, 
            antidesgaste, antiatrito e antioxidantes.',
            //'valor' => 999.99,
            'imagem' => 'images/Produtos/img-max3turbo-15w40-1.png',
            'categoria_id' => 2,
            'ficha' => "Fichas técnicas Dulub atualizadas/fichas técnicas e fispq's ciclo diesel/DULUB MAX 3 15W40 CI-4 rev 19.pdf",
            'fispq' => "Fichas técnicas Dulub atualizadas/fichas técnicas e fispq's ciclo diesel/FISPQ Dulub Max3 Turbo 15W40 CI-4 rev 19.pdf"
        ]);

        DB::table('produtos')->insert([
            'nome' => 'MAX 4 TURBO 15W40 CJ4',
            'uso' => '• MOTOR DIESEL',
            'descricao' => 'Óleo lubrificante mineral de última geração para motores diesel turbinados de alta performance e de baixas 
            emissões atmosféricas, Possui Grau SAE 15W40. Atende as especificações API CJ-4 ACEA E912, MB 228.31, MAN M3575, 
            Cummins CES 20081, Caterpillar ECF-3, Volvo VDS-4.
            
            Composição química: óleo mineral selecionado do grupo II e aditivos detergentes, dispersante, antiespumante, 
            antidesgaste, antiatrito e antioxidantes.',
            //'valor' => 999.99,
            'imagem' => 'images/Produtos/img-max4turbo-15w40-1.png',
            'categoria_id' => 2,
            'ficha' => "Fichas técnicas Dulub atualizadas/fichas técnicas e fispq's ciclo diesel/DULUB MAX 4 15W40 CJ-4 rev 19.pdf",
            'fispq' => "Fichas técnicas Dulub atualizadas/fichas técnicas e fispq's ciclo diesel/FISPQ Dulub Max4 Turbo 15W40 CJ-4 rev 19.pdf"
        ]);

        DB::table('produtos')->insert([
            'nome' => 'MOTO 4T EXTREME',
            'uso' => '• MOTOCICLETAS',
            'descricao' => 'Dulub Moto 4T Extreme é um lubrificante de base mineral de avançada tecnologia para uso em motores de 
            motocicletas 4 tempos. Sua formulação possui um pacote de aditivos que proporcionam insuperável performance e 
            proteção sob os mais variados tipos de condições de uso. Uma importante característica do Dulub Moto 4T Extreme 
            é o seu baixíssimo coeficiente de atrito, o que confere um incremento de potência ao motor. 
            Atende as especificações de serviço API-SJ.
            
            Dulub Moto 4T Extreme é recomendado para o uso em todos os motores de motocicletas 4 tempos, 
            e especialmente desenvolvido para proporcionar superior performance aos motores que operam em condições extremas. 
            Grau SAE 20W50.
            
            Composição Química: Óleos minerais e aditivos detergentes dispersante, anti espumante, anti desgaste, 
            anti oxidante e melhoradores de índice de viscosidade e de fluidez.',
            //'valor' => 999.99,
            'imagem' => 'images/Produtos/novo-moto-extreme.png',
            'categoria_id' => 3,
            'ficha' => "Fichas técnicas Dulub atualizadas/fichas técnicas e fispq's motocicletas/DULUB MOTO 4T EXTREME rev 19.pdf",
            'fispq' => "Fichas técnicas Dulub atualizadas/fichas técnicas e fispq's motocicletas/FISPQ Dulub Moto 4T Extreme rev 19.pdf"
        ]);

        DB::table('produtos')->insert([
            'nome' => 'MOTO 2T',
            'uso' => '• MOTOCICLETAS',
            'descricao' => 'Óleo mineral para motores a gasolina de 2 tempos de superior desempenho. Indicado  para  motocicletas,  ciclomotores  e  cortadores  de  grama.
            
            • Superior  proteção  e  limpeza  de  motor
            • Elevada resistência à formação de depósito As proporções de mistura com o combustível  são  as  
            recomendadas  pelo  fabricante  do  motor.
            
            Composição Química: Óleos minerais e aditivos detergentes dispersante, anti espumante, anti desgaste, 
            anti oxidante e melhoradores de índice de viscosidade e de fluidez.',
            //'valor' => 999.99,
            'imagem' => 'images/Produtos/moto-2t.jpg',
            'categoria_id' => 3,
            'ficha' => "Fichas técnicas Dulub atualizadas/fichas técnicas e fispq's motocicletas/DULUB MOTO 2T TC rev 19.pdf",
            'fispq' => "Fichas técnicas Dulub atualizadas/fichas técnicas e fispq's motocicletas/FISPQ Dulub Moto 2T TC rev 19.pdf"
        ]);

        DB::table('produtos')->insert([
            'nome' => 'ATF 10W20 – SUFIXO A',
            'uso' => '• TRANSMISSÃO',
            'descricao' => 'Fluido adequado para a maioria dos sistemas de transmissões automáticos, direções hidráulicas e sistemas 
            hidráulicos industriais. O Óleo Dulub ATF é produto estável ao cisalhamento e mantém a sua viscosidade ao 
            longo do tempo. Atendendo especificação tipo A sufixo A. Grau SAE 10W20.
            
            Composição Química: Óleos minerais e aditivos detergente dispersante, melhorador de índice de viscosidade, 
            anti desgaste, anti oxidante e anti corrosivo.',
            //'valor' => 999.99,
            'imagem' => 'images/Produtos/ATF.jpg',
            'categoria_id' => 4,
            'ficha' => "Fichas técnicas Dulub atualizadas/OLD/ESP-ATF.pdf",
            'fispq' => "Fichas técnicas Dulub atualizadas/OLD/FISPQ-ATF.pdf"
        ]);

        DB::table('produtos')->insert([
            'nome' => 'HIPÓIDE 80W GL-4',
            'uso' => '• TRANSMISSÃO',
            'descricao' => 'Óleo para lubrificação de diferenciais hipoidais, alguns tipos de caixas de mudanças manuais, 
            caixas de direção e caixas de embreagem automotivas operando em condições de elevada severidade.
            
            O Óleo Dulub Hipóide 80W possui uma excelente estabilidade a oxidação, resistência a formação de espuma, 
            elevada proteção contra a corrosão e desempenho API GL4. Este óleo é recomendado para engrenagens de 
            carros de passeio, utilitários, caminhões, ônibus e tratores. Grau SAE 80W.
            
            Composição Química: Óleos minerais e aditivos anti oxidante, anti desgaste, anti espumante, e extrema pressão.',
            //'valor' => 999.99,
            'imagem' => 'images/Produtos/HIPOIDE_80W_GL4.jpg',
            'categoria_id' => 4,
            'ficha' => "Fichas técnicas Dulub atualizadas/OLD/ESP-HIPOIDE-GL4série.pdf",
            'fispq' => "Fichas técnicas Dulub atualizadas/OLD/FISPQ-80W-GL4.pdf"
        ]);

        DB::table('produtos')->insert([
            'nome' => 'HIPÓIDE S 85W140 GL5',
            'uso' => '• TRANSMISSÃO',
            'descricao' => 'Óleo para lubrificação de diferenciais hipoidais, alguns tipos de caixas de mudanças manuais, 
            caixas de direção e caixas de embreagem automotivas operando em condições de elevada severidade.
            
            O Óleo Dulub Hipóide 85W140 possui uma excelente estabilidade a oxidação, resistência a formação de espuma, 
            elevada proteção contra a corrosão e desempenho API GL5. Este óleo é recomendado para engrenagens de 
            carros de passeio, utilitários, caminhões, ônibus e tratores. Grau SAE 85W140.
            
            Composição Química: Óleos minerais e aditivos anti oxidante, anti desgaste, anti espumante, e extrema pressão.',
            //'valor' => 999.99,
            'imagem' => 'images/Produtos/HIPOIDE_85w40_GL5.jpg',
            'categoria_id' => 4,
            'ficha' => "Fichas técnicas Dulub atualizadas/OLD/ESP-HIPOIDE-S-GL5série1.pdf",
            'fispq' => "Fichas técnicas Dulub atualizadas/OLD/FISPQ-85W140-GL5.pdf"
        ]);

        DB::table('produtos')->insert([
            'nome' => 'HIPÓIDE 90 GL-4',
            'uso' => '• TRANSMISSÃO',
            'descricao' => 'Óleo para lubrificação de diferenciais hipoidais, alguns tipos de caixas de mudanças manuais, 
            caixas de direção e caixas de embreagem automotivas operando em condições de elevada severidade.
            
            O Óleo Dulub Hipóide 90 possui uma excelente estabilidade a oxidação, resistência a formação de espuma, 
            elevada proteção contra a corrosão e desempenho API GL4. Este óleo é recomendado para engrenagens de 
            carros de passeio, utilitários, caminhões, ônibus e tratores. Grau SAE 90.
            
            Composição Química: Óleos minerais e aditivos anti oxidante, anti desgaste, anti espumante, e extrema pressão.',
            //'valor' => 999.99,
            'imagem' => 'images/Produtos/HIPOIDE_90_GL4.jpg',
            'categoria_id' => 4,
            'ficha' => "Fichas técnicas Dulub atualizadas/OLD/ESP-HIPOIDE-GL4série.pdf",
            'fispq' => "Fichas técnicas Dulub atualizadas/OLD/FISPQ-HIP-90-GL4.pdf"
        ]);

        DB::table('produtos')->insert([
            'nome' => 'HIPÓIDE S 90 GL5',
            'uso' => '• TRANSMISSÃO',
            'descricao' => 'Óleo para lubrificação de diferenciais hipoidais, alguns tipos de caixas de mudanças manuais, 
            caixas de direção e caixas de embreagem automotivas operando em condições de elevada severidade.
            
            O Óleo Dulub Hipóide S 90 possui uma excelente estabilidade a oxidação, resistência a formação de espuma, 
            elevada proteção contra a corrosão e desempenho API GL5. Este óleo é recomendado para engrenagens de carros 
            de passeio, utilitários, caminhões, ônibus e tratores. Grau SAE 90.
            
            Composição Química: Óleos minerais e aditivos anti oxidante, anti desgaste, anti espumante, e extrema pressão.',
            //'valor' => 999.99,
            'imagem' => 'images/Produtos/HIPOIDE_90_GL5.jpg',
            'categoria_id' => 4,
            'ficha' => "Fichas técnicas Dulub atualizadas/OLD/ESP-HIPOIDE-S-GL5série1.pdf",
            'fispq' => "Fichas técnicas Dulub atualizadas/OLD/FISPQ-HIP-90-GL5.pdf"
        ]);

        DB::table('produtos')->insert([
            'nome' => 'HIPÓIDE 140 GL-4',
            'uso' => '• TRANSMISSÃO',
            'descricao' => 'Óleo para lubrificação de diferenciais hipoidais, alguns tipos de caixas de mudanças manuais, 
            caixas de direção e caixas de embreagem automotivas operando em condições de elevada severidade.
            
            O Óleo Dulub Hipóide 140 possui uma excelente estabilidade a oxidação, resistência a formação de espuma, 
            elevada proteção contra a corrosão e desempenho API GL4. Este óleo é recomendado para engrenagens de carros 
            de passeio, utilitários, caminhões, ônibus e tratores. Grau SAE 140.
            
            Composição Química: Óleos minerais e aditivos anti oxidante, anti desgaste, anti espumante, e extrema pressão.',
            //'valor' => 999.99,
            'imagem' => 'images/Produtos/HIPOIDE_140_GL4.jpg',
            'categoria_id' => 4,
            'ficha' => "Fichas técnicas Dulub atualizadas/OLD/ESP-HIPOIDE-GL4série.pdf",
            'fispq' => "Fichas técnicas Dulub atualizadas/OLD/FISPQ-HIP-140-GL4.pdf"
        ]);

        DB::table('produtos')->insert([
            'nome' => 'HIPÓIDE S 140 GL5',
            'uso' => '• TRANSMISSÃO',
            'descricao' => 'Óleo para lubrificação de diferenciais hipoidais, alguns tipos de caixas de mudanças manuais, 
            caixas de direção e caixas de embreagem automotivas operando em condições de elevada severidade.
            
            O Óleo Dulub Hipóide S 140 possui uma excelente estabilidade a oxidação, resistência a formação de espuma, 
            elevada proteção contra a corrosão e desempenho API GL5. Este óleo é recomendado para engrenagens de carros 
            de passeio, utilitários, caminhões, ônibus e tratores. Grau SAE 140.
            
            Composição Química: Óleos minerais e aditivos anti oxidante, anti desgaste, anti espumante, e extrema pressão.',
            //'valor' => 999.99,
            'imagem' => 'images/Produtos/HIPOIDE_140_GL5.jpg',
            'categoria_id' => 4,
            'ficha' => "Fichas técnicas Dulub atualizadas/OLD/ESP-HIPOIDE-S-GL5série1.pdf",
            'fispq' => "Fichas técnicas Dulub atualizadas/OLD/FISPQ-HIP-140-GL5.pdf"
        ]);

        DB::table('produtos')->insert([
            'nome' => 'HIPÓIDE 250 GL-4',
            'uso' => '• TRANSMISSÃO',
            'descricao' => ' Óleo para lubrificação de diferenciais hipoidais, alguns tipos de caixas de mudanças manuais, 
            caixas de direção e caixas de embreagem automotivas operando em condições de elevada severidade.
            
            O Óleo Dulub Hipóide 250 possui uma excelente estabilidade a oxidação, resistência a formação de espuma, 
            elevada proteção contra a corrosão e desempenho API GL4. Este óleo é recomendado para engrenagens de carros 
            de passeio, utilitários, caminhões, ônibus e tratores. Grau SAE 250.
            
            Composição Química: Óleos minerais e aditivos anti oxidante, anti desgaste, anti espumante, e extrema pressão.',
            //'valor' => 999.99,
            'imagem' => 'images/Produtos/HIPOIDE_250_GL4.jpg',
            'categoria_id' => 4,
            'ficha' => "Fichas técnicas Dulub atualizadas/OLD/ESP-HIPOIDE-GL4série.pdf",
            'fispq' => "Fichas técnicas Dulub atualizadas/OLD/FISPQ-HIP-250-GL4.pdf"
        ]);

        /* DB::table('produtos')->insert([
            'nome' => 'COLDTECH 32',
            'descricao' => ''
        ]); */
    }
}
