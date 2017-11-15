<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Municipio extends Model {
	//
	public $table = "p_municipio";
	public function Departamento() {
		return $this->belongsTo ( 'App\Municipio' )->withPivot ( 'CODIGO_BARRIO', 'status' );
		// return $this->hasMany(Departamento::class);
	}
}
