<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pais extends Model
{
    //
	public $table = "p_pais";
	public function Pais(){
		return $this->hasMany(Pais::class);
	}
}
