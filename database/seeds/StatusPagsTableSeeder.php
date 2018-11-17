<?php

use Illuminate\Database\Seeder;

class StatusPagsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	DB::table('statuspags')->insert([
    		'status' => 'Aguardando Pagamento',
    		'descri' => 'O comprado inciou a transação',
    	]);

    	DB::table('statuspags')->insert([
    		'status' => 'Pagamento em Análise',
    		'descri' => 'o comprador optou por pagar com um cartão de crédito e o PagSeguro está analisando o risco da transação',
    	]);

    	DB::table('statuspags')->insert([
    		'status' => 'Pagamento Aprovado',
    		'descri' => 'a transação foi paga e chegou ao final de seu prazo liberação',
    	]);

    	DB::table('statuspags')->insert([
    		'status' => 'Em Disputa',
    		'descri' => 'o comprador, dentro do prazo de liberação da transação, abriu uma disputa',
    	]);

    	DB::table('statuspags')->insert([
    		'status' => 'Devolvido',
    		'descri' => 'o valor da transação foi devolvido para o comprador',
    	]);

    	DB::table('statuspags')->insert([
    		'status' => 'Canselado',
    		'descri' => 'a transação foi cancelada sem ter sido finalizada',
    	]);

    }
}
