<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Curso extends Model
{
	protected $fillable = ['nome','sobre','alvo','carga','mercado','valor'];

	public function users()
	{
		return $this->hasMany(User::class);
	}
}
