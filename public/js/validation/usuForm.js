selector( document ).ready(function() {
	
	selector('#DivCondIncapacidad').hide();
	selector('input[name="CONDICION_DISCAPACIDAD"]').prop('disabled', true);
	selector("#TIPO_DISCAPACIDAD").prop('disabled', true);
	
	selector('#formUsuario,#formUsuarioEdit').bootstrapValidator({
			trigger: 'blur',
			excluded: ':disabled',
			message:'This value is not valid',
			feedbackIcons: {
				valid: 'glyphicon glyphicon-ok-circle',
				invalid: 'glyphicon glyphicon-remove-circle',
				validating: 'glyphicon glyphicon-refresh-circle',
			},
			fields: {
				TIPO_DOCUMENTO:{
					validators: {
							notEmpty:{
								message: 'The NUM_IDENTIFICACION is required'
								}
						},// end validators
				}, //End  TIPO_DOCUMENTO
				NUM_IDENTIFICACION:{
					validators: {
						notEmpty:{
							message: 'The NUM_IDENTIFICACION is required'
						},
						stringLenght:{
							min:6,
							max:10,
							message: 'The NUM_IDENTIFICACION must be more than 6 and less than 10 characters long.'
						},
						numeric: {
	                          message: 'The NUM_IDENTIFICACION can only consist of number are allowed'
	                      }
					}// end validators
				}, //End  NUM_IDENTIFICACION
				PRIMER_NOMBRE:{
					validators: {
						notEmpty:{
							message: 'The PRIMER_NOMBRE is required'
						},
						regexp: {
//							regexp: /^[\p{Latin}[A-Za-z]+$/,
							regexp: /^[a-zA-ZñÑáéíóúÁÉÍÓÚ_\.]+$/,
//							regexp: /^[a-zA-ZñÑáéíóúÁÉÍÓÚ\s]+/,
							message: 'The username can only consist of alphabetical, number dot and underscore'
						},
						stringLenght:{
							min:2,
							max:191,
							message: 'The username must be more than 2 and less than 191 characters long.'
						},
					}// end validators
				}, //End  PRIMER_NOMBRE
				SEGUNDO_NOMBRE:{
					validators: {
						notEmpty:{
							message: 'The SEGUNDO_NOMBRE is required'
						},
						stringLenght:{
							min:2,
							max:191,
							message: 'The SEGUNDO_NOMBRE must be more than 2 and less than 191 characters long.'
						},
						regexp: {
							regexp: /^[a-zA-ZñÑáéíóúÁÉÍÓÚ_\.]+$/,
							message: 'The SEGUNDO_NOMBRE can only consist of alphabetical, number dot and underscore'
						}
					}// end validators
				}, //End  SEGUNDO_NOMBRE
				PRIMER_APELLIDO:{
					validators: {
						notEmpty:{
							message: 'The PRIMER_APELLIDO is required'
						},
						stringLenght:{
							min:2,
							max:191,
							message: 'The PRIMER_APELLIDO must be more than 2 and less than 191 characters long.'
						},
						regexp: {
							regexp: /^[a-zA-ZñÑáéíóúÁÉÍÓÚ_\.]+$/,
							message: 'The PRIMER_APELLIDO can only consist of alphabetical, number dot and underscore'
						}
					}// end validators
				}, //End  PRIMER_APELLIDO
				SEGUNDO_APELLIDO:{
					validators: {
						notEmpty:{
							message: 'The SEGUNDO_APELLIDO is required'
						},
						stringLenght:{
							min:2,
							max:191,
							message: 'The SEGUNDO_APELLIDO must be more than 2 and less than 191 characters long.'
						},
						regexp: {
							regexp: /^[a-zA-ZñÑáéíóúÁÉÍÓÚ_\.]+$/,
							message: 'The SEGUNDO_APELLIDO can only consist of alphabetical, number dot and underscore'
						}
					}// end validators
				}, //End  SEGUNDO_APELLIDO
				FECHA_DE_NACIMIENTO: {
	                validators: {
	                    notEmpty: {
	                        message: 'The date is required and cannot be empty'
	                    },
	                    date: {
	                        format: 'YYYY-MM-DD'
	                    }
	                }
	            },
				SEXO:{
					validators:{
						notEmpty:{
							message: 'The SEXO is required',
							}// End notEmpty
						}// End validators
					},// End SEXO
					GRUPO_SANGUINEO:{
						validators:{
							notEmpty:{
								message: 'The GRUPO_SANGUINEO is required',
							}// End notEmpty
						}// End validators
					},// End GRUPO_SANGUINEO
					FACTOR_RH:{
						validators:{
							notEmpty:{
								message: 'The FACTOR_RH is required',
							}// End notEmpty
						}// End validators
					},// End FACTOR_RH
					ESTADO_CIVIL:{
						validators:{
							notEmpty:{
								message: 'The ESTADO_CIVIL is required',
							}// End notEmpty
						}// End validators
					},// End ESTADO_CIVIL
					VINCULO_LABORAL:{
						validators:{
							notEmpty:{
								message: 'The VINCULO_LABORAL is required',
							}// End notEmpty
						}// End validators
					},// End VINCULO_LABORAL
					ESTADO:{
						validators:{
							notEmpty:{
								message: 'The estate is required',
							}// End notEmpty
						}// End validators
					},// End ESTADO
				email:{
					validators:{
						notEmpty:{
							message: 'Please enter you email',
							},// End notEmpty
							emailAddress:{
								message: 'The value is not a valid email address'
								}// End emailAddress
						}// End validators
					},// End email
				phone:{
					validators:{
						notEmpty:{
							message: 'Please enter you phone no.',
							},// End notEmpty
							digits:{
								message: 'The mobile phone number is not valid'
								},//End gigits
								stringLength:{
									min: 10,
									max: 12,
									message: 'The phone no. must be 10 digits'
									
									}// End stringLength
						}// End validators
					},// End phone
					DISCAPACIDAD:{
						validators:{
							notEmpty:{
								message: 'The DISCAPACIDAD is required',
							}// End notEmpty
						}// End validators
					},// End DISCAPACIDAD
					CONDICION_DISCAPACIDAD:{
					
						validators:{
							notEmpty:{
								message: 'The CONDICION_DISCAPACIDAD is required',
							
							}// End notEmpty
						}// End validators
					},// End CONDICION_DISCAPACIDAD
					TIPO_DISCAPACIDAD:{
						validators:{
							notEmpty:{
								message: 'The TIPO_DISCAPACIDAD is required',
							}// End notEmpty
						}// End validators

					},// End TIPO_DISCAPACIDAD

					
			}// End fields
			
	    });//End bootstrapValidator
	

	
	/*Validamos cuando sea para el formulario de editar */
//		selector('input[name="DISCAPACIDAD"]', '#formUsuarioEdit').each( function () {
			
//			if (){
//				
	
	
	
//			}
			if(selector('input[name="DISCAPACIDAD"]', '#formUsuarioEdit').val()==1){

				selector('input[name="DISCAPACIDAD"][value="1"]', '#formUsuarioEdit').prop('checked', true);
				selector('#DivCondIncapacidad').show();
				selector('input[name="CONDICION_DISCAPACIDAD"][value="'+selector('input[name="CONDICION_DISCAPACIDAD"]', '#formUsuarioEdit').val()+'"]', '#formUsuarioEdit').prop('checked', true);
				selector('input[name="CONDICION_DISCAPACIDAD"]', '#formUsuarioEdit').prop('disabled', false);
				selector("#TIPO_DISCAPACIDAD", '#formUsuarioEdit').prop('disabled', false);
			}
			
//	});
	
//	if(selector('input[name="DISCAPACIDAD"]:checked', '#formUsuario').val()==1){
//		
//		selector('#DivCondIncapacidad').show();
//		
//		selector('input[name="CONDICION_DISCAPACIDAD"]').prop('disabled', false);
//		selector("#TIPO_DISCAPACIDAD").prop('disabled', false);
//		selector('#formUsuario').bootstrapValidator('revalidateField', 'CONDICION_DISCAPACIDAD');
//		selector('#formUsuario').bootstrapValidator('revalidateField', 'TIPO_DISCAPACIDAD');
//}
	
	selector('#formUsuario,#formUsuarioEdit').on('change', '[name="DISCAPACIDAD"]', function(e) {
		
		
		if(selector('input[name="DISCAPACIDAD"]:checked', '#formUsuario,#formUsuarioEdit').val()==1){
			
			selector('#DivCondIncapacidad').show();
			
			selector('input[name="CONDICION_DISCAPACIDAD"]').prop('disabled', false);
			selector("#TIPO_DISCAPACIDAD").prop('disabled', false);
			selector('#formUsuario').bootstrapValidator('revalidateField', 'CONDICION_DISCAPACIDAD');
			selector('#formUsuario').bootstrapValidator('revalidateField', 'TIPO_DISCAPACIDAD');
	}//End if
		else{
			
			selector('input[name="CONDICION_DISCAPACIDAD"]').prop('checked', false);
			selector("#TIPO_DISCAPACIDAD option").prop("selected", false);
			selector('input[name="CONDICION_DISCAPACIDAD"]').prop('disabled', true);
			selector("#TIPO_DISCAPACIDAD").prop('disabled', true);
			selector('#DivCondIncapacidad').hide();
			
		}
	});
	/*Usamos el datetimepicker en fecha*/
//	TIPO_DOCUMENTO
	
//	esta funciona
	
	selector(function () {
		
		if(selector('#FECHA_DE_NACIMIENTO').val()==""){
//			alert('el valor es nulo');
			
		
//		selector.extend( selector.fn.datetimepicker.defaults, {format: 'dd-mm-yyyy', locale: 'es'} );
		
//    	selector('input[name="FECHA_DE_NACIMIENTO"]').datetimepicker({
    		selector('#FECHA_DE_NACIMIENTO').datetimepicker({
//    		        todayBtn: true,
    		    format: 'YYYY-MM-DD',
    		    locale: 'es-us',
    		    useCurrent: false,
//    			keepOpen: true,
//    			showTodayButton: true,
//    			minDate : 'now',//valido cuando la fecha minima es la actual
//    			maxDate: moment().add(3, 'days'),//valido cuando se aceptan maximo 3 dias mas
//    			minDate: moment().add(-3, 'year'), // funciona
//    			maxDate: moment().add(-3, 'days'),//funciona
    			minDate: moment().add(-100, 'year'),
    			maxDate: moment().add(-18, 'year'),//por ahora dejar asi funciona 
//    			maxDate: moment()//por ahora dejar asi 
    			

        });//end  datetimepicker
		}else{
						
    		selector('#FECHA_DE_NACIMIENTO').datetimepicker({
//		        todayBtn: true,
    		useCurrent: false,
		    format: 'YYYY-MM-DD',
		    locale: 'es-us',
//			keepOpen: true,
//			showTodayButton: true,
//			minDate : 'now',//valido cuando la fecha minima es la actual
//			maxDate: moment().add(3, 'days'),//valido cuando se aceptan maximo 3 dias mas
//			minDate: moment().add(-3, 'year'), // funciona
//			maxDate: moment().add(-3, 'days'),//funciona
			minDate: moment().add(-100, 'year'),
			maxDate: moment().add(-18, 'year'),//por ahora dejar asi funciona 
//			maxDate: moment()

    });//end  datetimepicker
		}
	});//end function datetimepicker
	
//	hasta aca funciona
	
	
if(selector('#TIPO_DOCUMENTO option:selected').val()=='null'  ||selector('#TIPO_DOCUMENTO option:selected').val()=='' ){
		
		selector(function () {
		selector('#FECHA_DE_NACIMIENTO').datetimepicker({
//	    		        todayBtn: true,
			useCurrent: false,
			format: 'YYYY-MM-DD',
			locale: 'es-us',
			minDate: moment().add(-100, 'year'),
			maxDate: moment()//por ahora dejar asi 
			
		});//end  datetimepicker
	});//end function datetimepicker
		
	}else{
			
//	selector('#formUsuario').on('change', '[name="TIPO_DOCUMENTO"]', function(e) {
		
		
		selector('#FECHA_DE_NACIMIENTO').empty();
		selector('#formUsuario,#formUsuarioEdit').on('change', '[name="TIPO_DOCUMENTO"] option:selected', function(e) {
		switch (selector('#TIPO_DOCUMENTO option:selected').val()) {
		case 'CC':
			alert('Cedula de ciudadania');
			selector(function () {
    		selector('#FECHA_DE_NACIMIENTO').datetimepicker({
//		        todayBtn: true,
//    		useCurrent: false,
    			useCurrent: false,
		    format: 'YYYY-MM-DD',
		    locale: 'es-us',
			keepOpen: true,
			minDate: moment().add(-100, 'year'),
			maxDate: moment().add(-18, 'year'),

    });//end  datetimepicker
			});//end function datetimepicker
			
			break;
		case 'TI':
			alert('Tarjeta de Identidad');
			selector(function () {
				selector('#FECHA_DE_NACIMIENTO').datetimepicker({
//		        todayBtn: true,
					useCurrent: false,
					format: 'YYYY-MM-DD',
					locale: 'es-us',
					keepOpen: true,
					minDate: moment().add(-8, 'year'),
					maxDate: moment().add(-8, 'year'),
					
				});//end  datetimepicker
			});//end function datetimepicker
			
			break;
		case 'RC':
			alert('Registro Civil');
//			selector.extend( selector.fn.datetimepicker.defaults, {minDate: moment().add(-8, 'year'), maxDate: moment().add(-8, 'year')} );
//			selector('#FECHA_DE_NACIMIENTO').data('DateTimePicker').date(moment(new Date ()).moment().add(-8, 'year'));
		
//			selector('#formUsuario').on('change', '[name="TIPO_DOCUMENTO"]', function(e) {
//			selector('#TIPO_DOCUMENTO').data('DateTimePicker').on('dp.change', function(e) {
				
				selector('#FECHA_DE_NACIMIENTO').datetimepicker({
					useCurrent: false,
						minDate: moment().add(-10, 'year'),
						maxDate: moment().add(-8, 'year'),
						
//					}).datetimepicker('refresh');//end  datetimepicker
		});//end  datetimepicker
//			});
			break;
		case 'CN':
			alert('Certificado de Nacido Vivo');
			
			break;
			
		default:
			selector(function () {
			
		    		selector('#FECHA_DE_NACIMIENTO').datetimepicker({
		    			useCurrent: false,
		    		    format: 'YYYY-MM-DD',
		    		    locale: 'es-us',
		    			minDate: moment().add(-100, 'year'),
		    			maxDate: moment()//por ahora dejar asi 

		        });//end  datetimepicker
			});//end function datetimepicker
			break;
		}
//	});
	

		});//finaliza el onchenge
	}

if(selector('#formUsuarioEdit #TIPO_DOCUMENTO option:selected').val()!='null'  ||selector('#formUsuarioEdit #TIPO_DOCUMENTO option:selected').val()!='' ){
selector('input[name="CONDICION_DISCAPACIDAD"]').prop('disabled', true);
}
});// End document ready

