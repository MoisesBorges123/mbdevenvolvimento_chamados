<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UrgencySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('urgencies')->insert([ 
            [
                'name'=>'Emergente',
                'description'=>'Excução imeadiata',
                'time_waiting'=>0,                
            ],
            [
                'name'=>'Muito urgente',
                'description'=>'Excução em 10 minutos',
                'time_waiting'=>600,                
            ],
            [
                'name'=>'Urgente',
                'description'=>'Excução em 02 horas',
                'time_waiting'=>7200,                
            ],
            [
                'name'=>'Pouco urgente',
                'description'=>'Excução em 04 horas',
                'time_waiting'=>14400,                
            ],
            [
                'name'=>'Não urgente',
                'description'=>'Excução em 08 horas',
                'time_waiting'=>28800,                
            ],
            [
                'name'=>'Não tem pressa',
                'description'=>'Excução em 01 semana',
                'time_waiting'=>604800,                
            ]
            ]);
    }
}
