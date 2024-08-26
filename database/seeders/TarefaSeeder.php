<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Tarefa;

class TarefaSeeder extends Seeder
{
    public function run()
    {
        Tarefa::create([
            'nome' => 'Fazer x',
            'descricao' => 'Descrição da tarefa x',
        ]);

        Tarefa::create([
            'nome' => 'Fazer y',
            'descricao' => 'Descrição da tarefa y',
        ]);

        Tarefa::create([
            'nome' => 'Fazer z',
            'descricao' => 'Descrição da tarefa z',
        ]);
    }
}
