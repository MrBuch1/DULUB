<?php

use Illuminate\Database\Seeder;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Publi',
            'email' => 'publi@dulub.com.br',
            'password' => 'Dulub@123'
        ]);
    }
}