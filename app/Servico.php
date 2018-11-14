<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Servico extends Model
{
	protected $fillable = ['idtb_servico','nome','sobre'];

	public function users()
	{
		return $this->hasMany(User::class);
	}
}
