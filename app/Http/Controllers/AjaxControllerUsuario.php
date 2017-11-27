<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Yajra\Datatables\Datatables;


class AjaxControllerUsuario extends Controller
{

    /**
     *
     * @return mixed
     */
    public Static function getUsuarioByID(Request $request)
    {
        $recurso = $request->input( 'filtroUsuario' );
        $filtroRecurso ='%' . $recurso . '%';
//         $filtroRecurso ='/"%'.+$recurso+'%/"';
//         $recurso = $request->input( 'John' );
        
//         $recurso = Input::get ( 'filtroUsuario' );
//         $recurso = strtolower ( $recurso );
//         $results = array ();
        // $tasks = Task::select(['id','name','category','state']);
        
        // $usuarios = Usuario::select(['id']);
        
//         echo '<pre>';
//         print_r($filtroRecurso);
//         echo '</pre>';
//         die(__FILE__.' '.__LINE__);
        
        // echo '5555';
        // die(__FILE__.' '.__LINE__);
        
        /*
         * campos tabla
         * id
         * NUM_IDENTIFICACION
         * LOGIN_ID
         * TIPO_DOCUMENTO
         * PRIMER_NOMBRE
         * SEGUNDO_NOMBRE
         * PRIMER_APELLIDO
         * SEGUNDO_APELLIDO
         * FECHA_DE_NACIMIENTO
         * ESTADO
         * SEXO
         * GRUPO_SANGUINEO
         * FACTOR_RH
         * ESTADO_CIVIL
         * VINCULO_LABORAL
         * DISCAPACIDAD
         * TIPO_DISCAPACIDAD
         * CONDICION_DISCAPACIDAD
         * ETNIA
         * created_by
         * deleted_at
         * created_at
         * updated_at
         *
         * campos tabla
         */
        
        return Datatables::of(DB::select("
                select id,NUM_IDENTIFICACION,PRIMER_NOMBRE,SEGUNDO_NOMBRE,PRIMER_APELLIDO,SEGUNDO_APELLIDO,
FECHA_DE_NACIMIENTO,ESTADO,SEXO,GRUPO_SANGUINEO,FACTOR_RH,ESTADO_CIVIL,VINCULO_LABORAL,DISCAPACIDAD,TIPO_DISCAPACIDAD,CONDICION_DISCAPACIDAD,ETNIA
,updated_at from sis_seg_soc_p_usuario
WHERE CONVERT(NUM_IDENTIFICACION, CHARACTER ) LIKE '$filtroRecurso'")
            )->make(true);

//         $user = DB::table(DB::raw("
//         (select a.packing,b.description
//             from avr as a
//             inner join(
//                select id,description
//                from pck
//             ) as b
//             on a.packing = b.id
//             WHERE a.taxno = $n)"
//             ));
        
//         return Datatables::of($user)->make(true);
        
//         $user = DB::table(DB::raw("
//         (select user.NUM_IDENTIFICACION
//             from sis_seg_soc_p_usuario as user)"
//             ));
        
//         return Datatables::of($user)->make(true);
        
        
//         return Datatables::of(DB::select('
//                 select id,NUM_IDENTIFICACION,PRIMER_NOMBRE,SEGUNDO_NOMBRE,PRIMER_APELLIDO,SEGUNDO_APELLIDO,updated_at from sis_seg_soc_p_usuario')
//             )->where( 'lower(PRIMER_NOMBRE) LIKE ?', array ('%' . 'John' . '%'));
    
//           return  DB::table('sis_seg_soc_p_usuario')->where('NUM_IDENTIFICACION','94061212')->first();
    
    }
}
