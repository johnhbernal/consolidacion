<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBarrioTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::dropIfExists ( 'p_barrio' );
        Schema::create ( 'p_barrio', function (Blueprint $table) {
            $table->increments ( 'CODIGO_BARRIO' )->unique();
            $table->integer ( 'CODIGO_MUNICIPIO' )->unsigned ();
            $table->foreign ( 'CODIGO_MUNICIPIO' )->references ( 'CODIGO_MUNICIPIO' )->on ( 'p_municipio' );
            $table->string ( 'NOMBRE' )->unique();
            $table->string ( 'COMUNA' );
            $table->string ( 'ESE' );
            $table->string ( 'ZONA' );
            $table->string ( 'created_by' )->default ( 'admin' );
            $table->softDeletes ();
            $table->timestamps ();
        } );
            DB::statement('ALTER TABLE p_barrio CHANGE CODIGO_BARRIO CODIGO_BARRIO INT(5) UNSIGNED ZEROFILL NOT NULL');
            DB::statement('ALTER TABLE p_barrio CHANGE CODIGO_MUNICIPIO CODIGO_MUNICIPIO INT(3) UNSIGNED ZEROFILL NOT NULL');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('p_barrio');
    }
}
