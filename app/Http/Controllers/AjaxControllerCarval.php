<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Yajra\Datatables\Datatables;
use Carbon\Carbon;

class AjaxControllerCarval extends Controller
{

    /**
     *
     * @return mixed
     */
    public Static function getDatosConsolidacion()
    {
        $date = Carbon::now();
        
        $date = $date->format('Y') - 1;
        
        $dateFormat = strval($date);
        
        // funciona no dañar
        
        return json_encode($consolidacion = DB::connection('sqlsrv')->
        // ->select('SELECT * FROM INReportes.dbo.BI_PRESUPUESTOS'));
        select('SELECT TOP 100 [VentaMLActual]
      ,[VentaMLAnterior]
      ,[VentaMGActual]
      ,[MesNombre]
      ,[Linea]
  FROM [INReportes].[dbo].[BI_PRESUPUESTOS]'));
      /*  return json_encode($consolidacion = DB::connection('sqlsrv')->
        // ->select('SELECT * FROM INReportes.dbo.BI_PRESUPUESTOS'));
        select('SELECT TOP 100 [VentaMLActual]
      ,[VentaMLAnterior]
      ,[VentaMGActual]
      ,[VentaMGAnterior]
      ,[VentaMFdaActual]
      ,[VentaMFAnterior]
      ,[PptoMlocal]
      ,[PptoUSD]
      ,[IdVendedor]
      ,[Vendedor]
      ,[MesNombre]
      ,[Linea]
      ,[UndNegocio]
      ,[IdCeBe]
      ,[UndNegocioProducto]
      ,[IdOrgVentas]
      ,[OrgVentas]
      ,[NombreG1]
      ,[NombreG2]
      ,[NombreG3]
      ,[idmaterial]
      ,[Producto]
      ,[Intercompany]
      ,[VendFilter]
      ,[Fecha]
  FROM [INReportes].[dbo].[BI_PRESUPUESTOS]'));*/
    }

    /**
     * Funcion utilizada para consultar el Cumplimiento Presupuesto Acumulado y devuelve un json
     * utilizado por Chart.js para realizar el grafico
     *
     * @return string
     */
    public static function getGraficosVentas()
    
    {
        $organizacion = 'CO-Carval Nal';
        $organizacion = '%' . $organizacion . '%';
        
        return json_encode($consolidacion = DB::connection('sqlsrv')->select('SELECT
        SUM (ISNULL([VentaMGActual],0)) VentaActual
        ,SUM (ISNULL([VentaMGAnterior],0)) VentaAnterior
        ,SUM (ISNULL([PptoMlocal],0)) PptoMlocal
        ,SUM (ISNULL([VentaMGActual],0))/SUM (ISNULL([PptoMlocal],0))*100 AS Cump
            ,(SUM (ISNULL([VentaMGActual],0))-SUM (ISNULL([VentaMGAnterior],0)) )/SUM (ISNULL([VentaMGAnterior],0))*100  AS Crec
                FROM [INReportes].[dbo].[BI_PRESUPUESTOS]
                 WHERE [OrgVentas] LIKE ?', array(
            $organizacion
        )));
    }

    /*
     * Funcion utilizada para mostrar el margen de ganancias en una grafica de chart.js
     * 1-consto/venta
     */
    public static function getGraficoMargen()
    
    {
        $totalMargen = array();
        
        $consulParaMargen = DB::connection('sqlsrv')->select('
                        SELECT SUM(INReportes.dbo.BI_VENTAS.CostoActual) AS CostoML,
                                    ( SELECT SUM(INReportes.dbo.BI_PRESUPUESTOS.VentaMGActual) 
                                        FROM [INReportes].[dbo].[BI_PRESUPUESTOS] 
                                    )AS VentaML
                        FROM [INReportes].[dbo].[BI_VENTAS]');
        
        $margen['Margen'] = (1 - $consulParaMargen[0]->CostoML / $consulParaMargen[0]->VentaML) * 100;
        $consulParaMargen[0]->Margen = $margen['Margen'];
        
        /* poner valor en una columna */
        $consulParaMargen[0]->Meta = 50;
        
        return json_encode($consulParaMargen);
    }

    /*
     * Funcion utilizada para mostrar los datos de la base de datos de ventas
     * 1-consto/venta
     */
    public static function getDatabaseVentas(Request $request)
    
    {
        try {
            
            // $resultDeleteUsuario = $usuario->delete ();
            $response;
            
            
            
//             echo '<pre>';
//             print_r(' epa que paso  ');
//             // print_r($id);
//             echo '</pre>';
//             die(__FILE__ . ' ' . __LINE__);
            
            return Datatables::of(DB::connection('sqlsrv')->select('
                                                SELECT TOP 100 [IdDimClientes]
                                                      ,[IdSociedad]
                                                      ,[Sociedad]
                                                      ,[IdOrgVentas]
                                                      ,[OrgVentas]
                                                      ,[IdPais]
                                                      ,[IdDepto]
                                                      ,[Departamento]
                                                      ,[Ciudad]
                                                      ,[IdVendedor]
                                                      ,[Vendedor]
                                                      ,[IdClientePadre]
                                                      ,[ClientePadre]
                                                      ,[IdCliente]
                                                      ,[NombreCliente]
                                                      ,[NombreComercial]
                                                  FROM [INDMVentas].[dbo].[DimClientes]

                                                '))->make(true);
            
            echo '<pre>';
            print_r(' epa que paso  ');
            // print_r($id);
            echo '</pre>';
            die(__FILE__ . ' ' . __LINE__);
            /*
             * if () {
             *
             * } else {
             *
             *
             * return response ()->json ( 'Error al intentar eliminar el usuario.' );
             * }
             */
        } catch (\Exception $e) {
            // return response()->json($e->getMessage());
            return response()->json('error en catch AjaxControllerCarval' + $e->getCode());
        }
        
        // return \Response::json($response);
        // return json_encode($customer_response, JSON_PRETTY_PRINT);
    }
}
