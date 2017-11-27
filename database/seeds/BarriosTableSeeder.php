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
// 		DB::table ( 'p_barrio' )->insert ( array (
// 		    'CODIGO_BARRIO' =>  1298,
// 		    'CODIGO_MUNICIPIO' => 001,
// 		    'NOMBRE' => urlencode ( 'EL PONDAJE' ),
// 		    'COMUNA' => 12,
// 		    'ESE' => 3,
// 		    'ZONA' => urlencode ( 'Oriente' ),
// 		    'created_by' => 'admin',
// 		    'created_at' => Carbon::now ()
// 		) );
		
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
		DB::table ( 'p_barrio' )->insert ( array (
		    'CODIGO_BARRIO' =>  1307,
		    'CODIGO_MUNICIPIO' => 001,
		    'NOMBRE' => urlencode ( 'OMAR TORRIJOS' ),
		    'COMUNA' => 13,
		    'ESE' => 4,
		    'ZONA' => urlencode ( 'Distrito de Agua Blanca' ),
		    'created_by' => 'admin',
		    'created_at' => Carbon::now ()
		) );
		DB::table ( 'p_barrio' )->insert ( array (
		    'CODIGO_BARRIO' =>  1308,
		    'CODIGO_MUNICIPIO' => 001,
		    'NOMBRE' => urlencode ( 'EL DIAMANTE' ),
		    'COMUNA' => 13,
		    'ESE' => 4,
		    'ZONA' => urlencode ( 'Distrito de Agua Blanca' ),
		    'created_by' => 'admin',
		    'created_at' => Carbon::now ()
		) );
		DB::table ( 'p_barrio' )->insert ( array (
		    'CODIGO_BARRIO' =>  1309,
		    'CODIGO_MUNICIPIO' => 001,
		    'NOMBRE' => urlencode ( 'LLERAS RESTREPO' ),
		    'COMUNA' => 13,
		    'ESE' => 4,
		    'ZONA' => urlencode ( 'Distrito de Agua Blanca' ),
		    'created_by' => 'admin',
		    'created_at' => Carbon::now ()
		) );
		DB::table ( 'p_barrio' )->insert ( array (
		    'CODIGO_BARRIO' =>  1310,
		    'CODIGO_MUNICIPIO' => 001,
		    'NOMBRE' => urlencode ( 'VILLA DEL LAGO' ),
		    'COMUNA' => 13,
		    'ESE' => 4,
		    'ZONA' => urlencode ( 'Distrito de Agua Blanca' ),
		    'created_by' => 'admin',
		    'created_at' => Carbon::now ()
		) );
		DB::table ( 'p_barrio' )->insert ( array (
		    'CODIGO_BARRIO' =>  1311,
		    'CODIGO_MUNICIPIO' => 001,
		    'NOMBRE' => urlencode ( 'LOS ROBLES' ),
		    'COMUNA' => 13,
		    'ESE' => 4,
		    'ZONA' => urlencode ( 'Distrito de Agua Blanca' ),
		    'created_by' => 'admin',
		    'created_at' => Carbon::now ()
		) );
		DB::table ( 'p_barrio' )->insert ( array (
		    'CODIGO_BARRIO' =>  1312,
		    'CODIGO_MUNICIPIO' => 001,
		    'NOMBRE' => urlencode ( 'RODRIGO LARA BONILLA' ),
		    'COMUNA' => 13,
		    'ESE' => 4,
		    'ZONA' => urlencode ( 'Distrito de Agua Blanca' ),
		    'created_by' => 'admin',
		    'created_at' => Carbon::now ()
		) );
		DB::table ( 'p_barrio' )->insert ( array (
		    'CODIGO_BARRIO' =>  1313,
		    'CODIGO_MUNICIPIO' => 001,
		    'NOMBRE' => urlencode ( 'CHARCO AZUL' ),
		    'COMUNA' => 13,
		    'ESE' => 4,
		    'ZONA' => urlencode ( 'Distrito de Agua Blanca' ),
		    'created_by' => 'admin',
		    'created_at' => Carbon::now ()
		) );
		DB::table ( 'p_barrio' )->insert ( array (
		    'CODIGO_BARRIO' =>  1314,
		    'CODIGO_MUNICIPIO' => 001,
		    'NOMBRE' => urlencode ( 'VILLABLANCA' ),
		    'COMUNA' => 13,
		    'ESE' => 4,
		    'ZONA' => urlencode ( 'Distrito de Agua Blanca' ),
		    'created_by' => 'admin',
		    'created_at' => Carbon::now ()
		) );
		DB::table ( 'p_barrio' )->insert ( array (
		    'CODIGO_BARRIO' =>  1315,
		    'CODIGO_MUNICIPIO' => 001,
		    'NOMBRE' => urlencode ( 'CALIPSO' ),
		    'COMUNA' => 13,
		    'ESE' => 4,
		    'ZONA' => urlencode ( 'Distrito de Agua Blanca' ),
		    'created_by' => 'admin',
		    'created_at' => Carbon::now ()
		) );
		DB::table ( 'p_barrio' )->insert ( array (
		    'CODIGO_BARRIO' =>  1316,
		    'CODIGO_MUNICIPIO' => 001,
		    'NOMBRE' => urlencode ( 'CINTA SARDI' ),
		    'COMUNA' => 13,
		    'ESE' => 4,
		    'ZONA' => urlencode ( 'Distrito de Agua Blanca' ),
		    'created_by' => 'admin',
		    'created_at' => Carbon::now ()
		) );
		DB::table ( 'p_barrio' )->insert ( array (
		    'CODIGO_BARRIO' =>  1320,
		    'CODIGO_MUNICIPIO' => 001,
		    'NOMBRE' => urlencode ( 'INVASION  LA FLORIDA' ),
		    'COMUNA' => 13,
		    'ESE' => 4,
		    'ZONA' => urlencode ( 'Distrito de Agua Blanca' ),
		    'created_by' => 'admin',
		    'created_at' => Carbon::now ()
		) );
		DB::table ( 'p_barrio' )->insert ( array (
		    'CODIGO_BARRIO' =>  1389,
		    'CODIGO_MUNICIPIO' => 001,
		    'NOMBRE' => urlencode ( 'CINTA BELISARIO' ),
		    'COMUNA' => 13,
		    'ESE' => 4,
		    'ZONA' => urlencode ( 'Distrito de Agua Blanca' ),
		    'created_by' => 'admin',
		    'created_at' => Carbon::now ()
		) );
		DB::table ( 'p_barrio' )->insert ( array (
		    'CODIGO_BARRIO' =>  1390,
		    'CODIGO_MUNICIPIO' => 001,
		    'NOMBRE' => urlencode ( 'YIRA CASTRO' ),
		    'COMUNA' => 13,
		    'ESE' => 4,
		    'ZONA' => urlencode ( 'Distrito de Agua Blanca' ),
		    'created_by' => 'admin',
		    'created_at' => Carbon::now ()
		) );
		DB::table ( 'p_barrio' )->insert ( array (
		    'CODIGO_BARRIO' =>  1391,
		    'CODIGO_MUNICIPIO' => 001,
		    'NOMBRE' => urlencode ( 'INV. NUEVA ILUSION' ),
		    'COMUNA' => 13,
		    'ESE' => 4,
		    'ZONA' => urlencode ( 'Distrito de Agua Blanca' ),
		    'created_by' => 'admin',
		    'created_at' => Carbon::now ()
		) );
		DB::table ( 'p_barrio' )->insert ( array (
		    'CODIGO_BARRIO' =>  1393,
		    'CODIGO_MUNICIPIO' => 001,
		    'NOMBRE' => urlencode ( 'LLERAS CINTA LARGA' ),
		    'COMUNA' => 13,
		    'ESE' => 4,
		    'ZONA' => urlencode ( 'Distrito de Agua Blanca' ),
		    'created_by' => 'admin',
		    'created_at' => Carbon::now ()
		) );
		DB::table ( 'p_barrio' )->insert ( array (
		    'CODIGO_BARRIO' =>  1394,
		    'CODIGO_MUNICIPIO' => 001,
		    'NOMBRE' => urlencode ( 'MARROQUIN III' ),
		    'COMUNA' => 13,
		    'ESE' => 4,
		    'ZONA' => urlencode ( 'Distrito de Agua Blanca' ),
		    'created_by' => 'admin',
		    'created_at' => Carbon::now ()
		) );
		DB::table ( 'p_barrio' )->insert ( array (
		    'CODIGO_BARRIO' =>  1395,
		    'CODIGO_MUNICIPIO' => 001,
		    'NOMBRE' => urlencode ( 'LOS LAGOS' ),
		    'COMUNA' => 13,
		    'ESE' => 4,
		    'ZONA' => urlencode ( 'Distrito de Agua Blanca' ),
		    'created_by' => 'admin',
		    'created_at' => Carbon::now ()
		) );
		DB::table ( 'p_barrio' )->insert ( array (
		    'CODIGO_BARRIO' =>  1397,
		    'CODIGO_MUNICIPIO' => 001,
		    'NOMBRE' => urlencode ( 'SECTOR LAGUNA EL PONDAJE' ),
		    'COMUNA' => 13,
		    'ESE' => 4,
		    'ZONA' => urlencode ( 'Distrito de Agua Blanca' ),
		    'created_by' => 'admin',
		    'created_at' => Carbon::now ()
		) );
		DB::table ( 'p_barrio' )->insert ( array (
		    'CODIGO_BARRIO' =>  1398,
		    'CODIGO_MUNICIPIO' => 001,
		    'NOMBRE' => urlencode ( 'EL PONDAJE' ),
		    'COMUNA' => 13,
		    'ESE' => 4,
		    'ZONA' => urlencode ( 'Distrito de Agua Blanca' ),
		    'created_by' => 'admin',
		    'created_at' => Carbon::now ()
		) );
		DB::table ( 'p_barrio' )->insert ( array (
		    'CODIGO_BARRIO' =>  1399,
		    'CODIGO_MUNICIPIO' => 001,
		    'NOMBRE' => urlencode ( 'SECTOR ASPROSOCIAL DIAMANTE (LA PAZ)' ),
		    'COMUNA' => 13,
		    'ESE' => 4,
		    'ZONA' => urlencode ( 'Distrito de Agua Blanca' ),
		    'created_by' => 'admin',
		    'created_at' => Carbon::now ()
		) );
		
		/*Comuna 14*/
		DB::table ( 'p_barrio' )->insert ( array (
		    'CODIGO_BARRIO' =>  1401,
		    'CODIGO_MUNICIPIO' => 001,
		    'NOMBRE' => urlencode ( 'ALFONSO BONILLA ARAGON' ),
		    'COMUNA' => 14,
		    'ESE' => 4,
		    'ZONA' => urlencode ( 'Distrito de Agua Blanca' ),
		    'created_by' => 'admin',
		    'created_at' => Carbon::now ()
		) );
		DB::table ( 'p_barrio' )->insert ( array (
		    'CODIGO_BARRIO' =>  1402,
		    'CODIGO_MUNICIPIO' => 001,
		    'NOMBRE' => urlencode ( 'ALIRIO MORA BELTRAN' ),
		    'COMUNA' => 14,
		    'ESE' => 4,
		    'ZONA' => urlencode ( 'Distrito de Agua Blanca' ),
		    'created_by' => 'admin',
		    'created_at' => Carbon::now ()
		) );
		DB::table ( 'p_barrio' )->insert ( array (
		    'CODIGO_BARRIO' =>  1403,
		    'CODIGO_MUNICIPIO' => 001,
		    'NOMBRE' => urlencode ( 'MANUELA BELTRAN - LA CASONA' ),
		    'COMUNA' => 14,
		    'ESE' => 4,
		    'ZONA' => urlencode ( 'Distrito de Agua Blanca' ),
		    'created_by' => 'admin',
		    'created_at' => Carbon::now ()
		) );
		DB::table ( 'p_barrio' )->insert ( array (
		    'CODIGO_BARRIO' =>  1404,
		    'CODIGO_MUNICIPIO' => 001,
		    'NOMBRE' => urlencode ( 'LAS ORQUIDEAS' ),
		    'COMUNA' => 14,
		    'ESE' => 4,
		    'ZONA' => urlencode ( 'Distrito de Agua Blanca' ),
		    'created_by' => 'admin',
		    'created_at' => Carbon::now ()
		) );
		DB::table ( 'p_barrio' )->insert ( array (
		    'CODIGO_BARRIO' =>  1405,
		    'CODIGO_MUNICIPIO' => 001,
		    'NOMBRE' => urlencode ( 'JOSE MANUEL MARROQUIN II ETAPA' ),
		    'COMUNA' => 14,
		    'ESE' => 4,
		    'ZONA' => urlencode ( 'Distrito de Agua Blanca' ),
		    'created_by' => 'admin',
		    'created_at' => Carbon::now ()
		) );
		DB::table ( 'p_barrio' )->insert ( array (
		    'CODIGO_BARRIO' =>  1406,
		    'CODIGO_MUNICIPIO' => 001,
		    'NOMBRE' => urlencode ( 'JOSE MANUEL MARROQUIN I ETAPA' ),
		    'COMUNA' => 14,
		    'ESE' => 4,
		    'ZONA' => urlencode ( 'Distrito de Agua Blanca' ),
		    'created_by' => 'admin',
		    'created_at' => Carbon::now ()
		) );
		DB::table ( 'p_barrio' )->insert ( array (
		    'CODIGO_BARRIO' =>  1408,
		    'CODIGO_MUNICIPIO' => 001,
		    'NOMBRE' => urlencode ( 'NUEVE DE ENERO' ),
		    'COMUNA' => 14,
		    'ESE' => 4,
		    'ZONA' => urlencode ( 'Distrito de Agua Blanca' ),
		    'created_by' => 'admin',
		    'created_at' => Carbon::now ()
		) );
		DB::table ( 'p_barrio' )->insert ( array (
		    'CODIGO_BARRIO' =>  1416,
		    'CODIGO_MUNICIPIO' => 001,
		    'NOMBRE' => urlencode ( 'EL  PILAR' ),
		    'COMUNA' => 14,
		    'ESE' => 4,
		    'ZONA' => urlencode ( 'Distrito de Agua Blanca' ),
		    'created_by' => 'admin',
		    'created_at' => Carbon::now ()
		) );
		DB::table ( 'p_barrio' )->insert ( array (
		    'CODIGO_BARRIO' =>  1452,
		    'CODIGO_MUNICIPIO' => 001,
		    'NOMBRE' => urlencode ( 'VILLA SAN MARCOS' ),
		    'COMUNA' => 14,
		    'ESE' => 4,
		    'ZONA' => urlencode ( 'Distrito de Agua Blanca' ),
		    'created_by' => 'admin',
		    'created_at' => Carbon::now ()
		) );
		DB::table ( 'p_barrio' )->insert ( array (
		    'CODIGO_BARRIO' =>  1495,
		    'CODIGO_MUNICIPIO' => 001,
		    'NOMBRE' => urlencode ( 'PUERTA  DEL SOL' ),
		    'COMUNA' => 14,
		    'ESE' => 4,
		    'ZONA' => urlencode ( 'Distrito de Agua Blanca' ),
		    'created_by' => 'admin',
		    'created_at' => Carbon::now ()
		) );
		DB::table ( 'p_barrio' )->insert ( array (
		    'CODIGO_BARRIO' =>  1496,
		    'CODIGO_MUNICIPIO' => 001,
		    'NOMBRE' => urlencode ( 'LOS NARANJOS I' ),
		    'COMUNA' => 14,
		    'ESE' => 4,
		    'ZONA' => urlencode ( 'Distrito de Agua Blanca' ),
		    'created_by' => 'admin',
		    'created_at' => Carbon::now ()
		) );
		DB::table ( 'p_barrio' )->insert ( array (
		    'CODIGO_BARRIO' =>  1498,
		    'CODIGO_MUNICIPIO' => 001,
		    'NOMBRE' => urlencode ( 'PROMOCIONES POPULARES B' ),
		    'COMUNA' => 14,
		    'ESE' => 4,
		    'ZONA' => urlencode ( 'Distrito de Agua Blanca' ),
		    'created_by' => 'admin',
		    'created_at' => Carbon::now ()
		) );
		DB::table ( 'p_barrio' )->insert ( array (
		    'CODIGO_BARRIO' =>  1499,
		    'CODIGO_MUNICIPIO' => 001,
		    'NOMBRE' => urlencode ( 'LOS NARANJOS II' ),
		    'COMUNA' => 14,
		    'ESE' => 4,
		    'ZONA' => urlencode ( 'Distrito de Agua Blanca' ),
		    'created_by' => 'admin',
		    'created_at' => Carbon::now ()
		) );
		
		/*Comuna 15 cali*/
		DB::table ( 'p_barrio' )->insert ( array (
		    'CODIGO_BARRIO' =>  1501,
		    'CODIGO_MUNICIPIO' => 001,
		    'NOMBRE' => urlencode ( 'EL RETIRO' ),
		    'COMUNA' => 15,
		    'ESE' => 4,
		    'ZONA' => urlencode ( 'Distrito de Agua Blanca' ),
		    'created_by' => 'admin',
		    'created_at' => Carbon::now ()
		) );
		DB::table ( 'p_barrio' )->insert ( array (
		    'CODIGO_BARRIO' =>  1502,
		    'CODIGO_MUNICIPIO' => 001,
		    'NOMBRE' => urlencode ( 'LOS COMUNEROS I ETAPA' ),
		    'COMUNA' => 15,
		    'ESE' => 4,
		    'ZONA' => urlencode ( 'Distrito de Agua Blanca' ),
		    'created_by' => 'admin',
		    'created_at' => Carbon::now ()
		) );
		DB::table ( 'p_barrio' )->insert ( array (
		    'CODIGO_BARRIO' =>  1503,
		    'CODIGO_MUNICIPIO' => 001,
		    'NOMBRE' => urlencode ( 'LAUREANO GOMEZ' ),
		    'COMUNA' => 15,
		    'ESE' => 4,
		    'ZONA' => urlencode ( 'Distrito de Agua Blanca' ),
		    'created_by' => 'admin',
		    'created_at' => Carbon::now ()
		) );
		DB::table ( 'p_barrio' )->insert ( array (
		    'CODIGO_BARRIO' =>  1504,
		    'CODIGO_MUNICIPIO' => 001,
		    'NOMBRE' => urlencode ( 'EL VALLADO' ),
		    'COMUNA' => 15,
		    'ESE' => 4,
		    'ZONA' => urlencode ( 'Distrito de Agua Blanca' ),
		    'created_by' => 'admin',
		    'created_at' => Carbon::now ()
		) );
		DB::table ( 'p_barrio' )->insert ( array (
		    'CODIGO_BARRIO' =>  1505,
		    'CODIGO_MUNICIPIO' => 001,
		    'NOMBRE' => urlencode ( 'INV. BRISAS DE COMUNEROS' ),
		    'COMUNA' => 15,
		    'ESE' => 4,
		    'ZONA' => urlencode ( 'Distrito de Agua Blanca' ),
		    'created_by' => 'admin',
		    'created_at' => Carbon::now ()
		) );
		DB::table ( 'p_barrio' )->insert ( array (
		    'CODIGO_BARRIO' =>  1514,
		    'CODIGO_MUNICIPIO' => 001,
		    'NOMBRE' => urlencode ( 'INV. COLONIA NARIÑENSE' ),
		    'COMUNA' => 15,
		    'ESE' => 4,
		    'ZONA' => urlencode ( 'Distrito de Agua Blanca' ),
		    'created_by' => 'admin',
		    'created_at' => Carbon::now ()
		) );
		DB::table ( 'p_barrio' )->insert ( array (
		    'CODIGO_BARRIO' =>  1520,
		    'CODIGO_MUNICIPIO' => 001,
		    'NOMBRE' => urlencode ( 'INV. VALLADITO' ),
		    'COMUNA' => 15,
		    'ESE' => 4,
		    'ZONA' => urlencode ( 'Distrito de Agua Blanca' ),
		    'created_by' => 'admin',
		    'created_at' => Carbon::now ()
		) );
		DB::table ( 'p_barrio' )->insert ( array (
		    'CODIGO_BARRIO' =>  1592,
		    'CODIGO_MUNICIPIO' => 001,
		    'NOMBRE' => urlencode ( 'INV. BRISAS NUEVO AMANECER (MOJICA)' ),
		    'COMUNA' => 15,
		    'ESE' => 4,
		    'ZONA' => urlencode ( 'Distrito de Agua Blanca' ),
		    'created_by' => 'admin',
		    'created_at' => Carbon::now ()
		) );
		DB::table ( 'p_barrio' )->insert ( array (
		    'CODIGO_BARRIO' =>  1594,
		    'CODIGO_MUNICIPIO' => 001,
		    'NOMBRE' => urlencode ( 'INV. EL ENCANTO (MOJICA)' ),
		    'COMUNA' => 15,
		    'ESE' => 4,
		    'ZONA' => urlencode ( 'Distrito de Agua Blanca' ),
		    'created_by' => 'admin',
		    'created_at' => Carbon::now ()
		) );
		DB::table ( 'p_barrio' )->insert ( array (
		    'CODIGO_BARRIO' =>  1596,
		    'CODIGO_MUNICIPIO' => 001,
		    'NOMBRE' => urlencode ( 'CIUDAD CORDOBA' ),
		    'COMUNA' => 15,
		    'ESE' => 4,
		    'ZONA' => urlencode ( 'Distrito de Agua Blanca' ),
		    'created_by' => 'admin',
		    'created_at' => Carbon::now ()
		) );
		DB::table ( 'p_barrio' )->insert ( array (
		    'CODIGO_BARRIO' =>  1597,
		    'CODIGO_MUNICIPIO' => 001,
		    'NOMBRE' => urlencode ( 'EL MORICHAL DE COMFANDI' ),
		    'COMUNA' => 15,
		    'ESE' => 4,
		    'ZONA' => urlencode ( 'Distrito de Agua Blanca' ),
		    'created_by' => 'admin',
		    'created_at' => Carbon::now ()
		) );
		DB::table ( 'p_barrio' )->insert ( array (
		    'CODIGO_BARRIO' =>  1598,
		    'CODIGO_MUNICIPIO' => 001,
		    'NOMBRE' => urlencode ( 'MOJICA' ),
		    'COMUNA' => 15,
		    'ESE' => 4,
		    'ZONA' => urlencode ( 'Distrito de Agua Blanca' ),
		    'created_by' => 'admin',
		    'created_at' => Carbon::now ()
		) );
		DB::table ( 'p_barrio' )->insert ( array (
		    'CODIGO_BARRIO' =>  1599,
		    'CODIGO_MUNICIPIO' => 001,
		    'NOMBRE' => urlencode ( 'BAJOS CIUDAD CORDOBA' ),
		    'COMUNA' => 15,
		    'ESE' => 4,
		    'ZONA' => urlencode ( 'Distrito de Agua Blanca' ),
		    'created_by' => 'admin',
		    'created_at' => Carbon::now ()
		) );
		
		/*Comuna 16 cali*/
		DB::table ( 'p_barrio' )->insert ( array (
		    'CODIGO_BARRIO' =>  1601,
		    'CODIGO_MUNICIPIO' => 001,
		    'NOMBRE' => urlencode ( 'MARIANO RAMOS' ),
		    'COMUNA' => 16,
		    'ESE' => 5,
		    'ZONA' => urlencode ( 'Oriente' ),
		    'created_by' => 'admin',
		    'created_at' => Carbon::now ()
		) );
		DB::table ( 'p_barrio' )->insert ( array (
		    'CODIGO_BARRIO' =>  1602,
		    'CODIGO_MUNICIPIO' => 001,
		    'NOMBRE' => urlencode ( 'REPUBLICA DE ISRAEL' ),
		    'COMUNA' => 16,
		    'ESE' => 5,
		    'ZONA' => urlencode ( 'Oriente' ),
		    'created_by' => 'admin',
		    'created_at' => Carbon::now ()
		) );
		DB::table ( 'p_barrio' )->insert ( array (
		    'CODIGO_BARRIO' =>  1603,
		    'CODIGO_MUNICIPIO' => 001,
		    'NOMBRE' => urlencode ( 'UNION DE VIVIENDA POPULAR' ),
		    'COMUNA' => 16,
		    'ESE' => 5,
		    'ZONA' => urlencode ( 'Oriente' ),
		    'created_by' => 'admin',
		    'created_at' => Carbon::now ()
		) );
		DB::table ( 'p_barrio' )->insert ( array (
		    'CODIGO_BARRIO' =>  1604,
		    'CODIGO_MUNICIPIO' => 001,
		    'NOMBRE' => urlencode ( 'ANTONIO NARIÑO' ),
		    'COMUNA' => 16,
		    'ESE' => 5,
		    'ZONA' => urlencode ( 'Oriente' ),
		    'created_by' => 'admin',
		    'created_at' => Carbon::now ()
		) );
		DB::table ( 'p_barrio' )->insert ( array (
		    'CODIGO_BARRIO' =>  1605,
		    'CODIGO_MUNICIPIO' => 001,
		    'NOMBRE' => urlencode ( 'BRISAS DEL LIMONAR' ),
		    'COMUNA' => 16,
		    'ESE' => 5,
		    'ZONA' => urlencode ( 'Oriente' ),
		    'created_by' => 'admin',
		    'created_at' => Carbon::now ()
		) );
		DB::table ( 'p_barrio' )->insert ( array (
		    'CODIGO_BARRIO' =>  1697,
		    'CODIGO_MUNICIPIO' => 001,
		    'NOMBRE' => urlencode ( 'CIUDAD 2000' ),
		    'COMUNA' => 16,
		    'ESE' => 5,
		    'ZONA' => urlencode ( 'Oriente' ),
		    'created_by' => 'admin',
		    'created_at' => Carbon::now ()
		) );
		DB::table ( 'p_barrio' )->insert ( array (
		    'CODIGO_BARRIO' =>  1698,
		    'CODIGO_MUNICIPIO' => 001,
		    'NOMBRE' => urlencode ( 'LA ALBORADA' ),
		    'COMUNA' => 16,
		    'ESE' => 5,
		    'ZONA' => urlencode ( 'Oriente' ),
		    'created_by' => 'admin',
		    'created_at' => Carbon::now ()
		) );
		/*Comuna 17 cali*/
		
		DB::table ( 'p_barrio' )->insert ( array (
		    'CODIGO_BARRIO' =>  1701,
		    'CODIGO_MUNICIPIO' => 001,
		    'NOMBRE' => urlencode ( 'LA PLAYA' ),
		    'COMUNA' => 17,
		    'ESE' => 1,
		    'ZONA' => urlencode ( 'Sur' ),
		    'created_by' => 'admin',
		    'created_at' => Carbon::now ()
		) );
		DB::table ( 'p_barrio' )->insert ( array (
		    'CODIGO_BARRIO' =>  1702,
		    'CODIGO_MUNICIPIO' => 001,
		    'NOMBRE' => urlencode ( 'PRIMERO DE MAYO' ),
		    'COMUNA' => 17,
		    'ESE' => 1,
		    'ZONA' => urlencode ( 'Sur' ),
		    'created_by' => 'admin',
		    'created_at' => Carbon::now ()
		) );
		DB::table ( 'p_barrio' )->insert ( array (
		    'CODIGO_BARRIO' =>  1703,
		    'CODIGO_MUNICIPIO' => 001,
		    'NOMBRE' => urlencode ( 'CIUDADELA COMFANDI' ),
		    'COMUNA' => 17,
		    'ESE' => 1,
		    'ZONA' => urlencode ( 'Sur' ),
		    'created_by' => 'admin',
		    'created_at' => Carbon::now ()
		) );
		DB::table ( 'p_barrio' )->insert ( array (
		    'CODIGO_BARRIO' =>  1705,
		    'CODIGO_MUNICIPIO' => 001,
		    'NOMBRE' => urlencode ( 'CIUDAD UNIVERSITARIA' ),
		    'COMUNA' => 17,
		    'ESE' => 1,
		    'ZONA' => urlencode ( 'Sur' ),
		    'created_by' => 'admin',
		    'created_at' => Carbon::now ()
		) );
// 		DB::table ( 'p_barrio' )->insert ( array (
// 		    'CODIGO_BARRIO' =>  1706,
// 		    'CODIGO_MUNICIPIO' => 001,
// 		    'NOMBRE' => urlencode ( 'CLUB CAMPESTRE' ),
// 		    'COMUNA' => 17,
// 		    'ESE' => 1,
// 		    'ZONA' => urlencode ( 'Sur' ),
// 		    'created_by' => 'admin',
// 		    'created_at' => Carbon::now ()
// 		) );
		DB::table ( 'p_barrio' )->insert ( array (
		    'CODIGO_BARRIO' =>  1774,
		    'CODIGO_MUNICIPIO' => 001,
		    'NOMBRE' => urlencode ( 'CANEY' ),
		    'COMUNA' => 17,
		    'ESE' => 1,
		    'ZONA' => urlencode ( 'Sur' ),
		    'created_by' => 'admin',
		    'created_at' => Carbon::now ()
		) );
		DB::table ( 'p_barrio' )->insert ( array (
		    'CODIGO_BARRIO' =>  1775,
		    'CODIGO_MUNICIPIO' => 001,
		    'NOMBRE' => urlencode ( 'LILI' ),
		    'COMUNA' => 17,
		    'ESE' => 1,
		    'ZONA' => urlencode ( 'Sur' ),
		    'created_by' => 'admin',
		    'created_at' => Carbon::now ()
		) );
// 		DB::table ( 'p_barrio' )->insert ( array (
// 		    'CODIGO_BARRIO' =>  1776,
// 		    'CODIGO_MUNICIPIO' => 001,
// 		    'NOMBRE' => urlencode ( 'CIUDAD CAMPESTRE' ),
// 		    'COMUNA' => 17,
// 		    'ESE' => 1,
// 		    'ZONA' => urlencode ( 'Sur' ),
// 		    'created_by' => 'admin',
// 		    'created_at' => Carbon::now ()
// 		) );
		DB::table ( 'p_barrio' )->insert ( array (
		    'CODIGO_BARRIO' =>  1778,
		    'CODIGO_MUNICIPIO' => 001,
		    'NOMBRE' => urlencode ( 'SANTA ANITA - LA SELVA' ),
		    'COMUNA' => 17,
		    'ESE' => 1,
		    'ZONA' => urlencode ( 'Sur' ),
		    'created_by' => 'admin',
		    'created_at' => Carbon::now ()
		) );
		DB::table ( 'p_barrio' )->insert ( array (
		    'CODIGO_BARRIO' =>  1780,
		    'CODIGO_MUNICIPIO' => 001,
		    'NOMBRE' => urlencode ( 'EL INGENIO' ),
		    'COMUNA' => 17,
		    'ESE' => 1,
		    'ZONA' => urlencode ( 'Sur' ),
		    'created_by' => 'admin',
		    'created_at' => Carbon::now ()
		) );
		DB::table ( 'p_barrio' )->insert ( array (
		    'CODIGO_BARRIO' =>  1781,
		    'CODIGO_MUNICIPIO' => 001,
		    'NOMBRE' => urlencode ( 'MAYAPAN LAS VEGAS' ),
		    'COMUNA' => 17,
		    'ESE' => 1,
		    'ZONA' => urlencode ( 'Sur' ),
		    'created_by' => 'admin',
		    'created_at' => Carbon::now ()
		) );
		DB::table ( 'p_barrio' )->insert ( array (
		    'CODIGO_BARRIO' =>  1782,
		    'CODIGO_MUNICIPIO' => 001,
		    'NOMBRE' => urlencode ( 'LAS QUINTAS DE DON SIMON' ),
		    'COMUNA' => 17,
		    'ESE' => 1,
		    'ZONA' => urlencode ( 'Sur' ),
		    'created_by' => 'admin',
		    'created_at' => Carbon::now ()
		) );
		DB::table ( 'p_barrio' )->insert ( array (
		    'CODIGO_BARRIO' =>  1783,
		    'CODIGO_MUNICIPIO' => 001,
		    'NOMBRE' => urlencode ( 'CIUDAD CAPRI' ),
		    'COMUNA' => 17,
		    'ESE' => 1,
		    'ZONA' => urlencode ( 'Sur' ),
		    'created_by' => 'admin',
		    'created_at' => Carbon::now ()
		) );
		DB::table ( 'p_barrio' )->insert ( array (
		    'CODIGO_BARRIO' =>  1784,
		    'CODIGO_MUNICIPIO' => 001,
		    'NOMBRE' => urlencode ( 'LA HACIENDA' ),
		    'COMUNA' => 17,
		    'ESE' => 1,
		    'ZONA' => urlencode ( 'Sur' ),
		    'created_by' => 'admin',
		    'created_at' => Carbon::now ()
		) );
		DB::table ( 'p_barrio' )->insert ( array (
		    'CODIGO_BARRIO' =>  1785,
		    'CODIGO_MUNICIPIO' => 001,
		    'NOMBRE' => urlencode ( 'LOS PORTALES' ),
		    'COMUNA' => 17,
		    'ESE' => 1,
		    'ZONA' => urlencode ( 'Sur' ),
		    'created_by' => 'admin',
		    'created_at' => Carbon::now ()
		) );
		DB::table ( 'p_barrio' )->insert ( array (
		    'CODIGO_BARRIO' =>  1786,
		    'CODIGO_MUNICIPIO' => 001,
		    'NOMBRE' => urlencode ( 'CAÑAVERALES' ),
		    'COMUNA' => 17,
		    'ESE' => 1,
		    'ZONA' => urlencode ( 'Sur' ),
		    'created_by' => 'admin',
		    'created_at' => Carbon::now ()
		) );
		DB::table ( 'p_barrio' )->insert ( array (
		    'CODIGO_BARRIO' =>  1787,
		    'CODIGO_MUNICIPIO' => 001,
		    'NOMBRE' => urlencode ( 'EL LIMONAR' ),
		    'COMUNA' => 17,
		    'ESE' => 1,
		    'ZONA' => urlencode ( 'Sur' ),
		    'created_by' => 'admin',
		    'created_at' => Carbon::now ()
		) );
		DB::table ( 'p_barrio' )->insert ( array (
		    'CODIGO_BARRIO' =>  1788,
		    'CODIGO_MUNICIPIO' => 001,
		    'NOMBRE' => urlencode ( 'BOSQUES DEL LIMONAR' ),
		    'COMUNA' => 17,
		    'ESE' => 1,
		    'ZONA' => urlencode ( 'Sur' ),
		    'created_by' => 'admin',
		    'created_at' => Carbon::now ()
		) );
		DB::table ( 'p_barrio' )->insert ( array (
		    'CODIGO_BARRIO' =>  1789,
		    'CODIGO_MUNICIPIO' => 001,
		    'NOMBRE' => urlencode ( 'CATAYA' ),
		    'COMUNA' => 17,
		    'ESE' => 1,
		    'ZONA' => urlencode ( 'Sur' ),
		    'created_by' => 'admin',
		    'created_at' => Carbon::now ()
		) );
		DB::table ( 'p_barrio' )->insert ( array (
		    'CODIGO_BARRIO' =>  1790,
		    'CODIGO_MUNICIPIO' => 001,
		    'NOMBRE' => urlencode ( 'EL GRAN LIMONAR' ),
		    'COMUNA' => 17,
		    'ESE' => 1,
		    'ZONA' => urlencode ( 'Sur' ),
		    'created_by' => 'admin',
		    'created_at' => Carbon::now ()
		) );
		DB::table ( 'p_barrio' )->insert ( array (
		    'CODIGO_BARRIO' =>  1791,
		    'CODIGO_MUNICIPIO' => 001,
		    'NOMBRE' => urlencode ( 'UNICENTRO CALI' ),
		    'COMUNA' => 17,
		    'ESE' => 1,
		    'ZONA' => urlencode ( 'Sur' ),
		    'created_by' => 'admin',
		    'created_at' => Carbon::now ()
		) );
// 		DB::table ( 'p_barrio' )->insert ( array (
// 		    'CODIGO_BARRIO' =>  1792,
// 		    'CODIGO_MUNICIPIO' => 001,
// 		    'NOMBRE' => urlencode ( 'PARCELACIONES PANCE' ),
// 		    'COMUNA' => 17,
// 		    'ESE' => 1,
// 		    'ZONA' => urlencode ( 'Sur' ),
// 		    'created_by' => 'admin',
// 		    'created_at' => Carbon::now ()
// 		) );
		DB::table ( 'p_barrio' )->insert ( array (
		    'CODIGO_BARRIO' =>  1793,
		    'CODIGO_MUNICIPIO' => 001,
		    'NOMBRE' => urlencode ( 'CIUDADELA PASOANCHO' ),
		    'COMUNA' => 17,
		    'ESE' => 1,
		    'ZONA' => urlencode ( 'Sur' ),
		    'created_by' => 'admin',
		    'created_at' => Carbon::now ()
		) );
		DB::table ( 'p_barrio' )->insert ( array (
		    'CODIGO_BARRIO' =>  1794,
		    'CODIGO_MUNICIPIO' => 001,
		    'NOMBRE' => urlencode ( 'PRADOS DEL LIMONAR' ),
		    'COMUNA' => 17,
		    'ESE' => 1,
		    'ZONA' => urlencode ( 'Sur' ),
		    'created_by' => 'admin',
		    'created_at' => Carbon::now ()
		) );
		DB::table ( 'p_barrio' )->insert ( array (
		    'CODIGO_BARRIO' =>  1796,
		    'CODIGO_MUNICIPIO' => 001,
		    'NOMBRE' => urlencode ( 'SAN JOAQUIN' ),
		    'COMUNA' => 17,
		    'ESE' => 1,
		    'ZONA' => urlencode ( 'Sur' ),
		    'created_by' => 'admin',
		    'created_at' => Carbon::now ()
		) );
		DB::table ( 'p_barrio' )->insert ( array (
		    'CODIGO_BARRIO' =>  1797,
		    'CODIGO_MUNICIPIO' => 001,
		    'NOMBRE' => urlencode ( 'RIO LILI' ),
		    'COMUNA' => 17,
		    'ESE' => 1,
		    'ZONA' => urlencode ( 'Sur' ),
		    'created_by' => 'admin',
		    'created_at' => Carbon::now ()
		) );
		DB::table ( 'p_barrio' )->insert ( array (
		    'CODIGO_BARRIO' =>  1798,
		    'CODIGO_MUNICIPIO' => 001,
		    'NOMBRE' => urlencode ( 'MULTICENTRO' ),
		    'COMUNA' => 17,
		    'ESE' => 1,
		    'ZONA' => urlencode ( 'Sur' ),
		    'created_by' => 'admin',
		    'created_at' => Carbon::now ()
		) );
// 		DB::table ( 'p_barrio' )->insert ( array (
// 		    'CODIGO_BARRIO' =>  17781,
// 		    'CODIGO_MUNICIPIO' => 001,
// 		    'NOMBRE' => urlencode ( 'LA SELVA' ),
// 		    'COMUNA' => 17,
// 		    'ESE' => 1,
// 		    'ZONA' => urlencode ( 'Sur' ),
// 		    'created_by' => 'admin',
// 		    'created_at' => Carbon::now ()
// 		) );
		DB::table ( 'p_barrio' )->insert ( array (
		    'CODIGO_BARRIO' =>  17852,
		    'CODIGO_MUNICIPIO' => 001,
		    'NOMBRE' => urlencode ( 'NUEVO REY' ),
		    'COMUNA' => 17,
		    'ESE' => 1,
		    'ZONA' => urlencode ( 'Sur' ),
		    'created_by' => 'admin',
		    'created_at' => Carbon::now ()
		) );
		DB::table ( 'p_barrio' )->insert ( array (
		    'CODIGO_BARRIO' =>  17862,
		    'CODIGO_MUNICIPIO' => 001,
		    'NOMBRE' => urlencode ( 'LOS SAMANES' ),
		    'COMUNA' => 17,
		    'ESE' => 1,
		    'ZONA' => urlencode ( 'Sur' ),
		    'created_by' => 'admin',
		    'created_at' => Carbon::now ()
		) );
		
		/*Comuna 18*/
		DB::table ( 'p_barrio' )->insert ( array (
		    'CODIGO_BARRIO' =>  1801,
		    'CODIGO_MUNICIPIO' => 001,
		    'NOMBRE' => urlencode ( 'BUENOS AIRES' ),
		    'COMUNA' => 18,
		    'ESE' => 1,
		    'ZONA' => urlencode ( 'Sur' ),
		    'created_by' => 'admin',
		    'created_at' => Carbon::now ()
		) );
		DB::table ( 'p_barrio' )->insert ( array (
		    'CODIGO_BARRIO' =>  1802,
		    'CODIGO_MUNICIPIO' => 001,
		    'NOMBRE' => urlencode ( 'CALDAS' ),
		    'COMUNA' => 18,
		    'ESE' => 1,
		    'ZONA' => urlencode ( 'Sur' ),
		    'created_by' => 'admin',
		    'created_at' => Carbon::now ()
		) );
		DB::table ( 'p_barrio' )->insert ( array (
		    'CODIGO_BARRIO' =>  1803,
		    'CODIGO_MUNICIPIO' => 001,
		    'NOMBRE' => urlencode ( 'LOS CHORROS' ),
		    'COMUNA' => 18,
		    'ESE' => 1,
		    'ZONA' => urlencode ( 'Sur' ),
		    'created_by' => 'admin',
		    'created_at' => Carbon::now ()
		) );
		DB::table ( 'p_barrio' )->insert ( array (
		    'CODIGO_BARRIO' =>  1804,
		    'CODIGO_MUNICIPIO' => 001,
		    'NOMBRE' => urlencode ( 'MELENDEZ' ),
		    'COMUNA' => 18,
		    'ESE' => 1,
		    'ZONA' => urlencode ( 'Sur' ),
		    'created_by' => 'admin',
		    'created_at' => Carbon::now ()
		) );
		DB::table ( 'p_barrio' )->insert ( array (
		    'CODIGO_BARRIO' =>  1805,
		    'CODIGO_MUNICIPIO' => 001,
		    'NOMBRE' => urlencode ( 'LOS FARALLONES' ),
		    'COMUNA' => 18,
		    'ESE' => 1,
		    'ZONA' => urlencode ( 'Sur' ),
		    'created_by' => 'admin',
		    'created_at' => Carbon::now ()
		) );
		DB::table ( 'p_barrio' )->insert ( array (
		    'CODIGO_BARRIO' =>  1807,
		    'CODIGO_MUNICIPIO' => 001,
		    'NOMBRE' => urlencode ( 'FRANCISCO ELADIO RAMIREZ' ),
		    'COMUNA' => 18,
		    'ESE' => 1,
		    'ZONA' => urlencode ( 'Sur' ),
		    'created_by' => 'admin',
		    'created_at' => Carbon::now ()
		) );
		DB::table ( 'p_barrio' )->insert ( array (
		    'CODIGO_BARRIO' =>  1808,
		    'CODIGO_MUNICIPIO' => 001,
		    'NOMBRE' => urlencode ( 'PRADOS DEL SUR' ),
		    'COMUNA' => 18,
		    'ESE' => 1,
		    'ZONA' => urlencode ( 'Sur' ),
		    'created_by' => 'admin',
		    'created_at' => Carbon::now ()
		) );
		DB::table ( 'p_barrio' )->insert ( array (
		    'CODIGO_BARRIO' =>  1809,
		    'CODIGO_MUNICIPIO' => 001,
		    'NOMBRE' => urlencode ( 'HORIZONTES' ),
		    'COMUNA' => 18,
		    'ESE' => 1,
		    'ZONA' => urlencode ( 'Sur' ),
		    'created_by' => 'admin',
		    'created_at' => Carbon::now ()
		) );
		DB::table ( 'p_barrio' )->insert ( array (
		    'CODIGO_BARRIO' =>  1810,
		    'CODIGO_MUNICIPIO' => 001,
		    'NOMBRE' => urlencode ( 'MARIO CORREA RENGIFO' ),
		    'COMUNA' => 18,
		    'ESE' => 1,
		    'ZONA' => urlencode ( 'Sur' ),
		    'created_by' => 'admin',
		    'created_at' => Carbon::now ()
		) );
		DB::table ( 'p_barrio' )->insert ( array (
		    'CODIGO_BARRIO' =>  1811,
		    'CODIGO_MUNICIPIO' => 001,
		    'NOMBRE' => urlencode ( 'LOURDES' ),
		    'COMUNA' => 18,
		    'ESE' => 1,
		    'ZONA' => urlencode ( 'Sur' ),
		    'created_by' => 'admin',
		    'created_at' => Carbon::now ()
		) );
		DB::table ( 'p_barrio' )->insert ( array (
		    'CODIGO_BARRIO' =>  1812,
		    'CODIGO_MUNICIPIO' => 001,
		    'NOMBRE' => urlencode ( 'COLINAS DEL SUR' ),
		    'COMUNA' => 18,
		    'ESE' => 1,
		    'ZONA' => urlencode ( 'Sur' ),
		    'created_by' => 'admin',
		    'created_at' => Carbon::now ()
		) );
		DB::table ( 'p_barrio' )->insert ( array (
		    'CODIGO_BARRIO' =>  1813,
		    'CODIGO_MUNICIPIO' => 001,
		    'NOMBRE' => urlencode ( 'ALFEREZ REAL' ),
		    'COMUNA' => 18,
		    'ESE' => 1,
		    'ZONA' => urlencode ( 'Sur' ),
		    'created_by' => 'admin',
		    'created_at' => Carbon::now ()
		) );
		DB::table ( 'p_barrio' )->insert ( array (
		    'CODIGO_BARRIO' =>  1814,
		    'CODIGO_MUNICIPIO' => 001,
		    'NOMBRE' => urlencode ( 'NAPOLES' ),
		    'COMUNA' => 18,
		    'ESE' => 1,
		    'ZONA' => urlencode ( 'Sur' ),
		    'created_by' => 'admin',
		    'created_at' => Carbon::now ()
		) );
		DB::table ( 'p_barrio' )->insert ( array (
		    'CODIGO_BARRIO' =>  1815,
		    'CODIGO_MUNICIPIO' => 001,
		    'NOMBRE' => urlencode ( 'EL JORDAN' ),
		    'COMUNA' => 18,
		    'ESE' => 1,
		    'ZONA' => urlencode ( 'Sur' ),
		    'created_by' => 'admin',
		    'created_at' => Carbon::now ()
		) );
		DB::table ( 'p_barrio' )->insert ( array (
		    'CODIGO_BARRIO' =>  1816,
		    'CODIGO_MUNICIPIO' => 001,
		    'NOMBRE' => urlencode ( 'CUARTELES NAPOLES' ),
		    'COMUNA' => 18,
		    'ESE' => 1,
		    'ZONA' => urlencode ( 'Sur' ),
		    'created_by' => 'admin',
		    'created_at' => Carbon::now ()
		) );
		DB::table ( 'p_barrio' )->insert ( array (
		    'CODIGO_BARRIO' =>  1852,
		    'CODIGO_MUNICIPIO' => 001,
		    'NOMBRE' => urlencode ( 'INV. LAS PALMAS' ),
		    'COMUNA' => 18,
		    'ESE' => 1,
		    'ZONA' => urlencode ( 'Sur' ),
		    'created_by' => 'admin',
		    'created_at' => Carbon::now ()
		) );
		DB::table ( 'p_barrio' )->insert ( array (
		    'CODIGO_BARRIO' =>  1866,
		    'CODIGO_MUNICIPIO' => 001,
		    'NOMBRE' => urlencode ( 'BATALLON PICHINCHA' ),
		    'COMUNA' => 18,
		    'ESE' => 1,
		    'ZONA' => urlencode ( 'Sur' ),
		    'created_by' => 'admin',
		    'created_at' => Carbon::now ()
		) );
		DB::table ( 'p_barrio' )->insert ( array (
		    'CODIGO_BARRIO' =>  1890,
		    'CODIGO_MUNICIPIO' => 001,
		    'NOMBRE' => urlencode ( 'SECTOR ALTO DE LOS CHORROS' ),
		    'COMUNA' => 18,
		    'ESE' => 1,
		    'ZONA' => urlencode ( 'Sur' ),
		    'created_by' => 'admin',
		    'created_at' => Carbon::now ()
		) );
		DB::table ( 'p_barrio' )->insert ( array (
		    'CODIGO_BARRIO' =>  1891,
		    'CODIGO_MUNICIPIO' => 001,
		    'NOMBRE' => urlencode ( 'ALTO MELENDEZ POLVORINES' ),
		    'COMUNA' => 18,
		    'ESE' => 1,
		    'ZONA' => urlencode ( 'Sur' ),
		    'created_by' => 'admin',
		    'created_at' => Carbon::now ()
		) );
		DB::table ( 'p_barrio' )->insert ( array (
		    'CODIGO_BARRIO' =>  1892,
		    'CODIGO_MUNICIPIO' => 001,
		    'NOMBRE' => urlencode ( 'URB. SANTA ELENA' ),
		    'COMUNA' => 18,
		    'ESE' => 1,
		    'ZONA' => urlencode ( 'Sur' ),
		    'created_by' => 'admin',
		    'created_at' => Carbon::now ()
		) );
		DB::table ( 'p_barrio' )->insert ( array (
		    'CODIGO_BARRIO' =>  1897,
		    'CODIGO_MUNICIPIO' => 001,
		    'NOMBRE' => urlencode ( 'SECTOR ALTO JORDAN' ),
		    'COMUNA' => 18,
		    'ESE' => 1,
		    'ZONA' => urlencode ( 'Sur' ),
		    'created_by' => 'admin',
		    'created_at' => Carbon::now ()
		) );
		DB::table ( 'p_barrio' )->insert ( array (
		    'CODIGO_BARRIO' =>  1898,
		    'CODIGO_MUNICIPIO' => 001,
		    'NOMBRE' => urlencode ( 'ALTO NAPOLES' ),
		    'COMUNA' => 18,
		    'ESE' => 1,
		    'ZONA' => urlencode ( 'Sur' ),
		    'created_by' => 'admin',
		    'created_at' => Carbon::now ()
		) );
		
		/*Comuna 19 Cali*/
		DB::table ( 'p_barrio' )->insert ( array (
		    'CODIGO_BARRIO' =>  1901,
		    'CODIGO_MUNICIPIO' => 001,
		    'NOMBRE' => urlencode ( 'EL REFUGIO' ),
		    'COMUNA' => 19,
		    'ESE' => 1,
		    'ZONA' => urlencode ( 'Sur' ),
		    'created_by' => 'admin',
		    'created_at' => Carbon::now ()
		) );
		DB::table ( 'p_barrio' )->insert ( array (
		    'CODIGO_BARRIO' =>  1902,
		    'CODIGO_MUNICIPIO' => 001,
		    'NOMBRE' => urlencode ( 'LA CASCADA' ),
		    'COMUNA' => 19,
		    'ESE' => 1,
		    'ZONA' => urlencode ( 'Sur' ),
		    'created_by' => 'admin',
		    'created_at' => Carbon::now ()
		) );
		DB::table ( 'p_barrio' )->insert ( array (
		    'CODIGO_BARRIO' =>  1903,
		    'CODIGO_MUNICIPIO' => 001,
		    'NOMBRE' => urlencode ( 'EL LIDO' ),
		    'COMUNA' => 19,
		    'ESE' => 1,
		    'ZONA' => urlencode ( 'Sur' ),
		    'created_by' => 'admin',
		    'created_at' => Carbon::now ()
		) );
		DB::table ( 'p_barrio' )->insert ( array (
		    'CODIGO_BARRIO' =>  1904,
		    'CODIGO_MUNICIPIO' => 001,
		    'NOMBRE' => urlencode ( 'URB. TEQUENDAMA' ),
		    'COMUNA' => 19,
		    'ESE' => 1,
		    'ZONA' => urlencode ( 'Sur' ),
		    'created_by' => 'admin',
		    'created_at' => Carbon::now ()
		) );
		DB::table ( 'p_barrio' )->insert ( array (
		    'CODIGO_BARRIO' =>  1905,
		    'CODIGO_MUNICIPIO' => 001,
		    'NOMBRE' => urlencode ( 'EUCARISTICO' ),
		    'COMUNA' => 19,
		    'ESE' => 1,
		    'ZONA' => urlencode ( 'Sur' ),
		    'created_by' => 'admin',
		    'created_at' => Carbon::now ()
		) );
		DB::table ( 'p_barrio' )->insert ( array (
		    'CODIGO_BARRIO' =>  1906,
		    'CODIGO_MUNICIPIO' => 001,
		    'NOMBRE' => urlencode ( 'SAN FERNANDO NUEVO' ),
		    'COMUNA' => 19,
		    'ESE' => 1,
		    'ZONA' => urlencode ( 'Sur' ),
		    'created_by' => 'admin',
		    'created_at' => Carbon::now ()
		) );
		DB::table ( 'p_barrio' )->insert ( array (
		    'CODIGO_BARRIO' =>  1907,
		    'CODIGO_MUNICIPIO' => 001,
		    'NOMBRE' => urlencode ( 'URB. NUEVA GRANADA' ),
		    'COMUNA' => 19,
		    'ESE' => 1,
		    'ZONA' => urlencode ( 'Sur' ),
		    'created_by' => 'admin',
		    'created_at' => Carbon::now ()
		) );
		DB::table ( 'p_barrio' )->insert ( array (
		    'CODIGO_BARRIO' =>  1908,
		    'CODIGO_MUNICIPIO' => 001,
		    'NOMBRE' => urlencode ( 'SANTA ISABEL' ),
		    'COMUNA' => 19,
		    'ESE' => 1,
		    'ZONA' => urlencode ( 'Sur' ),
		    'created_by' => 'admin',
		    'created_at' => Carbon::now ()
		) );
		DB::table ( 'p_barrio' )->insert ( array (
		    'CODIGO_BARRIO' =>  1909,
		    'CODIGO_MUNICIPIO' => 001,
		    'NOMBRE' => urlencode ( 'BELLAVISTA' ),
		    'COMUNA' => 19,
		    'ESE' => 1,
		    'ZONA' => urlencode ( 'Sur' ),
		    'created_by' => 'admin',
		    'created_at' => Carbon::now ()
		) );
		DB::table ( 'p_barrio' )->insert ( array (
		    'CODIGO_BARRIO' =>  1910,
		    'CODIGO_MUNICIPIO' => 001,
		    'NOMBRE' => urlencode ( 'SAN FERNANDO VIEJO' ),
		    'COMUNA' => 19,
		    'ESE' => 1,
		    'ZONA' => urlencode ( 'Sur' ),
		    'created_by' => 'admin',
		    'created_at' => Carbon::now ()
		) );
		DB::table ( 'p_barrio' )->insert ( array (
		    'CODIGO_BARRIO' =>  1911,
		    'CODIGO_MUNICIPIO' => 001,
		    'NOMBRE' => urlencode ( 'MIRAFLORES' ),
		    'COMUNA' => 19,
		    'ESE' => 1,
		    'ZONA' => urlencode ( 'Sur' ),
		    'created_by' => 'admin',
		    'created_at' => Carbon::now ()
		) );
		DB::table ( 'p_barrio' )->insert ( array (
		    'CODIGO_BARRIO' =>  1912,
		    'CODIGO_MUNICIPIO' => 001,
		    'NOMBRE' => urlencode ( '3 DE JULIO' ),
		    'COMUNA' => 19,
		    'ESE' => 1,
		    'ZONA' => urlencode ( 'Sur' ),
		    'created_by' => 'admin',
		    'created_at' => Carbon::now ()
		) );
		DB::table ( 'p_barrio' )->insert ( array (
		    'CODIGO_BARRIO' =>  1913,
		    'CODIGO_MUNICIPIO' => 001,
		    'NOMBRE' => urlencode ( 'EL CEDRO' ),
		    'COMUNA' => 19,
		    'ESE' => 1,
		    'ZONA' => urlencode ( 'Sur' ),
		    'created_by' => 'admin',
		    'created_at' => Carbon::now ()
		) );
		DB::table ( 'p_barrio' )->insert ( array (
		    'CODIGO_BARRIO' =>  1914,
		    'CODIGO_MUNICIPIO' => 001,
		    'NOMBRE' => urlencode ( 'CHAMPANAGT' ),
		    'COMUNA' => 19,
		    'ESE' => 1,
		    'ZONA' => urlencode ( 'Sur' ),
		    'created_by' => 'admin',
		    'created_at' => Carbon::now ()
		) );
		DB::table ( 'p_barrio' )->insert ( array (
		    'CODIGO_BARRIO' =>  1915,
		    'CODIGO_MUNICIPIO' => 001,
		    'NOMBRE' => urlencode ( 'URB.COLSEGUROS' ),
		    'COMUNA' => 19,
		    'ESE' => 1,
		    'ZONA' => urlencode ( 'Sur' ),
		    'created_by' => 'admin',
		    'created_at' => Carbon::now ()
		) );
		DB::table ( 'p_barrio' )->insert ( array (
		    'CODIGO_BARRIO' =>  1916,
		    'CODIGO_MUNICIPIO' => 001,
		    'NOMBRE' => urlencode ( 'LOS CAMBULOS' ),
		    'COMUNA' => 19,
		    'ESE' => 1,
		    'ZONA' => urlencode ( 'Sur' ),
		    'created_by' => 'admin',
		    'created_at' => Carbon::now ()
		) );
		DB::table ( 'p_barrio' )->insert ( array (
		    'CODIGO_BARRIO' =>  1917,
		    'CODIGO_MUNICIPIO' => 001,
		    'NOMBRE' => urlencode ( 'EL MORTIÑAL' ),
		    'COMUNA' => 19,
		    'ESE' => 1,
		    'ZONA' => urlencode ( 'Sur' ),
		    'created_by' => 'admin',
		    'created_at' => Carbon::now ()
		) );
		DB::table ( 'p_barrio' )->insert ( array (
		    'CODIGO_BARRIO' =>  1918,
		    'CODIGO_MUNICIPIO' => 001,
		    'NOMBRE' => urlencode ( 'URB. MILITAR' ),
		    'COMUNA' => 19,
		    'ESE' => 1,
		    'ZONA' => urlencode ( 'Sur' ),
		    'created_by' => 'admin',
		    'created_at' => Carbon::now ()
		) );
		DB::table ( 'p_barrio' )->insert ( array (
		    'CODIGO_BARRIO' =>  1919,
		    'CODIGO_MUNICIPIO' => 001,
		    'NOMBRE' => urlencode ( 'CUARTO DE LEGUA' ),
		    'COMUNA' => 19,
		    'ESE' => 1,
		    'ZONA' => urlencode ( 'Sur' ),
		    'created_by' => 'admin',
		    'created_at' => Carbon::now ()
		) );
		DB::table ( 'p_barrio' )->insert ( array (
		    'CODIGO_BARRIO' =>  1920,
		    'CODIGO_MUNICIPIO' => 001,
		    'NOMBRE' => urlencode ( 'U.D. PANAMERICANA ANT HIPODROMO' ),
		    'COMUNA' => 19,
		    'ESE' => 1,
		    'ZONA' => urlencode ( 'Sur' ),
		    'created_by' => 'admin',
		    'created_at' => Carbon::now ()
		) );
		DB::table ( 'p_barrio' )->insert ( array (
		    'CODIGO_BARRIO' =>  1921,
		    'CODIGO_MUNICIPIO' => 001,
		    'NOMBRE' => urlencode ( 'NUEVA TEQUENDAMA' ),
		    'COMUNA' => 19,
		    'ESE' => 1,
		    'ZONA' => urlencode ( 'Sur' ),
		    'created_by' => 'admin',
		    'created_at' => Carbon::now ()
		) );
		DB::table ( 'p_barrio' )->insert ( array (
		    'CODIGO_BARRIO' =>  1922,
		    'CODIGO_MUNICIPIO' => 001,
		    'NOMBRE' => urlencode ( 'CAMINO REAL - JOAQUIN BORRERO' ),
		    'COMUNA' => 19,
		    'ESE' => 1,
		    'ZONA' => urlencode ( 'Sur' ),
		    'created_by' => 'admin',
		    'created_at' => Carbon::now ()
		) );
		DB::table ( 'p_barrio' )->insert ( array (
		    'CODIGO_BARRIO' =>  1923,
		    'CODIGO_MUNICIPIO' => 001,
		    'NOMBRE' => urlencode ( 'CAMINO REAL - LOS FUNDADORES' ),
		    'COMUNA' => 19,
		    'ESE' => 1,
		    'ZONA' => urlencode ( 'Sur' ),
		    'created_by' => 'admin',
		    'created_at' => Carbon::now ()
		) );
		DB::table ( 'p_barrio' )->insert ( array (
		    'CODIGO_BARRIO' =>  1981,
		    'CODIGO_MUNICIPIO' => 001,
		    'NOMBRE' => urlencode ( 'SECTOR ALTOS SANTA ISABEL' ),
		    'COMUNA' => 19,
		    'ESE' => 1,
		    'ZONA' => urlencode ( 'Sur' ),
		    'created_by' => 'admin',
		    'created_at' => Carbon::now ()
		) );
		DB::table ( 'p_barrio' )->insert ( array (
		    'CODIGO_BARRIO' =>  1982,
		    'CODIGO_MUNICIPIO' => 001,
		    'NOMBRE' => urlencode ( 'SANTA BARBARA' ),
		    'COMUNA' => 19,
		    'ESE' => 1,
		    'ZONA' => urlencode ( 'Sur' ),
		    'created_by' => 'admin',
		    'created_at' => Carbon::now ()
		) );
		DB::table ( 'p_barrio' )->insert ( array (
		    'CODIGO_BARRIO' =>  1983,
		    'CODIGO_MUNICIPIO' => 001,
		    'NOMBRE' => urlencode ( 'CRISTALES' ),
		    'COMUNA' => 19,
		    'ESE' => 1,
		    'ZONA' => urlencode ( 'Sur' ),
		    'created_by' => 'admin',
		    'created_at' => Carbon::now ()
		) );
		DB::table ( 'p_barrio' )->insert ( array (
		    'CODIGO_BARRIO' =>  1984,
		    'CODIGO_MUNICIPIO' => 001,
		    'NOMBRE' => urlencode ( 'U.D. RESIDENCIAL SANTIAGO DE CALI' ),
		    'COMUNA' => 19,
		    'ESE' => 1,
		    'ZONA' => urlencode ( 'Sur' ),
		    'created_by' => 'admin',
		    'created_at' => Carbon::now ()
		) );
		DB::table ( 'p_barrio' )->insert ( array (
		    'CODIGO_BARRIO' =>  1985,
		    'CODIGO_MUNICIPIO' => 001,
		    'NOMBRE' => urlencode ( 'U.D. RESIDENCIAL EL COLISEO' ),
		    'COMUNA' => 19,
		    'ESE' => 1,
		    'ZONA' => urlencode ( 'Sur' ),
		    'created_by' => 'admin',
		    'created_at' => Carbon::now ()
		) );
		DB::table ( 'p_barrio' )->insert ( array (
		    'CODIGO_BARRIO' =>  1988,
		    'CODIGO_MUNICIPIO' => 001,
		    'NOMBRE' => urlencode ( 'CAÑAVERALEJO' ),
		    'COMUNA' => 19,
		    'ESE' => 1,
		    'ZONA' => urlencode ( 'Sur' ),
		    'created_by' => 'admin',
		    'created_at' => Carbon::now ()
		) );
		DB::table ( 'p_barrio' )->insert ( array (
		    'CODIGO_BARRIO' =>  1992,
		    'CODIGO_MUNICIPIO' => 001,
		    'NOMBRE' => urlencode ( 'CAÑAVERAL' ),
		    'COMUNA' => 19,
		    'ESE' => 1,
		    'ZONA' => urlencode ( 'Sur' ),
		    'created_by' => 'admin',
		    'created_at' => Carbon::now ()
		) );
		DB::table ( 'p_barrio' )->insert ( array (
		    'CODIGO_BARRIO' =>  1994,
		    'CODIGO_MUNICIPIO' => 001,
		    'NOMBRE' => urlencode ( 'PAMPA LINDA' ),
		    'COMUNA' => 19,
		    'ESE' => 1,
		    'ZONA' => urlencode ( 'Sur' ),
		    'created_by' => 'admin',
		    'created_at' => Carbon::now ()
		) );
		DB::table ( 'p_barrio' )->insert ( array (
		    'CODIGO_BARRIO' =>  1995,
		    'CODIGO_MUNICIPIO' => 001,
		    'NOMBRE' => urlencode ( 'SECTOR CAÑAVERALEJO ANTIGUA GUADALUPE' ),
		    'COMUNA' => 19,
		    'ESE' => 1,
		    'ZONA' => urlencode ( 'Sur' ),
		    'created_by' => 'admin',
		    'created_at' => Carbon::now ()
		) );
		DB::table ( 'p_barrio' )->insert ( array (
		    'CODIGO_BARRIO' =>  1997,
		    'CODIGO_MUNICIPIO' => 001,
		    'NOMBRE' => urlencode ( 'SECTOR BOSQUE MUNICIPAL' ),
		    'COMUNA' => 19,
		    'ESE' => 1,
		    'ZONA' => urlencode ( 'Sur' ),
		    'created_by' => 'admin',
		    'created_at' => Carbon::now ()
		) );
		DB::table ( 'p_barrio' )->insert ( array (
		    'CODIGO_BARRIO' =>  1999,
		    'CODIGO_MUNICIPIO' => 001,
		    'NOMBRE' => urlencode ( 'U.D. DEPORTIVA A. GALINDO PL TOROS' ),
		    'COMUNA' => 19,
		    'ESE' => 1,
		    'ZONA' => urlencode ( 'Sur' ),
		    'created_by' => 'admin',
		    'created_at' => Carbon::now ()
		) );
		DB::table ( 'p_barrio' )->insert ( array (
		    'CODIGO_BARRIO' =>  19051,
		    'CODIGO_MUNICIPIO' => 001,
		    'NOMBRE' => urlencode ( 'TEMPLETE' ),
		    'COMUNA' => 19,
		    'ESE' => 1,
		    'ZONA' => urlencode ( 'Sur' ),
		    'created_by' => 'admin',
		    'created_at' => Carbon::now ()
		) );
		DB::table ( 'p_barrio' )->insert ( array (
		    'CODIGO_BARRIO' =>  19192,
		    'CODIGO_MUNICIPIO' => 001,
		    'NOMBRE' => urlencode ( 'GUADALUPE' ),
		    'COMUNA' => 19,
		    'ESE' => 1,
		    'ZONA' => urlencode ( 'Sur' ),
		    'created_by' => 'admin',
		    'created_at' => Carbon::now ()
		) );
		DB::table ( 'p_barrio' )->insert ( array (
		    'CODIGO_BARRIO' =>  19831,
		    'CODIGO_MUNICIPIO' => 001,
		    'NOMBRE' => urlencode ( 'TEJARES' ),
		    'COMUNA' => 19,
		    'ESE' => 1,
		    'ZONA' => urlencode ( 'Sur' ),
		    'created_by' => 'admin',
		    'created_at' => Carbon::now ()
		) );
		DB::table ( 'p_barrio' )->insert ( array (
		    'CODIGO_BARRIO' =>  19881,
		    'CODIGO_MUNICIPIO' => 001,
		    'NOMBRE' => urlencode ( 'SEGUROS PATRIA' ),
		    'COMUNA' => 19,
		    'ESE' => 1,
		    'ZONA' => urlencode ( 'Sur' ),
		    'created_by' => 'admin',
		    'created_at' => Carbon::now ()
		) );
		
		/*Comuna 20 Cali*/
		DB::table ( 'p_barrio' )->insert ( array (
		    'CODIGO_BARRIO' =>  2001,
		    'CODIGO_MUNICIPIO' => 001,
		    'NOMBRE' => urlencode ( 'EL CORTIJO' ),
		    'COMUNA' => 20,
		    'ESE' => 1,
		    'ZONA' => urlencode ( 'Sur' ),
		    'created_by' => 'admin',
		    'created_at' => Carbon::now ()
		) );
		DB::table ( 'p_barrio' )->insert ( array (
		    'CODIGO_BARRIO' =>  2002,
		    'CODIGO_MUNICIPIO' => 001,
		    'NOMBRE' => urlencode ( 'BELISARIO CAICEDO' ),
		    'COMUNA' => 20,
		    'ESE' => 1,
		    'ZONA' => urlencode ( 'Sur' ),
		    'created_by' => 'admin',
		    'created_at' => Carbon::now ()
		) );
		DB::table ( 'p_barrio' )->insert ( array (
		    'CODIGO_BARRIO' =>  2003,
		    'CODIGO_MUNICIPIO' => 001,
		    'NOMBRE' => urlencode ( 'SILOE' ),
		    'COMUNA' => 20,
		    'ESE' => 1,
		    'ZONA' => urlencode ( 'Sur' ),
		    'created_by' => 'admin',
		    'created_at' => Carbon::now ()
		) );
		DB::table ( 'p_barrio' )->insert ( array (
		    'CODIGO_BARRIO' =>  2004,
		    'CODIGO_MUNICIPIO' => 001,
		    'NOMBRE' => urlencode ( 'LLERAS CAMARGO' ),
		    'COMUNA' => 20,
		    'ESE' => 1,
		    'ZONA' => urlencode ( 'Sur' ),
		    'created_by' => 'admin',
		    'created_at' => Carbon::now ()
		) );
		DB::table ( 'p_barrio' )->insert ( array (
		    'CODIGO_BARRIO' =>  2005,
		    'CODIGO_MUNICIPIO' => 001,
		    'NOMBRE' => urlencode ( 'BELEN' ),
		    'COMUNA' => 20,
		    'ESE' => 1,
		    'ZONA' => urlencode ( 'Sur' ),
		    'created_by' => 'admin',
		    'created_at' => Carbon::now ()
		) );
		DB::table ( 'p_barrio' )->insert ( array (
		    'CODIGO_BARRIO' =>  2006,
		    'CODIGO_MUNICIPIO' => 001,
		    'NOMBRE' => urlencode ( 'BRISAS DE MAYO' ),
		    'COMUNA' => 20,
		    'ESE' => 1,
		    'ZONA' => urlencode ( 'Sur' ),
		    'created_by' => 'admin',
		    'created_at' => Carbon::now ()
		) );
		DB::table ( 'p_barrio' )->insert ( array (
		    'CODIGO_BARRIO' =>  2007,
		    'CODIGO_MUNICIPIO' => 001,
		    'NOMBRE' => urlencode ( 'TIERRA BLANCA' ),
		    'COMUNA' => 20,
		    'ESE' => 1,
		    'ZONA' => urlencode ( 'Sur' ),
		    'created_by' => 'admin',
		    'created_at' => Carbon::now ()
		) );
		DB::table ( 'p_barrio' )->insert ( array (
		    'CODIGO_BARRIO' =>  2008,
		    'CODIGO_MUNICIPIO' => 001,
		    'NOMBRE' => urlencode ( 'PUEBLO JOVEN' ),
		    'COMUNA' => 20,
		    'ESE' => 1,
		    'ZONA' => urlencode ( 'Sur' ),
		    'created_by' => 'admin',
		    'created_at' => Carbon::now ()
		) );
		DB::table ( 'p_barrio' )->insert ( array (
		    'CODIGO_BARRIO' =>  2010,
		    'CODIGO_MUNICIPIO' => 001,
		    'NOMBRE' => urlencode ( 'VILLA CATALINA' ),
		    'COMUNA' => 20,
		    'ESE' => 1,
		    'ZONA' => urlencode ( 'Sur' ),
		    'created_by' => 'admin',
		    'created_at' => Carbon::now ()
		) );
		DB::table ( 'p_barrio' )->insert ( array (
		    'CODIGO_BARRIO' =>  2097,
		    'CODIGO_MUNICIPIO' => 001,
		    'NOMBRE' => urlencode ( 'CEMENTERIO CARABINEROS' ),
		    'COMUNA' => 20,
		    'ESE' => 1,
		    'ZONA' => urlencode ( 'Sur' ),
		    'created_by' => 'admin',
		    'created_at' => Carbon::now ()
		) );
		DB::table ( 'p_barrio' )->insert ( array (
		    'CODIGO_BARRIO' =>  2098,
		    'CODIGO_MUNICIPIO' => 001,
		    'NOMBRE' => urlencode ( 'URB. VENEZUELA' ),
		    'COMUNA' => 20,
		    'ESE' => 1,
		    'ZONA' => urlencode ( 'Sur' ),
		    'created_by' => 'admin',
		    'created_at' => Carbon::now ()
		) );
		DB::table ( 'p_barrio' )->insert ( array (
		    'CODIGO_BARRIO' =>  2099,
		    'CODIGO_MUNICIPIO' => 001,
		    'NOMBRE' => urlencode ( 'PARCELACION MONACO LA SULTANA' ),
		    'COMUNA' => 20,
		    'ESE' => 1,
		    'ZONA' => urlencode ( 'Sur' ),
		    'created_by' => 'admin',
		    'created_at' => Carbon::now ()
		) );
		
		/*Comuna 21 Cali*/
		DB::table ( 'p_barrio' )->insert ( array (
		    'CODIGO_BARRIO' =>  2101,
		    'CODIGO_MUNICIPIO' => 001,
		    'NOMBRE' => urlencode ( 'PIZAMOS I' ),
		    'COMUNA' => 21,
		    'ESE' => 4,
		    'ZONA' => urlencode ( 'Distrito Agua Blanca' ),
		    'created_by' => 'admin',
		    'created_at' => Carbon::now ()
		) );
		DB::table ( 'p_barrio' )->insert ( array (
		    'CODIGO_BARRIO' =>  2102,
		    'CODIGO_MUNICIPIO' => 001,
		    'NOMBRE' => urlencode ( 'PIZAMOS II' ),
		    'COMUNA' => 21,
		    'ESE' => 4,
		    'ZONA' => urlencode ( 'Distrito Agua Blanca' ),
		    'created_by' => 'admin',
		    'created_at' => Carbon::now ()
		) );
		DB::table ( 'p_barrio' )->insert ( array (
		    'CODIGO_BARRIO' =>  2103,
		    'CODIGO_MUNICIPIO' => 001,
		    'NOMBRE' => urlencode ( 'CALIMIO DESEPAZ' ),
		    'COMUNA' => 21,
		    'ESE' => 4,
		    'ZONA' => urlencode ( 'Distrito Agua Blanca' ),
		    'created_by' => 'admin',
		    'created_at' => Carbon::now ()
		) );
		DB::table ( 'p_barrio' )->insert ( array (
		    'CODIGO_BARRIO' =>  2104,
		    'CODIGO_MUNICIPIO' => 001,
		    'NOMBRE' => urlencode ( 'EL REMANSO' ),
		    'COMUNA' => 21,
		    'ESE' => 4,
		    'ZONA' => urlencode ( 'Distrito Agua Blanca' ),
		    'created_by' => 'admin',
		    'created_at' => Carbon::now ()
		) );
		DB::table ( 'p_barrio' )->insert ( array (
		    'CODIGO_BARRIO' =>  2105,
		    'CODIGO_MUNICIPIO' => 001,
		    'NOMBRE' => urlencode ( 'LOS LIDERES' ),
		    'COMUNA' => 21,
		    'ESE' => 4,
		    'ZONA' => urlencode ( 'Distrito Agua Blanca' ),
		    'created_by' => 'admin',
		    'created_at' => Carbon::now ()
		) );
		DB::table ( 'p_barrio' )->insert ( array (
		    'CODIGO_BARRIO' =>  2106,
		    'CODIGO_MUNICIPIO' => 001,
		    'NOMBRE' => urlencode ( 'DESEPAZ - INVICALI' ),
		    'COMUNA' => 21,
		    'ESE' => 4,
		    'ZONA' => urlencode ( 'Distrito Agua Blanca' ),
		    'created_by' => 'admin',
		    'created_at' => Carbon::now ()
		) );
		DB::table ( 'p_barrio' )->insert ( array (
		    'CODIGO_BARRIO' =>  2107,
		    'CODIGO_MUNICIPIO' => 001,
		    'NOMBRE' => urlencode ( 'COMPARTIR' ),
		    'COMUNA' => 21,
		    'ESE' => 4,
		    'ZONA' => urlencode ( 'Distrito Agua Blanca' ),
		    'created_by' => 'admin',
		    'created_at' => Carbon::now ()
		) );
		DB::table ( 'p_barrio' )->insert ( array (
		    'CODIGO_BARRIO' =>  2108,
		    'CODIGO_MUNICIPIO' => 001,
		    'NOMBRE' => urlencode ( 'CIUDAD TALANGA' ),
		    'COMUNA' => 21,
		    'ESE' => 4,
		    'ZONA' => urlencode ( 'Distrito Agua Blanca' ),
		    'created_by' => 'admin',
		    'created_at' => Carbon::now ()
		) );
		DB::table ( 'p_barrio' )->insert ( array (
		    'CODIGO_BARRIO' =>  2109,
		    'CODIGO_MUNICIPIO' => 001,
		    'NOMBRE' => urlencode ( 'GUALANDAY' ),
		    'COMUNA' => 21,
		    'ESE' => 4,
		    'ZONA' => urlencode ( 'Distrito Agua Blanca' ),
		    'created_by' => 'admin',
		    'created_at' => Carbon::now ()
		) );
		DB::table ( 'p_barrio' )->insert ( array (
		    'CODIGO_BARRIO' =>  2110,
		    'CODIGO_MUNICIPIO' => 001,
		    'NOMBRE' => urlencode ( 'SOL DE ORIENTE' ),
		    'COMUNA' => 21,
		    'ESE' => 4,
		    'ZONA' => urlencode ( 'Distrito Agua Blanca' ),
		    'created_by' => 'admin',
		    'created_at' => Carbon::now ()
		) );
		DB::table ( 'p_barrio' )->insert ( array (
		    'CODIGO_BARRIO' =>  2111,
		    'CODIGO_MUNICIPIO' => 001,
		    'NOMBRE' => urlencode ( 'SUERTE 90' ),
		    'COMUNA' => 21,
		    'ESE' => 4,
		    'ZONA' => urlencode ( 'Distrito Agua Blanca' ),
		    'created_by' => 'admin',
		    'created_at' => Carbon::now ()
		) );
		DB::table ( 'p_barrio' )->insert ( array (
		    'CODIGO_BARRIO' =>  2112,
		    'CODIGO_MUNICIPIO' => 001,
		    'NOMBRE' => urlencode ( 'LA CINTA' ),
		    'COMUNA' => 21,
		    'ESE' => 4,
		    'ZONA' => urlencode ( 'Distrito Agua Blanca' ),
		    'created_by' => 'admin',
		    'created_at' => Carbon::now ()
		) );
		DB::table ( 'p_barrio' )->insert ( array (
		    'CODIGO_BARRIO' =>  2115,
		    'CODIGO_MUNICIPIO' => 001,
		    'NOMBRE' => urlencode ( 'TERCER MILENIO' ),
		    'COMUNA' => 21,
		    'ESE' => 4,
		    'ZONA' => urlencode ( 'Distrito Agua Blanca' ),
		    'created_by' => 'admin',
		    'created_at' => Carbon::now ()
		) );
		DB::table ( 'p_barrio' )->insert ( array (
		    'CODIGO_BARRIO' =>  2194,
		    'CODIGO_MUNICIPIO' => 001,
		    'NOMBRE' => urlencode ( 'LAS GARZAS' ),
		    'COMUNA' => 21,
		    'ESE' => 4,
		    'ZONA' => urlencode ( 'Distrito Agua Blanca' ),
		    'created_by' => 'admin',
		    'created_at' => Carbon::now ()
		) );
		DB::table ( 'p_barrio' )->insert ( array (
		    'CODIGO_BARRIO' =>  2195,
		    'CODIGO_MUNICIPIO' => 001,
		    'NOMBRE' => urlencode ( 'LAS DALIAS' ),
		    'COMUNA' => 21,
		    'ESE' => 4,
		    'ZONA' => urlencode ( 'Distrito Agua Blanca' ),
		    'created_by' => 'admin',
		    'created_at' => Carbon::now ()
		) );
		DB::table ( 'p_barrio' )->insert ( array (
		    'CODIGO_BARRIO' =>  2196,
		    'CODIGO_MUNICIPIO' => 001,
		    'NOMBRE' => urlencode ( 'POTRERO GRANDE' ),
		    'COMUNA' => 21,
		    'ESE' => 4,
		    'ZONA' => urlencode ( 'Distrito Agua Blanca' ),
		    'created_by' => 'admin',
		    'created_at' => Carbon::now ()
		) );
		DB::table ( 'p_barrio' )->insert ( array (
		    'CODIGO_BARRIO' =>  2197,
		    'CODIGO_MUNICIPIO' => 001,
		    'NOMBRE' => urlencode ( 'CIUDADELA  DEL RIO CVC' ),
		    'COMUNA' => 21,
		    'ESE' => 4,
		    'ZONA' => urlencode ( 'Distrito Agua Blanca' ),
		    'created_by' => 'admin',
		    'created_at' => Carbon::now ()
		) );
		DB::table ( 'p_barrio' )->insert ( array (
		    'CODIGO_BARRIO' =>  2198,
		    'CODIGO_MUNICIPIO' => 001,
		    'NOMBRE' => urlencode ( 'VALLE GRANDE' ),
		    'COMUNA' => 21,
		    'ESE' => 4,
		    'ZONA' => urlencode ( 'Distrito Agua Blanca' ),
		    'created_by' => 'admin',
		    'created_at' => Carbon::now ()
		) );
		DB::table ( 'p_barrio' )->insert ( array (
		    'CODIGO_BARRIO' =>  2199,
		    'CODIGO_MUNICIPIO' => 001,
		    'NOMBRE' => urlencode ( 'PLANTA TRATAMIENTO' ),
		    'COMUNA' => 21,
		    'ESE' => 4,
		    'ZONA' => urlencode ( 'Distrito Agua Blanca' ),
		    'created_by' => 'admin',
		    'created_at' => Carbon::now ()
		) );
		DB::table ( 'p_barrio' )->insert ( array (
		    'CODIGO_BARRIO' =>  21942,
		    'CODIGO_MUNICIPIO' => 001,
		    'NOMBRE' => urlencode ( 'VILLA LUZ' ),
		    'COMUNA' => 21,
		    'ESE' => 4,
		    'ZONA' => urlencode ( 'Distrito Agua Blanca' ),
		    'created_by' => 'admin',
		    'created_at' => Carbon::now ()
		) );
		DB::table ( 'p_barrio' )->insert ( array (
		    'CODIGO_BARRIO' =>  21943,
		    'CODIGO_MUNICIPIO' => 001,
		    'NOMBRE' => urlencode ( 'VILLAMERCEDES I' ),
		    'COMUNA' => 21,
		    'ESE' => 4,
		    'ZONA' => urlencode ( 'Distrito Agua Blanca' ),
		    'created_by' => 'admin',
		    'created_at' => Carbon::now ()
		) );
		DB::table ( 'p_barrio' )->insert ( array (
		    'CODIGO_BARRIO' =>  21952,
		    'CODIGO_MUNICIPIO' => 001,
		    'NOMBRE' => urlencode ( 'PIZAMOS III' ),
		    'COMUNA' => 21,
		    'ESE' => 4,
		    'ZONA' => urlencode ( 'Distrito Agua Blanca' ),
		    'created_by' => 'admin',
		    'created_at' => Carbon::now ()
		) );
		
		/*Comuna 22 Cali*/
		
		DB::table ( 'p_barrio' )->insert ( array (
		    'CODIGO_BARRIO' =>  2201,
		    'CODIGO_MUNICIPIO' => 001,
		    'NOMBRE' => urlencode ( 'CIUDAD JARDIN' ),
		    'COMUNA' => 22,
		    'ESE' => 1,
		    'ZONA' => urlencode ( 'Sur' ),
		    'created_by' => 'admin',
		    'created_at' => Carbon::now ()
		) );
		DB::table ( 'p_barrio' )->insert ( array (
		    'CODIGO_BARRIO' =>  2296,
		    'CODIGO_MUNICIPIO' => 001,
		    'NOMBRE' => urlencode ( 'PARCELACIONES PANCE' ),
		    'COMUNA' => 22,
		    'ESE' => 1,
		    'ZONA' => urlencode ( 'Sur' ),
		    'created_by' => 'admin',
		    'created_at' => Carbon::now ()
		) );
		DB::table ( 'p_barrio' )->insert ( array (
		    'CODIGO_BARRIO' =>  2297,
		    'CODIGO_MUNICIPIO' => 001,
		    'NOMBRE' => urlencode ( 'URBANIZACIÓN RIO LILI' ),
		    'COMUNA' => 22,
		    'ESE' => 1,
		    'ZONA' => urlencode ( 'Sur' ),
		    'created_by' => 'admin',
		    'created_at' => Carbon::now ()
		) );
		DB::table ( 'p_barrio' )->insert ( array (
		    'CODIGO_BARRIO' =>  2298,
		    'CODIGO_MUNICIPIO' => 001,
		    'NOMBRE' => urlencode ( 'CIUDAD CAMPESTRE' ),
		    'COMUNA' => 22,
		    'ESE' => 1,
		    'ZONA' => urlencode ( 'Sur' ),
		    'created_by' => 'admin',
		    'created_at' => Carbon::now ()
		) );
		DB::table ( 'p_barrio' )->insert ( array (
		    'CODIGO_BARRIO' =>  2299,
		    'CODIGO_MUNICIPIO' => 001,
		    'NOMBRE' => urlencode ( 'CLUB CAMPESTRE' ),
		    'COMUNA' => 22,
		    'ESE' => 1,
		    'ZONA' => urlencode ( 'Sur' ),
		    'created_by' => 'admin',
		    'created_at' => Carbon::now ()
		) );
		/*ZONA SIN DEFINIR cabeceras cali y municipios aledaños*/
		DB::table ( 'p_barrio' )->insert ( array (
		    'CODIGO_BARRIO' =>  5100,
		    'CODIGO_MUNICIPIO' => 001,
		    'NOMBRE' => urlencode ( 'NAVARRO' ),
		    'COMUNA' => 100,
		    'ESE' => 1,
		    'ZONA' => urlencode ( 'ZONA SIN DEFINIR' ),
		    'created_by' => 'admin',
		    'created_at' => Carbon::now ()
		) );
		DB::table ( 'p_barrio' )->insert ( array (
		    'CODIGO_BARRIO' =>  5101,
		    'CODIGO_MUNICIPIO' => 001,
		    'NOMBRE' => urlencode ( 'NAVARRO  (Cabecera)' ),
		    'COMUNA' => 100,
		    'ESE' => 1,
		    'ZONA' => urlencode ( 'ZONA SIN DEFINIR' ),
		    'created_by' => 'admin',
		    'created_at' => Carbon::now ()
		) );
		DB::table ( 'p_barrio' )->insert ( array (
		    'CODIGO_BARRIO' =>  5201,
		    'CODIGO_MUNICIPIO' => 001,
		    'NOMBRE' => urlencode ( 'EL HORMIGUERO' ),
		    'COMUNA' => 100,
		    'ESE' => 1,
		    'ZONA' => urlencode ( 'ZONA SIN DEFINIR' ),
		    'created_by' => 'admin',
		    'created_at' => Carbon::now ()
		) );
		DB::table ( 'p_barrio' )->insert ( array (
		    'CODIGO_BARRIO' =>  5205,
		    'CODIGO_MUNICIPIO' => 001,
		    'NOMBRE' => urlencode ( 'CASCAJAL' ),
		    'COMUNA' => 100,
		    'ESE' => 1,
		    'ZONA' => urlencode ( 'ZONA SIN DEFINIR' ),
		    'created_by' => 'admin',
		    'created_at' => Carbon::now ()
		) );
		DB::table ( 'p_barrio' )->insert ( array (
		    'CODIGO_BARRIO' =>  5292,
		    'CODIGO_MUNICIPIO' => 001,
		    'NOMBRE' => urlencode ( 'CLUB CAÑASGORDAS' ),
		    'COMUNA' => 100,
		    'ESE' => 1,
		    'ZONA' => urlencode ( 'ZONA SIN DEFINIR' ),
		    'created_by' => 'admin',
		    'created_at' => Carbon::now ()
		) );
		DB::table ( 'p_barrio' )->insert ( array (
		    'CODIGO_BARRIO' =>  5295,
		    'CODIGO_MUNICIPIO' => 001,
		    'NOMBRE' => urlencode ( 'VIA A JAMUNDI' ),
		    'COMUNA' => 100,
		    'ESE' => 1,
		    'ZONA' => urlencode ( 'ZONA SIN DEFINIR' ),
		    'created_by' => 'admin',
		    'created_at' => Carbon::now ()
		) );
		DB::table ( 'p_barrio' )->insert ( array (
		    'CODIGO_BARRIO' =>  5299,
		    'CODIGO_MUNICIPIO' => 001,
		    'NOMBRE' => urlencode ( 'VIA A JAMUNDI CAÑASGORDAS' ),
		    'COMUNA' => 100,
		    'ESE' => 1,
		    'ZONA' => urlencode ( 'ZONA SIN DEFINIR' ),
		    'created_by' => 'admin',
		    'created_at' => Carbon::now ()
		) );
		DB::table ( 'p_barrio' )->insert ( array (
		    'CODIGO_BARRIO' =>  5300,
		    'CODIGO_MUNICIPIO' => 001,
		    'NOMBRE' => urlencode ( 'PANCE ALTO' ),
		    'COMUNA' => 100,
		    'ESE' => 1,
		    'ZONA' => urlencode ( 'ZONA SIN DEFINIR' ),
		    'created_by' => 'admin',
		    'created_at' => Carbon::now ()
		) );
		DB::table ( 'p_barrio' )->insert ( array (
		    'CODIGO_BARRIO' =>  5301,
		    'CODIGO_MUNICIPIO' => 001,
		    'NOMBRE' => urlencode ( 'CTO.PANCE' ),
		    'COMUNA' => 100,
		    'ESE' => 1,
		    'ZONA' => urlencode ( 'ZONA SIN DEFINIR' ),
		    'created_by' => 'admin',
		    'created_at' => Carbon::now ()
		) );
		DB::table ( 'p_barrio' )->insert ( array (
		    'CODIGO_BARRIO' =>  5306,
		    'CODIGO_MUNICIPIO' => 001,
		    'NOMBRE' => urlencode ( 'LA VORAGINE' ),
		    'COMUNA' => 100,
		    'ESE' => 1,
		    'ZONA' => urlencode ( 'ZONA SIN DEFINIR' ),
		    'created_by' => 'admin',
		    'created_at' => Carbon::now ()
		) );
		DB::table ( 'p_barrio' )->insert ( array (
		    'CODIGO_BARRIO' =>  5394,
		    'CODIGO_MUNICIPIO' => 001,
		    'NOMBRE' => urlencode ( 'CORREDOR CALI-JAMUNDI' ),
		    'COMUNA' => 100,
		    'ESE' => 1,
		    'ZONA' => urlencode ( 'ZONA SIN DEFINIR' ),
		    'created_by' => 'admin',
		    'created_at' => Carbon::now ()
		) );
		DB::table ( 'p_barrio' )->insert ( array (
		    'CODIGO_BARRIO' =>  5400,
		    'CODIGO_MUNICIPIO' => 001,
		    'NOMBRE' => urlencode ( 'LA BUITRERA' ),
		    'COMUNA' => 100,
		    'ESE' => 1,
		    'ZONA' => urlencode ( 'ZONA SIN DEFINIR' ),
		    'created_by' => 'admin',
		    'created_at' => Carbon::now ()
		) );
		DB::table ( 'p_barrio' )->insert ( array (
		    'CODIGO_BARRIO' =>  5401,
		    'CODIGO_MUNICIPIO' => 001,
		    'NOMBRE' => urlencode ( 'CTO. LA BUITRERA' ),
		    'COMUNA' => 100,
		    'ESE' => 1,
		    'ZONA' => urlencode ( 'ZONA SIN DEFINIR' ),
		    'created_by' => 'admin',
		    'created_at' => Carbon::now ()
		) );
		DB::table ( 'p_barrio' )->insert ( array (
		    'CODIGO_BARRIO' =>  5487,
		    'CODIGO_MUNICIPIO' => 001,
		    'NOMBRE' => urlencode ( 'CORREGIMIENTO LA SIRENA' ),
		    'COMUNA' => 100,
		    'ESE' => 1,
		    'ZONA' => urlencode ( 'ZONA SIN DEFINIR' ),
		    'created_by' => 'admin',
		    'created_at' => Carbon::now ()
		) );
		DB::table ( 'p_barrio' )->insert ( array (
		    'CODIGO_BARRIO' =>  5488,
		    'CODIGO_MUNICIPIO' => 001,
		    'NOMBRE' => urlencode ( 'BELLA SUIZA' ),
		    'COMUNA' => 100,
		    'ESE' => 1,
		    'ZONA' => urlencode ( 'ZONA SIN DEFINIR' ),
		    'created_by' => 'admin',
		    'created_at' => Carbon::now ()
		) );
		DB::table ( 'p_barrio' )->insert ( array (
		    'CODIGO_BARRIO' =>  5500,
		    'CODIGO_MUNICIPIO' => 001,
		    'NOMBRE' => urlencode ( 'VILLA CARMELO' ),
		    'COMUNA' => 100,
		    'ESE' => 1,
		    'ZONA' => urlencode ( 'ZONA SIN DEFINIR' ),
		    'created_by' => 'admin',
		    'created_at' => Carbon::now ()
		) );
		DB::table ( 'p_barrio' )->insert ( array (
		    'CODIGO_BARRIO' =>  5501,
		    'CODIGO_MUNICIPIO' => 001,
		    'NOMBRE' => urlencode ( 'VILLA CARMELO (CABECERA)' ),
		    'COMUNA' => 100,
		    'ESE' => 1,
		    'ZONA' => urlencode ( 'ZONA SIN DEFINIR' ),
		    'created_by' => 'admin',
		    'created_at' => Carbon::now ()
		) );
		DB::table ( 'p_barrio' )->insert ( array (
		    'CODIGO_BARRIO' =>  5601,
		    'CODIGO_MUNICIPIO' => 001,
		    'NOMBRE' => urlencode ( 'CTO.LOS ANDES' ),
		    'COMUNA' => 100,
		    'ESE' => 1,
		    'ZONA' => urlencode ( 'ZONA SIN DEFINIR' ),
		    'created_by' => 'admin',
		    'created_at' => Carbon::now ()
		) );
		DB::table ( 'p_barrio' )->insert ( array (
		    'CODIGO_BARRIO' =>  5604,
		    'CODIGO_MUNICIPIO' => 001,
		    'NOMBRE' => urlencode ( 'PUEBLO NUEVO' ),
		    'COMUNA' => 100,
		    'ESE' => 1,
		    'ZONA' => urlencode ( 'ZONA SIN DEFINIR' ),
		    'created_by' => 'admin',
		    'created_at' => Carbon::now ()
		) );
		DB::table ( 'p_barrio' )->insert ( array (
		    'CODIGO_BARRIO' =>  5606,
		    'CODIGO_MUNICIPIO' => 001,
		    'NOMBRE' => urlencode ( 'LA REFORMA' ),
		    'COMUNA' => 100,
		    'ESE' => 1,
		    'ZONA' => urlencode ( 'ZONA SIN DEFINIR' ),
		    'created_by' => 'admin',
		    'created_at' => Carbon::now ()
		) );
		DB::table ( 'p_barrio' )->insert ( array (
		    'CODIGO_BARRIO' =>  5611,
		    'CODIGO_MUNICIPIO' => 001,
		    'NOMBRE' => urlencode ( 'EL CABUYAL' ),
		    'COMUNA' => 100,
		    'ESE' => 1,
		    'ZONA' => urlencode ( 'ZONA SIN DEFINIR' ),
		    'created_by' => 'admin',
		    'created_at' => Carbon::now ()
		) );
		DB::table ( 'p_barrio' )->insert ( array (
		    'CODIGO_BARRIO' =>  5698,
		    'CODIGO_MUNICIPIO' => 001,
		    'NOMBRE' => urlencode ( 'BAJO CRISTO REY - BRISAS DE LOS CRISTALES' ),
		    'COMUNA' => 100,
		    'ESE' => 1,
		    'ZONA' => urlencode ( 'ZONA SIN DEFINIR' ),
		    'created_by' => 'admin',
		    'created_at' => Carbon::now ()
		) );
		DB::table ( 'p_barrio' )->insert ( array (
		    'CODIGO_BARRIO' =>  5699,
		    'CODIGO_MUNICIPIO' => 001,
		    'NOMBRE' => urlencode ( 'CERRO CRISTO REY' ),
		    'COMUNA' => 100,
		    'ESE' => 1,
		    'ZONA' => urlencode ( 'ZONA SIN DEFINIR' ),
		    'created_by' => 'admin',
		    'created_at' => Carbon::now ()
		) );
		DB::table ( 'p_barrio' )->insert ( array (
		    'CODIGO_BARRIO' =>  5700,
		    'CODIGO_MUNICIPIO' => 001,
		    'NOMBRE' => urlencode ( 'PICHINDE' ),
		    'COMUNA' => 100,
		    'ESE' => 1,
		    'ZONA' => urlencode ( 'ZONA SIN DEFINIR' ),
		    'created_by' => 'admin',
		    'created_at' => Carbon::now ()
		) );
		DB::table ( 'p_barrio' )->insert ( array (
		    'CODIGO_BARRIO' =>  5701,
		    'CODIGO_MUNICIPIO' => 001,
		    'NOMBRE' => urlencode ( 'PICHINDE (Cabecera)' ),
		    'COMUNA' => 100,
		    'ESE' => 1,
		    'ZONA' => urlencode ( 'ZONA SIN DEFINIR' ),
		    'created_by' => 'admin',
		    'created_at' => Carbon::now ()
		) );
		DB::table ( 'p_barrio' )->insert ( array (
		    'CODIGO_BARRIO' =>  5702,
		    'CODIGO_MUNICIPIO' => 001,
		    'NOMBRE' => urlencode ( 'PEÑAS BLANCAS' ),
		    'COMUNA' => 100,
		    'ESE' => 1,
		    'ZONA' => urlencode ( 'ZONA SIN DEFINIR' ),
		    'created_by' => 'admin',
		    'created_at' => Carbon::now ()
		) );
		DB::table ( 'p_barrio' )->insert ( array (
		    'CODIGO_BARRIO' =>  5800,
		    'CODIGO_MUNICIPIO' => 001,
		    'NOMBRE' => urlencode ( 'LA LEONERA' ),
		    'COMUNA' => 100,
		    'ESE' => 1,
		    'ZONA' => urlencode ( 'ZONA SIN DEFINIR' ),
		    'created_by' => 'admin',
		    'created_at' => Carbon::now ()
		) );
		DB::table ( 'p_barrio' )->insert ( array (
		    'CODIGO_BARRIO' =>  5801,
		    'CODIGO_MUNICIPIO' => 001,
		    'NOMBRE' => urlencode ( 'LA LEONERA (CABECERA)' ),
		    'COMUNA' => 100,
		    'ESE' => 1,
		    'ZONA' => urlencode ( 'ZONA SIN DEFINIR' ),
		    'created_by' => 'admin',
		    'created_at' => Carbon::now ()
		) );
		DB::table ( 'p_barrio' )->insert ( array (
		    'CODIGO_BARRIO' =>  5900,
		    'CODIGO_MUNICIPIO' => 001,
		    'NOMBRE' => urlencode ( 'FELIDIA' ),
		    'COMUNA' => 100,
		    'ESE' => 1,
		    'ZONA' => urlencode ( 'ZONA SIN DEFINIR' ),
		    'created_by' => 'admin',
		    'created_at' => Carbon::now ()
		) );
		DB::table ( 'p_barrio' )->insert ( array (
		    'CODIGO_BARRIO' =>  5901,
		    'CODIGO_MUNICIPIO' => 001,
		    'NOMBRE' => urlencode ( 'FELIDIA (Cabecera)' ),
		    'COMUNA' => 100,
		    'ESE' => 1,
		    'ZONA' => urlencode ( 'ZONA SIN DEFINIR' ),
		    'created_by' => 'admin',
		    'created_at' => Carbon::now ()
		) );
		DB::table ( 'p_barrio' )->insert ( array (
		    'CODIGO_BARRIO' =>  6001,
		    'CODIGO_MUNICIPIO' => 001,
		    'NOMBRE' => urlencode ( 'EL SALADITO' ),
		    'COMUNA' => 100,
		    'ESE' => 1,
		    'ZONA' => urlencode ( 'ZONA SIN DEFINIR' ),
		    'created_by' => 'admin',
		    'created_at' => Carbon::now ()
		) );
		DB::table ( 'p_barrio' )->insert ( array (
		    'CODIGO_BARRIO' =>  6002,
		    'CODIGO_MUNICIPIO' => 001,
		    'NOMBRE' => urlencode ( 'CGTO SAN ANTONIO' ),
		    'COMUNA' => 100,
		    'ESE' => 1,
		    'ZONA' => urlencode ( 'ZONA SIN DEFINIR' ),
		    'created_by' => 'admin',
		    'created_at' => Carbon::now ()
		) );
		DB::table ( 'p_barrio' )->insert ( array (
		    'CODIGO_BARRIO' =>  6100,
		    'CODIGO_MUNICIPIO' => 001,
		    'NOMBRE' => urlencode ( 'LA ELVIRA' ),
		    'COMUNA' => 100,
		    'ESE' => 1,
		    'ZONA' => urlencode ( 'ZONA SIN DEFINIR' ),
		    'created_by' => 'admin',
		    'created_at' => Carbon::now ()
		) );
		DB::table ( 'p_barrio' )->insert ( array (
		    'CODIGO_BARRIO' =>  6200,
		    'CODIGO_MUNICIPIO' => 001,
		    'NOMBRE' => urlencode ( 'LA CASTILLA' ),
		    'COMUNA' => 100,
		    'ESE' => 1,
		    'ZONA' => urlencode ( 'ZONA SIN DEFINIR' ),
		    'created_by' => 'admin',
		    'created_at' => Carbon::now ()
		) );
		DB::table ( 'p_barrio' )->insert ( array (
		    'CODIGO_BARRIO' =>  6201,
		    'CODIGO_MUNICIPIO' => 001,
		    'NOMBRE' => urlencode ( 'CTO. LA CASTILLA' ),
		    'COMUNA' => 100,
		    'ESE' => 1,
		    'ZONA' => urlencode ( 'ZONA SIN DEFINIR' ),
		    'created_by' => 'admin',
		    'created_at' => Carbon::now ()
		) );
		DB::table ( 'p_barrio' )->insert ( array (
		    'CODIGO_BARRIO' =>  6301,
		    'CODIGO_MUNICIPIO' => 001,
		    'NOMBRE' => urlencode ( 'CTO. LA PAZ' ),
		    'COMUNA' => 100,
		    'ESE' => 1,
		    'ZONA' => urlencode ( 'ZONA SIN DEFINIR' ),
		    'created_by' => 'admin',
		    'created_at' => Carbon::now ()
		) );
		DB::table ( 'p_barrio' )->insert ( array (
		    'CODIGO_BARRIO' =>  6400,
		    'CODIGO_MUNICIPIO' => 001,
		    'NOMBRE' => urlencode ( 'MONTEBELLO' ),
		    'COMUNA' => 100,
		    'ESE' => 1,
		    'ZONA' => urlencode ( 'ZONA SIN DEFINIR' ),
		    'created_by' => 'admin',
		    'created_at' => Carbon::now ()
		) );
		DB::table ( 'p_barrio' )->insert ( array (
		    'CODIGO_BARRIO' =>  6401,
		    'CODIGO_MUNICIPIO' => 001,
		    'NOMBRE' => urlencode ( 'MONTEBELLO (Cabecera)' ),
		    'COMUNA' => 100,
		    'ESE' => 1,
		    'ZONA' => urlencode ( 'ZONA SIN DEFINIR' ),
		    'created_by' => 'admin',
		    'created_at' => Carbon::now ()
		) );
		DB::table ( 'p_barrio' )->insert ( array (
		    'CODIGO_BARRIO' =>  6500,
		    'CODIGO_MUNICIPIO' => 001,
		    'NOMBRE' => urlencode ( 'GOLONDRINAS' ),
		    'COMUNA' => 100,
		    'ESE' => 1,
		    'ZONA' => urlencode ( 'ZONA SIN DEFINIR' ),
		    'created_by' => 'admin',
		    'created_at' => Carbon::now ()
		) );
		DB::table ( 'p_barrio' )->insert ( array (
		    'CODIGO_BARRIO' =>  6501,
		    'CODIGO_MUNICIPIO' => 001,
		    'NOMBRE' => urlencode ( 'GOLONDRINAS (Cabecera)' ),
		    'COMUNA' => 100,
		    'ESE' => 1,
		    'ZONA' => urlencode ( 'ZONA SIN DEFINIR' ),
		    'created_by' => 'admin',
		    'created_at' => Carbon::now ()
		) );
		DB::table ( 'p_barrio' )->insert ( array (
		    'CODIGO_BARRIO' =>  6598,
		    'CODIGO_MUNICIPIO' => 001,
		    'NOMBRE' => urlencode ( 'VIA A LAS TRES CRUCES' ),
		    'COMUNA' => 100,
		    'ESE' => 1,
		    'ZONA' => urlencode ( 'ZONA SIN DEFINIR' ),
		    'created_by' => 'admin',
		    'created_at' => Carbon::now ()
		) );
		/*
		*/
// 		factory(Barrio::class,10)->create();
// 		factory(Municipio::class,300)->create();
    	
    }
}
