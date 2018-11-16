<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Servico extends Model
{
	protected $fillable = ['id','nome','sobre','img'];

	public function users()
	{
		return $this->hasMany(User::class);
	}
}
