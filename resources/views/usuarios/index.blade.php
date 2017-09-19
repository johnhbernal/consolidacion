@extends('layouts.app') @section('content')
<link href="{{ asset('/css/jquery.dataTables.min.css') }}"
	rel="stylesheet">
<!-- ___ empieza pivot css -->
<link href="{{ asset('/css/pivotTable/c3.min.css') }}" rel="stylesheet">
<link href="{{ asset('/css/pivotTable/pivot.css') }}" rel="stylesheet">
<link href="{{ asset('/css/chart.css') }}" rel="stylesheet">
<!-- ____termina pivot css-->

<link href="{{ asset('/jqueryConfirm/css/jquery-confirm.min.css') }}"
	rel="stylesheet">
<script src="{{ asset('js/datatable/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('js/jquery-ui.min.js') }}"></script>
<script src="{{ asset('js/datatable/dataTables.buttons.min.js') }}"></script>
<script src="{{ asset('js/datatable/dataTables.select.min.js') }}"></script>
<script src="{{ asset('/jqueryConfirm/js/jquery-confirm.min.js') }}"></script>

<!-- ___ empieza pivot -->
<script src="{{ asset('js/pivotTable/pivot.js') }}"></script>
<script src="{{ asset('js/pivotTable/export_renderers.js') }}"></script>
<script src="{{ asset('js/pivotTable/c3.min.js') }}"></script>
<script src="{{ asset('js/pivotTable/c3_renderers.js') }}"></script>
<script src="{{ asset('js/pivotTable/d3.min.js') }}"></script>
<script src="{{ asset('js/pivotTable/d3_renderers.js') }}"></script>
<script src="{{ asset('js/pivotTable/jquery.ui.touch-punch.min.js') }}"></script>

<!-- ____termina pivot -->

<!-- <script src="{{ asset('js/datatable/dataTables.editor.min.js') }}"></script> -->
<script src="{{ asset('js/PivotDatatableConfig.js') }}"></script>
<script src="{{ asset('js/manageDatatable.js') }}"></script>
<script src="{{ asset('js/chartJSConfig.js') }}"></script>
<script src="{{ asset('js/chartJS/Chart.min.js') }}"></script>
<script src="{{ asset('js/chartJS/Chart.bundle.min.js') }}"></script>
<div class="col-md-10 col-md-offset-1">@include('usuarios.fragment.aside')</div>
<div class="col-md-10 col-md-offset-1">

	<!-- __empieza la prueba  -->

	<!-- Demo Dependencies -->
	<script
		src="https://cdnjs.cloudflare.com/ajax/libs/holder/2.3.2/holder.min.js"
		type="text/javascript"></script>
	<script>
    Holder.add_theme("white", { background:"#fff", foreground:"#a7a7a7", size:10 });
  </script>
	<div class="row">

		<div class="col-sm-6">
			<div class="chart-wrapper">
				<div class="chart-title">Pageviews by browser (past 24 hours)</div>
				<div class="chart-stage">
					<canvas id="bar-chart" width="800" height="450"></canvas>
				</div>
				<div class="chart-notes">Aqui ponemos los datos</div>
			</div>
		</div>

		<div class="col-sm-6">
			<div class="chart-wrapper">
				<div class="chart-title">Pageviews by browser (past 5 days)</div>
				<div class="chart-stage">
					<img data-src="holder.js/100%x350/white">
				</div>
				<div class="chart-notes">Notes go down here</div>
			</div>
		</div>

	</div>
	<div class="row">

		<div class="col-sm-12">
			<div class="chart-wrapper">
				<div class="chart-title">
					<h1 align="center">
						<strong>Listado de Usuarios</strong>
					</h1>
				</div>
				<div class="chart-stage">
					<a href="{{route('usuarios.create')}}"
						class="btn btn-primary pull-right">Nuevo Usuario</a>

					<table id="dataTableUsuarios"
						class="table table-striped table-bordered nowrap">

						<thead>
							<tr>
								<!-- 				<td width="20px"></td> -->
								<td><p>Actualizacion</p></td>
								<td width="20px"><p class="text-center">ID</p></td>
								<td><p class="text-center">Número de identificación</p></td>
								<td><p class="text-center">Primer Nombre</p></td>
								<td><p class="text-center">Segundo Nombre</p></td>
								<td><p class="text-center">Primer Apellido</p></td>
								<td><p class="text-center">Segundo Apellido</p></td>
								<td><p class="text-center">&nbsp;Acciones</p></td>
							</tr>
						</thead>
						<tbody>
						</tbody>
					</table>
				</div>
				<div class="chart-notes">Notes go down here</div>
			</div>
		</div>

	</div>


	<div class="col-sm-12">
		<div class="chart-wrapper">
			<div class="chart-title">Impressions by advertiser</div>
			<div class="chart-stage"></div>
			<div class="chart-notes">Pie de pagina informativo</div>
		</div>
	</div>

	<!-- __termina la prueba -->

	@include('usuarios.fragment.info') <br>

	<div id="output" style="margin: 30px;"></div>


	@endsection


</div>






