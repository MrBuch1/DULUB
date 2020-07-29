<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use GuzzleHttp\Exception\GuzzleException;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $token = 'eyJhbGciOiJSUzI1NiIsImtpZCI6ImE0YzhlY2FlMTdmMjQxNTJhOTZjNGZkNWMxNzE5NGNhIiwidHlwIjoiSldUIn0.eyJzdWIiOiIxMjMwNyIsInVuaXF1ZV9uYW1lIjoiMTIzMDciLCJpYXQiOjE1OTUyNDkxNzQsImp0aSI6ImI2NjZiMDRhMWJlNzRkMjU5MzJiODUyZWUxZTkzMDExIiwiU2l0ZSI6IkR1bmF4IiwiQXBsaWNhY2FvIjoiRm9yY2FEZVZlbmRhcyIsIkNvbmV4YW8iOiJBVVRIXzEyMzA3X2NlNTgxYjI0YjliOTRmNzQ5ODAzOTg0MWRjYjQ2NjJkIiwiR3J1cG9EZVdlYlNlcnZpY2UiOlsiX2d3QWdlbnRlQ29icmFkb3JGb3JjYURlVmVuZGFzOmZvcmNhZGV2ZW5kYXMvYWdlbnRlY29icmFkb3I6MiIsIl9nd0F0aXZpZGFkZUZvcmNhRGVWZW5kYXM6Zm9yY2FkZXZlbmRhcy9hdGl2aWRhZGU6MiIsIl9nd0NlbnRyb0RlQ3VzdG9Gb3JjYURlVmVuZGFzOmZvcmNhZGV2ZW5kYXMvY2VudHJvZGVjdXN0bzoyIiwiX2d3Q2xpZW50ZUZvcmNhRGVWZW5kYXM6Zm9yY2FkZXZlbmRhcy9jbGllbnRlOjIiLCJfZ3dDb21pc3PDo29Gb3JjYURlVmVuZGFzOmZvcmNhZGV2ZW5kYXMvY29taXNzYW86MiIsIl9nd0NvbnRhc0FSZWNlYmVyRm9yY2FEZVZlbmRhczpmb3JjYWRldmVuZGFzL2NvbnRhc2FyZWNlYmVyOjIiLCJfZ3dFbXByZXNhRm9yY2FEZVZlbmRhczpmb3JjYWRldmVuZGFzL2VtcHJlc2E6MiIsIl9nd0VzdG9xdWVGb3JjYURlVmVuZGFzOmZvcmNhZGV2ZW5kYXMvbGFuY2FtZW50b2RlZXN0b3F1ZToyIiwiX2d3RmF0dXJhbWVudG9Gb3JjYURlVmVuZGFzOmZvcmNhZGV2ZW5kYXMvZmF0dXJhbWVudG86MiIsIl9nd0ZpbmFsaWRhZGVGb3JjYURlVmVuZGFzOmZvcmNhZGV2ZW5kYXMvZmluYWxpZGFkZToyIiwiX2d3Rm9ybWFEZVBhZ2FtZW50b0ZvcmNhRGVWZW5kYXM6Zm9yY2FkZXZlbmRhcy9mb3JtYWRlcGFnYW1lbnRvOjIiLCJfZ3dJdGVtRG9QZWRpZG9Gb3JjYURlVmVuZGFzOmZvcmNhZGV2ZW5kYXMvaXRlbWRvcGVkaWRvOjIiLCJfZ3dMb2NhbGl6YWNhb0ZvcmNhRGVWZW5kYXM6Zm9yY2FkZXZlbmRhcy9sb2NhbGl6YWNhbzoyIiwiX2d3TWVyY2Fkb3JpYUZvcmNhRGVWZW5kYXM6Zm9yY2FkZXZlbmRhcy9tZXJjYWRvcmlhOjIiLCJfZ3dNb2VkYUZvcmNhRGVWZW5kYXM6Zm9yY2FkZXZlbmRhcy9tb2VkYToyIiwiX2d3UGVkaWRvRm9yY2FEZVZlbmRhczpmb3JjYWRldmVuZGFzL3BlZGlkbzoyIiwiX2d3UG9saXRpY2FEZUNvYnJhbmNhRm9yY2FEZVZlbmRhczpmb3JjYWRldmVuZGFzL2RldGFsaGVwb2xpdGljYWRlY29icmFuY2E6MiIsIl9nd1BvbGl0aWNhRGVQcmVjb0ZvcmNhRGVWZW5kYXM6Zm9yY2FkZXZlbmRhcy9vYmpldG9kb2RldGFsaGVkYXBvbGl0aWNhZGVwcmVjb3M6MiIsIl9nd1RpcG9EZUNvYnJhbmNhRm9yY2FEZVZlbmRhczpmb3JjYWRldmVuZGFzL3RpcG9kZWNvYnJhbmNhOjIiLCJfZ3dUaXBvRGVEb2N1bWVudG9Gb3JjYURlVmVuZGFzOmZvcmNhZGV2ZW5kYXMvdGlwb2RlZG9jdW1lbnRvOjIiLCJfZ3dUaXBvRGVMb2dyYWRvdXJvRm9yY2FEZVZlbmRhczpmb3JjYWRldmVuZGFzL3RpcG9kZWxvZ3JhZG91cm86MiIsIl9nd1RpcG9EZU9wZXJhY2FvRm9yY2FEZVZlbmRhczpmb3JjYWRldmVuZGFzL3RpcG9kZW9wZXJhY2FvOjIiLCJfZ3dUdXJub0ZvcmNhRGVWZW5kYXM6Zm9yY2FkZXZlbmRhcy90dXJubzoyIiwiX2d3VW5pZGFkZURlTWVkaWRhRm9yY2FEZVZlbmRhczpmb3JjYWRldmVuZGFzL3VuaWRhZGVkZW1lZGlkYToyIiwiX2d3VmVuZGVkb3JGb3JjYURlVmVuZGFzOmZvcmNhZGV2ZW5kYXMvdmVuZGVkb3I6MiJdLCJXZWJTZXJ2aWNlIjpbIl93c0NvbnN1bHRhckFnZW50ZUNvYnJhZG9yOmNvbnN1bHRhcjoyIiwiX3dzQ29uc3VsdGFyQXRpdmlkYWRlOmNvbnN1bHRhcjoyIiwiX3dzQ29uc3VsdGFyQ2VudHJvRGVDdXN0b3M6Y29uc3VsdGFyOjIiLCJfd3NDb25zdWx0YXJDbGllbnRlczpjb25zdWx0YXI6MiIsIl93c0NvbnN1bHRhckNvbWlzc29lczpjb25zdWx0YXI6MiIsIl93c0NvbnN1bHRhckNvbnRhc0FSZWNlYmVyOmNvbnN1bHRhcjoyIiwiX3dzQ29uc3VsdGFyRW1wcmVzYTpjb25zdWx0YXI6MiIsIl93c0NvbnN1bHRhckVzdG9xdWU6Y29uc3VsdGFyOjIiLCJfd3NDb25zdWx0YXJGYXR1cmFtZW50bzpjb25zdWx0YXI6MiIsIl93c0NvbnN1bHRhckZpbmFsaWRhZGU6Y29uc3VsdGFyOjIiLCJfd3NDb25zdWx0YXJGb3JtYURlUGFnYW1lbnRvOmNvbnN1bHRhcjoyIiwiX3dzQ29uc3VsdGFyUGVkaWRvczpjb25zdWx0YXI6MiIsIl93c0NvbnN1bHRhclBlZGlkb3NQZW5kZW50ZURlRW1iYXJxdWU6cGVuZGVudGVkZWVtYmFycXVlOjIiLCJfd3NDb25zdWx0YXJQZWRpZG9zRW1iYXJjYWRvUGVuZGVudGU6ZW1iYXJjYWRvcGVuZGVudGU6MiIsIl93c0NvbnN1bHRhclBhaXM6Y29uc3VsdGFycGFpczoyIiwiX3dzQ29uc3VsdGFyRXN0YWRvOmNvbnN1bHRhcmVzdGFkbzoyIiwiX3dzQ29uc3VsdGFyQ2lkYWRlOmNvbnN1bHRhcmNpZGFkZToyIiwiX3dzQ29uc3VsdGFyQmFpcnJvOmNvbnN1bHRhcmJhaXJybzoyIiwiX3dzQ29uc3VsdGFyTWVyY2Fkb3JpYTpjb25zdWx0YXI6MiIsIl93c0NvbnN1bHRhck1vZWRhOmNvbnN1bHRhcjoyIiwiX3dzSW5jbHVpclBlZGlkbzppbmNsdWlyOjIiLCJfd3NDb25zdWx0YXJGaWx0cm9Db2JyYW5jYTpmaWx0cm9jb2JyYW5jYToyIiwiX3dzQ29uc3VsdGFyVGFiZWxhRGVQcmVjb3M6Y29uc3VsdGFydGFiZWxhZGVwcmVjb3M6MiIsIl93c0NvbnN1bHRhclRpcG9EZUNvYnJhbmNhOmNvbnN1bHRhcjoyIiwiX3dzQ29uc3VsdGFyVGlwb0RlRG9jdW1lbnRvOmNvbnN1bHRhcjoyIiwiX3dzQ29uc3VsdGFyVGlwb0RlTG9ncmFkb3Vybzpjb25zdWx0YXI6MiIsIl93c0NvbnN1bHRhclRpcG9EZU9wZXJhY2FvOmNvbnN1bHRhcjoyIiwiX3dzQ29uc3VsdGFyVHVybm86Y29uc3VsdGFyOjIiLCJfd3NDb25zdWx0YXJVbmlkYWRlRGVNZWRpZGE6Y29uc3VsdGFyOjIiLCJfd3NDb25zdWx0YXJWZW5kZWRvcjpjb25zdWx0YXI6MiJdLCJFbmRlcmVjb0RhSW5zdGFuY2lhIjpbImh0dHBzOi8vdmlzaW9ucy50b3BtYW5hZ2VyLmNvbS5ici9TZXJ2aWRvcl8yLjEuMV9hcGk6X2d3QWdlbnRlQ29icmFkb3JGb3JjYURlVmVuZGFzLF9nd0F0aXZpZGFkZUZvcmNhRGVWZW5kYXMsX2d3Q2VudHJvRGVDdXN0b0ZvcmNhRGVWZW5kYXMsX2d3Q2xpZW50ZUZvcmNhRGVWZW5kYXMsX2d3Q29taXNzw6NvRm9yY2FEZVZlbmRhcyxfZ3dDb250YXNBUmVjZWJlckZvcmNhRGVWZW5kYXMsX2d3RW1wcmVzYUZvcmNhRGVWZW5kYXMsX2d3RXN0b3F1ZUZvcmNhRGVWZW5kYXMsX2d3RmF0dXJhbWVudG9Gb3JjYURlVmVuZGFzLF9nd0ZpbmFsaWRhZGVGb3JjYURlVmVuZGFzLF9nd0Zvcm1hRGVQYWdhbWVudG9Gb3JjYURlVmVuZGFzLF9nd0l0ZW1Eb1BlZGlkb0ZvcmNhRGVWZW5kYXMsX2d3TG9jYWxpemFjYW9Gb3JjYURlVmVuZGFzLF9nd01lcmNhZG9yaWFGb3JjYURlVmVuZGFzLF9nd01vZWRhRm9yY2FEZVZlbmRhcyxfZ3dQb2xpdGljYURlQ29icmFuY2FGb3JjYURlVmVuZGFzLF9nd1BvbGl0aWNhRGVQcmVjb0ZvcmNhRGVWZW5kYXMsX2d3VGlwb0RlQ29icmFuY2FGb3JjYURlVmVuZGFzLF9nd1RpcG9EZURvY3VtZW50b0ZvcmNhRGVWZW5kYXMsX2d3VGlwb0RlTG9ncmFkb3Vyb0ZvcmNhRGVWZW5kYXMsX2d3VGlwb0RlT3BlcmFjYW9Gb3JjYURlVmVuZGFzLF9nd1R1cm5vRm9yY2FEZVZlbmRhcyxfZ3dVbmlkYWRlRGVNZWRpZGFGb3JjYURlVmVuZGFzLF9nd1ZlbmRlZG9yRm9yY2FEZVZlbmRhcyIsImh0dHA6Ly9sb2NhbGhvc3Q6MzUwMDA6X2d3UGVkaWRvRm9yY2FEZVZlbmRhcyJdLCJuYmYiOjE1OTUyNDkxMTQsImV4cCI6MTYxMjUyOTE3NCwiaXNzIjoiYXV0aC52aXNpb25zIn0.ehtgTRL1jO9Id6lchP4EA-c-kgP9hF9cLgQ0badQZ2PcxdwBpDdVi14iRTE0qk6MoHTqQQr_mH8N7JzmbX0JyV_M5Axe3y7RPDU5mJTlnvaq9opImA6s3H7y-HXdt9MhrxcdYRU6qXZqiCkwzQyFcV4BrBg7bE3b5XNWswqW4-4v4HP22zSsBy_TlZoVQNrIEwLnefnYKFeoT5pdxKHne29TCpGF6zhhlKODS2TqUHCAPqvMa2pi4I8-7wUqYg5roVrQ2seeupPbsDAKryy3FPj96fM56FORQMg_dZ6fGaPIQsK8Tpgemu776_7kEaNUnER4JqhKV_aueadh6lCeKg';
        
        $client = new GuzzleHttp\Client();

        $vendedor = json_decode($client->request('GET', 'https://visions.topmanager.com.br/Servidor_2.1.1_api/forcadevendas/vendedor/consultar',
        ['headers' => ['Content-Type' => 'application/json', 'Authorization' => 'Bearer ' . $token]])->getBody(), true);
    
        foreach($vendedor as $v)
        {
            DB::table('users')->insert([
                'id' => $v['id'],
                'name' => $v['nome'],
                'password' => Hash::make('123')
            ]);
        }

        DB::table('users')->insert([
            'id' => 1,
            'name' => 'Publi',
            //'email' => 'publi@dulub.com.br',
            'password' => Hash::make('Dulub@123'),
        ]);

        /*DB::table('users')->insert([
            'name' => 'Adilson Braitt Lima',
            'uf' => 'BA',
            'email' => 'adilson@dulub.com',
            'password' => Hash::make('123'),
        ]);

        DB::table('users')->insert([
            'name' => 'Alexandre José de Araujo Pereira Lacerda',
            'uf' => 'PB',
            'email' => 'alexandrenegocios.dulub@gmail.com',
            'password' => Hash::make('123'),
        ]);

        DB::table('users')->insert([
            'name' => 'Antonio Alves Filho',
            'uf' => 'AL',
            'email' => 'alves-mcz@hotmail.com',
            'password' => Hash::make('123'),
        ]);

        DB::table('users')->insert([
            'name' => 'Celio Zamprogno',
            'uf' => 'ES',
            'email' => 'celio@dulub.com.br',
            'password' => Hash::make('123'),
        ]);

        DB::table('users')->insert([
            'name' => 'Cristiano Leão Magalhães',
            'uf' => 'PA',
            'email' => 'cristiano@dulub.com',
            'password' => Hash::make('123'),
        ]);

        DB::table('users')->insert([
            'name' => 'Ladimilson Ciríaco Lobato Reis',
            'uf' => 'PA',
            'email' => 'netinhos.artur@gmail.com',
            'password' => Hash::make('123'),
        ]);

        DB::table('users')->insert([
            'name' => 'Orion Araujo Pereira',
            'uf' => 'CE',
            'email' => 'araujo@dulub.com',
            'password' => Hash::make('123'),
        ]);

        DB::table('users')->insert([
            'name' => 'Alberto Valan',
            'coordenador' => 'Adilson Braitt Lima',
            'uf' => 'BA',
            'email' => 'betovalan.dulub@gmail.com',
            'password' => Hash::make('123'),
        ]);

        DB::table('users')->insert([
            'name' => 'Eizelton Borges do Santos',
            'coordenador' => 'Adilson Braitt Lima',
            'uf' => 'BA',
            'email' => 'elizeltonborges@gmail.com',
            'password' => Hash::make('123'),
        ]);

        DB::table('users')->insert([
            'name' => 'Franklin Cunha',
            'coordenador' => 'Adilson Braitt Lima',
            'uf' => 'BA',
            'email' => 'franklindulub@gmail.com',
            'password' => Hash::make('123'),
        ]);

        DB::table('users')->insert([
            'name' => 'Geisval Sena',
            'coordenador' => 'Adilson Braitt Lima',
            'uf' => 'BA',
            'email' => 'geisval.sena@dulub.com.br',
            'password' => Hash::make('123'),
        ]);

        DB::table('users')->insert([
            'name' => 'Jackson Gomes Barbosa Filho',
            'coordenador' => 'Adilson Braitt Lima',
            'uf' => 'BA',
            'email' => 'jacksongb.representacoes@gmail.com',
            'password' => Hash::make('123'),
        ]);

        DB::table('users')->insert([
            'name' => 'Marcos Roberio',
            'coordenador' => 'Adilson Braitt Lima',
            'uf' => 'BA',
            'email' => 'marcosroberiochaves@hotmail.com',
            'password' => Hash::make('123'),
        ]);

        DB::table('users')->insert([
            'name' => 'Antonio Pedro da Silva Junior',
            'coordenador' => 'Alexandre José de Araujo Pereira Lacerda',
            'uf' => 'PE',
            'email' => 'jrgullit@hotmail.com',
            'password' => Hash::make('123'),
        ]);

        DB::table('users')->insert([
            'name' => 'Fabio Augusto de Araujo Pereira',
            'coordenador' => 'Alexandre José de Araujo Pereira Lacerda',
            'uf' => 'PE',
            'email' => 'fabio.a.lacerda@hotmail.com',
            'password' => Hash::make('123'),
        ]);

        DB::table('users')->insert([
            'name' => 'Gudemberg de Sousa Braga',
            'coordenador' => 'Alexandre José de Araujo Pereira Lacerda',
            'uf' => 'CE',
            'email' => 'gudemberg@dulub.com.br',
            'password' => Hash::make('123'),
        ]);

        DB::table('users')->insert([
            'name' => 'Josinaldo de Andrade',
            'coordenador' => 'Alexandre José de Araujo Pereira Lacerda',
            'uf' => 'PB',
            'email' => 'josinaldodeandrade@yahoo.com.br',
            'password' => Hash::make('123'),
        ]);

        DB::table('users')->insert([
            'name' => 'Lanne Rodrigues Oliveira',
            'coordenador' => 'Alexandre José de Araujo Pereira Lacerda',
            'uf' => 'AL',
            'email' => 'lannevendas@hotmail.com',
            'password' => Hash::make('123'),
        ]);

        DB::table('users')->insert([
            'name' => 'Marconi Flavio da Silva',
            'coordenador' => 'Alexandre José de Araujo Pereira Lacerda',
            'uf' => 'PE',
            'email' => 'marconiecc@hotmail.com',
            'password' => Hash::make('123'),
        ]);

        DB::table('users')->insert([
            'name' => 'Marcos Antonio Barbosa de Gusmao',
            'coordenador' => 'Alexandre José de Araujo Pereira Lacerda',
            'uf' => 'PE',
            'email' => 'marcos.gusmao@dulub.com.br',
            'password' => Hash::make('123'),
        ]);

        DB::table('users')->insert([
            'name' => 'Wanderllan de Azevedo Freire',
            'coordenador' => 'Alexandre José de Araujo Pereira Lacerda',
            'uf' => 'PB',
            'email' => 'wafst@hotmail.com',
            'password' => Hash::make('123'),
        ]);

        DB::table('users')->insert([
            'name' => 'Wilker Gleyson Matias Melo',
            'coordenador' => 'Alexandre José de Araujo Pereira Lacerda',
            'uf' => 'PB',
            'email' => 'wilker.gleyson@dulub.com.br',
            'password' => Hash::make('123'),
        ]);

        DB::table('users')->insert([
            'name' => 'Harrison Dominique dos Reis',
            'coordenador' => 'Antonio Alves Filho',
            'uf' => 'MG',
            'email' => 'vendas.dulubminas@gmail.com',
            'password' => Hash::make('123'),
        ]);

        DB::table('users')->insert([
            'name' => 'Otavio Lucas Santos Lima',
            'coordenador' => 'Antonio Alves Filho',
            'uf' => 'BA',
            'email' => 'otavio.lucas@gmail.com',
            'password' => Hash::make('123'),
        ]);

        DB::table('users')->insert([
            'name' => 'Fernando Chalita Hissa',
            'coordenador' => 'Celio Zamprogno',
            'uf' => 'RJ',
            'email' => 'fernandochalita@hotmail.com',
            'password' => Hash::make('123'),
        ]);

        DB::table('users')->insert([
            'name' => 'Andrei Disraeli Freitas Lima',
            'coordenador' => 'Cristiano Leão Magalhães',
            'uf' => 'PA',
            'email' => 'freitas@dulub.com.br',
            'password' => Hash::make('123'),
        ]);

        DB::table('users')->insert([
            'name' => 'Ari Fernandes de Melo',
            'coordenador' => 'Orion Araujo Pereira',
            'uf' => 'MA',
            'email' => 'ari@dulub.com.br',
            'password' => Hash::make('123'),
        ]);


        DB::table('users')->insert([
            'name' => 'Claudio Maxwel Dias dos Santos',
            'coordenador' => 'Orion Araujo Pereira',
            'uf' => 'RN',
            'email' => 'claudio@dulub.com.br',
            'password' => Hash::make('123'),
        ]);


        DB::table('users')->insert([
            'name' => 'Karlos Eduardo Araujo Cavalcante_2',
            'coordenador' => 'Orion Araujo Pereira',
            'uf' => 'PI',
            'email' => 'karlos.dulub@gmail.com',
            'password' => Hash::make('123'),
        ]);


        DB::table('users')->insert([
            'name' => 'Marcelo Iranilson Cruz',
            'coordenador' => 'Orion Araujo Pereira',
            'uf' => 'RN',
            'email' => 'marcelo.cruz@dulub.com.br',
            'password' => Hash::make('123'),
        ]);


        DB::table('users')->insert([
            'name' => 'Romulo Izequiel Alves',
            'coordenador' => 'Orion Araujo Pereira',
            'uf' => 'CE',
            'email' => 'romulo@dulub.com.br',
            'password' => Hash::make('123'),
        ]);

        # Documentos

        DB::table('users')->insert([
            'name' => 'Flavio',
            'email' => 'flavio@dulub.com.br',
            'password' => Hash::make('@123'),
        ]);

        DB::table('users')->insert([
            'name' => 'Iago',
            'email' => 'iago.renam@dulub.com.br',
            'password' => Hash::make('@123'),
        ]);

        DB::table('users')->insert([
            'name' => 'Laiz',
            'email' => 'laiz@dulub.com.br',
            'password' => Hash::make('@123'),
        ]);

        DB::table('users')->insert([
            'name' => 'Vitoria',
            'email' => 'vitoria@dulub.com.br',
            'password' => Hash::make('@123'),
        ]);

        DB::table('users')->insert([
            'name' => 'Ariane',
            'email' => 'ariane@dulub.com.br',
            'password' => Hash::make('@123'),
        ]);

        DB::table('users')->insert([
            'name' => 'Gilza',
            'email' => 'gilza@dulub.com.br',
            'password' => Hash::make('@123'),
        ]);

        DB::table('users')->insert([
            'name' => 'Joselia',
            'email' => 'joselia@dulub.com.br',
            'password' => Hash::make('@123'),
        ]);

        DB::table('users')->insert([
            'name' => 'Mardem',
            'email' => 'mardem@dulub.com.br',
            'password' => Hash::make('@123'),
        ]);   */
        

    }
}