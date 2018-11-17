<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Professor extends Model
{

	protected $fillable = ['id','nome','rg','cpf','formacao','instituicao','ano','endereco','bairro','cidade','numero','estado'];

	public function users()
	{
		return $this->hasMany(User::class);
	}
}
