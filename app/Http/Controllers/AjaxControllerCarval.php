<?php
namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
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
  FROM [INReportes].[dbo].[BI_PRESUPUESTOS]'));
    }

    /**
     * Funcion utilizada para consultar el Cumplimiento PresupuestoAcumulado y devuelve un json
     * utilizado por Chart.js para realizar el grafico
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
    public static function getGraficoMargen()
    
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
}
