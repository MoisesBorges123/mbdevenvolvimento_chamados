<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DepartmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('departments')->insert([
            [
                'name'=>'Logistica',
                'description'=>''
            ],
            [
                'name'=>'Manipulação',
                'description'=>''
            ],
            [
                'name'=>'Embalagem Coletivia',
                'description'=>''
            ],
            [
                'name'=>'Marketing',
                'description'=>''
            ],
            [
                'name'=>'Comercial',
                'description'=>''
            ],
            [
                'name'=>'Faturamento',
                'description'=>''
            ],
            [
                'name'=>'Financeiro',
                'description'=>''
            ],
            [
                'name'=>'Gerencia',
                'description'=>''
            ],
            [
                'name'=>'Manipulação',
                'description'=>''
            ],
            [
                'name'=>'Qualidade (Laboratório)',
                'description'=>''
            ],
            [
                'name'=>'Recursos Humanos',
                'description'=>''
            ]
        ]);
    }
}
