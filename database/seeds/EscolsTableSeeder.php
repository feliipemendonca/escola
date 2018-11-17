<?php

use Illuminate\Database\Seeder;

class EscolsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	DB::table('escols')->insert([
    		'escola' => 'Ensino Fundamental Cursando',
    	]);

    	DB::table('escols')->insert([
    		'escola' => 'Ensino Fundamental Completo',
    	]);

    	DB::table('escols')->insert([
    		'escola' => 'Ensino Fundamental Incompleto',
    	]);

    	DB::table('escols')->insert([
    		'escola' => 'Ensino Médio Cursando',
    	]);

    	DB::table('escols')->insert([
    		'escola' => 'Ensino Médio Completo',
    	]);

    	DB::table('escols')->insert([
    		'escola' => 'Ensino Médio Incompleto',
    	]);

    	DB::table('escols')->insert([
    		'escola' => 'Ensino Tecníco Cursando',
    	]);

    	DB::table('escols')->insert([
    		'escola' => 'Ensino Técnico Completo',
    	]);

    	DB::table('escols')->insert([
    		'escola' => 'Ensino Tecníco Incompleto',
    	]);

    	DB::table('escols')->insert([
    		'escola' => 'Ensino Tecníco Incompleto',
    	]);

    	DB::table('escols')->insert([
    		'escola' => 'Ensino Superior Cursando',
    	]);

    	DB::table('escols')->insert([
    		'escola' => 'Ensino Superior Completo',
    	]);

    	DB::table('escols')->insert([
    		'escola' => 'Ensino Superior Incompleto',
    	]);

    	DB::table('escols')->insert([
    		'escola' => 'Pós Graduação Cursando ',
    	]);

    	DB::table('escols')->insert([
    		'escola' => 'Pós Graduado Completo',
    	]);

    	DB::table('escols')->insert([
    		'escola' => 'Pós Graduação Incompleto',
    	]);

    	DB::table('escols')->insert([
    		'escola' => 'Mestrado Cursando',
    	]);
    	
    	DB::table('escols')->insert([
    		'escola' => 'Mestrado Completo',
    	]);

    	DB::table('escols')->insert([
    		'escola' => 'Mestrado incompleto',
    	]);

    }
}
