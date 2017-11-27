/**
 *
 * @author <a href="mailto:johnh.bernal@premize.com">John Hawer Bernal Gonzalez;
 * @since 11/03/2015
 * En esta función llamamos a un ajax para que nos realize una consulta a la funcion getRecurso 
 * que se encuentra dentro del controlador SearchController a partir del 3 caracter ingresado.
 * Nos devuelve el nombre y el apellido contatenados del empleado y su codigo de empleado.
 */
selector(function mostrarRecurso() {
//	function log( message ) {
//		selector( "<div>" ).text( message ).prependTo( "#log" );
//		selector( "#log" ).scrollTop( 0 );
//	}

//	selector( 'input[name="NUM_IDENTIFICACION"]' ).keyup(function() {
//		  alert( "Handler for .keyup() called." );
//		});
	
	selector( 'input[name="NUM_IDENTIFICACION"]' ).autocomplete({
		
		source: function( request, response ) {
//			console.log('Desde usuarioAutocomplete');
//			alert('Desde usuarioAutocomplete');
//			return false;
			selector.ajax({

				url: "../showUserByID",
				type:  'GET',
				data: {
					'filtroUsuario': request.term,
				},
				success: function( data ) {
					
					alert('hizo algo');
					
					response( data );
				}
			});
		},
		minLength: 3,
//		select: function( event, ui ) {
//			if(ui.item){
//				selector("#idRecurso").val(ui.item.id); 
//			}else{
//				selector("#idRecurso").val(''); 
//			}
//			log( ui.item ?
//					"Selected: " + ui.item.label :
//						"Nothing selected, input was " + this.value);
//		},
//		change: function( event, ui ) {
//			if(ui.item){
//				selector("#idRecurso").val(ui.item.id); 
//			}else{
//				selector("#idRecurso").val(''); 
//			}
//			log( ui.item ?
//					"Selected: " + ui.item.label :
//						"Nothing selected, input was " + this.value);
//		},
//		open: function() {
//			selector( this ).removeClass( "ui-corner-all" ).addClass( "ui-corner-top" );
//		},
//		close: function() {
//			selector( this ).removeClass( "ui-corner-top" ).addClass( "ui-corner-all" );
//		}
	});
});