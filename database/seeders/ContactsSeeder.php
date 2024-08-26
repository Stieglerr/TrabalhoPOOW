<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ContactsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('contacts')->insert([
            'name'=> 'João Silva',
            'email'=> 'joao@email.com',
            'telefone'=> '(00) 9999-9999',
            'data_nascimento'=> '1999-05-13',
        ]);
        DB::table('contacts')->insert([
            'name'=> 'João Durski',
            'email'=> 'joaodurski@email.com',
            'telefone'=> '(00) 9939-9999',
            'data_nascimento'=> '1999-04-13',
        ]);
    }
}
