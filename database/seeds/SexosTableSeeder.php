<?php

use Illuminate\Database\Seeder;

class SexosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	DB::table('sexos')->insert([
    		'sexo' => 'Masculo',
    	]);

    	DB::table('sexos')->insert([
    		'sexo' => 'Feminino',
    	]);
    }
}
