<link href="{{ asset('/css/ie10-viewport-bug-workaround.css') }}"
	rel="stylesheet">
<link href="{{ asset('/css/jquery-ui.min.css') }}" rel="stylesheet">
<link href="{{ asset('/css/form.css') }}" rel="stylesheet">

<script src="{{ asset('js/jquery.js') }}"></script>
<script src="{{ asset('js/jquery-ui.min.js') }}"></script>
<script src="{{ asset('js/validation/bootstrapValidator.min.js') }}"></script>
<script src="{{ asset('/js/script.js') }}"></script>
<script src="{{ asset('/js/validation/usuForm.js') }}"></script>

<!-- __Empieza selectPicker -->
<link
	href="{{ asset('/css/bootstrapSelect/bootstrap-select.min.css') }}"
	rel="stylesheet">
<script src="{{ asset('js/bootstrapSelect/bootstrap-select.min.js') }}"></script>
<!-- __Termina selectPicker -->


<!-- __Empieza dateTimePicker -->
<link
	href="{{ asset('js/bootstrap-datetimepicker/css/bootstrap-datetimepicker.min.css') }}"
	rel="stylesheet">
<!-- <link -->
<!-- 	href="{{ asset('js/bootstrap-datetimepicker/css/bootstrap-datetimepicker-standalone.min.css') }}" -->
<!-- 	rel="stylesheet"> -->


<script
	src="{{ asset('js/bootstrap-datetimepicker/moment-develop/moment.js') }}"></script>
<script src="{{ asset('js/bootstrap-datetimepicker/transition.js') }}"></script>
<script src="{{ asset('js/bootstrap-datetimepicker/collapse.js') }}"></script>
<script
	src="{{ asset('js/bootstrap-datetimepicker/bootstrap-datetimepicker.min.js') }}"></script>
<script
	src="{{ asset('js/bootstrap-datetimepicker/moment-develop/locale/es-us.js') }}"></script>
<script
	src="{{ asset('js/ajax/usuarioAjax/usuarioAutocomplete.js') }}"></script>


<div class="container">
	<div class="col-sm-12 col-md-offset-1">
		<img src="{{ asset('img/imgLogin/Boton-Ejemplo.jpg') }}"
			id='logoImagen'>

		<div class="col-md-12 col-md-offset-1">
			<fieldset>
				<legend>
					<label><a class="requerido"></a><font color='red'> Estos campos son
							requeridos </font></label>
				</legend>
			</fieldset>
		</div>


		<div class="container " id="contenedorUsuario"
			style="width: 95%; , height: 250%;">
			<div class="container " id="contenedorBandeja">
				<div class="col-xs-12 col-sm-12"></div>
			</div>

			<div class="panel panel-primary">
				<div class="panel-heading">
					<h3 class="panel-title">
						<a data-toggle="collapse" data-parent="#accordion"
							href="#collapseOne">Gestión de Usuario.</a>
					</h3>
				</div>
				<div id="collapseOne" class="panel-collapse collapse in">
					<div class="panel-body" style="padding-left: 5%;">
						<div class="row" style="width: 96%;">

							{{ $usuario->TIPO_DOCUMENTO or 'Valor por defecto' }}
							<div class="row">

								<!-- 							empieza prueba -->
								<!-- /* -->
								<!-- 								<div class="col-lg-12"> -->
								<!-- 								<div class="input-group"> -->
								<!--  <div class="form-group"> -->
								<!--         <label class="col-xs-3 control-label">Country</label> -->
								<!--         <div class="col-xs-12"> -->
								<!--             <select class="form-control" name="countrySelectBox"> -->
								<!--                 <option value="BA">Bosnia and Herzegovina</option> -->
								<!--                 <option value="BR">Brazil</option> -->
								<!--                 <option value="BG">Bulgari</option> -->
								<!--                 <option value="CL">Chile</option> -->
								<!--                 <option value="CN">China</option> -->
								<!--                 <option value="HR">Croatia</option> -->
								<!--                 <option value="CZ">Czech</option> -->
								<!--                 <option value="DK">Denmark</option> -->
								<!--                 <option value="EE">Estonia</option> -->
								<!--                 <option value="FI">Finland</option> -->
								<!--                 <option value="IS">Iceland</option> -->
								<!--                 <option value="IE">Ireland</option> -->
								<!--                 <option value="LV">Latvia</option> -->
								<!--                 <option value="LT">Lithuania</option> -->
								<!--                 <option value="MK">Macedonia</option> -->
								<!--                 <option value="ME">Montenegro</option> -->
								<!--                 <option value="NL">Netherlands</option> -->
								<!--                 <option value="PL">Poland</option> -->
								<!--                 <option value="RO">Romania</option> -->
								<!--                 <option value="SM">San Marino</option> -->
								<!--                 <option value="RS">Serbia</option> -->
								<!--                 <option value="SK">Slovakia</option> -->
								<!--                 <option value="SI">Slovenia</option> -->
								<!--                 <option value="ZA">South Africa</option> -->
								<!--                 <option value="ES">Spain</option> -->
								<!--                 <option value="SE">Sweden</option> -->
								<!--                 <option value="CH">Switzerland</option> -->
								<!--                 <option value="TH">Thailand</option> -->
								<!--             </select> -->
								<!--         </div> -->
								<!--     <div class="form-group"> -->
								<!--         <label class="col-xs-3 control-label">ID number</label> -->
								<!--         <div class="col-xs-12"> -->
								<!--             <input type="text" class="form-control" name="idNumber" /> -->
								<!--         </div> -->
								<!--     </div> -->
								<!--     </div> -->

								<!--     </div> -->
								<!-- 								</div> -->
								<!-- */ -->
								<!-- 							termina prueba -->







								<div class="col-lg-6">
									<label class="col-md-5 control-label"><a class="requerido"></a>
										Tipo de Documento</label>
									<div class="form-group">
										<div class="input-group">
											<span class="input-group-addon"><i
												class="glyphicon glyphicon-user"></i></span>

											@if(isset($usuario)) {!!Form::select('TIPO_DOCUMENTO', ['SC'
											=> 'Salvoconducto de Permanencia', 'CD' => 'Carné
											Diplomático', 'PA' => 'Pasaporte', 'CE' => 'Cedula de
											Extranjería', 'CC' => 'Cedula de Ciudadanía', 'TI' =>
											'Tarjeta de Identidad', 'RC'=>'Registro Civil',
											'CN'=>'Certificado de Nacido Vivo'], null,
											['class'=>'form-control','placeholder' => 'Seleccione Tipo de
											Documento','readonly'=>'true'])!!} @else
											{!!Form::select('TIPO_DOCUMENTO', ['SC' => 'Salvoconducto de
											Permanencia', 'CD' => 'Carné Diplomático', 'PA' =>
											'Pasaporte', 'CE' => 'Cedula de Extranjería', 'CC' =>
											'Cedula de Ciudadanía', 'TI' => 'Tarjeta de Identidad',
											'RC'=>'Registro Civil', 'CN'=>'Certificado de Nacido Vivo'],
											'CC',
											['id'=>'TIPO_DOCUMENTO','class'=>'form-control','placeholder'
											=> 'Seleccione Tipo de Documento'])!!} @endif

										</div>
									</div>
									{!! $errors->first('TIPO_DOCUMENTO',' <span
										class="alert text-danger pull-right"><button type="button"
											class="close" data-dismiss="alert">&times;</button> :message.
									</span> ')!!}
								</div>
								<div class="col-lg-6">
									<label class="col-md-5 control-label"><a class="requerido"></a>
<!-- 										Núm de Identificación</label> -->
										Núm Identificación</label>
									<div class="form-group">
										<div class="input-group">
											<span class="input-group-addon"><i
												class="glyphicon glyphicon-user"></i></span>
											@if(isset($usuario)) {!!
											Form::text('NUM_IDENTIFICACION',null,['class'=>'form-control','placeholder'
											=> 'Digite Número de
											identificación','readonly'=>'readonly'])!!} @else {!!
											Form::text('NUM_IDENTIFICACION',null,['class'=>'form-control','placeholder'
											=> 'Digite Núm de identificación','minlength'=>'6','maxlength'=>'10'])!!} @endif
										</div>
									</div>
									{!! $errors->first('NUM_IDENTIFICACION',' <span
										class="alert text-danger pull-right"><button type="button"
											class="close" data-dismiss="alert">&times;</button> :message.
									</span> ')!!}
								</div>
							</div>
							<br>
							<div class="row">
								<div class="col-lg-6">
									<label class="col-md-5 control-label"><a class="requerido"></a>
										Primer Nombre</label>
									<div class="form-group">
										<div class="input-group">
											<span class="input-group-addon"><i
												class="glyphicon glyphicon-user"></i></span> {!!
											Form::text('PRIMER_NOMBRE',null,['class'=>'form-control','placeholder'=>
											'Digite Primer Nombre','minlength'=>'2','maxlength'=>'191'])!!}
										</div>
									</div>
									{!! $errors->first('PRIMER_NOMBRE',' <span
										class="alert text-danger pull-right"><button type="button"
											class="close" data-dismiss="alert">&times;</button> :message.
									</span> ')!!}
								</div>
								<div class="col-lg-6">
									<label class="col-md-5 control-label">&nbsp; &nbsp; Segundo
										Nombre</label>
									<div class="form-group">
										<div class="input-group">
											<span class="input-group-addon"><i
												class="glyphicon glyphicon-user"></i></span> {!!
											Form::text('SEGUNDO_NOMBRE',null,['class'=>'form-control','placeholder'=>
											'Digite Segundo Nombre','minlength'=>'2','maxlength'=>'191'])!!}
										</div>
									</div>
									{!! $errors->first('SEGUNDO_NOMBRE',' <span
										class="alert text-danger pull-right"><button type="button"
											class="close" data-dismiss="alert">&times;</button> :message.
									</span> ')!!}
								</div>
							</div>
							<br>
							<div class="row">
								<div class="col-lg-6">
									<label class="col-md-5 control-label"><a class="requerido"></a>
										Primer Apellido</label>
									<div class="form-group">
										<div class="input-group">
											<span class="input-group-addon"><i
												class="glyphicon glyphicon-user"></i></span> {!!
											Form::text('PRIMER_APELLIDO',null,['class'=>'form-control','placeholder'
											=> 'Digite Primer Apellido','minlength'=>'2','maxlength'=>'191'])!!}
										</div>
									</div>
									{!! $errors->first('PRIMER_APELLIDO',' <span
										class="alert text-danger pull-right"><button type="button"
											class="close" data-dismiss="alert">&times;</button> :message.
									</span> ')!!}
								</div>
								<div class="col-lg-6">
									<label class="col-md-5 control-label"> &nbsp; &nbsp; Segundo
										Apellido</label>
									<div class="form-group">
										<div class="input-group">
											<span class="input-group-addon"><i
												class="glyphicon glyphicon-user"></i></span> {!!
											Form::text('SEGUNDO_APELLIDO',null,['class'=>'form-control','placeholder'
											=> 'Digite Segundo Apellido','minlength'=>'2','maxlength'=>'191'])!!}
										</div>
									</div>
									{!! $errors->first('SEGUNDO_APELLIDO',' <span
										class="alert text-danger pull-right"><button type="button"
											class="close" data-dismiss="alert">&times;</button> :message.
									</span> ')!!}
								</div>
							</div>
							<br>
							<div class="row">
								<div class="col-lg-6">
									<label class="col-md-5 control-label"><a class="requerido"></a>
										Fecha de Nacimiento</label>
									<div class="form-group">
										<div class="input-group date">
											<span class="input-group-addon"><i
												class="glyphicon glyphicon-calendar"></i></span> {!!
											Form::text('FECHA_DE_NACIMIENTO',null,['id'=>'FECHA_DE_NACIMIENTO','class'=>'form-control','placeholder'
											=> 'Digite Fecha de Nacimiento','minlength'=>'10','maxlength'=>'10'])!!}
										</div>
									</div>
									{!! $errors->first('FECHA_DE_NACIMIENTO',' <span
										class="alert text-danger pull-right"><button type="button"
											class="close" data-dismiss="alert">&times;</button> :message.
									</span> ')!!}
								</div>
								<div class="col-lg-6">
									<label class="col-md-5 control-label"><a class="requerido"></a>
										Genero</label>
									<div class="form-group">
										<div class="input-group">
											<label class="radio-inline">{!! Form::radio('SEXO', 'M',
												(old('SEXO') == 'M'), ['id' => 'Masculino']) !!}Masculino </label>
											<label class="radio-inline">{!! Form::radio('SEXO', 'F',
												(old('SEXO') == 'F'), ['id'=>'Femenino']) !!}Femenino </label>
										</div>
									</div>
									{!! $errors->first('SEXO',' <span
										class="alert text-danger pull-right"><button type="button"
											class="close" data-dismiss="alert">&times;</button> :message.
									</span> ')!!}
								</div>
							</div>
							<br>
							<div class="row">
								<div class="col-lg-6">
									<label class="col-md-5 control-label"><a class="requerido"></a>
										Grupo Sanguíneo</label>
									<div class="form-group">
										<div class="input-group">
											<span class="input-group-addon"><i
												class="glyphicon glyphicon-user"></i></span>
											{!!Form::select('GRUPO_SANGUINEO', ['A' => 'A', 'B' => 'B',
											'O' => 'O', 'AB' => 'AB'], null,
											['class'=>'form-control','placeholder' => 'Seleccione Grupo
											Sanguineo'])!!}
										</div>
									</div>
									{!! $errors->first('GRUPO_SANGUINEO',' <span
										class="alert text-danger pull-right"><button type="button"
											class="close" data-dismiss="alert">&times;</button> :message.
									</span> ')!!}

								</div>
								<div class="col-lg-6">
									<label class="col-md-5 control-label"><a class="requerido"></a>
										Factor RH</label>

									<div class="form-group">
										<div class="input-group">
											<label class="radio-inline"> {!! Form::radio('FACTOR_RH',
												'+', (old('FACTOR_RH') == '+'), ['id' => 'positivo'])
												!!}Positivo </label> <label class="radio-inline">{!!
												Form::radio('FACTOR_RH', '-', (old('FACTOR_RH') == '-'),
												['id'=>'negativo']) !!}Negativo </label>
										</div>
									</div>
									{!! $errors->first('FACTOR_RH',' <span
										class="alert text-danger pull-right"><button type="button"
											class="close" data-dismiss="alert">&times;</button> :message.
									</span> ')!!}
								</div>
							</div>
							<br>
							<div class="row">
								<div class="col-lg-6">
									<label class="col-md-5 control-label">&nbsp; &nbsp; Etnia</label>
									<div class="input-group">
										<span class="input-group-addon"><i
											class="glyphicon glyphicon-user"></i></span>
										{!!Form::select('ETNIA', ['01' => 'Indígena', '02' => 'Rrom
										(gitano)','03'=>'Raizal (San Andrés y
										Providencia)','04'=>'Palenquero (San Basilio de
										Palenque)','05'=>'Negro(a), afrocolombiano(a)'], null,
										['class'=>'form-control','placeholder' => 'Seleccione
										Etnia'])!!}
									</div>
									{!! $errors->first('ETNIA',' <span
										class="alert text-danger pull-right"><button type="button"
											class="close" data-dismiss="alert">&times;</button> :message.
									</span> ')!!}
								</div>
								<div class="col-lg-6">
									<label class="col-md-5 control-label"><a class="requerido"></a>
										Estado Civil</label>
									<div class="form-group">
										<div class="input-group">
											<span class="input-group-addon"><i
												class="glyphicon glyphicon-user"></i></span>
											{!!Form::select('ESTADO_CIVIL', ['S' => 'Soltero/a', 'P' =>
											'Comprometido/a','U'=>'Union
											Libre','E'=>'Separado/a','C'=>'Casado/a','D'=>'Divorciado/a','V'=>'Viudo/a'],
											null, ['class'=>'form-control','placeholder' => 'Seleccione
											Estado Civil'])!!}
										</div>
									</div>
									{!! $errors->first('ESTADO_CIVIL',' <span
										class="alert text-danger pull-right"><button type="button"
											class="close" data-dismiss="alert">&times;</button> :message.
									</span> ')!!}
								</div>
							</div>
							<br>
							<div class="row">
								<div class="col-lg-6">
									<label class="col-md-5 control-label"><a class="requerido"></a>
										Vínculo Laboral</label>
									<div class="form-group">
										<div class="input-group">
											<span class="input-group-addon"><i
												class="glyphicon glyphicon-user"></i></span>
											{!!Form::select('VINCULO_LABORAL', ['C' => 'Afiliado/a o
											Cotizante', 'B' => 'Beneficiario/a'], null,
											['class'=>'form-control','placeholder' => 'Seleccione
											Vínculo Laboral'])!!}
										</div>
									</div>
									{!! $errors->first('VINCULO_LABORAL',' <span
										class="alert text-danger pull-right"><button type="button"
											class="close" data-dismiss="alert">&times;</button> :message.
									</span> ')!!}
								</div>
								<div class="col-lg-6">
									<label class="col-md-5 control-label"><a class="requerido"></a>
										Estado </label>
									<div class="form-group">
										<div class="input-group">
											<span class="input-group-addon"><i
												class="glyphicon glyphicon-user"></i></span>
											{!!Form::select('ESTADO', ['A' => 'ACTIVO', 'I' =>
											'INACTIVO', 'M' => 'MORA', 'D' => 'DESACTIVADO'], null,
											['class'=>'form-control','placeholder' => 'Estado'])!!}
										</div>
									</div>
									{!! $errors->first('ESTADO',' <span
										class="alert text-danger pull-right"><button type="button"
											class="close" data-dismiss="alert">&times;</button> :message.
									</span> ')!!}
								</div>
							</div>
							<br>
							<div class="row">
								<div class="col-lg-6">
									<label class="col-md-5 control-label"><a class="requerido"></a>
										Discapacidad </label>
									<div class="form-group">
										<div class="input-group">

											{!! Form::radio('DISCAPACIDAD', '1', (old('DISCAPACIDAD') ==
											'1'), ['id' => 'DISCAPACIDAD']) !!}<label>Discapacitado</label>
											<label class="radio-inline"> {!! Form::radio('DISCAPACIDAD',
												'0', (old('DISCAPACIDAD') =='0'),
												['id'=>'DISCAPACIDAD','checked'=>'true']) !!}Sin
												Discapacidad </label>
										</div>
									</div>
									{!! $errors->first('DISCAPACIDAD',' <span
										class="alert text-danger pull-right"><button type="button"
											class="close" data-dismiss="alert">&times;</button> :message.
									</span> ')!!}
								</div>
							</div>

							<div class="row" id="DivCondIncapacidad">
								<div class="col-lg-6">
									<label class="col-md-5 control-label"><a class="requerido"></a>
										<!-- 										Condición --> Cond Discapacidad</label>
									<div class="form-group">
										<div class="input-group">
											<label class="radio-inline">{!!
												Form::radio('CONDICION_DISCAPACIDAD', 'T',
												(old('CONDICION_DISCAPACIDAD') == 'T'), ['id' =>
												'Temporal']) !!}Temporal </label> <label
												class="radio-inline">{!!
												Form::radio('CONDICION_DISCAPACIDAD', 'P',
												(old('CONDICION_DISCAPACIDAD') == 'P'),
												['id'=>'Permanente']) !!}Permanente </label>
										</div>
									</div>
									{!! $errors->first('CONDICION_DISCAPACIDAD',' <span
										class="alert text-danger pull-right"><button type="button"
											class="close" data-dismiss="alert">&times;</button> :message.
									</span> ')!!}
								</div>

								<div class="col-lg-6">
									<label class="col-md-5 control-label"><a class="requerido"></a>Tipo
										de Discapacidad </label>
									<div class="form-group">
										<div class="input-group">
											<span class="input-group-addon"><i
												class="glyphicon glyphicon-user"></i></span>
											{!!Form::select('TIPO_DISCAPACIDAD', ['F' => 'Física', 'N'
											=> 'Neuro-sensorial','M'=>'Mental'], null,
											['id'=>'TIPO_DISCAPACIDAD','class'=>'form-control','placeholder'
											=> 'Seleccione Tipo Discapacidad'])!!}
										</div>
									</div>
									{!! $errors->first('TIPO_DISCAPACIDAD',' <span
										class="alert text-danger pull-right"><button type="button"
											class="close" data-dismiss="alert">&times;</button> :message.
									</span> ')!!}
								</div>
							</div>
							<br>
						</div>
					</div>
				</div>
			</div>
			<div class="form-group">{!! Form::submit('Registrar',['class'=>'btn
				btn-default pull-right','id'=>'formUsuarioSubmit'])!!}</div>
		</div>
	</div>
</div>