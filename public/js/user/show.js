
//selector = $.noConflict();

	selector(document).ready(function() {
		
		selector(".form-control").prop("disabled", true);
		selector(".radio-inline input:radio").prop("disabled", true);		
		selector("#formUsuarioSubmit").attr('submit-button', 'disabled') == 'true';
		selector("#formUsuarioSubmit").css('visibility', 'hidden');

});