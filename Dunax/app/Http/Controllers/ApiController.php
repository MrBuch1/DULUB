<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Util\Post;
use GuzzleHttp\Exception\GuzzleException;
use GuzzleHttp;
use GuzzleHttp\Client;
use Illuminate\Support\Facades\Hash;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;

class ApiController extends Controller
{

    public function index(Request $request)
    {
        $token = 'eyJhbGciOiJSUzI1NiIsImtpZCI6ImE0YzhlY2FlMTdmMjQxNTJhOTZjNGZkNWMxNzE5NGNhIiwidHlwIjoiSldUIn0.eyJzdWIiOiIxMjMwNyIsInVuaXF1ZV9uYW1lIjoiMTIzMDciLCJpYXQiOjE1OTg2MTczMDMsImp0aSI6IjkyNjQ2YjU3NzBmYjQ0YWI5YjBmZDAzYzNiZWNkYTA1IiwiU2l0ZSI6IkR1bmF4IiwiQXBsaWNhY2FvIjoiRm9yY2FEZVZlbmRhcyIsIkNvbmV4YW8iOiJBVVRIXzEyMzA3X2I4NGE4MTA5ZTZlZTRiMDQ5ODM1ZjBkMTE5YmZlZTBmIiwiR3J1cG9EZVdlYlNlcnZpY2UiOlsiX2d3QWdlbnRlQ29icmFkb3JGb3JjYURlVmVuZGFzOmZvcmNhZGV2ZW5kYXMvYWdlbnRlY29icmFkb3I6MiIsIl9nd0F0aXZpZGFkZUZvcmNhRGVWZW5kYXM6Zm9yY2FkZXZlbmRhcy9hdGl2aWRhZGU6MiIsIl9nd0NlbnRyb0RlQ3VzdG9Gb3JjYURlVmVuZGFzOmZvcmNhZGV2ZW5kYXMvY2VudHJvZGVjdXN0bzoyIiwiX2d3Q2xpZW50ZUZvcmNhRGVWZW5kYXM6Zm9yY2FkZXZlbmRhcy9jbGllbnRlOjIiLCJfZ3dDb21pc3PDo29Gb3JjYURlVmVuZGFzOmZvcmNhZGV2ZW5kYXMvY29taXNzYW86MiIsIl9nd0NvbnRhc0FSZWNlYmVyRm9yY2FEZVZlbmRhczpmb3JjYWRldmVuZGFzL2NvbnRhc2FyZWNlYmVyOjIiLCJfZ3dFbXByZXNhRm9yY2FEZVZlbmRhczpmb3JjYWRldmVuZGFzL2VtcHJlc2E6MiIsIl9nd0VzdG9xdWVGb3JjYURlVmVuZGFzOmZvcmNhZGV2ZW5kYXMvbGFuY2FtZW50b2RlZXN0b3F1ZToyIiwiX2d3RmF0dXJhbWVudG9Gb3JjYURlVmVuZGFzOmZvcmNhZGV2ZW5kYXMvZmF0dXJhbWVudG86MiIsIl9nd0ZpbmFsaWRhZGVGb3JjYURlVmVuZGFzOmZvcmNhZGV2ZW5kYXMvZmluYWxpZGFkZToyIiwiX2d3Rm9ybWFEZVBhZ2FtZW50b0ZvcmNhRGVWZW5kYXM6Zm9yY2FkZXZlbmRhcy9mb3JtYWRlcGFnYW1lbnRvOjIiLCJfZ3dJdGVtRG9QZWRpZG9Gb3JjYURlVmVuZGFzOmZvcmNhZGV2ZW5kYXMvaXRlbWRvcGVkaWRvOjIiLCJfZ3dMb2NhbGl6YWNhb0ZvcmNhRGVWZW5kYXM6Zm9yY2FkZXZlbmRhcy9sb2NhbGl6YWNhbzoyIiwiX2d3TWVyY2Fkb3JpYUZvcmNhRGVWZW5kYXM6Zm9yY2FkZXZlbmRhcy9tZXJjYWRvcmlhOjIiLCJfZ3dNb2VkYUZvcmNhRGVWZW5kYXM6Zm9yY2FkZXZlbmRhcy9tb2VkYToyIiwiX2d3UGVkaWRvRm9yY2FEZVZlbmRhczpmb3JjYWRldmVuZGFzL3BlZGlkbzoyIiwiX2d3UG9saXRpY2FEZUNvYnJhbmNhRm9yY2FEZVZlbmRhczpmb3JjYWRldmVuZGFzL2RldGFsaGVwb2xpdGljYWRlY29icmFuY2E6MiIsIl9nd1BvbGl0aWNhRGVQcmVjb0ZvcmNhRGVWZW5kYXM6Zm9yY2FkZXZlbmRhcy9vYmpldG9kb2RldGFsaGVkYXBvbGl0aWNhZGVwcmVjb3M6MiIsIl9nd1RpcG9EZUNvYnJhbmNhRm9yY2FEZVZlbmRhczpmb3JjYWRldmVuZGFzL3RpcG9kZWNvYnJhbmNhOjIiLCJfZ3dUaXBvRGVEb2N1bWVudG9Gb3JjYURlVmVuZGFzOmZvcmNhZGV2ZW5kYXMvdGlwb2RlZG9jdW1lbnRvOjIiLCJfZ3dUaXBvRGVMb2dyYWRvdXJvRm9yY2FEZVZlbmRhczpmb3JjYWRldmVuZGFzL3RpcG9kZWxvZ3JhZG91cm86MiIsIl9nd1RpcG9EZU9wZXJhY2FvRm9yY2FEZVZlbmRhczpmb3JjYWRldmVuZGFzL3RpcG9kZW9wZXJhY2FvOjIiLCJfZ3dUdXJub0ZvcmNhRGVWZW5kYXM6Zm9yY2FkZXZlbmRhcy90dXJubzoyIiwiX2d3VW5pZGFkZURlTWVkaWRhRm9yY2FEZVZlbmRhczpmb3JjYWRldmVuZGFzL3VuaWRhZGVkZW1lZGlkYToyIiwiX2d3VmVuZGVkb3JGb3JjYURlVmVuZGFzOmZvcmNhZGV2ZW5kYXMvdmVuZGVkb3I6MiJdLCJXZWJTZXJ2aWNlIjpbIl93c0NvbnN1bHRhckFnZW50ZUNvYnJhZG9yOmNvbnN1bHRhcjoyIiwiX3dzQ29uc3VsdGFyQXRpdmlkYWRlOmNvbnN1bHRhcjoyIiwiX3dzQ29uc3VsdGFyQ2VudHJvRGVDdXN0b3M6Y29uc3VsdGFyOjIiLCJfd3NDb25zdWx0YXJDbGllbnRlczpjb25zdWx0YXI6MiIsIl93c0NvbnN1bHRhckNvbWlzc29lczpjb25zdWx0YXI6MiIsIl93c0NvbnN1bHRhckNvbnRhc0FSZWNlYmVyOmNvbnN1bHRhcjoyIiwiX3dzQ29uc3VsdGFyRW1wcmVzYTpjb25zdWx0YXI6MiIsIl93c0NvbnN1bHRhckVzdG9xdWU6Y29uc3VsdGFyOjIiLCJfd3NDb25zdWx0YXJGYXR1cmFtZW50bzpjb25zdWx0YXI6MiIsIl93c0NvbnN1bHRhckZpbmFsaWRhZGU6Y29uc3VsdGFyOjIiLCJfd3NDb25zdWx0YXJGb3JtYURlUGFnYW1lbnRvOmNvbnN1bHRhcjoyIiwiX3dzQ29uc3VsdGFyUGVkaWRvczpjb25zdWx0YXI6MiIsIl93c0NvbnN1bHRhclBlZGlkb3NQZW5kZW50ZURlRW1iYXJxdWU6cGVuZGVudGVkZWVtYmFycXVlOjIiLCJfd3NDb25zdWx0YXJQZWRpZG9zRW1iYXJjYWRvUGVuZGVudGU6ZW1iYXJjYWRvcGVuZGVudGU6MiIsIl93c0NvbnN1bHRhclBhaXM6Y29uc3VsdGFycGFpczoyIiwiX3dzQ29uc3VsdGFyRXN0YWRvOmNvbnN1bHRhcmVzdGFkbzoyIiwiX3dzQ29uc3VsdGFyQ2lkYWRlOmNvbnN1bHRhcmNpZGFkZToyIiwiX3dzQ29uc3VsdGFyQmFpcnJvOmNvbnN1bHRhcmJhaXJybzoyIiwiX3dzQ29uc3VsdGFyTWVyY2Fkb3JpYTpjb25zdWx0YXI6MiIsIl93c0NvbnN1bHRhck1vZWRhOmNvbnN1bHRhcjoyIiwiX3dzSW5jbHVpclBlZGlkbzppbmNsdWlyOjIiLCJfd3NDb25zdWx0YXJGaWx0cm9Db2JyYW5jYTpmaWx0cm9jb2JyYW5jYToyIiwiX3dzQ29uc3VsdGFyVGFiZWxhRGVQcmVjb3M6Y29uc3VsdGFydGFiZWxhZGVwcmVjb3M6MiIsIl93c0NvbnN1bHRhclRpcG9EZUNvYnJhbmNhOmNvbnN1bHRhcjoyIiwiX3dzQ29uc3VsdGFyVGlwb0RlRG9jdW1lbnRvOmNvbnN1bHRhcjoyIiwiX3dzQ29uc3VsdGFyVGlwb0RlTG9ncmFkb3Vybzpjb25zdWx0YXI6MiIsIl93c0NvbnN1bHRhclRpcG9EZU9wZXJhY2FvOmNvbnN1bHRhcjoyIiwiX3dzQ29uc3VsdGFyVHVybm86Y29uc3VsdGFyOjIiLCJfd3NDb25zdWx0YXJVbmlkYWRlRGVNZWRpZGE6Y29uc3VsdGFyOjIiLCJfd3NDb25zdWx0YXJWZW5kZWRvcjpjb25zdWx0YXI6MiJdLCJFbmRlcmVjb0RhSW5zdGFuY2lhIjpbImh0dHBzOi8vdmlzaW9ucy50b3BtYW5hZ2VyLmNvbS5ici9TZXJ2aWRvcl8yLjEuMV9hcGk6X2d3QWdlbnRlQ29icmFkb3JGb3JjYURlVmVuZGFzLF9nd0F0aXZpZGFkZUZvcmNhRGVWZW5kYXMsX2d3Q2VudHJvRGVDdXN0b0ZvcmNhRGVWZW5kYXMsX2d3Q2xpZW50ZUZvcmNhRGVWZW5kYXMsX2d3Q29taXNzw6NvRm9yY2FEZVZlbmRhcyxfZ3dDb250YXNBUmVjZWJlckZvcmNhRGVWZW5kYXMsX2d3RW1wcmVzYUZvcmNhRGVWZW5kYXMsX2d3RXN0b3F1ZUZvcmNhRGVWZW5kYXMsX2d3RmF0dXJhbWVudG9Gb3JjYURlVmVuZGFzLF9nd0ZpbmFsaWRhZGVGb3JjYURlVmVuZGFzLF9nd0Zvcm1hRGVQYWdhbWVudG9Gb3JjYURlVmVuZGFzLF9nd0l0ZW1Eb1BlZGlkb0ZvcmNhRGVWZW5kYXMsX2d3TG9jYWxpemFjYW9Gb3JjYURlVmVuZGFzLF9nd01lcmNhZG9yaWFGb3JjYURlVmVuZGFzLF9nd01vZWRhRm9yY2FEZVZlbmRhcyxfZ3dQb2xpdGljYURlQ29icmFuY2FGb3JjYURlVmVuZGFzLF9nd1BvbGl0aWNhRGVQcmVjb0ZvcmNhRGVWZW5kYXMsX2d3VGlwb0RlQ29icmFuY2FGb3JjYURlVmVuZGFzLF9nd1RpcG9EZURvY3VtZW50b0ZvcmNhRGVWZW5kYXMsX2d3VGlwb0RlTG9ncmFkb3Vyb0ZvcmNhRGVWZW5kYXMsX2d3VGlwb0RlT3BlcmFjYW9Gb3JjYURlVmVuZGFzLF9nd1R1cm5vRm9yY2FEZVZlbmRhcyxfZ3dVbmlkYWRlRGVNZWRpZGFGb3JjYURlVmVuZGFzLF9nd1ZlbmRlZG9yRm9yY2FEZVZlbmRhcyIsImh0dHA6Ly9sb2NhbGhvc3Q6MzUwMDA6X2d3UGVkaWRvRm9yY2FEZVZlbmRhcyJdLCJuYmYiOjE1OTg2MTcyNDIsImV4cCI6MTYxNTg5NzMwMiwiaXNzIjoiYXV0aC52aXNpb25zIn0.PdTGttEPteDkKGlMft518RM18gybajYBmAyV1bGCEz5Oiv2Ydez6jTtxauTWm6gSd3aqxHp1cPaOPIHe8hxz3EMsB2IwU6fAnyhJgkK38EU4Vr2mkLgeSMOInPHlBDUWGLy6UL8c1aGBd1XY_C2Zn9KEsu1rrmz6wHk_qmq-8LGOj0UZhapFnRu7wXVHKqFnkkCTXzAiHT4a5uI6nuoXCP-07iXZeM9DeZi_VCRSUHRaz-WYpfLhrrsSQt6kCiGUMwbU_qGDlLzCjGPNcy9ctLnKzf69Pa-ltHq-sp17o8Hfkd6Q3TAnycpxk1_iMO6gRVhvXXQDMLOWEhZwBhnqZQ';
        
        $client = new GuzzleHttp\Client();

        $vendedorUser = Auth::id();

        /*$email = $request->input('email');
        $senha = $request->input('senha');
        $id_user = $request->input('id_user');

        $credentials = [
            'email' => $email,
            'senha' => $senha,
            'usuarioID' => $id_user
        ];*/
        
        //$login = $client->request('POST', 'https://visions.topmanager.com.br/auth/api/usuarios/entrar?identificadorDaAplicacao=ForcaDeVendas&chaveDaAplicacaoExterna=2awwG8Tqp12sJtzQcyYIzVrYfQNmMg0crxWq8ohNQMlQU4cU5lvO1Y%2FGNN0hbkAD0JNPPQz3489u8paqUO3jOg%3D%3D&enderecoDeRetorno=http://qualquer',
            //['json' => $credentials])->getBody();

        ////////////////////////////////
        //$token = substr($login, 44, -2);
        ////////////////////////////////

        $empresa = json_decode($client->request('GET', 'https://visions.topmanager.com.br/Servidor_2.1.1_api/forcadevendas/empresa/consultar',
            ['headers' => ['Content-Type' => 'application/json', 'Authorization' => 'Bearer ' . $token]])->getBody(), true);

        $tipoOP = json_decode($client->request('GET', 'https://visions.topmanager.com.br/Servidor_2.1.1_api/forcadevendas/tipodeoperacao/consultar',
            ['headers' => ['Content-Type' => 'application/json', 'Authorization' => 'Bearer ' . $token]])->getBody(), true);
        
        $cliente = json_decode($client->request('GET', 'https://visions.topmanager.com.br/Servidor_2.1.1_api/forcadevendas/cliente/consultar',
            ['headers' => ['Content-Type' => 'application/json', 'Authorization' => 'Bearer ' . $token]])->getBody(), true);
            
        $vendedor = json_decode($client->request('GET', 'https://visions.topmanager.com.br/Servidor_2.1.1_api/forcadevendas/vendedor/consultar',
            ['headers' => ['Content-Type' => 'application/json', 'Authorization' => 'Bearer ' . $token]])->getBody(), true);
        

        return view('API.form_1', compact('token', 'empresa', 'tipoOP', 'cliente', 'vendedor', 
                                            'vendedorUser'));
    }

    public function situacaoCliente(Request $request)
    {
        $token = 'eyJhbGciOiJSUzI1NiIsImtpZCI6ImE0YzhlY2FlMTdmMjQxNTJhOTZjNGZkNWMxNzE5NGNhIiwidHlwIjoiSldUIn0.eyJzdWIiOiIxMjMwNyIsInVuaXF1ZV9uYW1lIjoiMTIzMDciLCJpYXQiOjE1OTg2MTczMDMsImp0aSI6IjkyNjQ2YjU3NzBmYjQ0YWI5YjBmZDAzYzNiZWNkYTA1IiwiU2l0ZSI6IkR1bmF4IiwiQXBsaWNhY2FvIjoiRm9yY2FEZVZlbmRhcyIsIkNvbmV4YW8iOiJBVVRIXzEyMzA3X2I4NGE4MTA5ZTZlZTRiMDQ5ODM1ZjBkMTE5YmZlZTBmIiwiR3J1cG9EZVdlYlNlcnZpY2UiOlsiX2d3QWdlbnRlQ29icmFkb3JGb3JjYURlVmVuZGFzOmZvcmNhZGV2ZW5kYXMvYWdlbnRlY29icmFkb3I6MiIsIl9nd0F0aXZpZGFkZUZvcmNhRGVWZW5kYXM6Zm9yY2FkZXZlbmRhcy9hdGl2aWRhZGU6MiIsIl9nd0NlbnRyb0RlQ3VzdG9Gb3JjYURlVmVuZGFzOmZvcmNhZGV2ZW5kYXMvY2VudHJvZGVjdXN0bzoyIiwiX2d3Q2xpZW50ZUZvcmNhRGVWZW5kYXM6Zm9yY2FkZXZlbmRhcy9jbGllbnRlOjIiLCJfZ3dDb21pc3PDo29Gb3JjYURlVmVuZGFzOmZvcmNhZGV2ZW5kYXMvY29taXNzYW86MiIsIl9nd0NvbnRhc0FSZWNlYmVyRm9yY2FEZVZlbmRhczpmb3JjYWRldmVuZGFzL2NvbnRhc2FyZWNlYmVyOjIiLCJfZ3dFbXByZXNhRm9yY2FEZVZlbmRhczpmb3JjYWRldmVuZGFzL2VtcHJlc2E6MiIsIl9nd0VzdG9xdWVGb3JjYURlVmVuZGFzOmZvcmNhZGV2ZW5kYXMvbGFuY2FtZW50b2RlZXN0b3F1ZToyIiwiX2d3RmF0dXJhbWVudG9Gb3JjYURlVmVuZGFzOmZvcmNhZGV2ZW5kYXMvZmF0dXJhbWVudG86MiIsIl9nd0ZpbmFsaWRhZGVGb3JjYURlVmVuZGFzOmZvcmNhZGV2ZW5kYXMvZmluYWxpZGFkZToyIiwiX2d3Rm9ybWFEZVBhZ2FtZW50b0ZvcmNhRGVWZW5kYXM6Zm9yY2FkZXZlbmRhcy9mb3JtYWRlcGFnYW1lbnRvOjIiLCJfZ3dJdGVtRG9QZWRpZG9Gb3JjYURlVmVuZGFzOmZvcmNhZGV2ZW5kYXMvaXRlbWRvcGVkaWRvOjIiLCJfZ3dMb2NhbGl6YWNhb0ZvcmNhRGVWZW5kYXM6Zm9yY2FkZXZlbmRhcy9sb2NhbGl6YWNhbzoyIiwiX2d3TWVyY2Fkb3JpYUZvcmNhRGVWZW5kYXM6Zm9yY2FkZXZlbmRhcy9tZXJjYWRvcmlhOjIiLCJfZ3dNb2VkYUZvcmNhRGVWZW5kYXM6Zm9yY2FkZXZlbmRhcy9tb2VkYToyIiwiX2d3UGVkaWRvRm9yY2FEZVZlbmRhczpmb3JjYWRldmVuZGFzL3BlZGlkbzoyIiwiX2d3UG9saXRpY2FEZUNvYnJhbmNhRm9yY2FEZVZlbmRhczpmb3JjYWRldmVuZGFzL2RldGFsaGVwb2xpdGljYWRlY29icmFuY2E6MiIsIl9nd1BvbGl0aWNhRGVQcmVjb0ZvcmNhRGVWZW5kYXM6Zm9yY2FkZXZlbmRhcy9vYmpldG9kb2RldGFsaGVkYXBvbGl0aWNhZGVwcmVjb3M6MiIsIl9nd1RpcG9EZUNvYnJhbmNhRm9yY2FEZVZlbmRhczpmb3JjYWRldmVuZGFzL3RpcG9kZWNvYnJhbmNhOjIiLCJfZ3dUaXBvRGVEb2N1bWVudG9Gb3JjYURlVmVuZGFzOmZvcmNhZGV2ZW5kYXMvdGlwb2RlZG9jdW1lbnRvOjIiLCJfZ3dUaXBvRGVMb2dyYWRvdXJvRm9yY2FEZVZlbmRhczpmb3JjYWRldmVuZGFzL3RpcG9kZWxvZ3JhZG91cm86MiIsIl9nd1RpcG9EZU9wZXJhY2FvRm9yY2FEZVZlbmRhczpmb3JjYWRldmVuZGFzL3RpcG9kZW9wZXJhY2FvOjIiLCJfZ3dUdXJub0ZvcmNhRGVWZW5kYXM6Zm9yY2FkZXZlbmRhcy90dXJubzoyIiwiX2d3VW5pZGFkZURlTWVkaWRhRm9yY2FEZVZlbmRhczpmb3JjYWRldmVuZGFzL3VuaWRhZGVkZW1lZGlkYToyIiwiX2d3VmVuZGVkb3JGb3JjYURlVmVuZGFzOmZvcmNhZGV2ZW5kYXMvdmVuZGVkb3I6MiJdLCJXZWJTZXJ2aWNlIjpbIl93c0NvbnN1bHRhckFnZW50ZUNvYnJhZG9yOmNvbnN1bHRhcjoyIiwiX3dzQ29uc3VsdGFyQXRpdmlkYWRlOmNvbnN1bHRhcjoyIiwiX3dzQ29uc3VsdGFyQ2VudHJvRGVDdXN0b3M6Y29uc3VsdGFyOjIiLCJfd3NDb25zdWx0YXJDbGllbnRlczpjb25zdWx0YXI6MiIsIl93c0NvbnN1bHRhckNvbWlzc29lczpjb25zdWx0YXI6MiIsIl93c0NvbnN1bHRhckNvbnRhc0FSZWNlYmVyOmNvbnN1bHRhcjoyIiwiX3dzQ29uc3VsdGFyRW1wcmVzYTpjb25zdWx0YXI6MiIsIl93c0NvbnN1bHRhckVzdG9xdWU6Y29uc3VsdGFyOjIiLCJfd3NDb25zdWx0YXJGYXR1cmFtZW50bzpjb25zdWx0YXI6MiIsIl93c0NvbnN1bHRhckZpbmFsaWRhZGU6Y29uc3VsdGFyOjIiLCJfd3NDb25zdWx0YXJGb3JtYURlUGFnYW1lbnRvOmNvbnN1bHRhcjoyIiwiX3dzQ29uc3VsdGFyUGVkaWRvczpjb25zdWx0YXI6MiIsIl93c0NvbnN1bHRhclBlZGlkb3NQZW5kZW50ZURlRW1iYXJxdWU6cGVuZGVudGVkZWVtYmFycXVlOjIiLCJfd3NDb25zdWx0YXJQZWRpZG9zRW1iYXJjYWRvUGVuZGVudGU6ZW1iYXJjYWRvcGVuZGVudGU6MiIsIl93c0NvbnN1bHRhclBhaXM6Y29uc3VsdGFycGFpczoyIiwiX3dzQ29uc3VsdGFyRXN0YWRvOmNvbnN1bHRhcmVzdGFkbzoyIiwiX3dzQ29uc3VsdGFyQ2lkYWRlOmNvbnN1bHRhcmNpZGFkZToyIiwiX3dzQ29uc3VsdGFyQmFpcnJvOmNvbnN1bHRhcmJhaXJybzoyIiwiX3dzQ29uc3VsdGFyTWVyY2Fkb3JpYTpjb25zdWx0YXI6MiIsIl93c0NvbnN1bHRhck1vZWRhOmNvbnN1bHRhcjoyIiwiX3dzSW5jbHVpclBlZGlkbzppbmNsdWlyOjIiLCJfd3NDb25zdWx0YXJGaWx0cm9Db2JyYW5jYTpmaWx0cm9jb2JyYW5jYToyIiwiX3dzQ29uc3VsdGFyVGFiZWxhRGVQcmVjb3M6Y29uc3VsdGFydGFiZWxhZGVwcmVjb3M6MiIsIl93c0NvbnN1bHRhclRpcG9EZUNvYnJhbmNhOmNvbnN1bHRhcjoyIiwiX3dzQ29uc3VsdGFyVGlwb0RlRG9jdW1lbnRvOmNvbnN1bHRhcjoyIiwiX3dzQ29uc3VsdGFyVGlwb0RlTG9ncmFkb3Vybzpjb25zdWx0YXI6MiIsIl93c0NvbnN1bHRhclRpcG9EZU9wZXJhY2FvOmNvbnN1bHRhcjoyIiwiX3dzQ29uc3VsdGFyVHVybm86Y29uc3VsdGFyOjIiLCJfd3NDb25zdWx0YXJVbmlkYWRlRGVNZWRpZGE6Y29uc3VsdGFyOjIiLCJfd3NDb25zdWx0YXJWZW5kZWRvcjpjb25zdWx0YXI6MiJdLCJFbmRlcmVjb0RhSW5zdGFuY2lhIjpbImh0dHBzOi8vdmlzaW9ucy50b3BtYW5hZ2VyLmNvbS5ici9TZXJ2aWRvcl8yLjEuMV9hcGk6X2d3QWdlbnRlQ29icmFkb3JGb3JjYURlVmVuZGFzLF9nd0F0aXZpZGFkZUZvcmNhRGVWZW5kYXMsX2d3Q2VudHJvRGVDdXN0b0ZvcmNhRGVWZW5kYXMsX2d3Q2xpZW50ZUZvcmNhRGVWZW5kYXMsX2d3Q29taXNzw6NvRm9yY2FEZVZlbmRhcyxfZ3dDb250YXNBUmVjZWJlckZvcmNhRGVWZW5kYXMsX2d3RW1wcmVzYUZvcmNhRGVWZW5kYXMsX2d3RXN0b3F1ZUZvcmNhRGVWZW5kYXMsX2d3RmF0dXJhbWVudG9Gb3JjYURlVmVuZGFzLF9nd0ZpbmFsaWRhZGVGb3JjYURlVmVuZGFzLF9nd0Zvcm1hRGVQYWdhbWVudG9Gb3JjYURlVmVuZGFzLF9nd0l0ZW1Eb1BlZGlkb0ZvcmNhRGVWZW5kYXMsX2d3TG9jYWxpemFjYW9Gb3JjYURlVmVuZGFzLF9nd01lcmNhZG9yaWFGb3JjYURlVmVuZGFzLF9nd01vZWRhRm9yY2FEZVZlbmRhcyxfZ3dQb2xpdGljYURlQ29icmFuY2FGb3JjYURlVmVuZGFzLF9nd1BvbGl0aWNhRGVQcmVjb0ZvcmNhRGVWZW5kYXMsX2d3VGlwb0RlQ29icmFuY2FGb3JjYURlVmVuZGFzLF9nd1RpcG9EZURvY3VtZW50b0ZvcmNhRGVWZW5kYXMsX2d3VGlwb0RlTG9ncmFkb3Vyb0ZvcmNhRGVWZW5kYXMsX2d3VGlwb0RlT3BlcmFjYW9Gb3JjYURlVmVuZGFzLF9nd1R1cm5vRm9yY2FEZVZlbmRhcyxfZ3dVbmlkYWRlRGVNZWRpZGFGb3JjYURlVmVuZGFzLF9nd1ZlbmRlZG9yRm9yY2FEZVZlbmRhcyIsImh0dHA6Ly9sb2NhbGhvc3Q6MzUwMDA6X2d3UGVkaWRvRm9yY2FEZVZlbmRhcyJdLCJuYmYiOjE1OTg2MTcyNDIsImV4cCI6MTYxNTg5NzMwMiwiaXNzIjoiYXV0aC52aXNpb25zIn0.PdTGttEPteDkKGlMft518RM18gybajYBmAyV1bGCEz5Oiv2Ydez6jTtxauTWm6gSd3aqxHp1cPaOPIHe8hxz3EMsB2IwU6fAnyhJgkK38EU4Vr2mkLgeSMOInPHlBDUWGLy6UL8c1aGBd1XY_C2Zn9KEsu1rrmz6wHk_qmq-8LGOj0UZhapFnRu7wXVHKqFnkkCTXzAiHT4a5uI6nuoXCP-07iXZeM9DeZi_VCRSUHRaz-WYpfLhrrsSQt6kCiGUMwbU_qGDlLzCjGPNcy9ctLnKzf69Pa-ltHq-sp17o8Hfkd6Q3TAnycpxk1_iMO6gRVhvXXQDMLOWEhZwBhnqZQ';
        
        $client = new GuzzleHttp\Client();
        
        $vendedorUser = Auth::id();

        $clienteID = $request->input('cliente');
        $empresaID = $request->input('empresa');
        $opID = $request->input('tipoOP');

        $dataHoje = Carbon::now()->toDateString() . "T" . Carbon::now()->toTimeString();

        
        $cliente = json_decode($client->request('GET', 'https://visions.topmanager.com.br/Servidor_2.1.1_api/forcadevendas/cliente/consultar',
            ['headers' => ['Content-Type' => 'application/json', 'Authorization' => 'Bearer ' . $token]])->getBody(), true);
    

        //$faturamento = json_decode($client->request('GET', 'https://visions.topmanager.com.br/Servidor_2.1.1_api/forcadevendas/faturamento/consultar?vendedorID=&dataInicial=2020-05-29T00:00:00.000&dataFinal=' . $dataHoje,
            //['headers' => ['Content-Type' => 'application/json', 'Authorization' => 'Bearer ' . $token]])->getBody(), true);
        
        $situacaoCliente = json_decode($client->request('GET', 'https://visions.topmanager.com.br/Servidor_2.1.1_api/forcadevendas/contasareceber/consultar?clienteID=' . $clienteID . '&empresaID=' . $empresaID,
            ['headers' => ['Content-Type' => 'application/json', 'Authorization' => 'Bearer ' . $token]])->getBody(), true);


        return view('API.situacaoCliente', compact('situacaoCliente', 'vendedorUser', 'cliente',
                                                    'clienteID', 'empresaID', 'opID'));
    }

    public function form2(Request $request) 
    {
        $token = 'eyJhbGciOiJSUzI1NiIsImtpZCI6ImE0YzhlY2FlMTdmMjQxNTJhOTZjNGZkNWMxNzE5NGNhIiwidHlwIjoiSldUIn0.eyJzdWIiOiIxMjMwNyIsInVuaXF1ZV9uYW1lIjoiMTIzMDciLCJpYXQiOjE1OTg2MTczMDMsImp0aSI6IjkyNjQ2YjU3NzBmYjQ0YWI5YjBmZDAzYzNiZWNkYTA1IiwiU2l0ZSI6IkR1bmF4IiwiQXBsaWNhY2FvIjoiRm9yY2FEZVZlbmRhcyIsIkNvbmV4YW8iOiJBVVRIXzEyMzA3X2I4NGE4MTA5ZTZlZTRiMDQ5ODM1ZjBkMTE5YmZlZTBmIiwiR3J1cG9EZVdlYlNlcnZpY2UiOlsiX2d3QWdlbnRlQ29icmFkb3JGb3JjYURlVmVuZGFzOmZvcmNhZGV2ZW5kYXMvYWdlbnRlY29icmFkb3I6MiIsIl9nd0F0aXZpZGFkZUZvcmNhRGVWZW5kYXM6Zm9yY2FkZXZlbmRhcy9hdGl2aWRhZGU6MiIsIl9nd0NlbnRyb0RlQ3VzdG9Gb3JjYURlVmVuZGFzOmZvcmNhZGV2ZW5kYXMvY2VudHJvZGVjdXN0bzoyIiwiX2d3Q2xpZW50ZUZvcmNhRGVWZW5kYXM6Zm9yY2FkZXZlbmRhcy9jbGllbnRlOjIiLCJfZ3dDb21pc3PDo29Gb3JjYURlVmVuZGFzOmZvcmNhZGV2ZW5kYXMvY29taXNzYW86MiIsIl9nd0NvbnRhc0FSZWNlYmVyRm9yY2FEZVZlbmRhczpmb3JjYWRldmVuZGFzL2NvbnRhc2FyZWNlYmVyOjIiLCJfZ3dFbXByZXNhRm9yY2FEZVZlbmRhczpmb3JjYWRldmVuZGFzL2VtcHJlc2E6MiIsIl9nd0VzdG9xdWVGb3JjYURlVmVuZGFzOmZvcmNhZGV2ZW5kYXMvbGFuY2FtZW50b2RlZXN0b3F1ZToyIiwiX2d3RmF0dXJhbWVudG9Gb3JjYURlVmVuZGFzOmZvcmNhZGV2ZW5kYXMvZmF0dXJhbWVudG86MiIsIl9nd0ZpbmFsaWRhZGVGb3JjYURlVmVuZGFzOmZvcmNhZGV2ZW5kYXMvZmluYWxpZGFkZToyIiwiX2d3Rm9ybWFEZVBhZ2FtZW50b0ZvcmNhRGVWZW5kYXM6Zm9yY2FkZXZlbmRhcy9mb3JtYWRlcGFnYW1lbnRvOjIiLCJfZ3dJdGVtRG9QZWRpZG9Gb3JjYURlVmVuZGFzOmZvcmNhZGV2ZW5kYXMvaXRlbWRvcGVkaWRvOjIiLCJfZ3dMb2NhbGl6YWNhb0ZvcmNhRGVWZW5kYXM6Zm9yY2FkZXZlbmRhcy9sb2NhbGl6YWNhbzoyIiwiX2d3TWVyY2Fkb3JpYUZvcmNhRGVWZW5kYXM6Zm9yY2FkZXZlbmRhcy9tZXJjYWRvcmlhOjIiLCJfZ3dNb2VkYUZvcmNhRGVWZW5kYXM6Zm9yY2FkZXZlbmRhcy9tb2VkYToyIiwiX2d3UGVkaWRvRm9yY2FEZVZlbmRhczpmb3JjYWRldmVuZGFzL3BlZGlkbzoyIiwiX2d3UG9saXRpY2FEZUNvYnJhbmNhRm9yY2FEZVZlbmRhczpmb3JjYWRldmVuZGFzL2RldGFsaGVwb2xpdGljYWRlY29icmFuY2E6MiIsIl9nd1BvbGl0aWNhRGVQcmVjb0ZvcmNhRGVWZW5kYXM6Zm9yY2FkZXZlbmRhcy9vYmpldG9kb2RldGFsaGVkYXBvbGl0aWNhZGVwcmVjb3M6MiIsIl9nd1RpcG9EZUNvYnJhbmNhRm9yY2FEZVZlbmRhczpmb3JjYWRldmVuZGFzL3RpcG9kZWNvYnJhbmNhOjIiLCJfZ3dUaXBvRGVEb2N1bWVudG9Gb3JjYURlVmVuZGFzOmZvcmNhZGV2ZW5kYXMvdGlwb2RlZG9jdW1lbnRvOjIiLCJfZ3dUaXBvRGVMb2dyYWRvdXJvRm9yY2FEZVZlbmRhczpmb3JjYWRldmVuZGFzL3RpcG9kZWxvZ3JhZG91cm86MiIsIl9nd1RpcG9EZU9wZXJhY2FvRm9yY2FEZVZlbmRhczpmb3JjYWRldmVuZGFzL3RpcG9kZW9wZXJhY2FvOjIiLCJfZ3dUdXJub0ZvcmNhRGVWZW5kYXM6Zm9yY2FkZXZlbmRhcy90dXJubzoyIiwiX2d3VW5pZGFkZURlTWVkaWRhRm9yY2FEZVZlbmRhczpmb3JjYWRldmVuZGFzL3VuaWRhZGVkZW1lZGlkYToyIiwiX2d3VmVuZGVkb3JGb3JjYURlVmVuZGFzOmZvcmNhZGV2ZW5kYXMvdmVuZGVkb3I6MiJdLCJXZWJTZXJ2aWNlIjpbIl93c0NvbnN1bHRhckFnZW50ZUNvYnJhZG9yOmNvbnN1bHRhcjoyIiwiX3dzQ29uc3VsdGFyQXRpdmlkYWRlOmNvbnN1bHRhcjoyIiwiX3dzQ29uc3VsdGFyQ2VudHJvRGVDdXN0b3M6Y29uc3VsdGFyOjIiLCJfd3NDb25zdWx0YXJDbGllbnRlczpjb25zdWx0YXI6MiIsIl93c0NvbnN1bHRhckNvbWlzc29lczpjb25zdWx0YXI6MiIsIl93c0NvbnN1bHRhckNvbnRhc0FSZWNlYmVyOmNvbnN1bHRhcjoyIiwiX3dzQ29uc3VsdGFyRW1wcmVzYTpjb25zdWx0YXI6MiIsIl93c0NvbnN1bHRhckVzdG9xdWU6Y29uc3VsdGFyOjIiLCJfd3NDb25zdWx0YXJGYXR1cmFtZW50bzpjb25zdWx0YXI6MiIsIl93c0NvbnN1bHRhckZpbmFsaWRhZGU6Y29uc3VsdGFyOjIiLCJfd3NDb25zdWx0YXJGb3JtYURlUGFnYW1lbnRvOmNvbnN1bHRhcjoyIiwiX3dzQ29uc3VsdGFyUGVkaWRvczpjb25zdWx0YXI6MiIsIl93c0NvbnN1bHRhclBlZGlkb3NQZW5kZW50ZURlRW1iYXJxdWU6cGVuZGVudGVkZWVtYmFycXVlOjIiLCJfd3NDb25zdWx0YXJQZWRpZG9zRW1iYXJjYWRvUGVuZGVudGU6ZW1iYXJjYWRvcGVuZGVudGU6MiIsIl93c0NvbnN1bHRhclBhaXM6Y29uc3VsdGFycGFpczoyIiwiX3dzQ29uc3VsdGFyRXN0YWRvOmNvbnN1bHRhcmVzdGFkbzoyIiwiX3dzQ29uc3VsdGFyQ2lkYWRlOmNvbnN1bHRhcmNpZGFkZToyIiwiX3dzQ29uc3VsdGFyQmFpcnJvOmNvbnN1bHRhcmJhaXJybzoyIiwiX3dzQ29uc3VsdGFyTWVyY2Fkb3JpYTpjb25zdWx0YXI6MiIsIl93c0NvbnN1bHRhck1vZWRhOmNvbnN1bHRhcjoyIiwiX3dzSW5jbHVpclBlZGlkbzppbmNsdWlyOjIiLCJfd3NDb25zdWx0YXJGaWx0cm9Db2JyYW5jYTpmaWx0cm9jb2JyYW5jYToyIiwiX3dzQ29uc3VsdGFyVGFiZWxhRGVQcmVjb3M6Y29uc3VsdGFydGFiZWxhZGVwcmVjb3M6MiIsIl93c0NvbnN1bHRhclRpcG9EZUNvYnJhbmNhOmNvbnN1bHRhcjoyIiwiX3dzQ29uc3VsdGFyVGlwb0RlRG9jdW1lbnRvOmNvbnN1bHRhcjoyIiwiX3dzQ29uc3VsdGFyVGlwb0RlTG9ncmFkb3Vybzpjb25zdWx0YXI6MiIsIl93c0NvbnN1bHRhclRpcG9EZU9wZXJhY2FvOmNvbnN1bHRhcjoyIiwiX3dzQ29uc3VsdGFyVHVybm86Y29uc3VsdGFyOjIiLCJfd3NDb25zdWx0YXJVbmlkYWRlRGVNZWRpZGE6Y29uc3VsdGFyOjIiLCJfd3NDb25zdWx0YXJWZW5kZWRvcjpjb25zdWx0YXI6MiJdLCJFbmRlcmVjb0RhSW5zdGFuY2lhIjpbImh0dHBzOi8vdmlzaW9ucy50b3BtYW5hZ2VyLmNvbS5ici9TZXJ2aWRvcl8yLjEuMV9hcGk6X2d3QWdlbnRlQ29icmFkb3JGb3JjYURlVmVuZGFzLF9nd0F0aXZpZGFkZUZvcmNhRGVWZW5kYXMsX2d3Q2VudHJvRGVDdXN0b0ZvcmNhRGVWZW5kYXMsX2d3Q2xpZW50ZUZvcmNhRGVWZW5kYXMsX2d3Q29taXNzw6NvRm9yY2FEZVZlbmRhcyxfZ3dDb250YXNBUmVjZWJlckZvcmNhRGVWZW5kYXMsX2d3RW1wcmVzYUZvcmNhRGVWZW5kYXMsX2d3RXN0b3F1ZUZvcmNhRGVWZW5kYXMsX2d3RmF0dXJhbWVudG9Gb3JjYURlVmVuZGFzLF9nd0ZpbmFsaWRhZGVGb3JjYURlVmVuZGFzLF9nd0Zvcm1hRGVQYWdhbWVudG9Gb3JjYURlVmVuZGFzLF9nd0l0ZW1Eb1BlZGlkb0ZvcmNhRGVWZW5kYXMsX2d3TG9jYWxpemFjYW9Gb3JjYURlVmVuZGFzLF9nd01lcmNhZG9yaWFGb3JjYURlVmVuZGFzLF9nd01vZWRhRm9yY2FEZVZlbmRhcyxfZ3dQb2xpdGljYURlQ29icmFuY2FGb3JjYURlVmVuZGFzLF9nd1BvbGl0aWNhRGVQcmVjb0ZvcmNhRGVWZW5kYXMsX2d3VGlwb0RlQ29icmFuY2FGb3JjYURlVmVuZGFzLF9nd1RpcG9EZURvY3VtZW50b0ZvcmNhRGVWZW5kYXMsX2d3VGlwb0RlTG9ncmFkb3Vyb0ZvcmNhRGVWZW5kYXMsX2d3VGlwb0RlT3BlcmFjYW9Gb3JjYURlVmVuZGFzLF9nd1R1cm5vRm9yY2FEZVZlbmRhcyxfZ3dVbmlkYWRlRGVNZWRpZGFGb3JjYURlVmVuZGFzLF9nd1ZlbmRlZG9yRm9yY2FEZVZlbmRhcyIsImh0dHA6Ly9sb2NhbGhvc3Q6MzUwMDA6X2d3UGVkaWRvRm9yY2FEZVZlbmRhcyJdLCJuYmYiOjE1OTg2MTcyNDIsImV4cCI6MTYxNTg5NzMwMiwiaXNzIjoiYXV0aC52aXNpb25zIn0.PdTGttEPteDkKGlMft518RM18gybajYBmAyV1bGCEz5Oiv2Ydez6jTtxauTWm6gSd3aqxHp1cPaOPIHe8hxz3EMsB2IwU6fAnyhJgkK38EU4Vr2mkLgeSMOInPHlBDUWGLy6UL8c1aGBd1XY_C2Zn9KEsu1rrmz6wHk_qmq-8LGOj0UZhapFnRu7wXVHKqFnkkCTXzAiHT4a5uI6nuoXCP-07iXZeM9DeZi_VCRSUHRaz-WYpfLhrrsSQt6kCiGUMwbU_qGDlLzCjGPNcy9ctLnKzf69Pa-ltHq-sp17o8Hfkd6Q3TAnycpxk1_iMO6gRVhvXXQDMLOWEhZwBhnqZQ';
        
        $client = new GuzzleHttp\Client();
        
        $empresa = json_decode($client->request('GET', 'https://visions.topmanager.com.br/Servidor_2.1.1_api/forcadevendas/empresa/consultar',
            ['headers' => ['Content-Type' => 'application/json', 'Authorization' => 'Bearer ' . $token]])->getBody(), true);

        $tipoOP = json_decode($client->request('GET', 'https://visions.topmanager.com.br/Servidor_2.1.1_api/forcadevendas/tipodeoperacao/consultar',
            ['headers' => ['Content-Type' => 'application/json', 'Authorization' => 'Bearer ' . $token]])->getBody(), true);
        
        $cliente = json_decode($client->request('GET', 'https://visions.topmanager.com.br/Servidor_2.1.1_api/forcadevendas/cliente/consultar',
            ['headers' => ['Content-Type' => 'application/json', 'Authorization' => 'Bearer ' . $token]])->getBody(), true);
        
        $clienteID = $request->input('cliente'); //29455;
        $empresaID = $request->input('empresa');
        $opID = $request->input('tipoOP');

        
        //$tipoDoc = json_decode($client->request('GET', 'https://visions.topmanager.com.br/Servidor_2.1.1_api/forcadevendas/tipodedocumento/consultar',
            //['headers' => ['Content-Type' => 'application/json', 'Authorization' => 'Bearer ' . $token]])->getBody(), true);
        
        $moeda = json_decode($client->request('GET', 'https://visions.topmanager.com.br/Servidor_2.1.1_api/forcadevendas/moeda/consultar',
            ['headers' => ['Content-Type' => 'application/json', 'Authorization' => 'Bearer ' . $token]])->getBody(), true);

        $vendedor = json_decode($client->request('GET', 'https://visions.topmanager.com.br/Servidor_2.1.1_api/forcadevendas/vendedor/consultar',
            ['headers' => ['Content-Type' => 'application/json', 'Authorization' => 'Bearer ' . $token]])->getBody(), true);
        
        $agCobrador = json_decode($client->request('GET', 'https://visions.topmanager.com.br/Servidor_2.1.1_api/forcadevendas/agentecobrador/consultar',
            ['headers' => ['Content-Type' => 'application/json', 'Authorization' => 'Bearer ' . $token]])->getBody(), true);

        $politicaCobranca = json_decode($client->request('GET', 'https://visions.topmanager.com.br/Servidor_2.1.1_api/forcadevendas/detalhepoliticadecobranca/filtrocobranca?clienteID=' . $clienteID,
            ['headers' => ['Content-Type' => 'application/json', 'Authorization' => 'Bearer ' . $token]])->getBody(), true);
    
        $id_agenteCob = array();
        $nome_agenteCob = array();
        foreach($agCobrador as $ac)
        {
            foreach($politicaCobranca as $p)
            {
                if($clienteID == $p['clienteID'] && $ac['id'] == $p['agenteCobradorID'] && $empresaID == $p['empresaID'] && $p['objetoID'] == 1)
                {
                    array_push($id_agenteCob, $ac['id']);
                    array_push($nome_agenteCob, $ac['nome']);
                }
            }
        }
        $ac_id = array_unique($id_agenteCob);
        $ac_nome = array_unique($nome_agenteCob);

        $agentesCobradores = array_combine($ac_id, $ac_nome); //array_map(function($ac_id, $ac_nome){return $ac_id.' - '.$ac_nome;}, $ac_id, $ac_nome);


        return view('API.form_2', compact('cliente', 'clienteID', 'moeda', 'vendedor', 'agCobrador',
                                    'politicaCobranca', 'empresaID', 'opID', 'agentesCobradores'));
    }

    public function tipoCobranca(Request $request)
    {
        $token = 'eyJhbGciOiJSUzI1NiIsImtpZCI6ImE0YzhlY2FlMTdmMjQxNTJhOTZjNGZkNWMxNzE5NGNhIiwidHlwIjoiSldUIn0.eyJzdWIiOiIxMjMwNyIsInVuaXF1ZV9uYW1lIjoiMTIzMDciLCJpYXQiOjE1OTg2MTczMDMsImp0aSI6IjkyNjQ2YjU3NzBmYjQ0YWI5YjBmZDAzYzNiZWNkYTA1IiwiU2l0ZSI6IkR1bmF4IiwiQXBsaWNhY2FvIjoiRm9yY2FEZVZlbmRhcyIsIkNvbmV4YW8iOiJBVVRIXzEyMzA3X2I4NGE4MTA5ZTZlZTRiMDQ5ODM1ZjBkMTE5YmZlZTBmIiwiR3J1cG9EZVdlYlNlcnZpY2UiOlsiX2d3QWdlbnRlQ29icmFkb3JGb3JjYURlVmVuZGFzOmZvcmNhZGV2ZW5kYXMvYWdlbnRlY29icmFkb3I6MiIsIl9nd0F0aXZpZGFkZUZvcmNhRGVWZW5kYXM6Zm9yY2FkZXZlbmRhcy9hdGl2aWRhZGU6MiIsIl9nd0NlbnRyb0RlQ3VzdG9Gb3JjYURlVmVuZGFzOmZvcmNhZGV2ZW5kYXMvY2VudHJvZGVjdXN0bzoyIiwiX2d3Q2xpZW50ZUZvcmNhRGVWZW5kYXM6Zm9yY2FkZXZlbmRhcy9jbGllbnRlOjIiLCJfZ3dDb21pc3PDo29Gb3JjYURlVmVuZGFzOmZvcmNhZGV2ZW5kYXMvY29taXNzYW86MiIsIl9nd0NvbnRhc0FSZWNlYmVyRm9yY2FEZVZlbmRhczpmb3JjYWRldmVuZGFzL2NvbnRhc2FyZWNlYmVyOjIiLCJfZ3dFbXByZXNhRm9yY2FEZVZlbmRhczpmb3JjYWRldmVuZGFzL2VtcHJlc2E6MiIsIl9nd0VzdG9xdWVGb3JjYURlVmVuZGFzOmZvcmNhZGV2ZW5kYXMvbGFuY2FtZW50b2RlZXN0b3F1ZToyIiwiX2d3RmF0dXJhbWVudG9Gb3JjYURlVmVuZGFzOmZvcmNhZGV2ZW5kYXMvZmF0dXJhbWVudG86MiIsIl9nd0ZpbmFsaWRhZGVGb3JjYURlVmVuZGFzOmZvcmNhZGV2ZW5kYXMvZmluYWxpZGFkZToyIiwiX2d3Rm9ybWFEZVBhZ2FtZW50b0ZvcmNhRGVWZW5kYXM6Zm9yY2FkZXZlbmRhcy9mb3JtYWRlcGFnYW1lbnRvOjIiLCJfZ3dJdGVtRG9QZWRpZG9Gb3JjYURlVmVuZGFzOmZvcmNhZGV2ZW5kYXMvaXRlbWRvcGVkaWRvOjIiLCJfZ3dMb2NhbGl6YWNhb0ZvcmNhRGVWZW5kYXM6Zm9yY2FkZXZlbmRhcy9sb2NhbGl6YWNhbzoyIiwiX2d3TWVyY2Fkb3JpYUZvcmNhRGVWZW5kYXM6Zm9yY2FkZXZlbmRhcy9tZXJjYWRvcmlhOjIiLCJfZ3dNb2VkYUZvcmNhRGVWZW5kYXM6Zm9yY2FkZXZlbmRhcy9tb2VkYToyIiwiX2d3UGVkaWRvRm9yY2FEZVZlbmRhczpmb3JjYWRldmVuZGFzL3BlZGlkbzoyIiwiX2d3UG9saXRpY2FEZUNvYnJhbmNhRm9yY2FEZVZlbmRhczpmb3JjYWRldmVuZGFzL2RldGFsaGVwb2xpdGljYWRlY29icmFuY2E6MiIsIl9nd1BvbGl0aWNhRGVQcmVjb0ZvcmNhRGVWZW5kYXM6Zm9yY2FkZXZlbmRhcy9vYmpldG9kb2RldGFsaGVkYXBvbGl0aWNhZGVwcmVjb3M6MiIsIl9nd1RpcG9EZUNvYnJhbmNhRm9yY2FEZVZlbmRhczpmb3JjYWRldmVuZGFzL3RpcG9kZWNvYnJhbmNhOjIiLCJfZ3dUaXBvRGVEb2N1bWVudG9Gb3JjYURlVmVuZGFzOmZvcmNhZGV2ZW5kYXMvdGlwb2RlZG9jdW1lbnRvOjIiLCJfZ3dUaXBvRGVMb2dyYWRvdXJvRm9yY2FEZVZlbmRhczpmb3JjYWRldmVuZGFzL3RpcG9kZWxvZ3JhZG91cm86MiIsIl9nd1RpcG9EZU9wZXJhY2FvRm9yY2FEZVZlbmRhczpmb3JjYWRldmVuZGFzL3RpcG9kZW9wZXJhY2FvOjIiLCJfZ3dUdXJub0ZvcmNhRGVWZW5kYXM6Zm9yY2FkZXZlbmRhcy90dXJubzoyIiwiX2d3VW5pZGFkZURlTWVkaWRhRm9yY2FEZVZlbmRhczpmb3JjYWRldmVuZGFzL3VuaWRhZGVkZW1lZGlkYToyIiwiX2d3VmVuZGVkb3JGb3JjYURlVmVuZGFzOmZvcmNhZGV2ZW5kYXMvdmVuZGVkb3I6MiJdLCJXZWJTZXJ2aWNlIjpbIl93c0NvbnN1bHRhckFnZW50ZUNvYnJhZG9yOmNvbnN1bHRhcjoyIiwiX3dzQ29uc3VsdGFyQXRpdmlkYWRlOmNvbnN1bHRhcjoyIiwiX3dzQ29uc3VsdGFyQ2VudHJvRGVDdXN0b3M6Y29uc3VsdGFyOjIiLCJfd3NDb25zdWx0YXJDbGllbnRlczpjb25zdWx0YXI6MiIsIl93c0NvbnN1bHRhckNvbWlzc29lczpjb25zdWx0YXI6MiIsIl93c0NvbnN1bHRhckNvbnRhc0FSZWNlYmVyOmNvbnN1bHRhcjoyIiwiX3dzQ29uc3VsdGFyRW1wcmVzYTpjb25zdWx0YXI6MiIsIl93c0NvbnN1bHRhckVzdG9xdWU6Y29uc3VsdGFyOjIiLCJfd3NDb25zdWx0YXJGYXR1cmFtZW50bzpjb25zdWx0YXI6MiIsIl93c0NvbnN1bHRhckZpbmFsaWRhZGU6Y29uc3VsdGFyOjIiLCJfd3NDb25zdWx0YXJGb3JtYURlUGFnYW1lbnRvOmNvbnN1bHRhcjoyIiwiX3dzQ29uc3VsdGFyUGVkaWRvczpjb25zdWx0YXI6MiIsIl93c0NvbnN1bHRhclBlZGlkb3NQZW5kZW50ZURlRW1iYXJxdWU6cGVuZGVudGVkZWVtYmFycXVlOjIiLCJfd3NDb25zdWx0YXJQZWRpZG9zRW1iYXJjYWRvUGVuZGVudGU6ZW1iYXJjYWRvcGVuZGVudGU6MiIsIl93c0NvbnN1bHRhclBhaXM6Y29uc3VsdGFycGFpczoyIiwiX3dzQ29uc3VsdGFyRXN0YWRvOmNvbnN1bHRhcmVzdGFkbzoyIiwiX3dzQ29uc3VsdGFyQ2lkYWRlOmNvbnN1bHRhcmNpZGFkZToyIiwiX3dzQ29uc3VsdGFyQmFpcnJvOmNvbnN1bHRhcmJhaXJybzoyIiwiX3dzQ29uc3VsdGFyTWVyY2Fkb3JpYTpjb25zdWx0YXI6MiIsIl93c0NvbnN1bHRhck1vZWRhOmNvbnN1bHRhcjoyIiwiX3dzSW5jbHVpclBlZGlkbzppbmNsdWlyOjIiLCJfd3NDb25zdWx0YXJGaWx0cm9Db2JyYW5jYTpmaWx0cm9jb2JyYW5jYToyIiwiX3dzQ29uc3VsdGFyVGFiZWxhRGVQcmVjb3M6Y29uc3VsdGFydGFiZWxhZGVwcmVjb3M6MiIsIl93c0NvbnN1bHRhclRpcG9EZUNvYnJhbmNhOmNvbnN1bHRhcjoyIiwiX3dzQ29uc3VsdGFyVGlwb0RlRG9jdW1lbnRvOmNvbnN1bHRhcjoyIiwiX3dzQ29uc3VsdGFyVGlwb0RlTG9ncmFkb3Vybzpjb25zdWx0YXI6MiIsIl93c0NvbnN1bHRhclRpcG9EZU9wZXJhY2FvOmNvbnN1bHRhcjoyIiwiX3dzQ29uc3VsdGFyVHVybm86Y29uc3VsdGFyOjIiLCJfd3NDb25zdWx0YXJVbmlkYWRlRGVNZWRpZGE6Y29uc3VsdGFyOjIiLCJfd3NDb25zdWx0YXJWZW5kZWRvcjpjb25zdWx0YXI6MiJdLCJFbmRlcmVjb0RhSW5zdGFuY2lhIjpbImh0dHBzOi8vdmlzaW9ucy50b3BtYW5hZ2VyLmNvbS5ici9TZXJ2aWRvcl8yLjEuMV9hcGk6X2d3QWdlbnRlQ29icmFkb3JGb3JjYURlVmVuZGFzLF9nd0F0aXZpZGFkZUZvcmNhRGVWZW5kYXMsX2d3Q2VudHJvRGVDdXN0b0ZvcmNhRGVWZW5kYXMsX2d3Q2xpZW50ZUZvcmNhRGVWZW5kYXMsX2d3Q29taXNzw6NvRm9yY2FEZVZlbmRhcyxfZ3dDb250YXNBUmVjZWJlckZvcmNhRGVWZW5kYXMsX2d3RW1wcmVzYUZvcmNhRGVWZW5kYXMsX2d3RXN0b3F1ZUZvcmNhRGVWZW5kYXMsX2d3RmF0dXJhbWVudG9Gb3JjYURlVmVuZGFzLF9nd0ZpbmFsaWRhZGVGb3JjYURlVmVuZGFzLF9nd0Zvcm1hRGVQYWdhbWVudG9Gb3JjYURlVmVuZGFzLF9nd0l0ZW1Eb1BlZGlkb0ZvcmNhRGVWZW5kYXMsX2d3TG9jYWxpemFjYW9Gb3JjYURlVmVuZGFzLF9nd01lcmNhZG9yaWFGb3JjYURlVmVuZGFzLF9nd01vZWRhRm9yY2FEZVZlbmRhcyxfZ3dQb2xpdGljYURlQ29icmFuY2FGb3JjYURlVmVuZGFzLF9nd1BvbGl0aWNhRGVQcmVjb0ZvcmNhRGVWZW5kYXMsX2d3VGlwb0RlQ29icmFuY2FGb3JjYURlVmVuZGFzLF9nd1RpcG9EZURvY3VtZW50b0ZvcmNhRGVWZW5kYXMsX2d3VGlwb0RlTG9ncmFkb3Vyb0ZvcmNhRGVWZW5kYXMsX2d3VGlwb0RlT3BlcmFjYW9Gb3JjYURlVmVuZGFzLF9nd1R1cm5vRm9yY2FEZVZlbmRhcyxfZ3dVbmlkYWRlRGVNZWRpZGFGb3JjYURlVmVuZGFzLF9nd1ZlbmRlZG9yRm9yY2FEZVZlbmRhcyIsImh0dHA6Ly9sb2NhbGhvc3Q6MzUwMDA6X2d3UGVkaWRvRm9yY2FEZVZlbmRhcyJdLCJuYmYiOjE1OTg2MTcyNDIsImV4cCI6MTYxNTg5NzMwMiwiaXNzIjoiYXV0aC52aXNpb25zIn0.PdTGttEPteDkKGlMft518RM18gybajYBmAyV1bGCEz5Oiv2Ydez6jTtxauTWm6gSd3aqxHp1cPaOPIHe8hxz3EMsB2IwU6fAnyhJgkK38EU4Vr2mkLgeSMOInPHlBDUWGLy6UL8c1aGBd1XY_C2Zn9KEsu1rrmz6wHk_qmq-8LGOj0UZhapFnRu7wXVHKqFnkkCTXzAiHT4a5uI6nuoXCP-07iXZeM9DeZi_VCRSUHRaz-WYpfLhrrsSQt6kCiGUMwbU_qGDlLzCjGPNcy9ctLnKzf69Pa-ltHq-sp17o8Hfkd6Q3TAnycpxk1_iMO6gRVhvXXQDMLOWEhZwBhnqZQ';
        $client = new GuzzleHttp\Client();

        $clienteID = $request->input('cliente'); //29455;
        $agente = $request->input('agCobrador');
        $empresaID = $request->input('empresa');
        $opID = $request->input('tipoOP');
        $moedaID = $request->input('moeda');
        $vendedorID = $request->input('vendedor');
        
        $cliente = json_decode($client->request('GET', 'https://visions.topmanager.com.br/Servidor_2.1.1_api/forcadevendas/cliente/consultar',
            ['headers' => ['Content-Type' => 'application/json', 'Authorization' => 'Bearer ' . $token]])->getBody(), true);
        
        $tipoCobranca = json_decode($client->request('GET', 'https://visions.topmanager.com.br/Servidor_2.1.1_api/forcadevendas/tipodecobranca/consultar',
            ['headers' => ['Content-Type' => 'application/json', 'Authorization' => 'Bearer ' . $token]])->getBody(), true);

        $politicaCobranca = json_decode($client->request('GET', 'https://visions.topmanager.com.br/Servidor_2.1.1_api/forcadevendas/detalhepoliticadecobranca/filtrocobranca?clienteID=' . $clienteID,
            ['headers' => ['Content-Type' => 'application/json', 'Authorization' => 'Bearer ' . $token]])->getBody(), true);
    
        
        $idTipoCobranca = array();
        $nomeTipoCobranca = array();
        foreach($tipoCobranca as $tc)
        {
            foreach($politicaCobranca as $p)
            {
                if($tc['id'] == $p['tipoDeCobrancaID'] && $agente == $p['agenteCobradorID'] && $empresaID == $p['empresaID'] && $p['objetoID'] == 1)
                {
                    array_push($idTipoCobranca, $tc['id']);
                    array_push($nomeTipoCobranca, $tc['nome']);
                }
            }
        }
        $tc_id = array_unique($idTipoCobranca);
        $tc_nome = array_unique($nomeTipoCobranca);

        $TiposCobranca = array_combine($tc_id, $tc_nome);

        return view('API.tipoCobranca', compact('tipoCobranca', 'politicaCobranca', 'agente',
                                            'clienteID', 'cliente', 'empresaID', 'opID',
                                            'moedaID', 'vendedorID', 'TiposCobranca'));
    }

    public function formaPagamento(Request $request)
    {
        $token = 'eyJhbGciOiJSUzI1NiIsImtpZCI6ImE0YzhlY2FlMTdmMjQxNTJhOTZjNGZkNWMxNzE5NGNhIiwidHlwIjoiSldUIn0.eyJzdWIiOiIxMjMwNyIsInVuaXF1ZV9uYW1lIjoiMTIzMDciLCJpYXQiOjE1OTg2MTczMDMsImp0aSI6IjkyNjQ2YjU3NzBmYjQ0YWI5YjBmZDAzYzNiZWNkYTA1IiwiU2l0ZSI6IkR1bmF4IiwiQXBsaWNhY2FvIjoiRm9yY2FEZVZlbmRhcyIsIkNvbmV4YW8iOiJBVVRIXzEyMzA3X2I4NGE4MTA5ZTZlZTRiMDQ5ODM1ZjBkMTE5YmZlZTBmIiwiR3J1cG9EZVdlYlNlcnZpY2UiOlsiX2d3QWdlbnRlQ29icmFkb3JGb3JjYURlVmVuZGFzOmZvcmNhZGV2ZW5kYXMvYWdlbnRlY29icmFkb3I6MiIsIl9nd0F0aXZpZGFkZUZvcmNhRGVWZW5kYXM6Zm9yY2FkZXZlbmRhcy9hdGl2aWRhZGU6MiIsIl9nd0NlbnRyb0RlQ3VzdG9Gb3JjYURlVmVuZGFzOmZvcmNhZGV2ZW5kYXMvY2VudHJvZGVjdXN0bzoyIiwiX2d3Q2xpZW50ZUZvcmNhRGVWZW5kYXM6Zm9yY2FkZXZlbmRhcy9jbGllbnRlOjIiLCJfZ3dDb21pc3PDo29Gb3JjYURlVmVuZGFzOmZvcmNhZGV2ZW5kYXMvY29taXNzYW86MiIsIl9nd0NvbnRhc0FSZWNlYmVyRm9yY2FEZVZlbmRhczpmb3JjYWRldmVuZGFzL2NvbnRhc2FyZWNlYmVyOjIiLCJfZ3dFbXByZXNhRm9yY2FEZVZlbmRhczpmb3JjYWRldmVuZGFzL2VtcHJlc2E6MiIsIl9nd0VzdG9xdWVGb3JjYURlVmVuZGFzOmZvcmNhZGV2ZW5kYXMvbGFuY2FtZW50b2RlZXN0b3F1ZToyIiwiX2d3RmF0dXJhbWVudG9Gb3JjYURlVmVuZGFzOmZvcmNhZGV2ZW5kYXMvZmF0dXJhbWVudG86MiIsIl9nd0ZpbmFsaWRhZGVGb3JjYURlVmVuZGFzOmZvcmNhZGV2ZW5kYXMvZmluYWxpZGFkZToyIiwiX2d3Rm9ybWFEZVBhZ2FtZW50b0ZvcmNhRGVWZW5kYXM6Zm9yY2FkZXZlbmRhcy9mb3JtYWRlcGFnYW1lbnRvOjIiLCJfZ3dJdGVtRG9QZWRpZG9Gb3JjYURlVmVuZGFzOmZvcmNhZGV2ZW5kYXMvaXRlbWRvcGVkaWRvOjIiLCJfZ3dMb2NhbGl6YWNhb0ZvcmNhRGVWZW5kYXM6Zm9yY2FkZXZlbmRhcy9sb2NhbGl6YWNhbzoyIiwiX2d3TWVyY2Fkb3JpYUZvcmNhRGVWZW5kYXM6Zm9yY2FkZXZlbmRhcy9tZXJjYWRvcmlhOjIiLCJfZ3dNb2VkYUZvcmNhRGVWZW5kYXM6Zm9yY2FkZXZlbmRhcy9tb2VkYToyIiwiX2d3UGVkaWRvRm9yY2FEZVZlbmRhczpmb3JjYWRldmVuZGFzL3BlZGlkbzoyIiwiX2d3UG9saXRpY2FEZUNvYnJhbmNhRm9yY2FEZVZlbmRhczpmb3JjYWRldmVuZGFzL2RldGFsaGVwb2xpdGljYWRlY29icmFuY2E6MiIsIl9nd1BvbGl0aWNhRGVQcmVjb0ZvcmNhRGVWZW5kYXM6Zm9yY2FkZXZlbmRhcy9vYmpldG9kb2RldGFsaGVkYXBvbGl0aWNhZGVwcmVjb3M6MiIsIl9nd1RpcG9EZUNvYnJhbmNhRm9yY2FEZVZlbmRhczpmb3JjYWRldmVuZGFzL3RpcG9kZWNvYnJhbmNhOjIiLCJfZ3dUaXBvRGVEb2N1bWVudG9Gb3JjYURlVmVuZGFzOmZvcmNhZGV2ZW5kYXMvdGlwb2RlZG9jdW1lbnRvOjIiLCJfZ3dUaXBvRGVMb2dyYWRvdXJvRm9yY2FEZVZlbmRhczpmb3JjYWRldmVuZGFzL3RpcG9kZWxvZ3JhZG91cm86MiIsIl9nd1RpcG9EZU9wZXJhY2FvRm9yY2FEZVZlbmRhczpmb3JjYWRldmVuZGFzL3RpcG9kZW9wZXJhY2FvOjIiLCJfZ3dUdXJub0ZvcmNhRGVWZW5kYXM6Zm9yY2FkZXZlbmRhcy90dXJubzoyIiwiX2d3VW5pZGFkZURlTWVkaWRhRm9yY2FEZVZlbmRhczpmb3JjYWRldmVuZGFzL3VuaWRhZGVkZW1lZGlkYToyIiwiX2d3VmVuZGVkb3JGb3JjYURlVmVuZGFzOmZvcmNhZGV2ZW5kYXMvdmVuZGVkb3I6MiJdLCJXZWJTZXJ2aWNlIjpbIl93c0NvbnN1bHRhckFnZW50ZUNvYnJhZG9yOmNvbnN1bHRhcjoyIiwiX3dzQ29uc3VsdGFyQXRpdmlkYWRlOmNvbnN1bHRhcjoyIiwiX3dzQ29uc3VsdGFyQ2VudHJvRGVDdXN0b3M6Y29uc3VsdGFyOjIiLCJfd3NDb25zdWx0YXJDbGllbnRlczpjb25zdWx0YXI6MiIsIl93c0NvbnN1bHRhckNvbWlzc29lczpjb25zdWx0YXI6MiIsIl93c0NvbnN1bHRhckNvbnRhc0FSZWNlYmVyOmNvbnN1bHRhcjoyIiwiX3dzQ29uc3VsdGFyRW1wcmVzYTpjb25zdWx0YXI6MiIsIl93c0NvbnN1bHRhckVzdG9xdWU6Y29uc3VsdGFyOjIiLCJfd3NDb25zdWx0YXJGYXR1cmFtZW50bzpjb25zdWx0YXI6MiIsIl93c0NvbnN1bHRhckZpbmFsaWRhZGU6Y29uc3VsdGFyOjIiLCJfd3NDb25zdWx0YXJGb3JtYURlUGFnYW1lbnRvOmNvbnN1bHRhcjoyIiwiX3dzQ29uc3VsdGFyUGVkaWRvczpjb25zdWx0YXI6MiIsIl93c0NvbnN1bHRhclBlZGlkb3NQZW5kZW50ZURlRW1iYXJxdWU6cGVuZGVudGVkZWVtYmFycXVlOjIiLCJfd3NDb25zdWx0YXJQZWRpZG9zRW1iYXJjYWRvUGVuZGVudGU6ZW1iYXJjYWRvcGVuZGVudGU6MiIsIl93c0NvbnN1bHRhclBhaXM6Y29uc3VsdGFycGFpczoyIiwiX3dzQ29uc3VsdGFyRXN0YWRvOmNvbnN1bHRhcmVzdGFkbzoyIiwiX3dzQ29uc3VsdGFyQ2lkYWRlOmNvbnN1bHRhcmNpZGFkZToyIiwiX3dzQ29uc3VsdGFyQmFpcnJvOmNvbnN1bHRhcmJhaXJybzoyIiwiX3dzQ29uc3VsdGFyTWVyY2Fkb3JpYTpjb25zdWx0YXI6MiIsIl93c0NvbnN1bHRhck1vZWRhOmNvbnN1bHRhcjoyIiwiX3dzSW5jbHVpclBlZGlkbzppbmNsdWlyOjIiLCJfd3NDb25zdWx0YXJGaWx0cm9Db2JyYW5jYTpmaWx0cm9jb2JyYW5jYToyIiwiX3dzQ29uc3VsdGFyVGFiZWxhRGVQcmVjb3M6Y29uc3VsdGFydGFiZWxhZGVwcmVjb3M6MiIsIl93c0NvbnN1bHRhclRpcG9EZUNvYnJhbmNhOmNvbnN1bHRhcjoyIiwiX3dzQ29uc3VsdGFyVGlwb0RlRG9jdW1lbnRvOmNvbnN1bHRhcjoyIiwiX3dzQ29uc3VsdGFyVGlwb0RlTG9ncmFkb3Vybzpjb25zdWx0YXI6MiIsIl93c0NvbnN1bHRhclRpcG9EZU9wZXJhY2FvOmNvbnN1bHRhcjoyIiwiX3dzQ29uc3VsdGFyVHVybm86Y29uc3VsdGFyOjIiLCJfd3NDb25zdWx0YXJVbmlkYWRlRGVNZWRpZGE6Y29uc3VsdGFyOjIiLCJfd3NDb25zdWx0YXJWZW5kZWRvcjpjb25zdWx0YXI6MiJdLCJFbmRlcmVjb0RhSW5zdGFuY2lhIjpbImh0dHBzOi8vdmlzaW9ucy50b3BtYW5hZ2VyLmNvbS5ici9TZXJ2aWRvcl8yLjEuMV9hcGk6X2d3QWdlbnRlQ29icmFkb3JGb3JjYURlVmVuZGFzLF9nd0F0aXZpZGFkZUZvcmNhRGVWZW5kYXMsX2d3Q2VudHJvRGVDdXN0b0ZvcmNhRGVWZW5kYXMsX2d3Q2xpZW50ZUZvcmNhRGVWZW5kYXMsX2d3Q29taXNzw6NvRm9yY2FEZVZlbmRhcyxfZ3dDb250YXNBUmVjZWJlckZvcmNhRGVWZW5kYXMsX2d3RW1wcmVzYUZvcmNhRGVWZW5kYXMsX2d3RXN0b3F1ZUZvcmNhRGVWZW5kYXMsX2d3RmF0dXJhbWVudG9Gb3JjYURlVmVuZGFzLF9nd0ZpbmFsaWRhZGVGb3JjYURlVmVuZGFzLF9nd0Zvcm1hRGVQYWdhbWVudG9Gb3JjYURlVmVuZGFzLF9nd0l0ZW1Eb1BlZGlkb0ZvcmNhRGVWZW5kYXMsX2d3TG9jYWxpemFjYW9Gb3JjYURlVmVuZGFzLF9nd01lcmNhZG9yaWFGb3JjYURlVmVuZGFzLF9nd01vZWRhRm9yY2FEZVZlbmRhcyxfZ3dQb2xpdGljYURlQ29icmFuY2FGb3JjYURlVmVuZGFzLF9nd1BvbGl0aWNhRGVQcmVjb0ZvcmNhRGVWZW5kYXMsX2d3VGlwb0RlQ29icmFuY2FGb3JjYURlVmVuZGFzLF9nd1RpcG9EZURvY3VtZW50b0ZvcmNhRGVWZW5kYXMsX2d3VGlwb0RlTG9ncmFkb3Vyb0ZvcmNhRGVWZW5kYXMsX2d3VGlwb0RlT3BlcmFjYW9Gb3JjYURlVmVuZGFzLF9nd1R1cm5vRm9yY2FEZVZlbmRhcyxfZ3dVbmlkYWRlRGVNZWRpZGFGb3JjYURlVmVuZGFzLF9nd1ZlbmRlZG9yRm9yY2FEZVZlbmRhcyIsImh0dHA6Ly9sb2NhbGhvc3Q6MzUwMDA6X2d3UGVkaWRvRm9yY2FEZVZlbmRhcyJdLCJuYmYiOjE1OTg2MTcyNDIsImV4cCI6MTYxNTg5NzMwMiwiaXNzIjoiYXV0aC52aXNpb25zIn0.PdTGttEPteDkKGlMft518RM18gybajYBmAyV1bGCEz5Oiv2Ydez6jTtxauTWm6gSd3aqxHp1cPaOPIHe8hxz3EMsB2IwU6fAnyhJgkK38EU4Vr2mkLgeSMOInPHlBDUWGLy6UL8c1aGBd1XY_C2Zn9KEsu1rrmz6wHk_qmq-8LGOj0UZhapFnRu7wXVHKqFnkkCTXzAiHT4a5uI6nuoXCP-07iXZeM9DeZi_VCRSUHRaz-WYpfLhrrsSQt6kCiGUMwbU_qGDlLzCjGPNcy9ctLnKzf69Pa-ltHq-sp17o8Hfkd6Q3TAnycpxk1_iMO6gRVhvXXQDMLOWEhZwBhnqZQ';
        $client = new GuzzleHttp\Client();

        $clienteID = $request->input('cliente'); //29455;
        $tipoCobrancaID = $request->input('tipoCobranca');
        $agente = $request->input('agCobrador');
        $empresaID = $request->input('empresa');
        $opID = $request->input('tipoOP');
        $moedaID = $request->input('moeda');
        $vendedorID = $request->input('vendedor');

        $cliente = json_decode($client->request('GET', 'https://visions.topmanager.com.br/Servidor_2.1.1_api/forcadevendas/cliente/consultar',
            ['headers' => ['Content-Type' => 'application/json', 'Authorization' => 'Bearer ' . $token]])->getBody(), true);
        
        $formaPagamento = json_decode($client->request('GET', 'https://visions.topmanager.com.br/Servidor_2.1.1_api/forcadevendas/formadepagamento/consultar',
            ['headers' => ['Content-Type' => 'application/json', 'Authorization' => 'Bearer '. $token]])->getBody(), true);
        
        $politicaCobranca = json_decode($client->request('GET', 'https://visions.topmanager.com.br/Servidor_2.1.1_api/forcadevendas/detalhepoliticadecobranca/filtrocobranca?clienteID=' . $clienteID,
            ['headers' => ['Content-Type' => 'application/json', 'Authorization' => 'Bearer ' . $token]])->getBody(), true);
    

        $idFormaPagamento = array();
        $nomeFormaPagamento = array();
        foreach($formaPagamento as $fp)
        {
            foreach($politicaCobranca as $p)
            {
                if($fp['id'] == $p['formaDePagamentoID'] && $tipoCobrancaID == $p['tipoDeCobrancaID'] && $empresaID == $p['empresaID'] && $p['objetoID'] == 1)
                {
                    array_push($idFormaPagamento, $fp['id']);
                    array_push($nomeFormaPagamento, $fp['nome']);
                }
            }
        }    
        $fp_id = array_unique($idFormaPagamento);
        $fp_nome = array_unique($nomeFormaPagamento);

        $FormasPagamento = array_combine($fp_id, $fp_nome);

        return view('API.formaPagamento', compact('clienteID', 'cliente', 'tipoCobrancaID',
                                                'formaPagamento', 'politicaCobranca', 'agente',
                                                'empresaID', 'opID', 'moedaID', 'vendedorID', 'FormasPagamento'));
    }

    public function Etapa2(Request $request)
    {
        $token = 'eyJhbGciOiJSUzI1NiIsImtpZCI6ImE0YzhlY2FlMTdmMjQxNTJhOTZjNGZkNWMxNzE5NGNhIiwidHlwIjoiSldUIn0.eyJzdWIiOiIxMjMwNyIsInVuaXF1ZV9uYW1lIjoiMTIzMDciLCJpYXQiOjE1OTg2MTczMDMsImp0aSI6IjkyNjQ2YjU3NzBmYjQ0YWI5YjBmZDAzYzNiZWNkYTA1IiwiU2l0ZSI6IkR1bmF4IiwiQXBsaWNhY2FvIjoiRm9yY2FEZVZlbmRhcyIsIkNvbmV4YW8iOiJBVVRIXzEyMzA3X2I4NGE4MTA5ZTZlZTRiMDQ5ODM1ZjBkMTE5YmZlZTBmIiwiR3J1cG9EZVdlYlNlcnZpY2UiOlsiX2d3QWdlbnRlQ29icmFkb3JGb3JjYURlVmVuZGFzOmZvcmNhZGV2ZW5kYXMvYWdlbnRlY29icmFkb3I6MiIsIl9nd0F0aXZpZGFkZUZvcmNhRGVWZW5kYXM6Zm9yY2FkZXZlbmRhcy9hdGl2aWRhZGU6MiIsIl9nd0NlbnRyb0RlQ3VzdG9Gb3JjYURlVmVuZGFzOmZvcmNhZGV2ZW5kYXMvY2VudHJvZGVjdXN0bzoyIiwiX2d3Q2xpZW50ZUZvcmNhRGVWZW5kYXM6Zm9yY2FkZXZlbmRhcy9jbGllbnRlOjIiLCJfZ3dDb21pc3PDo29Gb3JjYURlVmVuZGFzOmZvcmNhZGV2ZW5kYXMvY29taXNzYW86MiIsIl9nd0NvbnRhc0FSZWNlYmVyRm9yY2FEZVZlbmRhczpmb3JjYWRldmVuZGFzL2NvbnRhc2FyZWNlYmVyOjIiLCJfZ3dFbXByZXNhRm9yY2FEZVZlbmRhczpmb3JjYWRldmVuZGFzL2VtcHJlc2E6MiIsIl9nd0VzdG9xdWVGb3JjYURlVmVuZGFzOmZvcmNhZGV2ZW5kYXMvbGFuY2FtZW50b2RlZXN0b3F1ZToyIiwiX2d3RmF0dXJhbWVudG9Gb3JjYURlVmVuZGFzOmZvcmNhZGV2ZW5kYXMvZmF0dXJhbWVudG86MiIsIl9nd0ZpbmFsaWRhZGVGb3JjYURlVmVuZGFzOmZvcmNhZGV2ZW5kYXMvZmluYWxpZGFkZToyIiwiX2d3Rm9ybWFEZVBhZ2FtZW50b0ZvcmNhRGVWZW5kYXM6Zm9yY2FkZXZlbmRhcy9mb3JtYWRlcGFnYW1lbnRvOjIiLCJfZ3dJdGVtRG9QZWRpZG9Gb3JjYURlVmVuZGFzOmZvcmNhZGV2ZW5kYXMvaXRlbWRvcGVkaWRvOjIiLCJfZ3dMb2NhbGl6YWNhb0ZvcmNhRGVWZW5kYXM6Zm9yY2FkZXZlbmRhcy9sb2NhbGl6YWNhbzoyIiwiX2d3TWVyY2Fkb3JpYUZvcmNhRGVWZW5kYXM6Zm9yY2FkZXZlbmRhcy9tZXJjYWRvcmlhOjIiLCJfZ3dNb2VkYUZvcmNhRGVWZW5kYXM6Zm9yY2FkZXZlbmRhcy9tb2VkYToyIiwiX2d3UGVkaWRvRm9yY2FEZVZlbmRhczpmb3JjYWRldmVuZGFzL3BlZGlkbzoyIiwiX2d3UG9saXRpY2FEZUNvYnJhbmNhRm9yY2FEZVZlbmRhczpmb3JjYWRldmVuZGFzL2RldGFsaGVwb2xpdGljYWRlY29icmFuY2E6MiIsIl9nd1BvbGl0aWNhRGVQcmVjb0ZvcmNhRGVWZW5kYXM6Zm9yY2FkZXZlbmRhcy9vYmpldG9kb2RldGFsaGVkYXBvbGl0aWNhZGVwcmVjb3M6MiIsIl9nd1RpcG9EZUNvYnJhbmNhRm9yY2FEZVZlbmRhczpmb3JjYWRldmVuZGFzL3RpcG9kZWNvYnJhbmNhOjIiLCJfZ3dUaXBvRGVEb2N1bWVudG9Gb3JjYURlVmVuZGFzOmZvcmNhZGV2ZW5kYXMvdGlwb2RlZG9jdW1lbnRvOjIiLCJfZ3dUaXBvRGVMb2dyYWRvdXJvRm9yY2FEZVZlbmRhczpmb3JjYWRldmVuZGFzL3RpcG9kZWxvZ3JhZG91cm86MiIsIl9nd1RpcG9EZU9wZXJhY2FvRm9yY2FEZVZlbmRhczpmb3JjYWRldmVuZGFzL3RpcG9kZW9wZXJhY2FvOjIiLCJfZ3dUdXJub0ZvcmNhRGVWZW5kYXM6Zm9yY2FkZXZlbmRhcy90dXJubzoyIiwiX2d3VW5pZGFkZURlTWVkaWRhRm9yY2FEZVZlbmRhczpmb3JjYWRldmVuZGFzL3VuaWRhZGVkZW1lZGlkYToyIiwiX2d3VmVuZGVkb3JGb3JjYURlVmVuZGFzOmZvcmNhZGV2ZW5kYXMvdmVuZGVkb3I6MiJdLCJXZWJTZXJ2aWNlIjpbIl93c0NvbnN1bHRhckFnZW50ZUNvYnJhZG9yOmNvbnN1bHRhcjoyIiwiX3dzQ29uc3VsdGFyQXRpdmlkYWRlOmNvbnN1bHRhcjoyIiwiX3dzQ29uc3VsdGFyQ2VudHJvRGVDdXN0b3M6Y29uc3VsdGFyOjIiLCJfd3NDb25zdWx0YXJDbGllbnRlczpjb25zdWx0YXI6MiIsIl93c0NvbnN1bHRhckNvbWlzc29lczpjb25zdWx0YXI6MiIsIl93c0NvbnN1bHRhckNvbnRhc0FSZWNlYmVyOmNvbnN1bHRhcjoyIiwiX3dzQ29uc3VsdGFyRW1wcmVzYTpjb25zdWx0YXI6MiIsIl93c0NvbnN1bHRhckVzdG9xdWU6Y29uc3VsdGFyOjIiLCJfd3NDb25zdWx0YXJGYXR1cmFtZW50bzpjb25zdWx0YXI6MiIsIl93c0NvbnN1bHRhckZpbmFsaWRhZGU6Y29uc3VsdGFyOjIiLCJfd3NDb25zdWx0YXJGb3JtYURlUGFnYW1lbnRvOmNvbnN1bHRhcjoyIiwiX3dzQ29uc3VsdGFyUGVkaWRvczpjb25zdWx0YXI6MiIsIl93c0NvbnN1bHRhclBlZGlkb3NQZW5kZW50ZURlRW1iYXJxdWU6cGVuZGVudGVkZWVtYmFycXVlOjIiLCJfd3NDb25zdWx0YXJQZWRpZG9zRW1iYXJjYWRvUGVuZGVudGU6ZW1iYXJjYWRvcGVuZGVudGU6MiIsIl93c0NvbnN1bHRhclBhaXM6Y29uc3VsdGFycGFpczoyIiwiX3dzQ29uc3VsdGFyRXN0YWRvOmNvbnN1bHRhcmVzdGFkbzoyIiwiX3dzQ29uc3VsdGFyQ2lkYWRlOmNvbnN1bHRhcmNpZGFkZToyIiwiX3dzQ29uc3VsdGFyQmFpcnJvOmNvbnN1bHRhcmJhaXJybzoyIiwiX3dzQ29uc3VsdGFyTWVyY2Fkb3JpYTpjb25zdWx0YXI6MiIsIl93c0NvbnN1bHRhck1vZWRhOmNvbnN1bHRhcjoyIiwiX3dzSW5jbHVpclBlZGlkbzppbmNsdWlyOjIiLCJfd3NDb25zdWx0YXJGaWx0cm9Db2JyYW5jYTpmaWx0cm9jb2JyYW5jYToyIiwiX3dzQ29uc3VsdGFyVGFiZWxhRGVQcmVjb3M6Y29uc3VsdGFydGFiZWxhZGVwcmVjb3M6MiIsIl93c0NvbnN1bHRhclRpcG9EZUNvYnJhbmNhOmNvbnN1bHRhcjoyIiwiX3dzQ29uc3VsdGFyVGlwb0RlRG9jdW1lbnRvOmNvbnN1bHRhcjoyIiwiX3dzQ29uc3VsdGFyVGlwb0RlTG9ncmFkb3Vybzpjb25zdWx0YXI6MiIsIl93c0NvbnN1bHRhclRpcG9EZU9wZXJhY2FvOmNvbnN1bHRhcjoyIiwiX3dzQ29uc3VsdGFyVHVybm86Y29uc3VsdGFyOjIiLCJfd3NDb25zdWx0YXJVbmlkYWRlRGVNZWRpZGE6Y29uc3VsdGFyOjIiLCJfd3NDb25zdWx0YXJWZW5kZWRvcjpjb25zdWx0YXI6MiJdLCJFbmRlcmVjb0RhSW5zdGFuY2lhIjpbImh0dHBzOi8vdmlzaW9ucy50b3BtYW5hZ2VyLmNvbS5ici9TZXJ2aWRvcl8yLjEuMV9hcGk6X2d3QWdlbnRlQ29icmFkb3JGb3JjYURlVmVuZGFzLF9nd0F0aXZpZGFkZUZvcmNhRGVWZW5kYXMsX2d3Q2VudHJvRGVDdXN0b0ZvcmNhRGVWZW5kYXMsX2d3Q2xpZW50ZUZvcmNhRGVWZW5kYXMsX2d3Q29taXNzw6NvRm9yY2FEZVZlbmRhcyxfZ3dDb250YXNBUmVjZWJlckZvcmNhRGVWZW5kYXMsX2d3RW1wcmVzYUZvcmNhRGVWZW5kYXMsX2d3RXN0b3F1ZUZvcmNhRGVWZW5kYXMsX2d3RmF0dXJhbWVudG9Gb3JjYURlVmVuZGFzLF9nd0ZpbmFsaWRhZGVGb3JjYURlVmVuZGFzLF9nd0Zvcm1hRGVQYWdhbWVudG9Gb3JjYURlVmVuZGFzLF9nd0l0ZW1Eb1BlZGlkb0ZvcmNhRGVWZW5kYXMsX2d3TG9jYWxpemFjYW9Gb3JjYURlVmVuZGFzLF9nd01lcmNhZG9yaWFGb3JjYURlVmVuZGFzLF9nd01vZWRhRm9yY2FEZVZlbmRhcyxfZ3dQb2xpdGljYURlQ29icmFuY2FGb3JjYURlVmVuZGFzLF9nd1BvbGl0aWNhRGVQcmVjb0ZvcmNhRGVWZW5kYXMsX2d3VGlwb0RlQ29icmFuY2FGb3JjYURlVmVuZGFzLF9nd1RpcG9EZURvY3VtZW50b0ZvcmNhRGVWZW5kYXMsX2d3VGlwb0RlTG9ncmFkb3Vyb0ZvcmNhRGVWZW5kYXMsX2d3VGlwb0RlT3BlcmFjYW9Gb3JjYURlVmVuZGFzLF9nd1R1cm5vRm9yY2FEZVZlbmRhcyxfZ3dVbmlkYWRlRGVNZWRpZGFGb3JjYURlVmVuZGFzLF9nd1ZlbmRlZG9yRm9yY2FEZVZlbmRhcyIsImh0dHA6Ly9sb2NhbGhvc3Q6MzUwMDA6X2d3UGVkaWRvRm9yY2FEZVZlbmRhcyJdLCJuYmYiOjE1OTg2MTcyNDIsImV4cCI6MTYxNTg5NzMwMiwiaXNzIjoiYXV0aC52aXNpb25zIn0.PdTGttEPteDkKGlMft518RM18gybajYBmAyV1bGCEz5Oiv2Ydez6jTtxauTWm6gSd3aqxHp1cPaOPIHe8hxz3EMsB2IwU6fAnyhJgkK38EU4Vr2mkLgeSMOInPHlBDUWGLy6UL8c1aGBd1XY_C2Zn9KEsu1rrmz6wHk_qmq-8LGOj0UZhapFnRu7wXVHKqFnkkCTXzAiHT4a5uI6nuoXCP-07iXZeM9DeZi_VCRSUHRaz-WYpfLhrrsSQt6kCiGUMwbU_qGDlLzCjGPNcy9ctLnKzf69Pa-ltHq-sp17o8Hfkd6Q3TAnycpxk1_iMO6gRVhvXXQDMLOWEhZwBhnqZQ';
        $client = new GuzzleHttp\Client();
        
        $clienteID = $request->input('cliente'); //29455;
        $tipoCobrancaID = $request->input('tipoCobranca');
        $agente = $request->input('agCobrador');
        $empresaID = $request->input('empresa');
        $opID = $request->input('tipoOP');
        $moedaID = $request->input('moeda');
        $vendedorID = $request->input('vendedor');
        $formaPagamentoID = $request->input('formaPagamento');
        $observacao = $request->input('obs');
        $comInterna = $request->input('comInterna');

        $cliente = json_decode($client->request('GET', 'https://visions.topmanager.com.br/Servidor_2.1.1_api/forcadevendas/cliente/consultar',
            ['headers' => ['Content-Type' => 'application/json', 'Authorization' => 'Bearer ' . $token]])->getBody(), true);
        

        $objeto = json_decode($client->request('GET', 'https://visions.topmanager.com.br/Servidor_2.1.1_api/forcadevendas/mercadoria/consultar',
            ['headers' => ['Content-Type' => 'application/json', 'Authorization' => 'Bearer ' . $token]])->getBody(), true);

        $finalidade = json_decode($client->request('GET', 'https://visions.topmanager.com.br/Servidor_2.1.1_api/forcadevendas/finalidade/consultar',
            ['headers' => ['Content-Type' => 'application/json', 'Authorization' => 'Bearer ' . $token]])->getBody(), true);

        $centroCustos = json_decode($client->request('GET', 'https://visions.topmanager.com.br/Servidor_2.1.1_api/forcadevendas/centrodecusto/consultar',
            ['headers' => ['Content-Type' => 'application/json', 'Authorization' => 'Bearer ' . $token]])->getBody(), true);

        $atividade = json_decode($client->request('GET', 'https://visions.topmanager.com.br/Servidor_2.1.1_api/forcadevendas/atividade/consultar',
            ['headers' => ['Content-Type' => 'application/json', 'Authorization' => 'Bearer ' . $token]])->getBody(), true);


        return view('API.form-2etapa', compact('cliente', 'clienteID', 'objeto', 'finalidade',
                                            'centroCustos', 'atividade', 'tipoCobrancaID',
                                            'formaPagamentoID', 'agente', 'empresaID', 
                                            'opID', 'moedaID', 'vendedorID', 'observacao',
                                            'comInterna'));

    }

    public function Unidade(Request $request)
    {
        $token = 'eyJhbGciOiJSUzI1NiIsImtpZCI6ImE0YzhlY2FlMTdmMjQxNTJhOTZjNGZkNWMxNzE5NGNhIiwidHlwIjoiSldUIn0.eyJzdWIiOiIxMjMwNyIsInVuaXF1ZV9uYW1lIjoiMTIzMDciLCJpYXQiOjE1OTg2MTczMDMsImp0aSI6IjkyNjQ2YjU3NzBmYjQ0YWI5YjBmZDAzYzNiZWNkYTA1IiwiU2l0ZSI6IkR1bmF4IiwiQXBsaWNhY2FvIjoiRm9yY2FEZVZlbmRhcyIsIkNvbmV4YW8iOiJBVVRIXzEyMzA3X2I4NGE4MTA5ZTZlZTRiMDQ5ODM1ZjBkMTE5YmZlZTBmIiwiR3J1cG9EZVdlYlNlcnZpY2UiOlsiX2d3QWdlbnRlQ29icmFkb3JGb3JjYURlVmVuZGFzOmZvcmNhZGV2ZW5kYXMvYWdlbnRlY29icmFkb3I6MiIsIl9nd0F0aXZpZGFkZUZvcmNhRGVWZW5kYXM6Zm9yY2FkZXZlbmRhcy9hdGl2aWRhZGU6MiIsIl9nd0NlbnRyb0RlQ3VzdG9Gb3JjYURlVmVuZGFzOmZvcmNhZGV2ZW5kYXMvY2VudHJvZGVjdXN0bzoyIiwiX2d3Q2xpZW50ZUZvcmNhRGVWZW5kYXM6Zm9yY2FkZXZlbmRhcy9jbGllbnRlOjIiLCJfZ3dDb21pc3PDo29Gb3JjYURlVmVuZGFzOmZvcmNhZGV2ZW5kYXMvY29taXNzYW86MiIsIl9nd0NvbnRhc0FSZWNlYmVyRm9yY2FEZVZlbmRhczpmb3JjYWRldmVuZGFzL2NvbnRhc2FyZWNlYmVyOjIiLCJfZ3dFbXByZXNhRm9yY2FEZVZlbmRhczpmb3JjYWRldmVuZGFzL2VtcHJlc2E6MiIsIl9nd0VzdG9xdWVGb3JjYURlVmVuZGFzOmZvcmNhZGV2ZW5kYXMvbGFuY2FtZW50b2RlZXN0b3F1ZToyIiwiX2d3RmF0dXJhbWVudG9Gb3JjYURlVmVuZGFzOmZvcmNhZGV2ZW5kYXMvZmF0dXJhbWVudG86MiIsIl9nd0ZpbmFsaWRhZGVGb3JjYURlVmVuZGFzOmZvcmNhZGV2ZW5kYXMvZmluYWxpZGFkZToyIiwiX2d3Rm9ybWFEZVBhZ2FtZW50b0ZvcmNhRGVWZW5kYXM6Zm9yY2FkZXZlbmRhcy9mb3JtYWRlcGFnYW1lbnRvOjIiLCJfZ3dJdGVtRG9QZWRpZG9Gb3JjYURlVmVuZGFzOmZvcmNhZGV2ZW5kYXMvaXRlbWRvcGVkaWRvOjIiLCJfZ3dMb2NhbGl6YWNhb0ZvcmNhRGVWZW5kYXM6Zm9yY2FkZXZlbmRhcy9sb2NhbGl6YWNhbzoyIiwiX2d3TWVyY2Fkb3JpYUZvcmNhRGVWZW5kYXM6Zm9yY2FkZXZlbmRhcy9tZXJjYWRvcmlhOjIiLCJfZ3dNb2VkYUZvcmNhRGVWZW5kYXM6Zm9yY2FkZXZlbmRhcy9tb2VkYToyIiwiX2d3UGVkaWRvRm9yY2FEZVZlbmRhczpmb3JjYWRldmVuZGFzL3BlZGlkbzoyIiwiX2d3UG9saXRpY2FEZUNvYnJhbmNhRm9yY2FEZVZlbmRhczpmb3JjYWRldmVuZGFzL2RldGFsaGVwb2xpdGljYWRlY29icmFuY2E6MiIsIl9nd1BvbGl0aWNhRGVQcmVjb0ZvcmNhRGVWZW5kYXM6Zm9yY2FkZXZlbmRhcy9vYmpldG9kb2RldGFsaGVkYXBvbGl0aWNhZGVwcmVjb3M6MiIsIl9nd1RpcG9EZUNvYnJhbmNhRm9yY2FEZVZlbmRhczpmb3JjYWRldmVuZGFzL3RpcG9kZWNvYnJhbmNhOjIiLCJfZ3dUaXBvRGVEb2N1bWVudG9Gb3JjYURlVmVuZGFzOmZvcmNhZGV2ZW5kYXMvdGlwb2RlZG9jdW1lbnRvOjIiLCJfZ3dUaXBvRGVMb2dyYWRvdXJvRm9yY2FEZVZlbmRhczpmb3JjYWRldmVuZGFzL3RpcG9kZWxvZ3JhZG91cm86MiIsIl9nd1RpcG9EZU9wZXJhY2FvRm9yY2FEZVZlbmRhczpmb3JjYWRldmVuZGFzL3RpcG9kZW9wZXJhY2FvOjIiLCJfZ3dUdXJub0ZvcmNhRGVWZW5kYXM6Zm9yY2FkZXZlbmRhcy90dXJubzoyIiwiX2d3VW5pZGFkZURlTWVkaWRhRm9yY2FEZVZlbmRhczpmb3JjYWRldmVuZGFzL3VuaWRhZGVkZW1lZGlkYToyIiwiX2d3VmVuZGVkb3JGb3JjYURlVmVuZGFzOmZvcmNhZGV2ZW5kYXMvdmVuZGVkb3I6MiJdLCJXZWJTZXJ2aWNlIjpbIl93c0NvbnN1bHRhckFnZW50ZUNvYnJhZG9yOmNvbnN1bHRhcjoyIiwiX3dzQ29uc3VsdGFyQXRpdmlkYWRlOmNvbnN1bHRhcjoyIiwiX3dzQ29uc3VsdGFyQ2VudHJvRGVDdXN0b3M6Y29uc3VsdGFyOjIiLCJfd3NDb25zdWx0YXJDbGllbnRlczpjb25zdWx0YXI6MiIsIl93c0NvbnN1bHRhckNvbWlzc29lczpjb25zdWx0YXI6MiIsIl93c0NvbnN1bHRhckNvbnRhc0FSZWNlYmVyOmNvbnN1bHRhcjoyIiwiX3dzQ29uc3VsdGFyRW1wcmVzYTpjb25zdWx0YXI6MiIsIl93c0NvbnN1bHRhckVzdG9xdWU6Y29uc3VsdGFyOjIiLCJfd3NDb25zdWx0YXJGYXR1cmFtZW50bzpjb25zdWx0YXI6MiIsIl93c0NvbnN1bHRhckZpbmFsaWRhZGU6Y29uc3VsdGFyOjIiLCJfd3NDb25zdWx0YXJGb3JtYURlUGFnYW1lbnRvOmNvbnN1bHRhcjoyIiwiX3dzQ29uc3VsdGFyUGVkaWRvczpjb25zdWx0YXI6MiIsIl93c0NvbnN1bHRhclBlZGlkb3NQZW5kZW50ZURlRW1iYXJxdWU6cGVuZGVudGVkZWVtYmFycXVlOjIiLCJfd3NDb25zdWx0YXJQZWRpZG9zRW1iYXJjYWRvUGVuZGVudGU6ZW1iYXJjYWRvcGVuZGVudGU6MiIsIl93c0NvbnN1bHRhclBhaXM6Y29uc3VsdGFycGFpczoyIiwiX3dzQ29uc3VsdGFyRXN0YWRvOmNvbnN1bHRhcmVzdGFkbzoyIiwiX3dzQ29uc3VsdGFyQ2lkYWRlOmNvbnN1bHRhcmNpZGFkZToyIiwiX3dzQ29uc3VsdGFyQmFpcnJvOmNvbnN1bHRhcmJhaXJybzoyIiwiX3dzQ29uc3VsdGFyTWVyY2Fkb3JpYTpjb25zdWx0YXI6MiIsIl93c0NvbnN1bHRhck1vZWRhOmNvbnN1bHRhcjoyIiwiX3dzSW5jbHVpclBlZGlkbzppbmNsdWlyOjIiLCJfd3NDb25zdWx0YXJGaWx0cm9Db2JyYW5jYTpmaWx0cm9jb2JyYW5jYToyIiwiX3dzQ29uc3VsdGFyVGFiZWxhRGVQcmVjb3M6Y29uc3VsdGFydGFiZWxhZGVwcmVjb3M6MiIsIl93c0NvbnN1bHRhclRpcG9EZUNvYnJhbmNhOmNvbnN1bHRhcjoyIiwiX3dzQ29uc3VsdGFyVGlwb0RlRG9jdW1lbnRvOmNvbnN1bHRhcjoyIiwiX3dzQ29uc3VsdGFyVGlwb0RlTG9ncmFkb3Vybzpjb25zdWx0YXI6MiIsIl93c0NvbnN1bHRhclRpcG9EZU9wZXJhY2FvOmNvbnN1bHRhcjoyIiwiX3dzQ29uc3VsdGFyVHVybm86Y29uc3VsdGFyOjIiLCJfd3NDb25zdWx0YXJVbmlkYWRlRGVNZWRpZGE6Y29uc3VsdGFyOjIiLCJfd3NDb25zdWx0YXJWZW5kZWRvcjpjb25zdWx0YXI6MiJdLCJFbmRlcmVjb0RhSW5zdGFuY2lhIjpbImh0dHBzOi8vdmlzaW9ucy50b3BtYW5hZ2VyLmNvbS5ici9TZXJ2aWRvcl8yLjEuMV9hcGk6X2d3QWdlbnRlQ29icmFkb3JGb3JjYURlVmVuZGFzLF9nd0F0aXZpZGFkZUZvcmNhRGVWZW5kYXMsX2d3Q2VudHJvRGVDdXN0b0ZvcmNhRGVWZW5kYXMsX2d3Q2xpZW50ZUZvcmNhRGVWZW5kYXMsX2d3Q29taXNzw6NvRm9yY2FEZVZlbmRhcyxfZ3dDb250YXNBUmVjZWJlckZvcmNhRGVWZW5kYXMsX2d3RW1wcmVzYUZvcmNhRGVWZW5kYXMsX2d3RXN0b3F1ZUZvcmNhRGVWZW5kYXMsX2d3RmF0dXJhbWVudG9Gb3JjYURlVmVuZGFzLF9nd0ZpbmFsaWRhZGVGb3JjYURlVmVuZGFzLF9nd0Zvcm1hRGVQYWdhbWVudG9Gb3JjYURlVmVuZGFzLF9nd0l0ZW1Eb1BlZGlkb0ZvcmNhRGVWZW5kYXMsX2d3TG9jYWxpemFjYW9Gb3JjYURlVmVuZGFzLF9nd01lcmNhZG9yaWFGb3JjYURlVmVuZGFzLF9nd01vZWRhRm9yY2FEZVZlbmRhcyxfZ3dQb2xpdGljYURlQ29icmFuY2FGb3JjYURlVmVuZGFzLF9nd1BvbGl0aWNhRGVQcmVjb0ZvcmNhRGVWZW5kYXMsX2d3VGlwb0RlQ29icmFuY2FGb3JjYURlVmVuZGFzLF9nd1RpcG9EZURvY3VtZW50b0ZvcmNhRGVWZW5kYXMsX2d3VGlwb0RlTG9ncmFkb3Vyb0ZvcmNhRGVWZW5kYXMsX2d3VGlwb0RlT3BlcmFjYW9Gb3JjYURlVmVuZGFzLF9nd1R1cm5vRm9yY2FEZVZlbmRhcyxfZ3dVbmlkYWRlRGVNZWRpZGFGb3JjYURlVmVuZGFzLF9nd1ZlbmRlZG9yRm9yY2FEZVZlbmRhcyIsImh0dHA6Ly9sb2NhbGhvc3Q6MzUwMDA6X2d3UGVkaWRvRm9yY2FEZVZlbmRhcyJdLCJuYmYiOjE1OTg2MTcyNDIsImV4cCI6MTYxNTg5NzMwMiwiaXNzIjoiYXV0aC52aXNpb25zIn0.PdTGttEPteDkKGlMft518RM18gybajYBmAyV1bGCEz5Oiv2Ydez6jTtxauTWm6gSd3aqxHp1cPaOPIHe8hxz3EMsB2IwU6fAnyhJgkK38EU4Vr2mkLgeSMOInPHlBDUWGLy6UL8c1aGBd1XY_C2Zn9KEsu1rrmz6wHk_qmq-8LGOj0UZhapFnRu7wXVHKqFnkkCTXzAiHT4a5uI6nuoXCP-07iXZeM9DeZi_VCRSUHRaz-WYpfLhrrsSQt6kCiGUMwbU_qGDlLzCjGPNcy9ctLnKzf69Pa-ltHq-sp17o8Hfkd6Q3TAnycpxk1_iMO6gRVhvXXQDMLOWEhZwBhnqZQ';
        $client = new GuzzleHttp\Client();

        
        $clienteID = $request->input('cliente'); //29455;
        $tipoCobrancaID = $request->input('tipoCobranca');
        $agente = $request->input('agCobrador');
        $empresaID = $request->input('empresa');
        $opID = $request->input('tipoOP');
        $moedaID = $request->input('moeda');
        $vendedorID = $request->input('vendedor');
        $formaPagamentoID = $request->input('formaPagamento');
        $observacao = $request->input('obs');
        $comInterna = $request->input('comInterna');
        $objetoID = $request->input('objeto');
        $finalidadeID = $request->input('finalidade');
        $centroCustosID = $request->input('centroCustos');
        $atividadeID = $request->input('atividade');
        $quantidade = $request->input('quantidade');
        $objs = $request->input('objs');
        $qtds = $request->input('qtds');

        $cliente = json_decode($client->request('GET', 'https://visions.topmanager.com.br/Servidor_2.1.1_api/forcadevendas/cliente/consultar',
            ['headers' => ['Content-Type' => 'application/json', 'Authorization' => 'Bearer ' . $token]])->getBody(), true);

        $objeto = json_decode($client->request('GET', 'https://visions.topmanager.com.br/Servidor_2.1.1_api/forcadevendas/mercadoria/consultar',
            ['headers' => ['Content-Type' => 'application/json', 'Authorization' => 'Bearer ' . $token]])->getBody(), true);

        $unidade = json_decode($client->request('GET', 'https://visions.topmanager.com.br/Servidor_2.1.1_api/forcadevendas/unidadedemedida/consultar',
            ['headers' => ['Content-Type' => 'application/json', 'Authorization' => 'Bearer ' . $token]])->getBody(), true);
        
        
           
        return view('API.unidade', compact('client', 'token', 'cliente', 'clienteID', 
                                        'objetoID', 'objeto', 'unidade',
                                        'finalidadeID', 'centroCustosID', 'atividadeID',
                                        'quantidade', 'tipoCobrancaID', 'formaPagamentoID',
                                        'agente', 'empresaID', 'opID', 'moedaID', 'vendedorID',
                                        'observacao', 'comInterna', 'objs', 'qtds'));
    }

    public function store(Request $request)
    {        
        $token = 'eyJhbGciOiJSUzI1NiIsImtpZCI6ImE0YzhlY2FlMTdmMjQxNTJhOTZjNGZkNWMxNzE5NGNhIiwidHlwIjoiSldUIn0.eyJzdWIiOiIxMjMwNyIsInVuaXF1ZV9uYW1lIjoiMTIzMDciLCJpYXQiOjE1OTg2MTczMDMsImp0aSI6IjkyNjQ2YjU3NzBmYjQ0YWI5YjBmZDAzYzNiZWNkYTA1IiwiU2l0ZSI6IkR1bmF4IiwiQXBsaWNhY2FvIjoiRm9yY2FEZVZlbmRhcyIsIkNvbmV4YW8iOiJBVVRIXzEyMzA3X2I4NGE4MTA5ZTZlZTRiMDQ5ODM1ZjBkMTE5YmZlZTBmIiwiR3J1cG9EZVdlYlNlcnZpY2UiOlsiX2d3QWdlbnRlQ29icmFkb3JGb3JjYURlVmVuZGFzOmZvcmNhZGV2ZW5kYXMvYWdlbnRlY29icmFkb3I6MiIsIl9nd0F0aXZpZGFkZUZvcmNhRGVWZW5kYXM6Zm9yY2FkZXZlbmRhcy9hdGl2aWRhZGU6MiIsIl9nd0NlbnRyb0RlQ3VzdG9Gb3JjYURlVmVuZGFzOmZvcmNhZGV2ZW5kYXMvY2VudHJvZGVjdXN0bzoyIiwiX2d3Q2xpZW50ZUZvcmNhRGVWZW5kYXM6Zm9yY2FkZXZlbmRhcy9jbGllbnRlOjIiLCJfZ3dDb21pc3PDo29Gb3JjYURlVmVuZGFzOmZvcmNhZGV2ZW5kYXMvY29taXNzYW86MiIsIl9nd0NvbnRhc0FSZWNlYmVyRm9yY2FEZVZlbmRhczpmb3JjYWRldmVuZGFzL2NvbnRhc2FyZWNlYmVyOjIiLCJfZ3dFbXByZXNhRm9yY2FEZVZlbmRhczpmb3JjYWRldmVuZGFzL2VtcHJlc2E6MiIsIl9nd0VzdG9xdWVGb3JjYURlVmVuZGFzOmZvcmNhZGV2ZW5kYXMvbGFuY2FtZW50b2RlZXN0b3F1ZToyIiwiX2d3RmF0dXJhbWVudG9Gb3JjYURlVmVuZGFzOmZvcmNhZGV2ZW5kYXMvZmF0dXJhbWVudG86MiIsIl9nd0ZpbmFsaWRhZGVGb3JjYURlVmVuZGFzOmZvcmNhZGV2ZW5kYXMvZmluYWxpZGFkZToyIiwiX2d3Rm9ybWFEZVBhZ2FtZW50b0ZvcmNhRGVWZW5kYXM6Zm9yY2FkZXZlbmRhcy9mb3JtYWRlcGFnYW1lbnRvOjIiLCJfZ3dJdGVtRG9QZWRpZG9Gb3JjYURlVmVuZGFzOmZvcmNhZGV2ZW5kYXMvaXRlbWRvcGVkaWRvOjIiLCJfZ3dMb2NhbGl6YWNhb0ZvcmNhRGVWZW5kYXM6Zm9yY2FkZXZlbmRhcy9sb2NhbGl6YWNhbzoyIiwiX2d3TWVyY2Fkb3JpYUZvcmNhRGVWZW5kYXM6Zm9yY2FkZXZlbmRhcy9tZXJjYWRvcmlhOjIiLCJfZ3dNb2VkYUZvcmNhRGVWZW5kYXM6Zm9yY2FkZXZlbmRhcy9tb2VkYToyIiwiX2d3UGVkaWRvRm9yY2FEZVZlbmRhczpmb3JjYWRldmVuZGFzL3BlZGlkbzoyIiwiX2d3UG9saXRpY2FEZUNvYnJhbmNhRm9yY2FEZVZlbmRhczpmb3JjYWRldmVuZGFzL2RldGFsaGVwb2xpdGljYWRlY29icmFuY2E6MiIsIl9nd1BvbGl0aWNhRGVQcmVjb0ZvcmNhRGVWZW5kYXM6Zm9yY2FkZXZlbmRhcy9vYmpldG9kb2RldGFsaGVkYXBvbGl0aWNhZGVwcmVjb3M6MiIsIl9nd1RpcG9EZUNvYnJhbmNhRm9yY2FEZVZlbmRhczpmb3JjYWRldmVuZGFzL3RpcG9kZWNvYnJhbmNhOjIiLCJfZ3dUaXBvRGVEb2N1bWVudG9Gb3JjYURlVmVuZGFzOmZvcmNhZGV2ZW5kYXMvdGlwb2RlZG9jdW1lbnRvOjIiLCJfZ3dUaXBvRGVMb2dyYWRvdXJvRm9yY2FEZVZlbmRhczpmb3JjYWRldmVuZGFzL3RpcG9kZWxvZ3JhZG91cm86MiIsIl9nd1RpcG9EZU9wZXJhY2FvRm9yY2FEZVZlbmRhczpmb3JjYWRldmVuZGFzL3RpcG9kZW9wZXJhY2FvOjIiLCJfZ3dUdXJub0ZvcmNhRGVWZW5kYXM6Zm9yY2FkZXZlbmRhcy90dXJubzoyIiwiX2d3VW5pZGFkZURlTWVkaWRhRm9yY2FEZVZlbmRhczpmb3JjYWRldmVuZGFzL3VuaWRhZGVkZW1lZGlkYToyIiwiX2d3VmVuZGVkb3JGb3JjYURlVmVuZGFzOmZvcmNhZGV2ZW5kYXMvdmVuZGVkb3I6MiJdLCJXZWJTZXJ2aWNlIjpbIl93c0NvbnN1bHRhckFnZW50ZUNvYnJhZG9yOmNvbnN1bHRhcjoyIiwiX3dzQ29uc3VsdGFyQXRpdmlkYWRlOmNvbnN1bHRhcjoyIiwiX3dzQ29uc3VsdGFyQ2VudHJvRGVDdXN0b3M6Y29uc3VsdGFyOjIiLCJfd3NDb25zdWx0YXJDbGllbnRlczpjb25zdWx0YXI6MiIsIl93c0NvbnN1bHRhckNvbWlzc29lczpjb25zdWx0YXI6MiIsIl93c0NvbnN1bHRhckNvbnRhc0FSZWNlYmVyOmNvbnN1bHRhcjoyIiwiX3dzQ29uc3VsdGFyRW1wcmVzYTpjb25zdWx0YXI6MiIsIl93c0NvbnN1bHRhckVzdG9xdWU6Y29uc3VsdGFyOjIiLCJfd3NDb25zdWx0YXJGYXR1cmFtZW50bzpjb25zdWx0YXI6MiIsIl93c0NvbnN1bHRhckZpbmFsaWRhZGU6Y29uc3VsdGFyOjIiLCJfd3NDb25zdWx0YXJGb3JtYURlUGFnYW1lbnRvOmNvbnN1bHRhcjoyIiwiX3dzQ29uc3VsdGFyUGVkaWRvczpjb25zdWx0YXI6MiIsIl93c0NvbnN1bHRhclBlZGlkb3NQZW5kZW50ZURlRW1iYXJxdWU6cGVuZGVudGVkZWVtYmFycXVlOjIiLCJfd3NDb25zdWx0YXJQZWRpZG9zRW1iYXJjYWRvUGVuZGVudGU6ZW1iYXJjYWRvcGVuZGVudGU6MiIsIl93c0NvbnN1bHRhclBhaXM6Y29uc3VsdGFycGFpczoyIiwiX3dzQ29uc3VsdGFyRXN0YWRvOmNvbnN1bHRhcmVzdGFkbzoyIiwiX3dzQ29uc3VsdGFyQ2lkYWRlOmNvbnN1bHRhcmNpZGFkZToyIiwiX3dzQ29uc3VsdGFyQmFpcnJvOmNvbnN1bHRhcmJhaXJybzoyIiwiX3dzQ29uc3VsdGFyTWVyY2Fkb3JpYTpjb25zdWx0YXI6MiIsIl93c0NvbnN1bHRhck1vZWRhOmNvbnN1bHRhcjoyIiwiX3dzSW5jbHVpclBlZGlkbzppbmNsdWlyOjIiLCJfd3NDb25zdWx0YXJGaWx0cm9Db2JyYW5jYTpmaWx0cm9jb2JyYW5jYToyIiwiX3dzQ29uc3VsdGFyVGFiZWxhRGVQcmVjb3M6Y29uc3VsdGFydGFiZWxhZGVwcmVjb3M6MiIsIl93c0NvbnN1bHRhclRpcG9EZUNvYnJhbmNhOmNvbnN1bHRhcjoyIiwiX3dzQ29uc3VsdGFyVGlwb0RlRG9jdW1lbnRvOmNvbnN1bHRhcjoyIiwiX3dzQ29uc3VsdGFyVGlwb0RlTG9ncmFkb3Vybzpjb25zdWx0YXI6MiIsIl93c0NvbnN1bHRhclRpcG9EZU9wZXJhY2FvOmNvbnN1bHRhcjoyIiwiX3dzQ29uc3VsdGFyVHVybm86Y29uc3VsdGFyOjIiLCJfd3NDb25zdWx0YXJVbmlkYWRlRGVNZWRpZGE6Y29uc3VsdGFyOjIiLCJfd3NDb25zdWx0YXJWZW5kZWRvcjpjb25zdWx0YXI6MiJdLCJFbmRlcmVjb0RhSW5zdGFuY2lhIjpbImh0dHBzOi8vdmlzaW9ucy50b3BtYW5hZ2VyLmNvbS5ici9TZXJ2aWRvcl8yLjEuMV9hcGk6X2d3QWdlbnRlQ29icmFkb3JGb3JjYURlVmVuZGFzLF9nd0F0aXZpZGFkZUZvcmNhRGVWZW5kYXMsX2d3Q2VudHJvRGVDdXN0b0ZvcmNhRGVWZW5kYXMsX2d3Q2xpZW50ZUZvcmNhRGVWZW5kYXMsX2d3Q29taXNzw6NvRm9yY2FEZVZlbmRhcyxfZ3dDb250YXNBUmVjZWJlckZvcmNhRGVWZW5kYXMsX2d3RW1wcmVzYUZvcmNhRGVWZW5kYXMsX2d3RXN0b3F1ZUZvcmNhRGVWZW5kYXMsX2d3RmF0dXJhbWVudG9Gb3JjYURlVmVuZGFzLF9nd0ZpbmFsaWRhZGVGb3JjYURlVmVuZGFzLF9nd0Zvcm1hRGVQYWdhbWVudG9Gb3JjYURlVmVuZGFzLF9nd0l0ZW1Eb1BlZGlkb0ZvcmNhRGVWZW5kYXMsX2d3TG9jYWxpemFjYW9Gb3JjYURlVmVuZGFzLF9nd01lcmNhZG9yaWFGb3JjYURlVmVuZGFzLF9nd01vZWRhRm9yY2FEZVZlbmRhcyxfZ3dQb2xpdGljYURlQ29icmFuY2FGb3JjYURlVmVuZGFzLF9nd1BvbGl0aWNhRGVQcmVjb0ZvcmNhRGVWZW5kYXMsX2d3VGlwb0RlQ29icmFuY2FGb3JjYURlVmVuZGFzLF9nd1RpcG9EZURvY3VtZW50b0ZvcmNhRGVWZW5kYXMsX2d3VGlwb0RlTG9ncmFkb3Vyb0ZvcmNhRGVWZW5kYXMsX2d3VGlwb0RlT3BlcmFjYW9Gb3JjYURlVmVuZGFzLF9nd1R1cm5vRm9yY2FEZVZlbmRhcyxfZ3dVbmlkYWRlRGVNZWRpZGFGb3JjYURlVmVuZGFzLF9nd1ZlbmRlZG9yRm9yY2FEZVZlbmRhcyIsImh0dHA6Ly9sb2NhbGhvc3Q6MzUwMDA6X2d3UGVkaWRvRm9yY2FEZVZlbmRhcyJdLCJuYmYiOjE1OTg2MTcyNDIsImV4cCI6MTYxNTg5NzMwMiwiaXNzIjoiYXV0aC52aXNpb25zIn0.PdTGttEPteDkKGlMft518RM18gybajYBmAyV1bGCEz5Oiv2Ydez6jTtxauTWm6gSd3aqxHp1cPaOPIHe8hxz3EMsB2IwU6fAnyhJgkK38EU4Vr2mkLgeSMOInPHlBDUWGLy6UL8c1aGBd1XY_C2Zn9KEsu1rrmz6wHk_qmq-8LGOj0UZhapFnRu7wXVHKqFnkkCTXzAiHT4a5uI6nuoXCP-07iXZeM9DeZi_VCRSUHRaz-WYpfLhrrsSQt6kCiGUMwbU_qGDlLzCjGPNcy9ctLnKzf69Pa-ltHq-sp17o8Hfkd6Q3TAnycpxk1_iMO6gRVhvXXQDMLOWEhZwBhnqZQ';
        $client = new GuzzleHttp\Client();

        $clienteID      = $request->input('cliente'); //29455;
        $empresaID      = $request->input('empresa');
        $tipoCobrancaID = $request->input('tipoCobranca');
        $agente         = $request->input('agCobrador');       
        
        
        
        $empresa = json_decode($client->request('GET', 'https://visions.topmanager.com.br/Servidor_2.1.1_api/forcadevendas/empresa/consultar',
            ['headers' => ['Content-Type' => 'application/json', 'Authorization' => 'Bearer ' . $token]])->getBody(), true);

        $tipoOP = json_decode($client->request('GET', 'https://visions.topmanager.com.br/Servidor_2.1.1_api/forcadevendas/tipodeoperacao/consultar',
            ['headers' => ['Content-Type' => 'application/json', 'Authorization' => 'Bearer ' . $token]])->getBody(), true);
    
        $cliente = json_decode($client->request('GET', 'https://visions.topmanager.com.br/Servidor_2.1.1_api/forcadevendas/cliente/consultar',
            ['headers' => ['Content-Type' => 'application/json', 'Authorization' => 'Bearer ' . $token]])->getBody(), true);
        
        $objeto = json_decode($client->request('GET', 'https://visions.topmanager.com.br/Servidor_2.1.1_api/forcadevendas/mercadoria/consultar',
            ['headers' => ['Content-Type' => 'application/json', 'Authorization' => 'Bearer ' . $token]])->getBody(), true);        
            
        $finalidade = json_decode($client->request('GET', 'https://visions.topmanager.com.br/Servidor_2.1.1_api/forcadevendas/finalidade/consultar',
            ['headers' => ['Content-Type' => 'application/json', 'Authorization' => 'Bearer ' . $token]])->getBody(), true);

        $centroCustos = json_decode($client->request('GET', 'https://visions.topmanager.com.br/Servidor_2.1.1_api/forcadevendas/centrodecusto/consultar',
            ['headers' => ['Content-Type' => 'application/json', 'Authorization' => 'Bearer ' . $token]])->getBody(), true);

        $atividade = json_decode($client->request('GET', 'https://visions.topmanager.com.br/Servidor_2.1.1_api/forcadevendas/atividade/consultar',
            ['headers' => ['Content-Type' => 'application/json', 'Authorization' => 'Bearer ' . $token]])->getBody(), true);


        //$tipoDoc = json_decode($client->request('GET', 'https://visions.topmanager.com.br/Servidor_2.1.1_api/forcadevendas/tipodedocumento/consultar',
            //['headers' => ['Content-Type' => 'application/json', 'Authorization' => 'Bearer ' . $token]])->getBody(), true);
        
        $moeda = json_decode($client->request('GET', 'https://visions.topmanager.com.br/Servidor_2.1.1_api/forcadevendas/moeda/consultar',
            ['headers' => ['Content-Type' => 'application/json', 'Authorization' => 'Bearer ' . $token]])->getBody(), true);

        $vendedor = json_decode($client->request('GET', 'https://visions.topmanager.com.br/Servidor_2.1.1_api/forcadevendas/vendedor/consultar',
            ['headers' => ['Content-Type' => 'application/json', 'Authorization' => 'Bearer ' . $token]])->getBody(), true);
        
        $agCobrador = json_decode($client->request('GET', 'https://visions.topmanager.com.br/Servidor_2.1.1_api/forcadevendas/agentecobrador/consultar',
            ['headers' => ['Content-Type' => 'application/json', 'Authorization' => 'Bearer ' . $token]])->getBody(), true);

        $politicaCobranca = json_decode($client->request('GET', 'https://visions.topmanager.com.br/Servidor_2.1.1_api/forcadevendas/detalhepoliticadecobranca/filtrocobranca?clienteID=' . $clienteID,
            ['headers' => ['Content-Type' => 'application/json', 'Authorization' => 'Bearer ' . $token]])->getBody(), true);
            
        $unidade = json_decode($client->request('GET', 'https://visions.topmanager.com.br/Servidor_2.1.1_api/forcadevendas/unidadedemedida/consultar',
            ['headers' => ['Content-Type' => 'application/json', 'Authorization' => 'Bearer ' . $token]])->getBody(), true);
        
        //////////////////////////////////////////////////////////////////////////////////////

        $id_agenteCob = array();
        $nome_agenteCob = array();
        foreach($agCobrador as $ac)
        {
            foreach($politicaCobranca as $p)
            {
                if($clienteID == $p['clienteID'] && $ac['id'] == $p['agenteCobradorID'] && $empresaID == $p['empresaID'] && $p['objetoID'] == 1)
                {
                    array_push($id_agenteCob, $ac['id']);
                    array_push($nome_agenteCob, $ac['nome']);
                }
            }
        }
        $ac_id = array_unique($id_agenteCob);
        $ac_nome = array_unique($nome_agenteCob);

        $agentesCobradores = array_combine($ac_id, $ac_nome); //array_map(function($ac_id, $ac_nome){return $ac_id.' - '.$ac_nome;}, $ac_id, $ac_nome);
        //////////////////////////////////////////////////////////////////////////////////////
        
        $tipoCobranca = json_decode($client->request('GET', 'https://visions.topmanager.com.br/Servidor_2.1.1_api/forcadevendas/tipodecobranca/consultar',
            ['headers' => ['Content-Type' => 'application/json', 'Authorization' => 'Bearer ' . $token]])->getBody(), true);

        $idTipoCobranca = array();
        $nomeTipoCobranca = array();
        foreach($tipoCobranca as $tc)
        {
            foreach($politicaCobranca as $p)
            {
                if($tc['id'] == $p['tipoDeCobrancaID'] && $agente == $p['agenteCobradorID'] && $empresaID == $p['empresaID'] && $p['objetoID'] == 1)
                {
                    array_push($idTipoCobranca, $tc['id']);
                    array_push($nomeTipoCobranca, $tc['nome']);
                }
            }
        }
        $tc_id = array_unique($idTipoCobranca);
        $tc_nome = array_unique($nomeTipoCobranca);

        $TiposCobranca = array_combine($tc_id, $tc_nome);
        //////////////////////////////////////////////////////////////////////////////////////
        
        $formaPagamento = json_decode($client->request('GET', 'https://visions.topmanager.com.br/Servidor_2.1.1_api/forcadevendas/formadepagamento/consultar',
            ['headers' => ['Content-Type' => 'application/json', 'Authorization' => 'Bearer '. $token]])->getBody(), true);

        $idFormaPagamento = array();
        $nomeFormaPagamento = array();
        foreach($formaPagamento as $fp)
        {
            foreach($politicaCobranca as $p)
            {
                if($fp['id'] == $p['formaDePagamentoID'] && $tipoCobrancaID == $p['tipoDeCobrancaID'] && $empresaID == $p['empresaID'] && $p['objetoID'] == 1)
                {
                    array_push($idFormaPagamento, $fp['id']);
                    array_push($nomeFormaPagamento, $fp['nome']);
                }
            }
        }    
        $fp_id = array_unique($idFormaPagamento);
        $fp_nome = array_unique($nomeFormaPagamento);

        $FormasPagamento = array_combine($fp_id, $fp_nome);
        //////////////////////////////////////////////////////////////////////////////////////


        $opID             = $request->input('tipoOP');
        $moedaID          = $request->input('moeda');
        $vendedorID       = $request->input('vendedor');
        $formaPagamentoID = $request->input('formaPagamento');
        $observacao       = $request->input('obs');
        $comInterna       = $request->input('comInterna');
        $objetoID         = $request->input('objeto');
        $finalidadeID     = $request->input('finalidade');
        $centroCustosID   = $request->input('centroCustos');
        $atividadeID      = $request->input('atividade');
        $quantidade       = $request->input('quantidade');
        $unidadeID        = $request->input('unidade');
        $precoBaseID      = $request->input('precoBase');
        $precoEfetivo     = $request->input('precoEfetivo');
        $desconto         = $request->input('desconto');
        $objs             = $request->input('objs');
        $qtds             = $request->input('qtds');
        $dataPedido       = Carbon::now()->toDateString() . "T" . Carbon::now()->toTimeString();
        $dataEntrega      = Carbon::now()->addDay()->toDateString() . "T" . Carbon::now()->addDay()->toTimeString();
        
        foreach($cliente as $c)
        {
            if($c['id'] == $clienteID)
            {
                if(array_key_exists('inscricaoEstadual', $c))
                {
                    $dados_cliente = [
                        $c['razaoSocial'],
                        $c['nomeFantasia'],
                        $c['cnpJouCPF'],
                        $c['inscricaoEstadual'],
                        $c['enderecoFaturamento']['uf'],
                        $c['enderecoFaturamento']['cidade'],
                        $c['enderecoFaturamento']['bairro'],
                        $c['enderecoFaturamento']['tipoDeLogradouro'],
                        $c['enderecoFaturamento']['logradouro'],
                        $c['enderecoFaturamento']['numero'],
                        NULL,
                        $c['enderecoFaturamento']['cep'],
                        $c['telefone1'],
                        $c['celular1'],
                        $c['dataInclusao'],
                    ];                    
                }
                if(array_key_exists('complemento', $c))
                {
                    $dados_cliente = [
                        $c['razaoSocial'],
                        $c['nomeFantasia'],
                        $c['cnpJouCPF'],
                        NULL,
                        $c['enderecoFaturamento']['uf'],
                        $c['enderecoFaturamento']['cidade'],
                        $c['enderecoFaturamento']['bairro'],
                        $c['enderecoFaturamento']['tipoDeLogradouro'],
                        $c['enderecoFaturamento']['logradouro'],
                        $c['enderecoFaturamento']['numero'],
                        $c['enderecoFaturamento']['complemento'],
                        $c['enderecoFaturamento']['cep'],
                        $c['telefone1'],
                        $c['celular1'],
                        $c['dataInclusao'],
                    ]; 
                }
                if(array_key_exists('inscricaoEstadual', $c) && array_key_exists('complemento', $c))
                {
                    $dados_cliente = [
                        $c['razaoSocial'],
                        $c['nomeFantasia'],
                        $c['cnpJouCPF'],
                        $c['inscricaoEstadual'],
                        $c['enderecoFaturamento']['uf'],
                        $c['enderecoFaturamento']['cidade'],
                        $c['enderecoFaturamento']['bairro'],
                        $c['enderecoFaturamento']['tipoDeLogradouro'],
                        $c['enderecoFaturamento']['logradouro'],
                        $c['enderecoFaturamento']['numero'],
                        $c['enderecoFaturamento']['complemento'],
                        $c['enderecoFaturamento']['cep'],
                        $c['telefone1'],
                        $c['celular1'],
                        $c['dataInclusao'],
                    ]; 
                }
                
            }
        };

        foreach($empresa as $emp)
        {
            if ($emp['id'] == $empresaID)
            {
                $empresaNome = $emp['nome'];
            }
        };

        foreach($tipoOP as $top)
        {
            if ($top['id'] == $opID)
            {
                $opNome = $top['nome'];
            }
        };

        foreach($vendedor as $vend)
        {
            if ($vend['id'] == $vendedorID)
            {                
                $vendedorNome = $vend['nome'];
            }
        };

        foreach($agCobrador as $ac)
        {
            if($ac['id'] == $agente)
            {
                $agenteNome = $ac['nome'];
            }
        };

        foreach($tipoCobranca as $tc)
        {
            if($tc['id'] == $tipoCobrancaID)
            {
                $tipoCobrancaNome = $tc['nome'];
            }
        };

        foreach($formaPagamento as $fp)
        {
            if($fp['id'] == $formaPagamentoID)
            {
                $formaPagamentoNome = $fp['nome'];
            }
        };

        $body = array(
            "pedidoID" => 0,
            "data" => $dataPedido,
            //"empresaID" => $empresaID,
            "organizacao" => [
                "id" => $empresaID,
                "nome" => $empresaNome
            ],
            //"operacaoID" => $opID,
            "tipoDeOperacao" => [
                "id" => $opID,
                "nome" => $opNome
            ],
            //"tipoDeDocumentoID" => 31,
            "tipoDeDocumento" => [
                "id" => 31,
                "nome" => 'NFe'
            ],
            //"tipoDeDocumentoPedidoID" => 8,
            "tipoDeDocumentoPedido" => [
                "id" => 8,
                "nome" => "Pedido"
            ],
            "cliente" => [
                "id" => $clienteID,
                "razaoSocial" => $dados_cliente[0],
                "nomeFantasia" => $dados_cliente[1],
                "cnpJouCPF" => $dados_cliente[2],
                "inscricaoEstadual" => $dados_cliente[3],
                "enderecoFaturamento" => [
                    "uf" => $dados_cliente[4],
                    "cidade" => $dados_cliente[5],
                    "bairro" => $dados_cliente[6],
                    "tipoDeLogradouro" => $dados_cliente[7],
                    "logradouro" => $dados_cliente[8],
                    "numero" => $dados_cliente[9],
                    "complemento" => $dados_cliente[10],
                    "cep" => $dados_cliente[11]
                ],
                "telefone1" => $dados_cliente[12],
                "celular1" => $dados_cliente[13],
                "dataInclusao" => $dados_cliente[14]
            ],
            //"vendedorID" => $vendedorID,
            "vendedor" => [
                "id" => $vendedorID,
                "nome" => $vendedorNome
            ],
            //"turnoID" => 5,
            "turno" => [
                "id" => 5,
                "nome" => "Único"
            ],
            //"moedaID" => 1,
            "moeda" => [
                "id" => 1,
                "nome" => "Real"
            ],
            "entrega" => $dataEntrega,
            "tipoDeFrete" => 10,
            "itens" => array(),
            //"agenteCobradorID" => $agente,
            "agenteCobrador" => [
                "id" => $agente,
                "nome" => $agenteNome
            ],
            //"tipodeCobrancaID" => $tipoCobrancaID,
            "tipoDeCobranca" => [
                "id" => $tipoCobrancaID,
                "nome" => $tipoCobrancaNome
            ],
            //"formaDePagamentoID" => $formaPagamentoID,
            "formaDePagamento" => [
                "id" => $formaPagamentoID,
                "nome" => $formaPagamentoNome
            ],
            //"centroDeCustosEstoqueID" =>  7,
            "centroDeCustosEstoque" => [
                //"id" => 7,
                "nome" => ""
            ],
            //"localizacaoEstoqueID" =>  446
            "localizacaoEstoque" => [
                //"id" => 446,
                "nome" => ""
            ],
            "observacao" => $observacao,
            //"valorPedido" => "",
            "comunicacaoInterna" => $comInterna
        );

        foreach($objs as $index => $o)
        {
            foreach($objeto as $objt)
            {
                if($objt['id'] == $o)
                {
                    $objetoNome = $objt['nome'];
                }
            }

            foreach($finalidade as $f)
            {
                if($f['id'] == $finalidadeID)
                {
                    $finalidadeNome = $f['nome'];
                }
            }

            foreach($centroCustos as $cc)
            {
                if($cc['id'] == $centroCustosID)
                {
                    $centroCustosNome = $cc['nome'];
                }
            }

            foreach($atividade as $atv)
            {
                if($atv['id'] == $atividadeID)
                {
                    $atividadeNome = $atv['nome'];
                }
            }

            foreach($unidade as $und)
            {
                foreach($unidadeID as $uid)
                {
                    if($und['id'] == $uid)
                    {
                        $unidadeNome = $und['nome'];
                        $unidadeSigla = $und['sigla'];
                    }
                }
            }

            $body['itens'][] = array(
                "itemPedidoID" => 0,
                //"objetoID" => $o,
                "objeto" => [
                    "id" => $o,
                    "nome" => $objetoNome
                ],
                //"finalidadeID" => $finalidadeID,
                "finalidade" => [
                    "id" => $finalidadeID,
                    "nome" => $finalidadeNome
                ],
                //"centroDeCustosID" => $centroCustosID,
                "centroDeCustos" => [
                    "id" => $centroCustosID,
                    "nome" => $centroCustosNome
                ],
                //"atividadeID" => $atividadeID,
                "atividade" => [
                    "id" => $atividadeID,
                    "nome" => $atividadeNome
                ],
                //"unidadeDeMedidaID" => $unidadeID[$index],
                "unidadeDeMedida" => [
                    "id" => $unidadeID[$index],
                    "nome" => $unidadeNome,
                    "sigla" => $unidadeSigla
                ],
                "quantidade" => $qtds[$index],
                "valorMercadoria" => $qtds[$index] * $precoEfetivo[$index]
            );
        }
        

        $store = $client->request('POST', 'https://visions.topmanager.com.br/Servidor_2.1.1_api/forcadevendas/pedido/incluir',
            ['headers' => ['Content-Type' => 'application/json', 'Authorization' => 'Bearer ' . $token],
            'json' => $body])->getBody();

        //return redirect()->route('load_pedido');

        return view('API.load_pedido', compact('store', 'client', 'token', 'cliente', 'clienteID', 
                                                'objeto', 'objs', 'qtds', 'body', 'vendedorID',
                                                'dataPedido', 'dataEntrega'));

    }

    /* public function load(Request $request)
    {       
        $clienteID   = $request->input('cliente'); //29455;

        print_r($clienteID);
        
        return view('API.load_pedido', compact('clienteID'));
    } */

    public function pedido(Request $request)
    {
        $token = 'eyJhbGciOiJSUzI1NiIsImtpZCI6ImE0YzhlY2FlMTdmMjQxNTJhOTZjNGZkNWMxNzE5NGNhIiwidHlwIjoiSldUIn0.eyJzdWIiOiIxMjMwNyIsInVuaXF1ZV9uYW1lIjoiMTIzMDciLCJpYXQiOjE1OTg2MTczMDMsImp0aSI6IjkyNjQ2YjU3NzBmYjQ0YWI5YjBmZDAzYzNiZWNkYTA1IiwiU2l0ZSI6IkR1bmF4IiwiQXBsaWNhY2FvIjoiRm9yY2FEZVZlbmRhcyIsIkNvbmV4YW8iOiJBVVRIXzEyMzA3X2I4NGE4MTA5ZTZlZTRiMDQ5ODM1ZjBkMTE5YmZlZTBmIiwiR3J1cG9EZVdlYlNlcnZpY2UiOlsiX2d3QWdlbnRlQ29icmFkb3JGb3JjYURlVmVuZGFzOmZvcmNhZGV2ZW5kYXMvYWdlbnRlY29icmFkb3I6MiIsIl9nd0F0aXZpZGFkZUZvcmNhRGVWZW5kYXM6Zm9yY2FkZXZlbmRhcy9hdGl2aWRhZGU6MiIsIl9nd0NlbnRyb0RlQ3VzdG9Gb3JjYURlVmVuZGFzOmZvcmNhZGV2ZW5kYXMvY2VudHJvZGVjdXN0bzoyIiwiX2d3Q2xpZW50ZUZvcmNhRGVWZW5kYXM6Zm9yY2FkZXZlbmRhcy9jbGllbnRlOjIiLCJfZ3dDb21pc3PDo29Gb3JjYURlVmVuZGFzOmZvcmNhZGV2ZW5kYXMvY29taXNzYW86MiIsIl9nd0NvbnRhc0FSZWNlYmVyRm9yY2FEZVZlbmRhczpmb3JjYWRldmVuZGFzL2NvbnRhc2FyZWNlYmVyOjIiLCJfZ3dFbXByZXNhRm9yY2FEZVZlbmRhczpmb3JjYWRldmVuZGFzL2VtcHJlc2E6MiIsIl9nd0VzdG9xdWVGb3JjYURlVmVuZGFzOmZvcmNhZGV2ZW5kYXMvbGFuY2FtZW50b2RlZXN0b3F1ZToyIiwiX2d3RmF0dXJhbWVudG9Gb3JjYURlVmVuZGFzOmZvcmNhZGV2ZW5kYXMvZmF0dXJhbWVudG86MiIsIl9nd0ZpbmFsaWRhZGVGb3JjYURlVmVuZGFzOmZvcmNhZGV2ZW5kYXMvZmluYWxpZGFkZToyIiwiX2d3Rm9ybWFEZVBhZ2FtZW50b0ZvcmNhRGVWZW5kYXM6Zm9yY2FkZXZlbmRhcy9mb3JtYWRlcGFnYW1lbnRvOjIiLCJfZ3dJdGVtRG9QZWRpZG9Gb3JjYURlVmVuZGFzOmZvcmNhZGV2ZW5kYXMvaXRlbWRvcGVkaWRvOjIiLCJfZ3dMb2NhbGl6YWNhb0ZvcmNhRGVWZW5kYXM6Zm9yY2FkZXZlbmRhcy9sb2NhbGl6YWNhbzoyIiwiX2d3TWVyY2Fkb3JpYUZvcmNhRGVWZW5kYXM6Zm9yY2FkZXZlbmRhcy9tZXJjYWRvcmlhOjIiLCJfZ3dNb2VkYUZvcmNhRGVWZW5kYXM6Zm9yY2FkZXZlbmRhcy9tb2VkYToyIiwiX2d3UGVkaWRvRm9yY2FEZVZlbmRhczpmb3JjYWRldmVuZGFzL3BlZGlkbzoyIiwiX2d3UG9saXRpY2FEZUNvYnJhbmNhRm9yY2FEZVZlbmRhczpmb3JjYWRldmVuZGFzL2RldGFsaGVwb2xpdGljYWRlY29icmFuY2E6MiIsIl9nd1BvbGl0aWNhRGVQcmVjb0ZvcmNhRGVWZW5kYXM6Zm9yY2FkZXZlbmRhcy9vYmpldG9kb2RldGFsaGVkYXBvbGl0aWNhZGVwcmVjb3M6MiIsIl9nd1RpcG9EZUNvYnJhbmNhRm9yY2FEZVZlbmRhczpmb3JjYWRldmVuZGFzL3RpcG9kZWNvYnJhbmNhOjIiLCJfZ3dUaXBvRGVEb2N1bWVudG9Gb3JjYURlVmVuZGFzOmZvcmNhZGV2ZW5kYXMvdGlwb2RlZG9jdW1lbnRvOjIiLCJfZ3dUaXBvRGVMb2dyYWRvdXJvRm9yY2FEZVZlbmRhczpmb3JjYWRldmVuZGFzL3RpcG9kZWxvZ3JhZG91cm86MiIsIl9nd1RpcG9EZU9wZXJhY2FvRm9yY2FEZVZlbmRhczpmb3JjYWRldmVuZGFzL3RpcG9kZW9wZXJhY2FvOjIiLCJfZ3dUdXJub0ZvcmNhRGVWZW5kYXM6Zm9yY2FkZXZlbmRhcy90dXJubzoyIiwiX2d3VW5pZGFkZURlTWVkaWRhRm9yY2FEZVZlbmRhczpmb3JjYWRldmVuZGFzL3VuaWRhZGVkZW1lZGlkYToyIiwiX2d3VmVuZGVkb3JGb3JjYURlVmVuZGFzOmZvcmNhZGV2ZW5kYXMvdmVuZGVkb3I6MiJdLCJXZWJTZXJ2aWNlIjpbIl93c0NvbnN1bHRhckFnZW50ZUNvYnJhZG9yOmNvbnN1bHRhcjoyIiwiX3dzQ29uc3VsdGFyQXRpdmlkYWRlOmNvbnN1bHRhcjoyIiwiX3dzQ29uc3VsdGFyQ2VudHJvRGVDdXN0b3M6Y29uc3VsdGFyOjIiLCJfd3NDb25zdWx0YXJDbGllbnRlczpjb25zdWx0YXI6MiIsIl93c0NvbnN1bHRhckNvbWlzc29lczpjb25zdWx0YXI6MiIsIl93c0NvbnN1bHRhckNvbnRhc0FSZWNlYmVyOmNvbnN1bHRhcjoyIiwiX3dzQ29uc3VsdGFyRW1wcmVzYTpjb25zdWx0YXI6MiIsIl93c0NvbnN1bHRhckVzdG9xdWU6Y29uc3VsdGFyOjIiLCJfd3NDb25zdWx0YXJGYXR1cmFtZW50bzpjb25zdWx0YXI6MiIsIl93c0NvbnN1bHRhckZpbmFsaWRhZGU6Y29uc3VsdGFyOjIiLCJfd3NDb25zdWx0YXJGb3JtYURlUGFnYW1lbnRvOmNvbnN1bHRhcjoyIiwiX3dzQ29uc3VsdGFyUGVkaWRvczpjb25zdWx0YXI6MiIsIl93c0NvbnN1bHRhclBlZGlkb3NQZW5kZW50ZURlRW1iYXJxdWU6cGVuZGVudGVkZWVtYmFycXVlOjIiLCJfd3NDb25zdWx0YXJQZWRpZG9zRW1iYXJjYWRvUGVuZGVudGU6ZW1iYXJjYWRvcGVuZGVudGU6MiIsIl93c0NvbnN1bHRhclBhaXM6Y29uc3VsdGFycGFpczoyIiwiX3dzQ29uc3VsdGFyRXN0YWRvOmNvbnN1bHRhcmVzdGFkbzoyIiwiX3dzQ29uc3VsdGFyQ2lkYWRlOmNvbnN1bHRhcmNpZGFkZToyIiwiX3dzQ29uc3VsdGFyQmFpcnJvOmNvbnN1bHRhcmJhaXJybzoyIiwiX3dzQ29uc3VsdGFyTWVyY2Fkb3JpYTpjb25zdWx0YXI6MiIsIl93c0NvbnN1bHRhck1vZWRhOmNvbnN1bHRhcjoyIiwiX3dzSW5jbHVpclBlZGlkbzppbmNsdWlyOjIiLCJfd3NDb25zdWx0YXJGaWx0cm9Db2JyYW5jYTpmaWx0cm9jb2JyYW5jYToyIiwiX3dzQ29uc3VsdGFyVGFiZWxhRGVQcmVjb3M6Y29uc3VsdGFydGFiZWxhZGVwcmVjb3M6MiIsIl93c0NvbnN1bHRhclRpcG9EZUNvYnJhbmNhOmNvbnN1bHRhcjoyIiwiX3dzQ29uc3VsdGFyVGlwb0RlRG9jdW1lbnRvOmNvbnN1bHRhcjoyIiwiX3dzQ29uc3VsdGFyVGlwb0RlTG9ncmFkb3Vybzpjb25zdWx0YXI6MiIsIl93c0NvbnN1bHRhclRpcG9EZU9wZXJhY2FvOmNvbnN1bHRhcjoyIiwiX3dzQ29uc3VsdGFyVHVybm86Y29uc3VsdGFyOjIiLCJfd3NDb25zdWx0YXJVbmlkYWRlRGVNZWRpZGE6Y29uc3VsdGFyOjIiLCJfd3NDb25zdWx0YXJWZW5kZWRvcjpjb25zdWx0YXI6MiJdLCJFbmRlcmVjb0RhSW5zdGFuY2lhIjpbImh0dHBzOi8vdmlzaW9ucy50b3BtYW5hZ2VyLmNvbS5ici9TZXJ2aWRvcl8yLjEuMV9hcGk6X2d3QWdlbnRlQ29icmFkb3JGb3JjYURlVmVuZGFzLF9nd0F0aXZpZGFkZUZvcmNhRGVWZW5kYXMsX2d3Q2VudHJvRGVDdXN0b0ZvcmNhRGVWZW5kYXMsX2d3Q2xpZW50ZUZvcmNhRGVWZW5kYXMsX2d3Q29taXNzw6NvRm9yY2FEZVZlbmRhcyxfZ3dDb250YXNBUmVjZWJlckZvcmNhRGVWZW5kYXMsX2d3RW1wcmVzYUZvcmNhRGVWZW5kYXMsX2d3RXN0b3F1ZUZvcmNhRGVWZW5kYXMsX2d3RmF0dXJhbWVudG9Gb3JjYURlVmVuZGFzLF9nd0ZpbmFsaWRhZGVGb3JjYURlVmVuZGFzLF9nd0Zvcm1hRGVQYWdhbWVudG9Gb3JjYURlVmVuZGFzLF9nd0l0ZW1Eb1BlZGlkb0ZvcmNhRGVWZW5kYXMsX2d3TG9jYWxpemFjYW9Gb3JjYURlVmVuZGFzLF9nd01lcmNhZG9yaWFGb3JjYURlVmVuZGFzLF9nd01vZWRhRm9yY2FEZVZlbmRhcyxfZ3dQb2xpdGljYURlQ29icmFuY2FGb3JjYURlVmVuZGFzLF9nd1BvbGl0aWNhRGVQcmVjb0ZvcmNhRGVWZW5kYXMsX2d3VGlwb0RlQ29icmFuY2FGb3JjYURlVmVuZGFzLF9nd1RpcG9EZURvY3VtZW50b0ZvcmNhRGVWZW5kYXMsX2d3VGlwb0RlTG9ncmFkb3Vyb0ZvcmNhRGVWZW5kYXMsX2d3VGlwb0RlT3BlcmFjYW9Gb3JjYURlVmVuZGFzLF9nd1R1cm5vRm9yY2FEZVZlbmRhcyxfZ3dVbmlkYWRlRGVNZWRpZGFGb3JjYURlVmVuZGFzLF9nd1ZlbmRlZG9yRm9yY2FEZVZlbmRhcyIsImh0dHA6Ly9sb2NhbGhvc3Q6MzUwMDA6X2d3UGVkaWRvRm9yY2FEZVZlbmRhcyJdLCJuYmYiOjE1OTg2MTcyNDIsImV4cCI6MTYxNTg5NzMwMiwiaXNzIjoiYXV0aC52aXNpb25zIn0.PdTGttEPteDkKGlMft518RM18gybajYBmAyV1bGCEz5Oiv2Ydez6jTtxauTWm6gSd3aqxHp1cPaOPIHe8hxz3EMsB2IwU6fAnyhJgkK38EU4Vr2mkLgeSMOInPHlBDUWGLy6UL8c1aGBd1XY_C2Zn9KEsu1rrmz6wHk_qmq-8LGOj0UZhapFnRu7wXVHKqFnkkCTXzAiHT4a5uI6nuoXCP-07iXZeM9DeZi_VCRSUHRaz-WYpfLhrrsSQt6kCiGUMwbU_qGDlLzCjGPNcy9ctLnKzf69Pa-ltHq-sp17o8Hfkd6Q3TAnycpxk1_iMO6gRVhvXXQDMLOWEhZwBhnqZQ';
        $client = new GuzzleHttp\Client();

        $clienteID   = $request->input('cliente'); //29455;
        $vendedorID  = Auth::id();
        $dataPedido  = Carbon::now()->toDateString(); //. "T" . Carbon::now()->toTimeString();
        $dataEntrega = Carbon::now()->addDay()->toDateString(); //. "T" . Carbon::now()->addDay()->toTimeString();
        
        
        $pedido = json_decode($client->request('GET', 'https://visions.topmanager.com.br/Servidor_2.1.1_api/forcadevendas/itemdopedido/consultar?vendedorID=' . $vendedorID . '&dataInicial=' . $dataPedido . 'T00:00:00.000&dataFinal=' . $dataEntrega . 'T00:00:00.000&clienteID=' . $clienteID,
            ['headers' => ['Content-Type' => 'application/json', 'Authorization' => 'Bearer ' . $token]])->getBody(), true);

        return view('API.teste_pedido', compact('pedido', 'client', 'token'));
    }

    /* public function Preco(Request $request)
    {
        $token = 'eyJhbGciOiJSUzI1NiIsImtpZCI6ImE0YzhlY2FlMTdmMjQxNTJhOTZjNGZkNWMxNzE5NGNhIiwidHlwIjoiSldUIn0.eyJzdWIiOiIxMjMwNyIsInVuaXF1ZV9uYW1lIjoiMTIzMDciLCJpYXQiOjE1OTIzMjkwMDAsImp0aSI6IjgwMTRiNTRmOTgzMjQ4MTA5ZmQ1ZWM2ZDJmNDhhYjdmIiwiU2l0ZSI6IkR1bmF4IiwiQXBsaWNhY2FvIjoiRm9yY2FEZVZlbmRhcyIsIkNvbmV4YW8iOiJBVVRIXzEyMzA3XzAxMzRlMGQ0ZWY1YTQ4Zjc4ZWY3OWZhMmY2MjMzZDhhIiwiR3J1cG9EZVdlYlNlcnZpY2UiOlsiX2d3QWdlbnRlQ29icmFkb3JGb3JjYURlVmVuZGFzOmZvcmNhZGV2ZW5kYXMvYWdlbnRlY29icmFkb3I6MiIsIl9nd0F0aXZpZGFkZUZvcmNhRGVWZW5kYXM6Zm9yY2FkZXZlbmRhcy9hdGl2aWRhZGU6MiIsIl9nd0NlbnRyb0RlQ3VzdG9Gb3JjYURlVmVuZGFzOmZvcmNhZGV2ZW5kYXMvY2VudHJvZGVjdXN0bzoyIiwiX2d3Q2xpZW50ZUZvcmNhRGVWZW5kYXM6Zm9yY2FkZXZlbmRhcy9jbGllbnRlOjIiLCJfZ3dDb21pc3PDo29Gb3JjYURlVmVuZGFzOmZvcmNhZGV2ZW5kYXMvY29taXNzYW86MiIsIl9nd0NvbnRhc0FSZWNlYmVyRm9yY2FEZVZlbmRhczpmb3JjYWRldmVuZGFzL2NvbnRhc2FyZWNlYmVyOjIiLCJfZ3dFbXByZXNhRm9yY2FEZVZlbmRhczpmb3JjYWRldmVuZGFzL2VtcHJlc2E6MiIsIl9nd0VzdG9xdWVGb3JjYURlVmVuZGFzOmZvcmNhZGV2ZW5kYXMvbGFuY2FtZW50b2RlZXN0b3F1ZToyIiwiX2d3RmF0dXJhbWVudG9Gb3JjYURlVmVuZGFzOmZvcmNhZGV2ZW5kYXMvZmF0dXJhbWVudG86MiIsIl9nd0ZpbmFsaWRhZGVGb3JjYURlVmVuZGFzOmZvcmNhZGV2ZW5kYXMvZmluYWxpZGFkZToyIiwiX2d3Rm9ybWFEZVBhZ2FtZW50b0ZvcmNhRGVWZW5kYXM6Zm9yY2FkZXZlbmRhcy9mb3JtYWRlcGFnYW1lbnRvOjIiLCJfZ3dJdGVtRG9QZWRpZG9Gb3JjYURlVmVuZGFzOmZvcmNhZGV2ZW5kYXMvaXRlbWRvcGVkaWRvOjIiLCJfZ3dMb2NhbGl6YWNhb0ZvcmNhRGVWZW5kYXM6Zm9yY2FkZXZlbmRhcy9sb2NhbGl6YWNhbzoyIiwiX2d3TWVyY2Fkb3JpYUZvcmNhRGVWZW5kYXM6Zm9yY2FkZXZlbmRhcy9tZXJjYWRvcmlhOjIiLCJfZ3dNb2VkYUZvcmNhRGVWZW5kYXM6Zm9yY2FkZXZlbmRhcy9tb2VkYToyIiwiX2d3UGVkaWRvRm9yY2FEZVZlbmRhczpmb3JjYWRldmVuZGFzL3BlZGlkbzoyIiwiX2d3UG9saXRpY2FEZUNvYnJhbmNhRm9yY2FEZVZlbmRhczpmb3JjYWRldmVuZGFzL2RldGFsaGVwb2xpdGljYWRlY29icmFuY2E6MiIsIl9nd1BvbGl0aWNhRGVQcmVjb0ZvcmNhRGVWZW5kYXM6Zm9yY2FkZXZlbmRhcy9vYmpldG9kb2RldGFsaGVkYXBvbGl0aWNhZGVwcmVjb3M6MiIsIl9nd1RpcG9EZUNvYnJhbmNhRm9yY2FEZVZlbmRhczpmb3JjYWRldmVuZGFzL3RpcG9kZWNvYnJhbmNhOjIiLCJfZ3dUaXBvRGVEb2N1bWVudG9Gb3JjYURlVmVuZGFzOmZvcmNhZGV2ZW5kYXMvdGlwb2RlZG9jdW1lbnRvOjIiLCJfZ3dUaXBvRGVMb2dyYWRvdXJvRm9yY2FEZVZlbmRhczpmb3JjYWRldmVuZGFzL3RpcG9kZWxvZ3JhZG91cm86MiIsIl9nd1RpcG9EZU9wZXJhY2FvRm9yY2FEZVZlbmRhczpmb3JjYWRldmVuZGFzL3RpcG9kZW9wZXJhY2FvOjIiLCJfZ3dUdXJub0ZvcmNhRGVWZW5kYXM6Zm9yY2FkZXZlbmRhcy90dXJubzoyIiwiX2d3VW5pZGFkZURlTWVkaWRhRm9yY2FEZVZlbmRhczpmb3JjYWRldmVuZGFzL3VuaWRhZGVkZW1lZGlkYToyIiwiX2d3VmVuZGVkb3JGb3JjYURlVmVuZGFzOmZvcmNhZGV2ZW5kYXMvdmVuZGVkb3I6MiJdLCJXZWJTZXJ2aWNlIjpbIl93c0NvbnN1bHRhckFnZW50ZUNvYnJhZG9yOmNvbnN1bHRhcjoyIiwiX3dzQ29uc3VsdGFyQXRpdmlkYWRlOmNvbnN1bHRhcjoyIiwiX3dzQ29uc3VsdGFyQ2VudHJvRGVDdXN0b3M6Y29uc3VsdGFyOjIiLCJfd3NDb25zdWx0YXJDbGllbnRlczpjb25zdWx0YXI6MiIsIl93c0NvbnN1bHRhckNvbWlzc29lczpjb25zdWx0YXI6MiIsIl93c0NvbnN1bHRhckNvbnRhc0FSZWNlYmVyOmNvbnN1bHRhcjoyIiwiX3dzQ29uc3VsdGFyRW1wcmVzYTpjb25zdWx0YXI6MiIsIl93c0NvbnN1bHRhckVzdG9xdWU6Y29uc3VsdGFyOjIiLCJfd3NDb25zdWx0YXJGYXR1cmFtZW50bzpjb25zdWx0YXI6MiIsIl93c0NvbnN1bHRhckZpbmFsaWRhZGU6Y29uc3VsdGFyOjIiLCJfd3NDb25zdWx0YXJGb3JtYURlUGFnYW1lbnRvOmNvbnN1bHRhcjoyIiwiX3dzQ29uc3VsdGFyUGVkaWRvczpjb25zdWx0YXI6MiIsIl93c0NvbnN1bHRhclBlZGlkb3NQZW5kZW50ZURlRW1iYXJxdWU6cGVuZGVudGVkZWVtYmFycXVlOjIiLCJfd3NDb25zdWx0YXJQZWRpZG9zRW1iYXJjYWRvUGVuZGVudGU6ZW1iYXJjYWRvcGVuZGVudGU6MiIsIl93c0NvbnN1bHRhclBhaXM6Y29uc3VsdGFycGFpczoyIiwiX3dzQ29uc3VsdGFyRXN0YWRvOmNvbnN1bHRhcmVzdGFkbzoyIiwiX3dzQ29uc3VsdGFyQ2lkYWRlOmNvbnN1bHRhcmNpZGFkZToyIiwiX3dzQ29uc3VsdGFyQmFpcnJvOmNvbnN1bHRhcmJhaXJybzoyIiwiX3dzQ29uc3VsdGFyTWVyY2Fkb3JpYTpjb25zdWx0YXI6MiIsIl93c0NvbnN1bHRhck1vZWRhOmNvbnN1bHRhcjoyIiwiX3dzSW5jbHVpclBlZGlkbzppbmNsdWlyOjIiLCJfd3NDb25zdWx0YXJGaWx0cm9Db2JyYW5jYTpmaWx0cm9jb2JyYW5jYToyIiwiX3dzQ29uc3VsdGFyVGFiZWxhRGVQcmVjb3M6Y29uc3VsdGFydGFiZWxhZGVwcmVjb3M6MiIsIl93c0NvbnN1bHRhclRpcG9EZUNvYnJhbmNhOmNvbnN1bHRhcjoyIiwiX3dzQ29uc3VsdGFyVGlwb0RlRG9jdW1lbnRvOmNvbnN1bHRhcjoyIiwiX3dzQ29uc3VsdGFyVGlwb0RlTG9ncmFkb3Vybzpjb25zdWx0YXI6MiIsIl93c0NvbnN1bHRhclRpcG9EZU9wZXJhY2FvOmNvbnN1bHRhcjoyIiwiX3dzQ29uc3VsdGFyVHVybm86Y29uc3VsdGFyOjIiLCJfd3NDb25zdWx0YXJVbmlkYWRlRGVNZWRpZGE6Y29uc3VsdGFyOjIiLCJfd3NDb25zdWx0YXJWZW5kZWRvcjpjb25zdWx0YXI6MiJdLCJFbmRlcmVjb0RhSW5zdGFuY2lhIjoiaHR0cHM6Ly92aXNpb25zLnRvcG1hbmFnZXIuY29tLmJyL1NlcnZpZG9yXzIuMS4xX2FwaTpfZ3dBZ2VudGVDb2JyYWRvckZvcmNhRGVWZW5kYXMsX2d3QXRpdmlkYWRlRm9yY2FEZVZlbmRhcyxfZ3dDZW50cm9EZUN1c3RvRm9yY2FEZVZlbmRhcyxfZ3dDbGllbnRlRm9yY2FEZVZlbmRhcyxfZ3dDb21pc3PDo29Gb3JjYURlVmVuZGFzLF9nd0NvbnRhc0FSZWNlYmVyRm9yY2FEZVZlbmRhcyxfZ3dFbXByZXNhRm9yY2FEZVZlbmRhcyxfZ3dFc3RvcXVlRm9yY2FEZVZlbmRhcyxfZ3dGYXR1cmFtZW50b0ZvcmNhRGVWZW5kYXMsX2d3RmluYWxpZGFkZUZvcmNhRGVWZW5kYXMsX2d3Rm9ybWFEZVBhZ2FtZW50b0ZvcmNhRGVWZW5kYXMsX2d3SXRlbURvUGVkaWRvRm9yY2FEZVZlbmRhcyxfZ3dMb2NhbGl6YWNhb0ZvcmNhRGVWZW5kYXMsX2d3TWVyY2Fkb3JpYUZvcmNhRGVWZW5kYXMsX2d3TW9lZGFGb3JjYURlVmVuZGFzLF9nd1BlZGlkb0ZvcmNhRGVWZW5kYXMsX2d3UG9saXRpY2FEZUNvYnJhbmNhRm9yY2FEZVZlbmRhcyxfZ3dQb2xpdGljYURlUHJlY29Gb3JjYURlVmVuZGFzLF9nd1RpcG9EZUNvYnJhbmNhRm9yY2FEZVZlbmRhcyxfZ3dUaXBvRGVEb2N1bWVudG9Gb3JjYURlVmVuZGFzLF9nd1RpcG9EZUxvZ3JhZG91cm9Gb3JjYURlVmVuZGFzLF9nd1RpcG9EZU9wZXJhY2FvRm9yY2FEZVZlbmRhcyxfZ3dUdXJub0ZvcmNhRGVWZW5kYXMsX2d3VW5pZGFkZURlTWVkaWRhRm9yY2FEZVZlbmRhcyxfZ3dWZW5kZWRvckZvcmNhRGVWZW5kYXMiLCJuYmYiOjE1OTIzMjg5MzksImV4cCI6MTYwOTYwODk5OSwiaXNzIjoiYXV0aC52aXNpb25zIn0.RKxGV-iw7K1cgiVge5gW_qeTHjUaI3M8g6pWglfQ-C4vI5GYyS_H8gUzPUSym0dHrb4_fASN1o7piX5oHtw7mImCmIaXl2dmxnT0PlW7usPbPdu12exdC3h9VoqDFEqP1GOgThNJuJJTKvHR7mZJzMD6pYjTfFGYHBBPueMCwJ-1UMNS_jHhwD5HkHoT7hnGXMXgOgcaJ7mp6vMh3Q2L-zIqugZXQr2loXFbzD_LDH0HoB7HEkknu-9ClF6H2ungCcUiHIn7lqIg8WeqafpwxLnLhuGYux063PdtT2mhgQ7FbHfFjBY1NURptsNnx_lyQ3IsABicpYjpaKqht264sA';
        $client = new GuzzleHttp\Client();

        $projeto = 1;
        $tipoDoc = 31;
        $tipoPedido = "Pedido";
        $fasePedido = 2;
        $condicaoPagamento = "Pedido";
        $tipoRomaneio = "Romaneio";
        $almoxarifado = "EPA";


        $clienteID = $request->input('cliente'); //29455;
        $objetoID = $request->input('objeto');
        
        $cliente = json_decode($client->request('GET', 'https://visions.topmanager.com.br/Servidor_2.1.1_api/forcadevendas/cliente/consultar',
        ['headers' => ['Content-Type' => 'application/json', 'Authorization' => 'Bearer ' . $token]])->getBody(), true);
    

        $objeto = json_decode($client->request('GET', 'https://visions.topmanager.com.br/Servidor_2.1.1_api/forcadevendas/mercadoria/consultar',
            ['headers' => ['Content-Type' => 'application/json', 'Authorization' => 'Bearer ' . $token]])->getBody(), true);

        $precoBase = json_decode($client->request('GET', 'https://visions.topmanager.com.br/Servidor_2.1.1_api/forcadevendas/objetododetalhedapoliticadeprecos/consultartabeladeprecos?clienteID=' . $clienteID . '&objetoID=' . $objetoID,
            ['headers' => ['Content-Type' => 'application/json', 'Authorization' => 'Bearer ' . $token]])->getBody(), true);

            
        $body = [
            "pedidoID" => 0,
            "data" => "2020-06-01T00;00:00",
            "empresaID" => 64,
            "operacaoID" => 164,
            "tipoDeDocumentoID" => 31,
            "tipoDeDocumentoPedidoID" => 8,
            "cliente" => [
                "id" => 30828,
                "razaoSocial" => "Elissando Pinto de Souza Moto Pecas",
                "nomeFantasia" => "Chegado Moto Pecas",
                "cnpJouCPF" => 32723281000105.0,
                "inscricaoEstadual" => "247932876",
                "enderecoFaturamento" => [
                    "uf" => "AL",
                    "cidade" => "São José da Tapera",
                    "bairro" => "Centro",
                    "tipoDeLogradouro" => "R",
                    "logradouro" => "07 de Setembro",
                    "numero" => "99",
                    "complemento" => "SC",
                    "cep" => "57445000"
                ],
                "telefone1" => "-",
                "celular1" => "-91916030",
                "dataInclusao" => "2019-04-18T00 =>00 =>00"
            ],
            "vendedorID" => 3633,
            "turnoID" => 5,
            "moedaID" => 1,
            "entrega" => "2020-06-01T00 =>00 =>00",
            "enderecoEntrega" => [
                "uf" => "AL",
                "cidade" => "São José da Tapera",
                "bairro" => "Centro",
                "tipoDeLogradouro" => "R",
                "logradouro" => "07 de Setembro",
                "numero" => "99",
                "complemento" => "SC",
                "cep" => "57445000"
            ],
            "tipoDeFrete" => 10,
            "itens" => [
                [
                    "itemPedidoID" => 0,
                    "objetoID" => 4009,
                    "finalidadeID" => 2,
                    "centroDeCustosID" => 4,
                    "atividadeID" => 446,
                    "unidadeDeMedidaID" => 8,
                    "quantidade" => 6.000000,
                    "valorMercadoria" => 1230.000000
                ],
                [
                    "itemPedidoID" => 0,
                    "objetoID" => 5941,
                    "finalidadeID" => 2,
                    "centroDeCustosID" => 4,
                    "atividadeID" => 446,
                    "unidadeDeMedidaID" => 8,
                    "quantidade" => 1.000000,
                    "valorMercadoria" => 128.000000
                ],
                [
                    "itemPedidoID" => 0,
                    "objetoID" => 5939,
                    "finalidadeID" => 2,
                    "centroDeCustosID" => 4,
                    "atividadeID" => 446,
                    "unidadeDeMedidaID" => 8,
                    "quantidade" => 1.000000,
                    "valorMercadoria" => 128.000000
                ],
                [
                    "itemPedidoID" => 0,
                    "objetoID" => 131,
                    "finalidadeID" => 2,
                    "centroDeCustosID" => 4,
                    "atividadeID" => 446,
                    "unidadeDeMedidaID" => 14,
                    "quantidade" => 1.000000,
                    "valorMercadoria" => 135.000000
                ]
            ],
            "agenteCobradorID" => 64,
            "tipodeCobrancaID" => 13,
            "formaDePagamentoID" => 166
        ];

        $store = $client->request('POST', 'https://visions.topmanager.com.br/Servidor_2.1.1_api/forcadevendas/pedido/incluir',
            ['headers' => ['Content-Type' => 'application/json', 'Authorization' => 'Bearer ' . $token]])->getBody();

        
        return view('preco', compact('objetoID', 'objeto', 'precoBase', 'clienteID', 'cliente'));
    } */
}