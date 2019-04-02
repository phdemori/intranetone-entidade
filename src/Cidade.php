<?php

namespace Agileti\IOEntidade;

use Dataview\IntranetOne\IOModel;

class Cidade extends IOModel
{
	protected $fillable = ['id','cidade','uf'];
	protected $dates = ['deleted_at'];
	
	public function entidades()
	{
		return $this->hasMany(Entidade);
	}
	/*
	public function getEntidadesList()
	{
		return $this->Entidade->lists('id')->toArray();
	}*/
}
