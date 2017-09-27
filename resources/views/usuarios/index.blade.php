@extends('layouts.app') @section('content')
<link href="{{ asset('/css/jquery.dataTables.min.css') }}"
	rel="stylesheet">
<!-- ___ empieza pivot css -->
<link href="{{ asset('/css/pivotTable/c3.min.css') }}" rel="stylesheet">
<link href="{{ asset('/css/pivotTable/pivot.css') }}" rel="stylesheet">
<link href="{{ asset('/css/chart.css') }}" rel="stylesheet">
<!-- ____termina pivot css-->

<!-- ___ empieza datatableResponsive css -->
<link href="{{ asset('/css/dataTable/dataTables.bootstrap.min.css') }}" rel="stylesheet">
<link href="{{ asset('/css/dataTable/fixedHeader.bootstrap.min.css') }}" rel="stylesheet">
<link href="{{ asset('/css/dataTable/responsive.bootstrap.min.css') }}" rel="stylesheet">
<!-- ____termina datatableResponsive css-->

<link href="{{ asset('/jqueryConfirm/css/jquery-confirm.min.css') }}"
	rel="stylesheet">
<script src="{{ asset('js/datatable/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('js/jquery-ui.min.js') }}"></script>
<script src="{{ asset('js/datatable/dataTables.buttons.min.js') }}"></script>
<script src="{{ asset('js/datatable/dataTables.select.min.js') }}"></script>
<script src="{{ asset('/jqueryConfirm/js/jquery-confirm.min.js') }}"></script>

<!-- __Empieza selectPicker -->
<link href="{{ asset('/css/bootstrapSelect/bootstrap-select.min.css') }}" rel="stylesheet">
<script src="{{ asset('js/bootstrapSelect/bootstrap-select.min.js') }}"></script>
<!-- __Termina selectPicker -->




<!-- __Empieza datatableResponsive js -->
<script src="{{ asset('js/datatable/dataTables.bootstrap.min.js') }}"></script>
<script src="{{ asset('js/datatable/dataTables.fixedHeader.min.js') }}"></script>
<script src="{{ asset('js/datatable/dataTables.responsive.min.js') }}"></script>
<script src="{{ asset('js/datatable/responsive.bootstrap.min.js') }}"></script>

<!-- __Termina datatableResponsive js -->

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

		<div class="panel panel-primary">
			<div class="panel-heading">
				<h3 class="panel-title">
					<a data-toggle="collapse" data-parent="#accordion"
						href="#collapseOne">Muestreo de imagenes</a>
				</h3>
			</div>
			<div id="collapseOne" class="panel-collapse collapse in">
				<div class="panel-body" style="padding-left: 5%;">
					<div class="row" style="width: 96%;">

						<div class="col-sm-6">
							<div class="chart-wrapper">
								<div class="chart-stage">
									<canvas id="bar-chart" width="800" height="450"></canvas>
								</div>
							</div>
						</div>

						<div class="col-sm-6">
							<div class="chart-wrapper">
								<div class="chart-stage">
									<canvas id="bar-chart-grouped" width="800" height="450"></canvas>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
<div class="row">

		<div class="panel panel-primary">
			<div class="panel-heading">
				<h3 class="panel-title">
					<a data-toggle="collapse" data-parent="#accordion"
						href="#collapseTwo">Listado de Ventas</a>
				</h3>
			</div>
			<div id="collapseTwo" class="panel-collapse collapse in">
				<div class="panel-body" style="padding-left: 5%;">
					<div class="row" style="width: 96%;">
						<div class="chart-stage">
							<table id="dataTableINDMVentas"
								class="table table-striped table-bordered nowrap" style="width: 96%;">

								<thead>
									<tr>
										<td><p>Actualizacion</p></td>
										<td width="20px"><p class="text-center">ID</p></td>
										<td><p class="text-center">n. Cliente</p></td>
										<td><p class="text-center">Org. de Ventas</p></td>
										<td><p class="text-center">Ciudad</p></td>
										<td><p class="text-center">n. Comercial</p></td>
										<td><p class="text-center">Vendedor</p></td>
										<td><p class="text-center">&nbsp;Acciones</p></td>
									</tr>
								</thead>
								<tbody>
								</tbody>
							</table>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
<div class="row">

		<div class="panel panel-primary">
			<div class="panel-heading">
				<h3 class="panel-title">
					<a data-toggle="collapse" data-parent="#accordion"
						href="#collapseTwoLocal">Listado de Usuarios</a>
				</h3>
			</div>
			<div id="collapseTwoLocal" class="panel-collapse collapse in">
				<div class="panel-body" style="padding-left: 5%;">
					<div class="row" style="width: 96%;">
						<div class="chart-stage">
							<a href="{{route('usuarios.create')}}"
								class="btn btn-primary pull-left">Nuevo Usuario</a>

							<table id="dataTableUsuarios"
								class="table table-striped table-bordered nowrap">

								<thead>
									<tr>

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
					</div>
				</div>
			</div>
		</div>
	</div>
	
	
	<div class="row">
		<div class="panel panel-primary">
			<div class="panel-heading">
				<h3 class="panel-title">
					<a data-toggle="collapse" data-parent="#accordion"
						href="#collapseThree">Ejemplo de TablePivot</a>
				</h3>
			</div>
			<div id="collapseThree" class="panel-collapse collapse in">
				<div class="panel-body" style="padding-left: 5%;">
				<div class="form-group">
<!--       <select id="lunchBegins" class="selectpicker" data-live-search="true" data-live-search-style="begins" title="Please select a lunch ..." data-style="btn-danger" multiple data-done-button="true"> -->
<!--         <option>Hot Dog, Fries and a Soda</option> -->
<!--         <option>Burger, Shake and a Smile</option> -->
<!--         <option>Sugar, Spice and all things nice</option> -->
<!--         <option>Baby Back Ribs</option> -->
<!--         <option>A really really long option made to illustrate an issue with the live search in an inline form</option> -->
<!--       </select> -->
<!--     </div> -->
					<div class="row" style="width: 96%;">
						<div class="d-flex justify-content-center" id="output"
							style="width: 96%; "style="margin: 30px;">
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- __termina la prueba -->

@include('usuarios.fragment.info')
<br>
@endsection
