<?php

use Illuminate\Database\Seeder;

class PlanosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('planos')->insert([
            'plano' => 'Básico',
            'valor' =>  239.70
        ]);

        DB::table('planos')->insert([
            'plano' => 'Essencial',
            'valor' =>   319.80
        ]);

        DB::table('planos')->insert([
            'plano' => 'Profissional',
            'valor' =>  419.70
        ]);
    }
}
