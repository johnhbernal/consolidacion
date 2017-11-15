<?php
use Illuminate\Database\Seeder;
use App\Barrio;
use Carbon\Carbon;

class BarriosTableSeeder extends Seeder {
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run() {
	    
	    /*COMUNA 1 CALI*/
		DB::table ( 'p_barrio' )->insert ( array (
		        'CODIGO_BARRIO' => 101,
		        'CODIGO_MUNICIPIO' => 001,
				'NOMBRE' => urlencode ( 'TERRON COLORADO' ),
				'COMUNA' => 1,
				'ESE' => 1,
				'ZONA' => urlencode ( 'Nor – Occidental' ),
				'created_by' => 'admin',
				'created_at' => Carbon::now () 
		) );
		DB::table ( 'p_barrio' )->insert ( array (
		        'CODIGO_BARRIO' => 102,
		        'CODIGO_MUNICIPIO' => 001,
				'NOMBRE' => urlencode ( 'VISTA HERMOSA' ),
				'COMUNA' => 1,
				'ESE' => 1,
				'ZONA' => urlencode ( 'Nor – Occidental' ),
				'created_by' => 'admin',
				'created_at' => Carbon::now () 
		) );
		DB::table ( 'p_barrio' )->insert ( array (
		        'CODIGO_BARRIO' => 120,
		        'CODIGO_MUNICIPIO' => 001,
				'NOMBRE' => urlencode ( 'INV. EL REALENGO' ),
				'COMUNA' => 1,
				'ESE' => 1,
				'ZONA' => urlencode ( 'Nor – Occidental' ),
				'created_by' => 'admin',
				'created_at' => Carbon::now () 
		) );
		DB::table ( 'p_barrio' )->insert ( array (
		        'CODIGO_BARRIO' => 192,
		        'CODIGO_MUNICIPIO' => 001,
				'NOMBRE' => urlencode ( 'INV. VILLA DEL MAR' ),
				'COMUNA' => 1,
				'ESE' => 1,
				'ZONA' => urlencode ( 'Nor – Occidental' ),
				'created_by' => 'admin',
				'created_at' => Carbon::now () 
		) );
		DB::table ( 'p_barrio' )->insert ( array (
		        'CODIGO_BARRIO' => 196,
		        'CODIGO_MUNICIPIO' => 001,
				'NOMBRE' => urlencode ( 'SECTOR PATIO BONITO' ),
				'COMUNA' => 1,
				'ESE' => 1,
				'ZONA' => urlencode ( 'Nor – Occidental' ),
				'created_by' => 'admin',
				'created_at' => Carbon::now () 
		) );
		DB::table ( 'p_barrio' )->insert ( array (
		        'CODIGO_BARRIO' =>  197,
		        'CODIGO_MUNICIPIO' => 001,
				'NOMBRE' => urlencode ( 'LA LEGUA' ),
				'COMUNA' => 1,
				'ESE' => 1,
				'ZONA' => urlencode ( 'Nor – Occidental' ),
				'created_by' => 'admin',
				'created_at' => Carbon::now () 
		) );
		DB::table ( 'p_barrio' )->insert ( array (
		        'CODIGO_BARRIO' =>  198,
		        'CODIGO_MUNICIPIO' => 001,
				'NOMBRE' => urlencode ( 'PALERMO' ),
				'COMUNA' => 1,
				'ESE' => 1,
				'ZONA' => urlencode ( 'Nor – Occidental' ),
				'created_by' => 'admin',
				'created_at' => Carbon::now () 
		) );
		DB::table ( 'p_barrio' )->insert ( array (
		        'CODIGO_BARRIO' =>  199,
		        'CODIGO_MUNICIPIO' => 001,
				'NOMBRE' => urlencode ( 'AGUACATAL' ),
				'COMUNA' => 1,
				'ESE' => 1,
				'ZONA' => urlencode ( 'Nor – Occidental' ),
				'created_by' => 'admin',
				'created_at' => Carbon::now () 
		) );
		DB::table ( 'p_barrio' )->insert ( array (
		    'CODIGO_BARRIO' =>  1961,
		        'CODIGO_MUNICIPIO' => 001,
				'NOMBRE' => urlencode ( 'VILLA DEL MAR' ),
				'COMUNA' => 1,
				'ESE' => 1,
				'ZONA' => urlencode ( 'Nor – Occidental' ),
				'created_by' => 'admin',
				'created_at' => Carbon::now () 
		) );

		/*COMUNA 2 CALI*/
		
		DB::table ( 'p_barrio' )->insert ( array (
		        'CODIGO_BARRIO' =>  201,
		        'CODIGO_MUNICIPIO' => 001,
				'NOMBRE' => urlencode ( 'SANTA RITA' ),
				'COMUNA' => 2,
				'ESE' => 2,
				'ZONA' => urlencode ( 'Nor – Occidental' ),
				'created_by' => 'admin',
				'created_at' => Carbon::now () 
		) );
		DB::table ( 'p_barrio' )->insert ( array (
		        'CODIGO_BARRIO' =>  202,
		        'CODIGO_MUNICIPIO' => 001,
				'NOMBRE' => urlencode ( 'SANTA TERESITA' ),
				'COMUNA' => 2,
				'ESE' => 2,
				'ZONA' => urlencode ( 'Nor – Occidental' ),
				'created_by' => 'admin',
				'created_at' => Carbon::now () 
		) );
		DB::table ( 'p_barrio' )->insert ( array (
		        'CODIGO_BARRIO' =>  203,
		        'CODIGO_MUNICIPIO' => 001,
				'NOMBRE' => urlencode ( 'ARBOLEDAS' ),
				'COMUNA' => 2,
				'ESE' => 2,
				'ZONA' => urlencode ( 'Nor – Occidental' ),
				'created_by' => 'admin',
				'created_at' => Carbon::now () 
		) );
		DB::table ( 'p_barrio' )->insert ( array (
		        'CODIGO_BARRIO' =>  204,
		        'CODIGO_MUNICIPIO' => 001,
				'NOMBRE' => urlencode ( 'NORMANDIA' ),
				'COMUNA' => 2,
				'ESE' => 2,
				'ZONA' => urlencode ( 'Nor – Occidental' ),
				'created_by' => 'admin',
				'created_at' => Carbon::now () 
		) );
		DB::table ( 'p_barrio' )->insert ( array (
		        'CODIGO_BARRIO' =>  205,
		        'CODIGO_MUNICIPIO' => 001,
				'NOMBRE' => urlencode ( 'JUANAMBU' ),
				'COMUNA' => 2,
				'ESE' => 2,
				'ZONA' => urlencode ( 'Nor – Occidental' ),
				'created_by' => 'admin',
				'created_at' => Carbon::now () 
		) );
		DB::table ( 'p_barrio' )->insert ( array (
		        'CODIGO_BARRIO' =>  206,
		        'CODIGO_MUNICIPIO' => 001,
				'NOMBRE' => urlencode ( 'CENTENARIO' ),
				'COMUNA' => 2,
				'ESE' => 2,
				'ZONA' => urlencode ( 'Nor – Occidental' ),
				'created_by' => 'admin',
				'created_at' => Carbon::now () 
		) );
		DB::table ( 'p_barrio' )->insert ( array (
		        'CODIGO_BARRIO' =>  207,
		        'CODIGO_MUNICIPIO' => 001,
				'NOMBRE' => urlencode ( 'GRANADA' ),
				'COMUNA' => 2,
				'ESE' => 2,
				'ZONA' => urlencode ( 'Nor – Occidental' ),
				'created_by' => 'admin',
				'created_at' => Carbon::now () 
		) );
		DB::table ( 'p_barrio' )->insert ( array (
		        'CODIGO_BARRIO' =>  208,
		        'CODIGO_MUNICIPIO' => 001,
				'NOMBRE' => urlencode ( 'VERSALLES' ),
				'COMUNA' => 2,
				'ESE' => 2,
				'ZONA' => urlencode ( 'Nor – Occidental' ),
				'created_by' => 'admin',
				'created_at' => Carbon::now () 
		) );
		DB::table ( 'p_barrio' )->insert ( array (
		        'CODIGO_BARRIO' =>  209,
		        'CODIGO_MUNICIPIO' => 001,
				'NOMBRE' => urlencode ( 'SAN VICENTE' ),
				'COMUNA' => 2,
				'ESE' => 2,
				'ZONA' => urlencode ( 'Nor – Occidental' ),
				'created_by' => 'admin',
				'created_at' => Carbon::now () 
		) );
		DB::table ( 'p_barrio' )->insert ( array (
		        'CODIGO_BARRIO' =>  210,
		        'CODIGO_MUNICIPIO' => 001,
				'NOMBRE' => urlencode ( 'SANTA MONICA' ),
				'COMUNA' => 2,
				'ESE' => 2,
				'ZONA' => urlencode ( 'Nor – Occidental' ),
				'created_by' => 'admin',
				'created_at' => Carbon::now () 
		) );
		DB::table ( 'p_barrio' )->insert ( array (
		        'CODIGO_BARRIO' =>  211,
		        'CODIGO_MUNICIPIO' => 001,
				'NOMBRE' => urlencode ( 'PRADOS DEL NORTE' ),
				'COMUNA' => 2,
				'ESE' => 2,
				'ZONA' => urlencode ( 'Nor – Occidental' ),
				'created_by' => 'admin',
				'created_at' => Carbon::now () 
		) );
		DB::table ( 'p_barrio' )->insert ( array (
		        'CODIGO_BARRIO' =>  212,
		        'CODIGO_MUNICIPIO' => 001,
				'NOMBRE' => urlencode ( 'LA FLORA' ),
				'COMUNA' => 2,
				'ESE' => 2,
				'ZONA' => urlencode ( 'Nor – Occidental' ),
				'created_by' => 'admin',
				'created_at' => Carbon::now () 
		) );
		DB::table ( 'p_barrio' )->insert ( array (
		        'CODIGO_BARRIO' =>  213,
		        'CODIGO_MUNICIPIO' => 001,
				'NOMBRE' => urlencode ( 'LA CAMPIÑA' ),
				'COMUNA' => 2,
				'ESE' => 2,
				'ZONA' => urlencode ( 'Nor – Occidental' ),
				'created_by' => 'admin',
				'created_at' => Carbon::now () 
		) );
		DB::table ( 'p_barrio' )->insert ( array (
		        'CODIGO_BARRIO' =>  214,
		        'CODIGO_MUNICIPIO' => 001,
				'NOMBRE' => urlencode ( 'LA PAZ' ),
				'COMUNA' => 2,
				'ESE' => 2,
				'ZONA' => urlencode ( 'Nor – Occidental' ),
				'created_by' => 'admin',
				'created_at' => Carbon::now () 
		) );
		DB::table ( 'p_barrio' )->insert ( array (
		        'CODIGO_BARRIO' =>  215,
		        'CODIGO_MUNICIPIO' => 001,
				'NOMBRE' => urlencode ( 'EL BOSQUE' ),
				'COMUNA' => 2,
				'ESE' => 2,
				'ZONA' => urlencode ( 'Nor – Occidental' ),
				'created_by' => 'admin',
				'created_at' => Carbon::now () 
		) );
		DB::table ( 'p_barrio' )->insert ( array (
		        'CODIGO_BARRIO' =>  216,
		        'CODIGO_MUNICIPIO' => 001,
				'NOMBRE' => urlencode ( 'MENGA' ),
				'COMUNA' => 2,
				'ESE' => 2,
				'ZONA' => urlencode ( 'Nor – Occidental' ),
				'created_by' => 'admin',
				'created_at' => Carbon::now () 
		) );
		DB::table ( 'p_barrio' )->insert ( array (
		        'CODIGO_BARRIO' =>  217,
		        'CODIGO_MUNICIPIO' => 001,
				'NOMBRE' => urlencode ( 'CIUDAD LOS ALAMOS' ),
				'COMUNA' => 2,
				'ESE' => 2,
				'ZONA' => urlencode ( 'Nor – Occidental' ),
				'created_by' => 'admin',
				'created_at' => Carbon::now () 
		) );
		DB::table ( 'p_barrio' )->insert ( array (
		        'CODIGO_BARRIO' =>  218,
		        'CODIGO_MUNICIPIO' => 001,
				'NOMBRE' => urlencode ( 'CHIPICHAPE' ),
				'COMUNA' => 2,
				'ESE' => 2,
				'ZONA' => urlencode ( 'Nor – Occidental' ),
				'created_by' => 'admin',
				'created_at' => Carbon::now () 
		) );
		DB::table ( 'p_barrio' )->insert ( array (
		        'CODIGO_BARRIO' =>  219,
		        'CODIGO_MUNICIPIO' => 001,
				'NOMBRE' => urlencode ( 'BRISAS DE LOS ALAMOS' ),
				'COMUNA' => 2,
				'ESE' => 2,
				'ZONA' => urlencode ( 'Nor – Occidental' ),
				'created_by' => 'admin',
				'created_at' => Carbon::now () 
		) );

		DB::table ( 'p_barrio' )->insert ( array (
		        'CODIGO_BARRIO' =>  294,
		        'CODIGO_MUNICIPIO' => 001,
				'NOMBRE' => urlencode ( 'VIPASA' ),
				'COMUNA' => 2,
				'ESE' => 2,
				'ZONA' => urlencode ( 'Nor – Occidental' ),
				'created_by' => 'admin',
				'created_at' => Carbon::now () 
		) );
		DB::table ( 'p_barrio' )->insert ( array (
		        'CODIGO_BARRIO' =>  296,
		        'CODIGO_MUNICIPIO' => 001,
				'NOMBRE' => urlencode ( 'ALTOS DE MENGA' ),
				'COMUNA' => 2,
				'ESE' => 2,
				'ZONA' => urlencode ( 'Nor – Occidental' ),
				'created_by' => 'admin',
				'created_at' => Carbon::now () 
		) );
		DB::table ( 'p_barrio' )->insert ( array (
		        'CODIGO_BARRIO' =>  297,
		        'CODIGO_MUNICIPIO' => 001,
				'NOMBRE' => urlencode ( 'BATACLAN' ),
				'COMUNA' => 2,
				'ESE' => 2,
				'ZONA' => urlencode ( 'Nor – Occidental' ),
				'created_by' => 'admin',
				'created_at' => Carbon::now () 
		) );
		DB::table ( 'p_barrio' )->insert ( array (
		        'CODIGO_BARRIO' =>  298,
		        'CODIGO_MUNICIPIO' => 001,
				'NOMBRE' => urlencode ( 'AREA PARQUE DEL AMOR' ),
				'COMUNA' => 2,
				'ESE' => 2,
				'ZONA' => urlencode ( 'Nor – Occidental' ),
				'created_by' => 'admin',
				'created_at' => Carbon::now () 
		) );
		DB::table ( 'p_barrio' )->insert ( array (
		        'CODIGO_BARRIO' =>  2972,
		        'CODIGO_MUNICIPIO' => 001,
				'NOMBRE' => urlencode ( 'SECTOR  ALTOS NORMANDIA' ),
				'COMUNA' => 2,
				'ESE' => 2,
				'ZONA' => urlencode ( 'Nor – Occidental' ),
				'created_by' => 'admin',
				'created_at' => Carbon::now () 
		) );
		
		/*COMUNA 3 CALI*/
		
		DB::table ( 'p_barrio' )->insert ( array (
		    'CODIGO_BARRIO' =>  301,
		    'CODIGO_MUNICIPIO' => 001,
		    'NOMBRE' => urlencode ( 'EL NACIONAL' ),
		    'COMUNA' => 3,
		    'ESE' => 1,
		    'ZONA' => urlencode ( 'Nor – Occidental' ),
		    'created_by' => 'admin',
		    'created_at' => Carbon::now ()
		) );
		DB::table ( 'p_barrio' )->insert ( array (
		    'CODIGO_BARRIO' =>  302,
		    'CODIGO_MUNICIPIO' => 001,
		    'NOMBRE' => urlencode ( 'EL PEÑON' ),
		    'COMUNA' => 3,
		    'ESE' => 1,
		    'ZONA' => urlencode ( 'Nor – Occidental' ),
		    'created_by' => 'admin',
		    'created_at' => Carbon::now ()
		) );
		DB::table ( 'p_barrio' )->insert ( array (
		    'CODIGO_BARRIO' =>  303,
		    'CODIGO_MUNICIPIO' => 001,
		    'NOMBRE' => urlencode ( 'SAN ANTONIO' ),
		    'COMUNA' => 3,
		    'ESE' => 1,
		    'ZONA' => urlencode ( 'Nor – Occidental' ),
		    'created_by' => 'admin',
		    'created_at' => Carbon::now ()
		) );
		DB::table ( 'p_barrio' )->insert ( array (
		    'CODIGO_BARRIO' =>  304,
		    'CODIGO_MUNICIPIO' => 001,
		    'NOMBRE' => urlencode ( 'SAN CAYETANO' ),
		    'COMUNA' => 3,
		    'ESE' => 1,
		    'ZONA' => urlencode ( 'Nor – Occidental' ),
		    'created_by' => 'admin',
		    'created_at' => Carbon::now ()
		) );
		DB::table ( 'p_barrio' )->insert ( array (
		    'CODIGO_BARRIO' =>  305,
		    'CODIGO_MUNICIPIO' => 001,
		    'NOMBRE' => urlencode ( 'LOS LIBERTADORES' ),
		    'COMUNA' => 3,
		    'ESE' => 1,
		    'ZONA' => urlencode ( 'Nor – Occidental' ),
		    'created_by' => 'admin',
		    'created_at' => Carbon::now ()
		) );
		DB::table ( 'p_barrio' )->insert ( array (
		    'CODIGO_BARRIO' =>  306,
		    'CODIGO_MUNICIPIO' => 001,
		    'NOMBRE' => urlencode ( 'SAN JUAN BOSCO' ),
		    'COMUNA' => 3,
		    'ESE' => 1,
		    'ZONA' => urlencode ( 'Nor – Occidental' ),
		    'created_by' => 'admin',
		    'created_at' => Carbon::now ()
		) );
		DB::table ( 'p_barrio' )->insert ( array (
		    'CODIGO_BARRIO' =>  307,
		    'CODIGO_MUNICIPIO' => 001,
		    'NOMBRE' => urlencode ( 'SANTA ROSA' ),
		    'COMUNA' => 3,
		    'ESE' => 1,
		    'ZONA' => urlencode ( 'Nor – Occidental' ),
		    'created_by' => 'admin',
		    'created_at' => Carbon::now ()
		) );
		DB::table ( 'p_barrio' )->insert ( array (
		    'CODIGO_BARRIO' =>  308,
		    'CODIGO_MUNICIPIO' => 001,
		    'NOMBRE' => urlencode ( 'LA MERCED' ),
		    'COMUNA' => 3,
		    'ESE' => 1,
		    'ZONA' => urlencode ( 'Nor – Occidental' ),
		    'created_by' => 'admin',
		    'created_at' => Carbon::now ()
		) );
		DB::table ( 'p_barrio' )->insert ( array (
		    'CODIGO_BARRIO' =>  309,
		    'CODIGO_MUNICIPIO' => 001,
		    'NOMBRE' => urlencode ( 'SAN PASCUAL' ),
		    'COMUNA' => 3,
		    'ESE' => 1,
		    'ZONA' => urlencode ( 'Nor – Occidental' ),
		    'created_by' => 'admin',
		    'created_at' => Carbon::now ()
		) );
		DB::table ( 'p_barrio' )->insert ( array (
		    'CODIGO_BARRIO' =>  310,
		    'CODIGO_MUNICIPIO' => 001,
		    'NOMBRE' => urlencode ( 'EL CALVARIO' ),
		    'COMUNA' => 3,
		    'ESE' => 1,
		    'ZONA' => urlencode ( 'Nor – Occidental' ),
		    'created_by' => 'admin',
		    'created_at' => Carbon::now ()
		) );
		DB::table ( 'p_barrio' )->insert ( array (
		    'CODIGO_BARRIO' =>  311,
		    'CODIGO_MUNICIPIO' => 001,
		    'NOMBRE' => urlencode ( 'SAN PEDRO' ),
		    'COMUNA' => 3,
		    'ESE' => 1,
		    'ZONA' => urlencode ( 'Nor – Occidental' ),
		    'created_by' => 'admin',
		    'created_at' => Carbon::now ()
		) );
		DB::table ( 'p_barrio' )->insert ( array (
		    'CODIGO_BARRIO' =>  312,
		    'CODIGO_MUNICIPIO' => 001,
		    'NOMBRE' => urlencode ( 'SAN NICOLAS' ),
		    'COMUNA' => 3,
		    'ESE' => 1,
		    'ZONA' => urlencode ( 'Nor – Occidental' ),
		    'created_by' => 'admin',
		    'created_at' => Carbon::now ()
		) );
		DB::table ( 'p_barrio' )->insert ( array (
		    'CODIGO_BARRIO' =>  313,
		    'CODIGO_MUNICIPIO' => 001,
		    'NOMBRE' => urlencode ( 'EL HOYO' ),
		    'COMUNA' => 3,
		    'ESE' => 1,
		    'ZONA' => urlencode ( 'Nor – Occidental' ),
		    'created_by' => 'admin',
		    'created_at' => Carbon::now ()
		) );
		DB::table ( 'p_barrio' )->insert ( array (
		    'CODIGO_BARRIO' =>  314,
		    'CODIGO_MUNICIPIO' => 001,
		    'NOMBRE' => urlencode ( 'EL PILOTO' ),
		    'COMUNA' => 3,
		    'ESE' => 1,
		    'ZONA' => urlencode ( 'Nor – Occidental' ),
		    'created_by' => 'admin',
		    'created_at' => Carbon::now ()
		) );
		DB::table ( 'p_barrio' )->insert ( array (
		    'CODIGO_BARRIO' =>  315,
		    'CODIGO_MUNICIPIO' => 001,
		    'NOMBRE' => urlencode ( 'NAVARRO LA CHANCA' ),
		    'COMUNA' => 3,
		    'ESE' => 1,
		    'ZONA' => urlencode ( 'Nor – Occidental' ),
		    'created_by' => 'admin',
		    'created_at' => Carbon::now ()
		) );
		DB::table ( 'p_barrio' )->insert ( array (
		    'CODIGO_BARRIO' =>  316,
		    'CODIGO_MUNICIPIO' => 001,
		    'NOMBRE' => urlencode ( 'ACUEDUCTO SAN ANTONIO' ),
		    'COMUNA' => 3,
		    'ESE' => 1,
		    'ZONA' => urlencode ( 'Nor – Occidental' ),
		    'created_by' => 'admin',
		    'created_at' => Carbon::now ()
		) );
		
		/*Comuna 4*/
		
		DB::table ( 'p_barrio' )->insert ( array (
		    'CODIGO_BARRIO' =>  401,
		    'CODIGO_MUNICIPIO' => 001,
		    'NOMBRE' => urlencode ( 'JORGE ISAACS' ),
		    'COMUNA' => 4,
		    'ESE' => 2,
		    'ZONA' => urlencode ( 'Nor – Oriente' ),
		    'created_by' => 'admin',
		    'created_at' => Carbon::now ()
		) );
		DB::table ( 'p_barrio' )->insert ( array (
		    'CODIGO_BARRIO' =>  402,
		    'CODIGO_MUNICIPIO' => 001,
		    'NOMBRE' => urlencode ( 'SANTANDER' ),
		    'COMUNA' => 4,
		    'ESE' => 2,
		    'ZONA' => urlencode ( 'Nor – Oriente' ),
		    'created_by' => 'admin',
		    'created_at' => Carbon::now ()
		) );
		DB::table ( 'p_barrio' )->insert ( array (
		    'CODIGO_BARRIO' =>  403,
		    'CODIGO_MUNICIPIO' => 001,
		    'NOMBRE' => urlencode ( 'PORVENIR' ),
		    'COMUNA' => 4,
		    'ESE' => 2,
		    'ZONA' => urlencode ( 'Nor – Oriente' ),
		    'created_by' => 'admin',
		    'created_at' => Carbon::now ()
		) );
		DB::table ( 'p_barrio' )->insert ( array (
		    'CODIGO_BARRIO' =>  404,
		    'CODIGO_MUNICIPIO' => 001,
		    'NOMBRE' => urlencode ( 'LAS DELICIAS' ),
		    'COMUNA' => 4,
		    'ESE' => 2,
		    'ZONA' => urlencode ( 'Nor – Oriente' ),
		    'created_by' => 'admin',
		    'created_at' => Carbon::now ()
		) );
		DB::table ( 'p_barrio' )->insert ( array (
		    'CODIGO_BARRIO' =>  405,
		    'CODIGO_MUNICIPIO' => 001,
		    'NOMBRE' => urlencode ( 'MANZANARES' ),
		    'COMUNA' => 4,
		    'ESE' => 2,
		    'ZONA' => urlencode ( 'Nor – Oriente' ),
		    'created_by' => 'admin',
		    'created_at' => Carbon::now ()
		) );
		DB::table ( 'p_barrio' )->insert ( array (
		    'CODIGO_BARRIO' =>  406,
		    'CODIGO_MUNICIPIO' => 001,
		    'NOMBRE' => urlencode ( 'SALOMIA' ),
		    'COMUNA' => 4,
		    'ESE' => 2,
		    'ZONA' => urlencode ( 'Nor – Oriente' ),
		    'created_by' => 'admin',
		    'created_at' => Carbon::now ()
		) );
		DB::table ( 'p_barrio' )->insert ( array (
		    'CODIGO_BARRIO' =>  407,
		    'CODIGO_MUNICIPIO' => 001,
		    'NOMBRE' => urlencode ( 'FATIMA' ),
		    'COMUNA' => 4,
		    'ESE' => 2,
		    'ZONA' => urlencode ( 'Nor – Oriente' ),
		    'created_by' => 'admin',
		    'created_at' => Carbon::now ()
		) );
		DB::table ( 'p_barrio' )->insert ( array (
		    'CODIGO_BARRIO' =>  408,
		    'CODIGO_MUNICIPIO' => 001,
		    'NOMBRE' => urlencode ( 'SULTANA - BERLIN' ),
		    'COMUNA' => 4,
		    'ESE' => 2,
		    'ZONA' => urlencode ( 'Nor – Oriente' ),
		    'created_by' => 'admin',
		    'created_at' => Carbon::now ()
		) );
		DB::table ( 'p_barrio' )->insert ( array (
		    'CODIGO_BARRIO' =>  409,
		    'CODIGO_MUNICIPIO' => 001,
		    'NOMBRE' => urlencode ( 'SAN FRANCISCO' ),
		    'COMUNA' => 4,
		    'ESE' => 2,
		    'ZONA' => urlencode ( 'Nor – Oriente' ),
		    'created_by' => 'admin',
		    'created_at' => Carbon::now ()
		) );
		DB::table ( 'p_barrio' )->insert ( array (
		    'CODIGO_BARRIO' =>  410,
		    'CODIGO_MUNICIPIO' => 001,
		    'NOMBRE' => urlencode ( 'POPULAR' ),
		    'COMUNA' => 4,
		    'ESE' => 2,
		    'ZONA' => urlencode ( 'Nor – Oriente' ),
		    'created_by' => 'admin',
		    'created_at' => Carbon::now ()
		) );
		DB::table ( 'p_barrio' )->insert ( array (
		    'CODIGO_BARRIO' =>  411,
		    'CODIGO_MUNICIPIO' => 001,
		    'NOMBRE' => urlencode ( 'IGNACIO RENGIFO' ),
		    'COMUNA' => 4,
		    'ESE' => 2,
		    'ZONA' => urlencode ( 'Nor – Oriente' ),
		    'created_by' => 'admin',
		    'created_at' => Carbon::now ()
		) );
		DB::table ( 'p_barrio' )->insert ( array (
		    'CODIGO_BARRIO' =>  412,
		    'CODIGO_MUNICIPIO' => 001,
		    'NOMBRE' => urlencode ( 'GUILLERMO VALENCIA' ),
		    'COMUNA' => 4,
		    'ESE' => 2,
		    'ZONA' => urlencode ( 'Nor – Oriente' ),
		    'created_by' => 'admin',
		    'created_at' => Carbon::now ()
		) );
		DB::table ( 'p_barrio' )->insert ( array (
		    'CODIGO_BARRIO' =>  413,
		    'CODIGO_MUNICIPIO' => 001,
		    'NOMBRE' => urlencode ( 'LA ISLA' ),
		    'COMUNA' => 4,
		    'ESE' => 2,
		    'ZONA' => urlencode ( 'Nor – Oriente' ),
		    'created_by' => 'admin',
		    'created_at' => Carbon::now ()
		) );
		DB::table ( 'p_barrio' )->insert ( array (
		    'CODIGO_BARRIO' =>  414,
		    'CODIGO_MUNICIPIO' => 001,
		    'NOMBRE' => urlencode ( 'MARCO FIDEL SUAREZ' ),
		    'COMUNA' => 4,
		    'ESE' => 2,
		    'ZONA' => urlencode ( 'Nor – Oriente' ),
		    'created_by' => 'admin',
		    'created_at' => Carbon::now ()
		) );
		DB::table ( 'p_barrio' )->insert ( array (
		    'CODIGO_BARRIO' =>  415,
		    'CODIGO_MUNICIPIO' => 001,
		    'NOMBRE' => urlencode ( 'EVARISTO GARCIA' ),
		    'COMUNA' => 4,
		    'ESE' => 2,
		    'ZONA' => urlencode ( 'Nor – Oriente' ),
		    'created_by' => 'admin',
		    'created_at' => Carbon::now ()
		) );
		DB::table ( 'p_barrio' )->insert ( array (
		    'CODIGO_BARRIO' =>  416,
		    'CODIGO_MUNICIPIO' => 001,
		    'NOMBRE' => urlencode ( 'LA ESMERALDA' ),
		    'COMUNA' => 4,
		    'ESE' => 2,
		    'ZONA' => urlencode ( 'Nor – Oriente' ),
		    'created_by' => 'admin',
		    'created_at' => Carbon::now ()
		) );
		DB::table ( 'p_barrio' )->insert ( array (
		    'CODIGO_BARRIO' =>  417,
		    'CODIGO_MUNICIPIO' => 001,
		    'NOMBRE' => urlencode ( 'BOLIVARIANO' ),
		    'COMUNA' => 4,
		    'ESE' => 2,
		    'ZONA' => urlencode ( 'Nor – Oriente' ),
		    'created_by' => 'admin',
		    'created_at' => Carbon::now ()
		) );
		DB::table ( 'p_barrio' )->insert ( array (
		    'CODIGO_BARRIO' =>  418,
		    'CODIGO_MUNICIPIO' => 001,
		    'NOMBRE' => urlencode ( 'OLAYA HERRERA' ),
		    'COMUNA' => 4,
		    'ESE' => 2,
		    'ZONA' => urlencode ( 'Nor – Oriente' ),
		    'created_by' => 'admin',
		    'created_at' => Carbon::now ()
		) );
		DB::table ( 'p_barrio' )->insert ( array (
		    'CODIGO_BARRIO' =>  419,
		    'CODIGO_MUNICIPIO' => 001,
		    'NOMBRE' => urlencode ( 'BUENO MADRID' ),
		    'COMUNA' => 4,
		    'ESE' => 2,
		    'ZONA' => urlencode ( 'Nor – Oriente' ),
		    'created_by' => 'admin',
		    'created_at' => Carbon::now ()
		) );
		DB::table ( 'p_barrio' )->insert ( array (
		    'CODIGO_BARRIO' =>  420,
		    'CODIGO_MUNICIPIO' => 001,
		    'NOMBRE' => urlencode ( 'FLORA INDUSTRIAL' ),
		    'COMUNA' => 4,
		    'ESE' => 2,
		    'ZONA' => urlencode ( 'Nor – Oriente' ),
		    'created_by' => 'admin',
		    'created_at' => Carbon::now ()
		) );
		DB::table ( 'p_barrio' )->insert ( array (
		    'CODIGO_BARRIO' =>  421,
		    'CODIGO_MUNICIPIO' => 001,
		    'NOMBRE' => urlencode ( 'CALIMA' ),
		    'COMUNA' => 4,
		    'ESE' => 2,
		    'ZONA' => urlencode ( 'Nor – Oriente' ),
		    'created_by' => 'admin',
		    'created_at' => Carbon::now ()
		) );
		DB::table ( 'p_barrio' )->insert ( array (
		    'CODIGO_BARRIO' =>  422,
		    'CODIGO_MUNICIPIO' => 001,
		    'NOMBRE' => urlencode ( 'CALIMA LA 14' ),
		    'COMUNA' => 4,
		    'ESE' => 2,
		    'ZONA' => urlencode ( 'Nor – Oriente' ),
		    'created_by' => 'admin',
		    'created_at' => Carbon::now ()
		) );
		DB::table ( 'p_barrio' )->insert ( array (
		    'CODIGO_BARRIO' =>  423,
		    'CODIGO_MUNICIPIO' => 001,
		    'NOMBRE' => urlencode ( 'INDUSTRIA DE LICORES' ),
		    'COMUNA' => 4,
		    'ESE' => 2,
		    'ZONA' => urlencode ( 'Nor – Oriente' ),
		    'created_by' => 'admin',
		    'created_at' => Carbon::now ()
		) );
		DB::table ( 'p_barrio' )->insert ( array (
		    'CODIGO_BARRIO' =>  497,
		    'CODIGO_MUNICIPIO' => 001,
		    'NOMBRE' => urlencode ( 'LA ALIANZA' ),
		    'COMUNA' => 4,
		    'ESE' => 2,
		    'ZONA' => urlencode ( 'Nor – Oriente' ),
		    'created_by' => 'admin',
		    'created_at' => Carbon::now ()
		) );
		DB::table ( 'p_barrio' )->insert ( array (
		    'CODIGO_BARRIO' =>  499,
		    'CODIGO_MUNICIPIO' => 001,
		    'NOMBRE' => urlencode ( 'INV. CAMILO TORRES' ),
		    'COMUNA' => 4,
		    'ESE' => 2,
		    'ZONA' => urlencode ( 'Nor – Oriente' ),
		    'created_by' => 'admin',
		    'created_at' => Carbon::now ()
		) );
		
		/*COMUNA 5 cali*/
		DB::table ( 'p_barrio' )->insert ( array (
		    'CODIGO_BARRIO' =>  501,
		    'CODIGO_MUNICIPIO' => 001,
		    'NOMBRE' => urlencode ( 'EL SENA' ),
		    'COMUNA' => 5,
		    'ESE' => 2,
		    'ZONA' => urlencode ( 'Nor – Oriente' ),
		    'created_by' => 'admin',
		    'created_at' => Carbon::now ()
		) );
		DB::table ( 'p_barrio' )->insert ( array (
		    'CODIGO_BARRIO' =>  502,
		    'CODIGO_MUNICIPIO' => 001,
		    'NOMBRE' => urlencode ( 'LOS ANDES' ),
		    'COMUNA' => 5,
		    'ESE' => 2,
		    'ZONA' => urlencode ( 'Nor – Oriente' ),
		    'created_by' => 'admin',
		    'created_at' => Carbon::now ()
		) );
		DB::table ( 'p_barrio' )->insert ( array (
		    'CODIGO_BARRIO' =>  503,
		    'CODIGO_MUNICIPIO' => 001,
		    'NOMBRE' => urlencode ( 'LOS GUAYACANES' ),
		    'COMUNA' => 5,
		    'ESE' => 2,
		    'ZONA' => urlencode ( 'Nor – Oriente' ),
		    'created_by' => 'admin',
		    'created_at' => Carbon::now ()
		) );
		DB::table ( 'p_barrio' )->insert ( array (
		    'CODIGO_BARRIO' =>  504,
		    'CODIGO_MUNICIPIO' => 001,
		    'NOMBRE' => urlencode ( 'CHIMINANGOS  SEGUNDA ETAPA' ),
		    'COMUNA' => 5,
		    'ESE' => 2,
		    'ZONA' => urlencode ( 'Nor – Oriente' ),
		    'created_by' => 'admin',
		    'created_at' => Carbon::now ()
		) );
		DB::table ( 'p_barrio' )->insert ( array (
		    'CODIGO_BARRIO' =>  505,
		    'CODIGO_MUNICIPIO' => 001,
		    'NOMBRE' => urlencode ( 'CHIMINANGOS PRIMERA ETAPA' ),
		    'COMUNA' => 5,
		    'ESE' => 2,
		    'ZONA' => urlencode ( 'Nor – Oriente' ),
		    'created_by' => 'admin',
		    'created_at' => Carbon::now ()
		) );
		DB::table ( 'p_barrio' )->insert ( array (
		    'CODIGO_BARRIO' =>  506,
		    'CODIGO_MUNICIPIO' => 001,
		    'NOMBRE' => urlencode ( 'METROPOLITANO DEL NORTE' ),
		    'COMUNA' => 5,
		    'ESE' => 2,
		    'ZONA' => urlencode ( 'Nor – Oriente' ),
		    'created_by' => 'admin',
		    'created_at' => Carbon::now ()
		) );
		DB::table ( 'p_barrio' )->insert ( array (
		    'CODIGO_BARRIO' =>  507,
		    'CODIGO_MUNICIPIO' => 001,
		    'NOMBRE' => urlencode ( 'VILLA DE VERACRUZ' ),
		    'COMUNA' => 5,
		    'ESE' => 2,
		    'ZONA' => urlencode ( 'Nor – Oriente' ),
		    'created_by' => 'admin',
		    'created_at' => Carbon::now ()
		) );
		DB::table ( 'p_barrio' )->insert ( array (
		    'CODIGO_BARRIO' =>  508,
		    'CODIGO_MUNICIPIO' => 001,
		    'NOMBRE' => urlencode ( 'PALMERAS  DEL NORTE' ),
		    'COMUNA' => 5,
		    'ESE' => 2,
		    'ZONA' => urlencode ( 'Nor – Oriente' ),
		    'created_by' => 'admin',
		    'created_at' => Carbon::now ()
		) );
		DB::table ( 'p_barrio' )->insert ( array (
		    'CODIGO_BARRIO' =>  594,
		    'CODIGO_MUNICIPIO' => 001,
		    'NOMBRE' => urlencode ( 'LOS PARQUES BARRANQUILLA' ),
		    'COMUNA' => 5,
		    'ESE' => 2,
		    'ZONA' => urlencode ( 'Nor – Oriente' ),
		    'created_by' => 'admin',
		    'created_at' => Carbon::now ()
		) );
		DB::table ( 'p_barrio' )->insert ( array (
		    'CODIGO_BARRIO' =>  595,
		    'CODIGO_MUNICIPIO' => 001,
		    'NOMBRE' => urlencode ( 'VILLA DEL SOL' ),
		    'COMUNA' => 5,
		    'ESE' => 2,
		    'ZONA' => urlencode ( 'Nor – Oriente' ),
		    'created_by' => 'admin',
		    'created_at' => Carbon::now ()
		) );
		DB::table ( 'p_barrio' )->insert ( array (
		    'CODIGO_BARRIO' =>  596,
		    'CODIGO_MUNICIPIO' => 001,
		    'NOMBRE' => urlencode ( 'PASEO DE LOS ALMENDROS' ),
		    'COMUNA' => 5,
		    'ESE' => 2,
		    'ZONA' => urlencode ( 'Nor – Oriente' ),
		    'created_by' => 'admin',
		    'created_at' => Carbon::now ()
		) );
		DB::table ( 'p_barrio' )->insert ( array (
		    'CODIGO_BARRIO' =>  597,
		    'CODIGO_MUNICIPIO' => 001,
		    'NOMBRE' => urlencode ( 'EL SAMAM' ),
		    'COMUNA' => 5,
		    'ESE' => 2,
		    'ZONA' => urlencode ( 'Nor – Oriente' ),
		    'created_by' => 'admin',
		    'created_at' => Carbon::now ()
		) );
		DB::table ( 'p_barrio' )->insert ( array (
		    'CODIGO_BARRIO' =>  598,
		    'CODIGO_MUNICIPIO' => 001,
		    'NOMBRE' => urlencode ( 'TORRES DE COMFANDI' ),
		    'COMUNA' => 5,
		    'ESE' => 2,
		    'ZONA' => urlencode ( 'Nor – Oriente' ),
		    'created_by' => 'admin',
		    'created_at' => Carbon::now ()
		) );
		DB::table ( 'p_barrio' )->insert ( array (
		    'CODIGO_BARRIO' =>  599,
		    'CODIGO_MUNICIPIO' => 001,
		    'NOMBRE' => urlencode ( 'EL GUABITO' ),
		    'COMUNA' => 5,
		    'ESE' => 2,
		    'ZONA' => urlencode ( 'Nor – Oriente' ),
		    'created_by' => 'admin',
		    'created_at' => Carbon::now ()
		) );
		DB::table ( 'p_barrio' )->insert ( array (
		    'CODIGO_BARRIO' =>  5061,
		    'CODIGO_MUNICIPIO' => 001,
		    'NOMBRE' => urlencode ( 'PLAZAS VERDES' ),
		    'COMUNA' => 5,
		    'ESE' => 2,
		    'ZONA' => urlencode ( 'Nor – Oriente' ),
		    'created_by' => 'admin',
		    'created_at' => Carbon::now ()
		) );
		DB::table ( 'p_barrio' )->insert ( array (
		    'CODIGO_BARRIO' =>  5971,
		    'CODIGO_MUNICIPIO' => 001,
		    'NOMBRE' => urlencode ( 'LA RIVERA' ),
		    'COMUNA' => 5,
		    'ESE' => 2,
		    'ZONA' => urlencode ( 'Nor – Oriente' ),
		    'created_by' => 'admin',
		    'created_at' => Carbon::now ()
		) );
		DB::table ( 'p_barrio' )->insert ( array (
		    'CODIGO_BARRIO' =>  5991,
		    'CODIGO_MUNICIPIO' => 001,
		    'NOMBRE' => urlencode ( 'VILLA DEL PRADO' ),
		    'COMUNA' => 5,
		    'ESE' => 2,
		    'ZONA' => urlencode ( 'Nor – Oriente' ),
		    'created_by' => 'admin',
		    'created_at' => Carbon::now ()
		) );
		/* COMUNA 6 CALI  */
		
		DB::table ( 'p_barrio' )->insert ( array (
		    'CODIGO_BARRIO' =>  601,
		    'CODIGO_MUNICIPIO' => 001,
		    'NOMBRE' => urlencode ( 'SAN LUIS I' ),
		    'COMUNA' => 6,
		    'ESE' => 2,
		    'ZONA' => urlencode ( 'Nor – Oriente' ),
		    'created_by' => 'admin',
		    'created_at' => Carbon::now ()
		) );
		DB::table ( 'p_barrio' )->insert ( array (
		    'CODIGO_BARRIO' =>  602,
		    'CODIGO_MUNICIPIO' => 001,
		    'NOMBRE' => urlencode ( 'JORGE ELIECER GAITAN' ),
		    'COMUNA' => 6,
		    'ESE' => 2,
		    'ZONA' => urlencode ( 'Nor – Oriente' ),
		    'created_by' => 'admin',
		    'created_at' => Carbon::now ()
		) );
		DB::table ( 'p_barrio' )->insert ( array (
		    'CODIGO_BARRIO' =>  603,
		    'CODIGO_MUNICIPIO' => 001,
		    'NOMBRE' => urlencode ( 'PASO DEL COMERCIO' ),
		    'COMUNA' => 6,
		    'ESE' => 2,
		    'ZONA' => urlencode ( 'Nor – Oriente' ),
		    'created_by' => 'admin',
		    'created_at' => Carbon::now ()
		) );
		DB::table ( 'p_barrio' )->insert ( array (
		    'CODIGO_BARRIO' =>  604,
		    'CODIGO_MUNICIPIO' => 001,
		    'NOMBRE' => urlencode ( 'LOS ALCAZARES' ),
		    'COMUNA' => 6,
		    'ESE' => 2,
		    'ZONA' => urlencode ( 'Nor – Oriente' ),
		    'created_by' => 'admin',
		    'created_at' => Carbon::now ()
		) );
		DB::table ( 'p_barrio' )->insert ( array (
		    'CODIGO_BARRIO' =>  605,
		    'CODIGO_MUNICIPIO' => 001,
		    'NOMBRE' => urlencode ( 'PETECUY PRIMERA ETAPA' ),
		    'COMUNA' => 6,
		    'ESE' => 2,
		    'ZONA' => urlencode ( 'Nor – Oriente' ),
		    'created_by' => 'admin',
		    'created_at' => Carbon::now ()
		) );
		DB::table ( 'p_barrio' )->insert ( array (
		    'CODIGO_BARRIO' =>  606,
		    'CODIGO_MUNICIPIO' => 001,
		    'NOMBRE' => urlencode ( 'PETECUY SEGUNDA ETAPA' ),
		    'COMUNA' => 6,
		    'ESE' => 2,
		    'ZONA' => urlencode ( 'Nor – Oriente' ),
		    'created_by' => 'admin',
		    'created_at' => Carbon::now ()
		) );
		DB::table ( 'p_barrio' )->insert ( array (
		    'CODIGO_BARRIO' =>  607,
		    'CODIGO_MUNICIPIO' => 001,
		    'NOMBRE' => urlencode ( 'LA RIVERA 1' ),
		    'COMUNA' => 6,
		    'ESE' => 2,
		    'ZONA' => urlencode ( 'Nor – Oriente' ),
		    'created_by' => 'admin',
		    'created_at' => Carbon::now ()
		) );
		DB::table ( 'p_barrio' )->insert ( array (
		    'CODIGO_BARRIO' =>  608,
		    'CODIGO_MUNICIPIO' => 001,
		    'NOMBRE' => urlencode ( 'LOS GUADUALES' ),
		    'COMUNA' => 6,
		    'ESE' => 2,
		    'ZONA' => urlencode ( 'Nor – Oriente' ),
		    'created_by' => 'admin',
		    'created_at' => Carbon::now ()
		) );
		DB::table ( 'p_barrio' )->insert ( array (
		    'CODIGO_BARRIO' =>  609,
		    'CODIGO_MUNICIPIO' => 001,
		    'NOMBRE' => urlencode ( 'PETECUY TERCERA ETAPA' ),
		    'COMUNA' => 6,
		    'ESE' => 2,
		    'ZONA' => urlencode ( 'Nor – Oriente' ),
		    'created_by' => 'admin',
		    'created_at' => Carbon::now ()
		) );
		DB::table ( 'p_barrio' )->insert ( array (
		    'CODIGO_BARRIO' =>  610,
		    'CODIGO_MUNICIPIO' => 001,
		    'NOMBRE' => urlencode ( 'CIUDADELA FLORALIA' ),
		    'COMUNA' => 6,
		    'ESE' => 2,
		    'ZONA' => urlencode ( 'Nor – Oriente' ),
		    'created_by' => 'admin',
		    'created_at' => Carbon::now ()
		) );
		DB::table ( 'p_barrio' )->insert ( array (
		    'CODIGO_BARRIO' =>  611,
		    'CODIGO_MUNICIPIO' => 001,
		    'NOMBRE' => urlencode ( 'OASIS DE COMFANDI' ),
		    'COMUNA' => 6,
		    'ESE' => 2,
		    'ZONA' => urlencode ( 'Nor – Oriente' ),
		    'created_by' => 'admin',
		    'created_at' => Carbon::now ()
		) );
		DB::table ( 'p_barrio' )->insert ( array (
		    'CODIGO_BARRIO' =>  612,
		    'CODIGO_MUNICIPIO' => 001,
		    'NOMBRE' => urlencode ( 'TEJARES DE SALOMIA' ),
		    'COMUNA' => 6,
		    'ESE' => 2,
		    'ZONA' => urlencode ( 'Nor – Oriente' ),
		    'created_by' => 'admin',
		    'created_at' => Carbon::now ()
		) );
		DB::table ( 'p_barrio' )->insert ( array (
		    'CODIGO_BARRIO' =>  694,
		    'CODIGO_MUNICIPIO' => 001,
		    'NOMBRE' => urlencode ( 'QUINTAS DE SALOMIA' ),
		    'COMUNA' => 6,
		    'ESE' => 2,
		    'ZONA' => urlencode ( 'Nor – Oriente' ),
		    'created_by' => 'admin',
		    'created_at' => Carbon::now ()
		) );
		DB::table ( 'p_barrio' )->insert ( array (
		    'CODIGO_BARRIO' =>  695,
		    'CODIGO_MUNICIPIO' => 001,
		    'NOMBRE' => urlencode ( 'FONAVIEMCALI' ),
		    'COMUNA' => 6,
		    'ESE' => 2,
		    'ZONA' => urlencode ( 'Nor – Oriente' ),
		    'created_by' => 'admin',
		    'created_at' => Carbon::now ()
		) );
		DB::table ( 'p_barrio' )->insert ( array (
		    'CODIGO_BARRIO' =>  696,
		    'CODIGO_MUNICIPIO' => 001,
		    'NOMBRE' => urlencode ( 'SAN LUIS II' ),
		    'COMUNA' => 6,
		    'ESE' => 2,
		    'ZONA' => urlencode ( 'Nor – Oriente' ),
		    'created_by' => 'admin',
		    'created_at' => Carbon::now ()
		) );
		DB::table ( 'p_barrio' )->insert ( array (
		    'CODIGO_BARRIO' =>  697,
		    'CODIGO_MUNICIPIO' => 001,
		    'NOMBRE' => urlencode ( 'CALIMIO NORTE' ),
		    'COMUNA' => 6,
		    'ESE' => 2,
		    'ZONA' => urlencode ( 'Nor – Oriente' ),
		    'created_by' => 'admin',
		    'created_at' => Carbon::now ()
		) );
		DB::table ( 'p_barrio' )->insert ( array (
		    'CODIGO_BARRIO' =>  698,
		    'CODIGO_MUNICIPIO' => 001,
		    'NOMBRE' => urlencode ( 'SECTOR PUENTE DEL COMERCIO' ),
		    'COMUNA' => 6,
		    'ESE' => 2,
		    'ZONA' => urlencode ( 'Nor – Oriente' ),
		    'created_by' => 'admin',
		    'created_at' => Carbon::now ()
		) );
		DB::table ( 'p_barrio' )->insert ( array (
		    'CODIGO_BARRIO' =>  699,
		    'CODIGO_MUNICIPIO' => 001,
		    'NOMBRE' => urlencode ( 'PORTAL DE COMFANDI' ),
		    'COMUNA' => 6,
		    'ESE' => 2,
		    'ZONA' => urlencode ( 'Nor – Oriente' ),
		    'created_by' => 'admin',
		    'created_at' => Carbon::now ()
		) );
		
		/*COMUNA 7 CALI*/
		DB::table ( 'p_barrio' )->insert ( array (
		    'CODIGO_BARRIO' =>  701,
		    'CODIGO_MUNICIPIO' => 001,
		    'NOMBRE' => urlencode ( 'ALFONSO LOPEZ 1 ETAPA' ),
		    'COMUNA' => 7,
		    'ESE' => 2,
		    'ZONA' => urlencode ( 'Nor – Oriente' ),
		    'created_by' => 'admin',
		    'created_at' => Carbon::now ()
		) );
		DB::table ( 'p_barrio' )->insert ( array (
		    'CODIGO_BARRIO' =>  702,
		    'CODIGO_MUNICIPIO' => 001,
		    'NOMBRE' => urlencode ( 'ALFONSO LOPEZ 2 ETAPA' ),
		    'COMUNA' => 7,
		    'ESE' => 2,
		    'ZONA' => urlencode ( 'Nor – Oriente' ),
		    'created_by' => 'admin',
		    'created_at' => Carbon::now ()
		) );
		DB::table ( 'p_barrio' )->insert ( array (
		    'CODIGO_BARRIO' =>  703,
		    'CODIGO_MUNICIPIO' => 001,
		    'NOMBRE' => urlencode ( 'ALFONSO LOPEZ 3 ETAPA' ),
		    'COMUNA' => 7,
		    'ESE' => 2,
		    'ZONA' => urlencode ( 'Nor – Oriente' ),
		    'created_by' => 'admin',
		    'created_at' => Carbon::now ()
		) );
		DB::table ( 'p_barrio' )->insert ( array (
		    'CODIGO_BARRIO' =>  704,
		    'CODIGO_MUNICIPIO' => 001,
		    'NOMBRE' => urlencode ( 'PUERTO NUEVO' ),
		    'COMUNA' => 7,
		    'ESE' => 2,
		    'ZONA' => urlencode ( 'Nor – Oriente' ),
		    'created_by' => 'admin',
		    'created_at' => Carbon::now ()
		) );
		DB::table ( 'p_barrio' )->insert ( array (
		    'CODIGO_BARRIO' =>  705,
		    'CODIGO_MUNICIPIO' => 001,
		    'NOMBRE' => urlencode ( 'PUERTO MALLARINO' ),
		    'COMUNA' => 7,
		    'ESE' => 2,
		    'ZONA' => urlencode ( 'Nor – Oriente' ),
		    'created_by' => 'admin',
		    'created_at' => Carbon::now ()
		) );
		DB::table ( 'p_barrio' )->insert ( array (
		    'CODIGO_BARRIO' =>  706,
		    'CODIGO_MUNICIPIO' => 001,
		    'NOMBRE' => urlencode ( 'ANDRES SANIN' ),
		    'COMUNA' => 7,
		    'ESE' => 2,
		    'ZONA' => urlencode ( 'Nor – Oriente' ),
		    'created_by' => 'admin',
		    'created_at' => Carbon::now ()
		) );
		DB::table ( 'p_barrio' )->insert ( array (
		    'CODIGO_BARRIO' =>  707,
		    'CODIGO_MUNICIPIO' => 001,
		    'NOMBRE' => urlencode ( 'SIETE DE AGOSTO' ),
		    'COMUNA' => 7,
		    'ESE' => 2,
		    'ZONA' => urlencode ( 'Nor – Oriente' ),
		    'created_by' => 'admin',
		    'created_at' => Carbon::now ()
		) );
		DB::table ( 'p_barrio' )->insert ( array (
		    'CODIGO_BARRIO' =>  708,
		    'CODIGO_MUNICIPIO' => 001,
		    'NOMBRE' => urlencode ( 'LOS PINOS' ),
		    'COMUNA' => 7,
		    'ESE' => 2,
		    'ZONA' => urlencode ( 'Nor – Oriente' ),
		    'created_by' => 'admin',
		    'created_at' => Carbon::now ()
		) );
		DB::table ( 'p_barrio' )->insert ( array (
		    'CODIGO_BARRIO' =>  709,
		    'CODIGO_MUNICIPIO' => 001,
		    'NOMBRE' => urlencode ( 'SAN MARINO' ),
		    'COMUNA' => 7,
		    'ESE' => 2,
		    'ZONA' => urlencode ( 'Nor – Oriente' ),
		    'created_by' => 'admin',
		    'created_at' => Carbon::now ()
		) );
		DB::table ( 'p_barrio' )->insert ( array (
		    'CODIGO_BARRIO' =>  710,
		    'CODIGO_MUNICIPIO' => 001,
		    'NOMBRE' => urlencode ( 'LAS CEIBAS' ),
		    'COMUNA' => 7,
		    'ESE' => 2,
		    'ZONA' => urlencode ( 'Nor – Oriente' ),
		    'created_by' => 'admin',
		    'created_at' => Carbon::now ()
		) );
		DB::table ( 'p_barrio' )->insert ( array (
		    'CODIGO_BARRIO' =>  711,
		    'CODIGO_MUNICIPIO' => 001,
		    'NOMBRE' => urlencode ( 'BASE AEREA' ),
		    'COMUNA' => 7,
		    'ESE' => 2,
		    'ZONA' => urlencode ( 'Nor – Oriente' ),
		    'created_by' => 'admin',
		    'created_at' => Carbon::now ()
		) );
		DB::table ( 'p_barrio' )->insert ( array (
		    'CODIGO_BARRIO' =>  712,
		    'CODIGO_MUNICIPIO' => 001,
		    'NOMBRE' => urlencode ( 'LAS VERANERAS' ),
		    'COMUNA' => 7,
		    'ESE' => 2,
		    'ZONA' => urlencode ( 'Nor – Oriente' ),
		    'created_by' => 'admin',
		    'created_at' => Carbon::now ()
		) );
		DB::table ( 'p_barrio' )->insert ( array (
		    'CODIGO_BARRIO' =>  713,
		    'CODIGO_MUNICIPIO' => 001,
		    'NOMBRE' => urlencode ( 'INV. CALIBELLA' ),
		    'COMUNA' => 7,
		    'ESE' => 2,
		    'ZONA' => urlencode ( 'Nor – Oriente' ),
		    'created_by' => 'admin',
		    'created_at' => Carbon::now ()
		) );
		DB::table ( 'p_barrio' )->insert ( array (
		    'CODIGO_BARRIO' =>  716,
		    'CODIGO_MUNICIPIO' => 001,
		    'NOMBRE' => urlencode ( 'INV. BRISAS DEL CAUCA' ),
		    'COMUNA' => 7,
		    'ESE' => 2,
		    'ZONA' => urlencode ( 'Nor – Oriente' ),
		    'created_by' => 'admin',
		    'created_at' => Carbon::now ()
		) );
		DB::table ( 'p_barrio' )->insert ( array (
		    'CODIGO_BARRIO' =>  790,
		    'CODIGO_MUNICIPIO' => 001,
		    'NOMBRE' => urlencode ( 'INV. LA PLAYITA' ),
		    'COMUNA' => 7,
		    'ESE' => 2,
		    'ZONA' => urlencode ( 'Nor – Oriente' ),
		    'created_by' => 'admin',
		    'created_at' => Carbon::now ()
		) );
		DB::table ( 'p_barrio' )->insert ( array (
		    'CODIGO_BARRIO' =>  797,
		    'CODIGO_MUNICIPIO' => 001,
		    'NOMBRE' => urlencode ( 'PARQUE DE LA CAÑA' ),
		    'COMUNA' => 7,
		    'ESE' => 2,
		    'ZONA' => urlencode ( 'Nor – Oriente' ),
		    'created_by' => 'admin',
		    'created_at' => Carbon::now ()
		) );
		DB::table ( 'p_barrio' )->insert ( array (
		    'CODIGO_BARRIO' =>  798,
		    'CODIGO_MUNICIPIO' => 001,
		    'NOMBRE' => urlencode ( 'FEPICOL' ),
		    'COMUNA' => 7,
		    'ESE' => 2,
		    'ZONA' => urlencode ( 'Nor – Oriente' ),
		    'created_by' => 'admin',
		    'created_at' => Carbon::now ()
		) );
		DB::table ( 'p_barrio' )->insert ( array (
		    'CODIGO_BARRIO' =>  7062,
		    'CODIGO_MUNICIPIO' => 001,
		    'NOMBRE' => urlencode ( 'EL ANGEL DEL HOGAR' ),
		    'COMUNA' => 7,
		    'ESE' => 2,
		    'ZONA' => urlencode ( 'Nor – Oriente' ),
		    'created_by' => 'admin',
		    'created_at' => Carbon::now ()
		) );
		
		/*Comuna 8*/
		
		DB::table ( 'p_barrio' )->insert ( array (
		    'CODIGO_BARRIO' =>  801,
		    'CODIGO_MUNICIPIO' => 001,
		    'NOMBRE' => urlencode ( 'PRIMITIVO  CRESPO' ),
		    'COMUNA' => 8,
		    'ESE' => 3,
		    'ZONA' => urlencode ( 'Nor – Oriente' ),
		    'created_by' => 'admin',
		    'created_at' => Carbon::now ()
		) );
		DB::table ( 'p_barrio' )->insert ( array (
		    'CODIGO_BARRIO' =>  802,
		    'CODIGO_MUNICIPIO' => 001,
		    'NOMBRE' => urlencode ( 'SIMON BOLIVAR' ),
		    'COMUNA' => 8,
		    'ESE' => 3,
		    'ZONA' => urlencode ( 'Nor – Oriente' ),
		    'created_by' => 'admin',
		    'created_at' => Carbon::now ()
		) );
		DB::table ( 'p_barrio' )->insert ( array (
		    'CODIGO_BARRIO' =>  803,
		    'CODIGO_MUNICIPIO' => 001,
		    'NOMBRE' => urlencode ( 'SAAVEDRA GALINDO' ),
		    'COMUNA' => 8,
		    'ESE' => 3,
		    'ZONA' => urlencode ( 'Nor – Oriente' ),
		    'created_by' => 'admin',
		    'created_at' => Carbon::now ()
		) );
		DB::table ( 'p_barrio' )->insert ( array (
		    'CODIGO_BARRIO' =>  804,
		    'CODIGO_MUNICIPIO' => 001,
		    'NOMBRE' => urlencode ( 'RAFAEL URIBE URIBE' ),
		    'COMUNA' => 8,
		    'ESE' => 3,
		    'ZONA' => urlencode ( 'Nor – Oriente' ),
		    'created_by' => 'admin',
		    'created_at' => Carbon::now ()
		) );
		DB::table ( 'p_barrio' )->insert ( array (
		    'CODIGO_BARRIO' =>  805,
		    'CODIGO_MUNICIPIO' => 001,
		    'NOMBRE' => urlencode ( 'SANTA MONICA POPULAR' ),
		    'COMUNA' => 8,
		    'ESE' => 3,
		    'ZONA' => urlencode ( 'Nor – Oriente' ),
		    'created_by' => 'admin',
		    'created_at' => Carbon::now ()
		) );
		DB::table ( 'p_barrio' )->insert ( array (
		    'CODIGO_BARRIO' =>  806,
		    'CODIGO_MUNICIPIO' => 001,
		    'NOMBRE' => urlencode ( 'LA FLORESTA' ),
		    'COMUNA' => 8,
		    'ESE' => 3,
		    'ZONA' => urlencode ( 'Nor – Oriente' ),
		    'created_by' => 'admin',
		    'created_at' => Carbon::now ()
		) );
		DB::table ( 'p_barrio' )->insert ( array (
		    'CODIGO_BARRIO' =>  807,
		    'CODIGO_MUNICIPIO' => 001,
		    'NOMBRE' => urlencode ( 'BENJAMIN HERRERA' ),
		    'COMUNA' => 8,
		    'ESE' => 3,
		    'ZONA' => urlencode ( 'Nor – Oriente' ),
		    'created_by' => 'admin',
		    'created_at' => Carbon::now ()
		) );
		DB::table ( 'p_barrio' )->insert ( array (
		    'CODIGO_BARRIO' =>  808,
		    'CODIGO_MUNICIPIO' => 001,
		    'NOMBRE' => urlencode ( 'MUNICIPAL' ),
		    'COMUNA' => 8,
		    'ESE' => 3,
		    'ZONA' => urlencode ( 'Nor – Oriente' ),
		    'created_by' => 'admin',
		    'created_at' => Carbon::now ()
		) );
		DB::table ( 'p_barrio' )->insert ( array (
		    'CODIGO_BARRIO' =>  809,
		    'CODIGO_MUNICIPIO' => 001,
		    'NOMBRE' => urlencode ( 'INDUSTRIAL' ),
		    'COMUNA' => 8,
		    'ESE' => 3,
		    'ZONA' => urlencode ( 'Nor – Oriente' ),
		    'created_by' => 'admin',
		    'created_at' => Carbon::now ()
		) );
		DB::table ( 'p_barrio' )->insert ( array (
		    'CODIGO_BARRIO' =>  810,
		    'CODIGO_MUNICIPIO' => 001,
		    'NOMBRE' => urlencode ( 'EL TRONCAL' ),
		    'COMUNA' => 8,
		    'ESE' => 3,
		    'ZONA' => urlencode ( 'Nor – Oriente' ),
		    'created_by' => 'admin',
		    'created_at' => Carbon::now ()
		) );
		DB::table ( 'p_barrio' )->insert ( array (
		    'CODIGO_BARRIO' =>  811,
		    'CODIGO_MUNICIPIO' => 001,
		    'NOMBRE' => urlencode ( 'LAS AMERICAS' ),
		    'COMUNA' => 8,
		    'ESE' => 3,
		    'ZONA' => urlencode ( 'Nor – Oriente' ),
		    'created_by' => 'admin',
		    'created_at' => Carbon::now ()
		) );
		DB::table ( 'p_barrio' )->insert ( array (
		    'CODIGO_BARRIO' =>  812,
		    'CODIGO_MUNICIPIO' => 001,
		    'NOMBRE' => urlencode ( 'ATANASIO GIRARDOT' ),
		    'COMUNA' => 8,
		    'ESE' => 3,
		    'ZONA' => urlencode ( 'Nor – Oriente' ),
		    'created_by' => 'admin',
		    'created_at' => Carbon::now ()
		) );
		DB::table ( 'p_barrio' )->insert ( array (
		    'CODIGO_BARRIO' =>  813,
		    'CODIGO_MUNICIPIO' => 001,
		    'NOMBRE' => urlencode ( 'SANTA FE' ),
		    'COMUNA' => 8,
		    'ESE' => 3,
		    'ZONA' => urlencode ( 'Nor – Oriente' ),
		    'created_by' => 'admin',
		    'created_at' => Carbon::now ()
		) );
		DB::table ( 'p_barrio' )->insert ( array (
		    'CODIGO_BARRIO' =>  814,
		    'CODIGO_MUNICIPIO' => 001,
		    'NOMBRE' => urlencode ( 'CHAPINERO' ),
		    'COMUNA' => 8,
		    'ESE' => 3,
		    'ZONA' => urlencode ( 'Nor – Oriente' ),
		    'created_by' => 'admin',
		    'created_at' => Carbon::now ()
		) );
		DB::table ( 'p_barrio' )->insert ( array (
		    'CODIGO_BARRIO' =>  815,
		    'CODIGO_MUNICIPIO' => 001,
		    'NOMBRE' => urlencode ( 'VILLA COLOMBIA' ),
		    'COMUNA' => 8,
		    'ESE' => 3,
		    'ZONA' => urlencode ( 'Nor – Oriente' ),
		    'created_by' => 'admin',
		    'created_at' => Carbon::now ()
		) );
		DB::table ( 'p_barrio' )->insert ( array (
		    'CODIGO_BARRIO' =>  816,
		    'CODIGO_MUNICIPIO' => 001,
		    'NOMBRE' => urlencode ( 'EL TREBOL' ),
		    'COMUNA' => 8,
		    'ESE' => 3,
		    'ZONA' => urlencode ( 'Nor – Oriente' ),
		    'created_by' => 'admin',
		    'created_at' => Carbon::now ()
		) );
		DB::table ( 'p_barrio' )->insert ( array (
		    'CODIGO_BARRIO' =>  817,
		    'CODIGO_MUNICIPIO' => 001,
		    'NOMBRE' => urlencode ( 'LA BASE' ),
		    'COMUNA' => 8,
		    'ESE' => 3,
		    'ZONA' => urlencode ( 'Nor – Oriente' ),
		    'created_by' => 'admin',
		    'created_at' => Carbon::now ()
		) );
		DB::table ( 'p_barrio' )->insert ( array (
		    'CODIGO_BARRIO' =>  818,
		    'CODIGO_MUNICIPIO' => 001,
		    'NOMBRE' => urlencode ( 'URBANIZACION LA BASE' ),
		    'COMUNA' => 8,
		    'ESE' => 3,
		    'ZONA' => urlencode ( 'Nor – Oriente' ),
		    'created_by' => 'admin',
		    'created_at' => Carbon::now ()
		) );
		/*Comuna 9 cali*/
		DB::table ( 'p_barrio' )->insert ( array (
		    'CODIGO_BARRIO' =>  901,
		    'CODIGO_MUNICIPIO' => 001,
		    'NOMBRE' => urlencode ( 'ALAMEDA' ),
		    'COMUNA' => 9,
		    'ESE' => 3,
		    'ZONA' => urlencode ( 'Nor – Occidental' ),
		    'created_by' => 'admin',
		    'created_at' => Carbon::now ()
		) );
		DB::table ( 'p_barrio' )->insert ( array (
		    'CODIGO_BARRIO' =>  902,
		    'CODIGO_MUNICIPIO' => 001,
		    'NOMBRE' => urlencode ( 'BRETAÑA' ),
		    'COMUNA' => 9,
		    'ESE' => 3,
		    'ZONA' => urlencode ( 'Nor – Occidental' ),
		    'created_by' => 'admin',
		    'created_at' => Carbon::now ()
		) );
		DB::table ( 'p_barrio' )->insert ( array (
		    'CODIGO_BARRIO' =>  903,
		    'CODIGO_MUNICIPIO' => 001,
		    'NOMBRE' => urlencode ( 'JUNIN' ),
		    'COMUNA' => 9,
		    'ESE' => 3,
		    'ZONA' => urlencode ( 'Nor – Occidental' ),
		    'created_by' => 'admin',
		    'created_at' => Carbon::now ()
		) );
		DB::table ( 'p_barrio' )->insert ( array (
		    'CODIGO_BARRIO' =>  904,
		    'CODIGO_MUNICIPIO' => 001,
		    'NOMBRE' => urlencode ( 'GUAYAQUIL' ),
		    'COMUNA' => 9,
		    'ESE' => 3,
		    'ZONA' => urlencode ( 'Nor – Occidental' ),
		    'created_by' => 'admin',
		    'created_at' => Carbon::now ()
		) );
		DB::table ( 'p_barrio' )->insert ( array (
		    'CODIGO_BARRIO' =>  905,
		    'CODIGO_MUNICIPIO' => 001,
		    'NOMBRE' => urlencode ( 'ARANJUEZ' ),
		    'COMUNA' => 9,
		    'ESE' => 3,
		    'ZONA' => urlencode ( 'Nor – Occidental' ),
		    'created_by' => 'admin',
		    'created_at' => Carbon::now ()
		) );
		DB::table ( 'p_barrio' )->insert ( array (
		    'CODIGO_BARRIO' =>  906,
		    'CODIGO_MUNICIPIO' => 001,
		    'NOMBRE' => urlencode ( 'MANUEL MARIA BUENVENTURA' ),
		    'COMUNA' => 9,
		    'ESE' => 3,
		    'ZONA' => urlencode ( 'Nor – Occidental' ),
		    'created_by' => 'admin',
		    'created_at' => Carbon::now ()
		) );
		DB::table ( 'p_barrio' )->insert ( array (
		    'CODIGO_BARRIO' =>  907,
		    'CODIGO_MUNICIPIO' => 001,
		    'NOMBRE' => urlencode ( 'SANTA MONICA BELALCAZAR' ),
		    'COMUNA' => 9,
		    'ESE' => 3,
		    'ZONA' => urlencode ( 'Nor – Occidental' ),
		    'created_by' => 'admin',
		    'created_at' => Carbon::now ()
		) );
		DB::table ( 'p_barrio' )->insert ( array (
		    'CODIGO_BARRIO' =>  908,
		    'CODIGO_MUNICIPIO' => 001,
		    'NOMBRE' => urlencode ( 'BELALCAZAR' ),
		    'COMUNA' => 9,
		    'ESE' => 3,
		    'ZONA' => urlencode ( 'Nor – Occidental' ),
		    'created_by' => 'admin',
		    'created_at' => Carbon::now ()
		) );
		DB::table ( 'p_barrio' )->insert ( array (
		    'CODIGO_BARRIO' =>  909,
		    'CODIGO_MUNICIPIO' => 001,
		    'NOMBRE' => urlencode ( 'SUCRE' ),
		    'COMUNA' => 9,
		    'ESE' => 3,
		    'ZONA' => urlencode ( 'Nor – Occidental' ),
		    'created_by' => 'admin',
		    'created_at' => Carbon::now ()
		) );
		DB::table ( 'p_barrio' )->insert ( array (
		    'CODIGO_BARRIO' =>  910,
		    'CODIGO_MUNICIPIO' => 001,
		    'NOMBRE' => urlencode ( 'BARRIO OBRERO' ),
		    'COMUNA' => 9,
		    'ESE' => 3,
		    'ZONA' => urlencode ( 'Nor – Occidental' ),
		    'created_by' => 'admin',
		    'created_at' => Carbon::now ()
		) );
		/*Comuna 10 Cali*/
		DB::table ( 'p_barrio' )->insert ( array (
		    'CODIGO_BARRIO' =>  1001,
		    'CODIGO_MUNICIPIO' => 001,
		    'NOMBRE' => urlencode ( 'EL DORADO' ),
		    'COMUNA' => 10,
		    'ESE' => 3,
		    'ZONA' => urlencode ( 'Sur' ),
		    'created_by' => 'admin',
		    'created_at' => Carbon::now ()
		) );
		DB::table ( 'p_barrio' )->insert ( array (
		    'CODIGO_BARRIO' =>  1003,
		    'CODIGO_MUNICIPIO' => 001,
		    'NOMBRE' => urlencode ( 'LA LIBERTAD' ),
		    'COMUNA' => 10,
		    'ESE' => 3,
		    'ZONA' => urlencode ( 'Sur' ),
		    'created_by' => 'admin',
		    'created_at' => Carbon::now ()
		) );
		DB::table ( 'p_barrio' )->insert ( array (
		    'CODIGO_BARRIO' =>  1005,
		    'CODIGO_MUNICIPIO' => 001,
		    'NOMBRE' => urlencode ( 'LAS ACACIAS' ),
		    'COMUNA' => 10,
		    'ESE' => 3,
		    'ZONA' => urlencode ( 'Sur' ),
		    'created_by' => 'admin',
		    'created_at' => Carbon::now ()
		) );
		DB::table ( 'p_barrio' )->insert ( array (
		    'CODIGO_BARRIO' =>  1006,
		    'CODIGO_MUNICIPIO' => 001,
		    'NOMBRE' => urlencode ( 'SANTO DOMINGO' ),
		    'COMUNA' => 10,
		    'ESE' => 3,
		    'ZONA' => urlencode ( 'Sur' ),
		    'created_by' => 'admin',
		    'created_at' => Carbon::now ()
		) );
		DB::table ( 'p_barrio' )->insert ( array (
		    'CODIGO_BARRIO' =>  1007,
		    'CODIGO_MUNICIPIO' => 001,
		    'NOMBRE' => urlencode ( 'JORGE ZAWADSKY' ),
		    'COMUNA' => 10,
		    'ESE' => 3,
		    'ZONA' => urlencode ( 'Sur' ),
		    'created_by' => 'admin',
		    'created_at' => Carbon::now ()
		) );
		DB::table ( 'p_barrio' )->insert ( array (
		    'CODIGO_BARRIO' =>  1008,
		    'CODIGO_MUNICIPIO' => 001,
		    'NOMBRE' => urlencode ( 'OLIMPICO' ),
		    'COMUNA' => 10,
		    'ESE' => 3,
		    'ZONA' => urlencode ( 'Sur' ),
		    'created_by' => 'admin',
		    'created_at' => Carbon::now ()
		) );
		DB::table ( 'p_barrio' )->insert ( array (
		    'CODIGO_BARRIO' =>  1009,
		    'CODIGO_MUNICIPIO' => 001,
		    'NOMBRE' => urlencode ( 'CRISTOBAL COLON' ),
		    'COMUNA' => 10,
		    'ESE' => 3,
		    'ZONA' => urlencode ( 'Sur' ),
		    'created_by' => 'admin',
		    'created_at' => Carbon::now ()
		) );
		DB::table ( 'p_barrio' )->insert ( array (
		    'CODIGO_BARRIO' =>  1010,
		    'CODIGO_MUNICIPIO' => 001,
		    'NOMBRE' => urlencode ( 'LA SELVA' ),
		    'COMUNA' => 10,
		    'ESE' => 3,
		    'ZONA' => urlencode ( 'Sur' ),
		    'created_by' => 'admin',
		    'created_at' => Carbon::now ()
		) );
		DB::table ( 'p_barrio' )->insert ( array (
		    'CODIGO_BARRIO' =>  1011,
		    'CODIGO_MUNICIPIO' => 001,
		    'NOMBRE' => urlencode ( 'DEPARTAMENTAL' ),
		    'COMUNA' => 10,
		    'ESE' => 3,
		    'ZONA' => urlencode ( 'Sur' ),
		    'created_by' => 'admin',
		    'created_at' => Carbon::now ()
		) );
		DB::table ( 'p_barrio' )->insert ( array (
		    'CODIGO_BARRIO' =>  1012,
		    'CODIGO_MUNICIPIO' => 001,
		    'NOMBRE' => urlencode ( 'PASOANCHO' ),
		    'COMUNA' => 10,
		    'ESE' => 3,
		    'ZONA' => urlencode ( 'Sur' ),
		    'created_by' => 'admin',
		    'created_at' => Carbon::now ()
		) );
		DB::table ( 'p_barrio' )->insert ( array (
		    'CODIGO_BARRIO' =>  1013,
		    'CODIGO_MUNICIPIO' => 001,
		    'NOMBRE' => urlencode ( 'PANAMERICANO' ),
		    'COMUNA' => 10,
		    'ESE' => 3,
		    'ZONA' => urlencode ( 'Sur' ),
		    'created_by' => 'admin',
		    'created_at' => Carbon::now ()
		) );
		DB::table ( 'p_barrio' )->insert ( array (
		    'CODIGO_BARRIO' =>  1014,
		    'CODIGO_MUNICIPIO' => 001,
		    'NOMBRE' => urlencode ( 'COLSEGUROS ANDES' ),
		    'COMUNA' => 10,
		    'ESE' => 3,
		    'ZONA' => urlencode ( 'Sur' ),
		    'created_by' => 'admin',
		    'created_at' => Carbon::now ()
		) );
		DB::table ( 'p_barrio' )->insert ( array (
		    'CODIGO_BARRIO' =>  1015,
		    'CODIGO_MUNICIPIO' => 001,
		    'NOMBRE' => urlencode ( 'SAN CRISTOBAL' ),
		    'COMUNA' => 10,
		    'ESE' => 3,
		    'ZONA' => urlencode ( 'Sur' ),
		    'created_by' => 'admin',
		    'created_at' => Carbon::now ()
		) );
		DB::table ( 'p_barrio' )->insert ( array (
		    'CODIGO_BARRIO' =>  1017,
		    'CODIGO_MUNICIPIO' => 001,
		    'NOMBRE' => urlencode ( 'SAN JUDAS TADEO I' ),
		    'COMUNA' => 10,
		    'ESE' => 3,
		    'ZONA' => urlencode ( 'Sur' ),
		    'created_by' => 'admin',
		    'created_at' => Carbon::now ()
		) );
		DB::table ( 'p_barrio' )->insert ( array (
		    'CODIGO_BARRIO' =>  1018,
		    'CODIGO_MUNICIPIO' => 001,
		    'NOMBRE' => urlencode ( 'SAN JUDAS TADEO II' ),
		    'COMUNA' => 10,
		    'ESE' => 3,
		    'ZONA' => urlencode ( 'Sur' ),
		    'created_by' => 'admin',
		    'created_at' => Carbon::now ()
		) );
		
		/*Comuna 11 Cali*/
		
		DB::table ( 'p_barrio' )->insert ( array (
		    'CODIGO_BARRIO' =>  1101,
		    'CODIGO_MUNICIPIO' => 001,
		    'NOMBRE' => urlencode ( 'SAN CARLOS' ),
		    'COMUNA' => 11,
		    'ESE' => 3,
		    'ZONA' => urlencode ( 'Oriente' ),
		    'created_by' => 'admin',
		    'created_at' => Carbon::now ()
		) );
		DB::table ( 'p_barrio' )->insert ( array (
		    'CODIGO_BARRIO' =>  1102,
		    'CODIGO_MUNICIPIO' => 001,
		    'NOMBRE' => urlencode ( 'MARACAIBO' ),
		    'COMUNA' => 11,
		    'ESE' => 3,
		    'ZONA' => urlencode ( 'Oriente' ),
		    'created_by' => 'admin',
		    'created_at' => Carbon::now ()
		) );
		DB::table ( 'p_barrio' )->insert ( array (
		    'CODIGO_BARRIO' =>  1103,
		    'CODIGO_MUNICIPIO' => 001,
		    'NOMBRE' => urlencode ( 'LA INDEPENDENCIA' ),
		    'COMUNA' => 11,
		    'ESE' => 3,
		    'ZONA' => urlencode ( 'Oriente' ),
		    'created_by' => 'admin',
		    'created_at' => Carbon::now ()
		) );
		DB::table ( 'p_barrio' )->insert ( array (
		    'CODIGO_BARRIO' =>  1104,
		    'CODIGO_MUNICIPIO' => 001,
		    'NOMBRE' => urlencode ( 'LA ESPERANZA' ),
		    'COMUNA' => 11,
		    'ESE' => 3,
		    'ZONA' => urlencode ( 'Oriente' ),
		    'created_by' => 'admin',
		    'created_at' => Carbon::now ()
		) );
		DB::table ( 'p_barrio' )->insert ( array (
		    'CODIGO_BARRIO' =>  1105,
		    'CODIGO_MUNICIPIO' => 001,
		    'NOMBRE' => urlencode ( 'BOYACA' ),
		    'COMUNA' => 11,
		    'ESE' => 3,
		    'ZONA' => urlencode ( 'Oriente' ),
		    'created_by' => 'admin',
		    'created_at' => Carbon::now ()
		) );
		DB::table ( 'p_barrio' )->insert ( array (
		    'CODIGO_BARRIO' =>  1106,
		    'CODIGO_MUNICIPIO' => 001,
		    'NOMBRE' => urlencode ( 'EL JARDIN' ),
		    'COMUNA' => 11,
		    'ESE' => 3,
		    'ZONA' => urlencode ( 'Oriente' ),
		    'created_by' => 'admin',
		    'created_at' => Carbon::now ()
		) );
		DB::table ( 'p_barrio' )->insert ( array (
		    'CODIGO_BARRIO' =>  1107,
		    'CODIGO_MUNICIPIO' => 001,
		    'NOMBRE' => urlencode ( 'LA FORTALEZA' ),
		    'COMUNA' => 11,
		    'ESE' => 3,
		    'ZONA' => urlencode ( 'Oriente' ),
		    'created_by' => 'admin',
		    'created_at' => Carbon::now ()
		) );
		DB::table ( 'p_barrio' )->insert ( array (
		    'CODIGO_BARRIO' =>  1108,
		    'CODIGO_MUNICIPIO' => 001,
		    'NOMBRE' => urlencode ( 'EL RECUERDO' ),
		    'COMUNA' => 11,
		    'ESE' => 3,
		    'ZONA' => urlencode ( 'Oriente' ),
		    'created_by' => 'admin',
		    'created_at' => Carbon::now ()
		) );
		DB::table ( 'p_barrio' )->insert ( array (
		    'CODIGO_BARRIO' =>  1109,
		    'CODIGO_MUNICIPIO' => 001,
		    'NOMBRE' => urlencode ( 'AGUABLANCA' ),
		    'COMUNA' => 11,
		    'ESE' => 3,
		    'ZONA' => urlencode ( 'Oriente' ),
		    'created_by' => 'admin',
		    'created_at' => Carbon::now ()
		) );
		DB::table ( 'p_barrio' )->insert ( array (
		    'CODIGO_BARRIO' =>  1110,
		    'CODIGO_MUNICIPIO' => 001,
		    'NOMBRE' => urlencode ( 'EL PRADO' ),
		    'COMUNA' => 11,
		    'ESE' => 3,
		    'ZONA' => urlencode ( 'Oriente' ),
		    'created_by' => 'admin',
		    'created_at' => Carbon::now ()
		) );
		DB::table ( 'p_barrio' )->insert ( array (
		    'CODIGO_BARRIO' =>  1111,
		    'CODIGO_MUNICIPIO' => 001,
		    'NOMBRE' => urlencode ( '20 DE JULIO' ),
		    'COMUNA' => 11,
		    'ESE' => 3,
		    'ZONA' => urlencode ( 'Oriente' ),
		    'created_by' => 'admin',
		    'created_at' => Carbon::now ()
		) );
		DB::table ( 'p_barrio' )->insert ( array (
		    'CODIGO_BARRIO' =>  1112,
		    'CODIGO_MUNICIPIO' => 001,
		    'NOMBRE' => urlencode ( 'PRADOS DE ORIENTE' ),
		    'COMUNA' => 11,
		    'ESE' => 3,
		    'ZONA' => urlencode ( 'Oriente' ),
		    'created_by' => 'admin',
		    'created_at' => Carbon::now ()
		) );
		DB::table ( 'p_barrio' )->insert ( array (
		    'CODIGO_BARRIO' =>  1113,
		    'CODIGO_MUNICIPIO' => 001,
		    'NOMBRE' => urlencode ( 'LOS SAUCES' ),
		    'COMUNA' => 11,
		    'ESE' => 3,
		    'ZONA' => urlencode ( 'Oriente' ),
		    'created_by' => 'admin',
		    'created_at' => Carbon::now ()
		) );
		DB::table ( 'p_barrio' )->insert ( array (
		    'CODIGO_BARRIO' =>  1114,
		    'CODIGO_MUNICIPIO' => 001,
		    'NOMBRE' => urlencode ( 'VILLA DEL SUR' ),
		    'COMUNA' => 11,
		    'ESE' => 3,
		    'ZONA' => urlencode ( 'Oriente' ),
		    'created_by' => 'admin',
		    'created_at' => Carbon::now ()
		) );
		DB::table ( 'p_barrio' )->insert ( array (
		    'CODIGO_BARRIO' =>  1115,
		    'CODIGO_MUNICIPIO' => 001,
		    'NOMBRE' => urlencode ( 'JOSE  HOLGUIN GARCES' ),
		    'COMUNA' => 11,
		    'ESE' => 3,
		    'ZONA' => urlencode ( 'Oriente' ),
		    'created_by' => 'admin',
		    'created_at' => Carbon::now ()
		) );
		DB::table ( 'p_barrio' )->insert ( array (
		    'CODIGO_BARRIO' =>  1116,
		    'CODIGO_MUNICIPIO' => 001,
		    'NOMBRE' => urlencode ( 'LEON XIII' ),
		    'COMUNA' => 11,
		    'ESE' => 3,
		    'ZONA' => urlencode ( 'Oriente' ),
		    'created_by' => 'admin',
		    'created_at' => Carbon::now ()
		) );
		DB::table ( 'p_barrio' )->insert ( array (
		    'CODIGO_BARRIO' =>  1117,
		    'CODIGO_MUNICIPIO' => 001,
		    'NOMBRE' => urlencode ( 'JOSE MARIA CORDOBA' ),
		    'COMUNA' => 11,
		    'ESE' => 3,
		    'ZONA' => urlencode ( 'Oriente' ),
		    'created_by' => 'admin',
		    'created_at' => Carbon::now ()
		) );
		DB::table ( 'p_barrio' )->insert ( array (
		    'CODIGO_BARRIO' =>  1118,
		    'CODIGO_MUNICIPIO' => 001,
		    'NOMBRE' => urlencode ( 'SAN PEDRO CLAVER' ),
		    'COMUNA' => 11,
		    'ESE' => 3,
		    'ZONA' => urlencode ( 'Oriente' ),
		    'created_by' => 'admin',
		    'created_at' => Carbon::now ()
		) );
		DB::table ( 'p_barrio' )->insert ( array (
		    'CODIGO_BARRIO' =>  1119,
		    'CODIGO_MUNICIPIO' => 001,
		    'NOMBRE' => urlencode ( 'LOS CONQUISTADORES' ),
		    'COMUNA' => 11,
		    'ESE' => 3,
		    'ZONA' => urlencode ( 'Oriente' ),
		    'created_by' => 'admin',
		    'created_at' => Carbon::now ()
		) );
		DB::table ( 'p_barrio' )->insert ( array (
		    'CODIGO_BARRIO' =>  1120,
		    'CODIGO_MUNICIPIO' => 001,
		    'NOMBRE' => urlencode ( 'LA GRAN COLOMBIA' ),
		    'COMUNA' => 11,
		    'ESE' => 3,
		    'ZONA' => urlencode ( 'Oriente' ),
		    'created_by' => 'admin',
		    'created_at' => Carbon::now ()
		) );
		DB::table ( 'p_barrio' )->insert ( array (
		    'CODIGO_BARRIO' =>  1121,
		    'CODIGO_MUNICIPIO' => 001,
		    'NOMBRE' => urlencode ( 'SAN BENITO' ),
		    'COMUNA' => 11,
		    'ESE' => 3,
		    'ZONA' => urlencode ( 'Oriente' ),
		    'created_by' => 'admin',
		    'created_at' => Carbon::now ()
		) );
		DB::table ( 'p_barrio' )->insert ( array (
		    'CODIGO_BARRIO' =>  1122,
		    'CODIGO_MUNICIPIO' => 001,
		    'NOMBRE' => urlencode ( 'PRIMAVERA' ),
		    'COMUNA' => 11,
		    'ESE' => 3,
		    'ZONA' => urlencode ( 'Oriente' ),
		    'created_by' => 'admin',
		    'created_at' => Carbon::now ()
		) );
		DB::table ( 'p_barrio' )->insert ( array (
		    'CODIGO_BARRIO' =>  11131,
		    'CODIGO_MUNICIPIO' => 001,
		    'NOMBRE' => urlencode ( 'CIUDAD MODELO' ),
		    'COMUNA' => 11,
		    'ESE' => 3,
		    'ZONA' => urlencode ( 'Oriente' ),
		    'created_by' => 'admin',
		    'created_at' => Carbon::now ()
		) );
		
		/*Comuna 12 cali*/
		
		DB::table ( 'p_barrio' )->insert ( array (
		    'CODIGO_BARRIO' =>  1201,
		    'CODIGO_MUNICIPIO' => 001,
		    'NOMBRE' => urlencode ( 'VILLANUEVA' ),
		    'COMUNA' => 12,
		    'ESE' => 3,
		    'ZONA' => urlencode ( 'Oriente' ),
		    'created_by' => 'admin',
		    'created_at' => Carbon::now ()
		) );
		DB::table ( 'p_barrio' )->insert ( array (
		    'CODIGO_BARRIO' =>  1202,
		    'CODIGO_MUNICIPIO' => 001,
		    'NOMBRE' => urlencode ( 'ASTURIAS' ),
		    'COMUNA' => 12,
		    'ESE' => 3,
		    'ZONA' => urlencode ( 'Oriente' ),
		    'created_by' => 'admin',
		    'created_at' => Carbon::now ()
		) );
		DB::table ( 'p_barrio' )->insert ( array (
		    'CODIGO_BARRIO' =>  1203,
		    'CODIGO_MUNICIPIO' => 001,
		    'NOMBRE' => urlencode ( 'EDUARDO SANTOS' ),
		    'COMUNA' => 12,
		    'ESE' => 3,
		    'ZONA' => urlencode ( 'Oriente' ),
		    'created_by' => 'admin',
		    'created_at' => Carbon::now ()
		) );
		DB::table ( 'p_barrio' )->insert ( array (
		    'CODIGO_BARRIO' =>  1204,
		    'CODIGO_MUNICIPIO' => 001,
		    'NOMBRE' => urlencode ( 'ALFONSO BARBERENA' ),
		    'COMUNA' => 12,
		    'ESE' => 3,
		    'ZONA' => urlencode ( 'Oriente' ),
		    'created_by' => 'admin',
		    'created_at' => Carbon::now ()
		) );
		DB::table ( 'p_barrio' )->insert ( array (
		    'CODIGO_BARRIO' =>  1205,
		    'CODIGO_MUNICIPIO' => 001,
		    'NOMBRE' => urlencode ( 'EL PARAISO' ),
		    'COMUNA' => 12,
		    'ESE' => 3,
		    'ZONA' => urlencode ( 'Oriente' ),
		    'created_by' => 'admin',
		    'created_at' => Carbon::now ()
		) );
		DB::table ( 'p_barrio' )->insert ( array (
		    'CODIGO_BARRIO' =>  1206,
		    'CODIGO_MUNICIPIO' => 001,
		    'NOMBRE' => urlencode ( 'FENALCO KENNEDY' ),
		    'COMUNA' => 12,
		    'ESE' => 3,
		    'ZONA' => urlencode ( 'Oriente' ),
		    'created_by' => 'admin',
		    'created_at' => Carbon::now ()
		) );
		DB::table ( 'p_barrio' )->insert ( array (
		    'CODIGO_BARRIO' =>  1207,
		    'CODIGO_MUNICIPIO' => 001,
		    'NOMBRE' => urlencode ( 'NUEVA FLORESTA' ),
		    'COMUNA' => 12,
		    'ESE' => 3,
		    'ZONA' => urlencode ( 'Oriente' ),
		    'created_by' => 'admin',
		    'created_at' => Carbon::now ()
		) );
		DB::table ( 'p_barrio' )->insert ( array (
		    'CODIGO_BARRIO' =>  1208,
		    'CODIGO_MUNICIPIO' => 001,
		    'NOMBRE' => urlencode ( 'JULIO RINCON' ),
		    'COMUNA' => 12,
		    'ESE' => 3,
		    'ZONA' => urlencode ( 'Oriente' ),
		    'created_by' => 'admin',
		    'created_at' => Carbon::now ()
		) );
		DB::table ( 'p_barrio' )->insert ( array (
		    'CODIGO_BARRIO' =>  1209,
		    'CODIGO_MUNICIPIO' => 001,
		    'NOMBRE' => urlencode ( 'DOCE DE OCTUBRE' ),
		    'COMUNA' => 12,
		    'ESE' => 3,
		    'ZONA' => urlencode ( 'Oriente' ),
		    'created_by' => 'admin',
		    'created_at' => Carbon::now ()
		) );
		DB::table ( 'p_barrio' )->insert ( array (
		    'CODIGO_BARRIO' =>  1210,
		    'CODIGO_MUNICIPIO' => 001,
		    'NOMBRE' => urlencode ( 'EL RODEO' ),
		    'COMUNA' => 12,
		    'ESE' => 3,
		    'ZONA' => urlencode ( 'Oriente' ),
		    'created_by' => 'admin',
		    'created_at' => Carbon::now ()
		) );
		DB::table ( 'p_barrio' )->insert ( array (
		    'CODIGO_BARRIO' =>  1211,
		    'CODIGO_MUNICIPIO' => 001,
		    'NOMBRE' => urlencode ( 'SINDICAL' ),
		    'COMUNA' => 12,
		    'ESE' => 3,
		    'ZONA' => urlencode ( 'Oriente' ),
		    'created_by' => 'admin',
		    'created_at' => Carbon::now ()
		) );
		DB::table ( 'p_barrio' )->insert ( array (
		    'CODIGO_BARRIO' =>  1212,
		    'CODIGO_MUNICIPIO' => 001,
		    'NOMBRE' => urlencode ( 'BELLO HORIZONTE' ),
		    'COMUNA' => 12,
		    'ESE' => 3,
		    'ZONA' => urlencode ( 'Oriente' ),
		    'created_by' => 'admin',
		    'created_at' => Carbon::now ()
		) );
		DB::table ( 'p_barrio' )->insert ( array (
		    'CODIGO_BARRIO' =>  1298,
		    'CODIGO_MUNICIPIO' => 001,
		    'NOMBRE' => urlencode ( 'EL PONDAJE' ),
		    'COMUNA' => 12,
		    'ESE' => 3,
		    'ZONA' => urlencode ( 'Oriente' ),
		    'created_by' => 'admin',
		    'created_at' => Carbon::now ()
		) );
		
		/*Comuna 13 Cali*/
		
		DB::table ( 'p_barrio' )->insert ( array (
		    'CODIGO_BARRIO' =>  1301,
		    'CODIGO_MUNICIPIO' => 001,
		    'NOMBRE' => urlencode ( 'ULPIANO LLOREDA' ),
		    'COMUNA' => 13,
		    'ESE' => 4,
		    'ZONA' => urlencode ( 'Distrito de Agua Blanca' ),
		    'created_by' => 'admin',
		    'created_at' => Carbon::now ()
		) );
		DB::table ( 'p_barrio' )->insert ( array (
		    'CODIGO_BARRIO' =>  1302,
		    'CODIGO_MUNICIPIO' => 001,
		    'NOMBRE' => urlencode ( 'EL VERGEL' ),
		    'COMUNA' => 13,
		    'ESE' => 4,
		    'ZONA' => urlencode ( 'Distrito de Agua Blanca' ),
		    'created_by' => 'admin',
		    'created_at' => Carbon::now ()
		) );
		DB::table ( 'p_barrio' )->insert ( array (
		    'CODIGO_BARRIO' =>  1303,
		    'CODIGO_MUNICIPIO' => 001,
		    'NOMBRE' => urlencode ( 'EL POBLADO I' ),
		    'COMUNA' => 13,
		    'ESE' => 4,
		    'ZONA' => urlencode ( 'Distrito de Agua Blanca' ),
		    'created_by' => 'admin',
		    'created_at' => Carbon::now ()
		) );
		DB::table ( 'p_barrio' )->insert ( array (
		    'CODIGO_BARRIO' =>  1304,
		    'CODIGO_MUNICIPIO' => 001,
		    'NOMBRE' => urlencode ( 'EL POBLADO II' ),
		    'COMUNA' => 13,
		    'ESE' => 4,
		    'ZONA' => urlencode ( 'Distrito de Agua Blanca' ),
		    'created_by' => 'admin',
		    'created_at' => Carbon::now ()
		) );
		DB::table ( 'p_barrio' )->insert ( array (
		    'CODIGO_BARRIO' =>  1305,
		    'CODIGO_MUNICIPIO' => 001,
		    'NOMBRE' => urlencode ( 'LOS COMUNEROS II ETAPA' ),
		    'COMUNA' => 13,
		    'ESE' => 4,
		    'ZONA' => urlencode ( 'Distrito de Agua Blanca' ),
		    'created_by' => 'admin',
		    'created_at' => Carbon::now ()
		) );
		DB::table ( 'p_barrio' )->insert ( array (
		    'CODIGO_BARRIO' =>  1306,
		    'CODIGO_MUNICIPIO' => 001,
		    'NOMBRE' => urlencode ( 'RICARDO BALCAZAR' ),
		    'COMUNA' => 13,
		    'ESE' => 4,
		    'ZONA' => urlencode ( 'Distrito de Agua Blanca' ),
		    'created_by' => 'admin',
		    'created_at' => Carbon::now ()
		) );
		
		/*
1307	OMAR TORRIJOS	13	4	Distrito de Agua Blanca 
1308	EL DIAMANTE	13	4	Distrito de Agua Blanca 
1309	LLERAS RESTREPO	13	4	Distrito de Agua Blanca 
1310	VILLA DEL LAGO	13	4	Distrito de Agua Blanca 
1311	LOS ROBLES	13	4	Distrito de Agua Blanca 
1312	RODRIGO LARA BONILLA	13	4	Distrito de Agua Blanca 
1313	CHARCO AZUL	13	4	Distrito de Agua Blanca 
1314	VILLABLANCA	13	4	Distrito de Agua Blanca 
1315	CALIPSO	13	4	Distrito de Agua Blanca 
1316	CINTA SARDI	13	4	Distrito de Agua Blanca 
1320	INVASION  LA FLORIDA	13	4	Distrito de Agua Blanca 
1389	CINTA BELISARIO	13	4	Distrito de Agua Blanca 
1390	YIRA CASTRO	13	4	Distrito de Agua Blanca 
1391	INV. NUEVA ILUSION	13	4	Distrito de Agua Blanca 
1393	LLERAS CINTA LARGA	13	4	Distrito de Agua Blanca 
1394	MARROQUIN III	13	4	Distrito de Agua Blanca 
1395	LOS LAGOS	13	4	Distrito de Agua Blanca 
1397	SECTOR LAGUNA EL PONDAJE	13	4	Distrito de Agua Blanca 
1398	EL PONDAJE	13	4	Distrito de Agua Blanca 
1399	SECTOR ASPROSOCIAL DIAMANTE (LA PAZ)	13	4	Distrito de Agua Blanca 

		*/
// 		factory(Barrio::class,10)->create();
// 		factory(Municipio::class,300)->create();
    	
    }
}
