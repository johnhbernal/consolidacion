<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Barrio extends Model {
	//
	public $table = "p_barrio";
	public function Municipio() {
		return $this->belongsTo ( 'App\Barrio' )->withPivot ( 'CODIGO_DEPARTAMENTO', 'status' );
		// return $this->hasMany(Departamento::class);
	}
	public function Barrio(){
	    return $this->hasMany(Municipio::class);
	    // 		return $this->belongsTo('App\Pais')->withPivot('cons_pais','status');
	}
}
