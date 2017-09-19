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
        select('SELECT [VentaMLActual]
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
  FROM [INReportes].[dbo].[BI_PRESUPUESTOS]
  WHERE [Fecha] >= GETDATE()-1'));
    }
}
