
//selector = $.noConflict();

	selector(document).ready(function() {
		
		selector(".form-control").prop("disabled", true);
		selector(".radio-inline input:radio").prop("disabled", true);	
//		selector(".radio-inline input:radio").css("background-color","yellow");
		
//		alert(selector(".radio-inline input:radio [name='CONDICION_DISCAPACIDAD'] ").val());
		selector("#formUsuarioSubmit").attr('submit-button', 'disabled') == 'true';
		selector("#formUsuarioSubmit").css('visibility', 'hidden');

});