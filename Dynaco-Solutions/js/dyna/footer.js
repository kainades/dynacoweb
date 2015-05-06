$(function(){
	$('#mailmasivo').focusin(function(){
		$("#alertaemail").empty();
		if(!validarEmail($('#mailmasivo').val())) $('#mailmasivo').val('');
	}).focusout(function(){
		if (validarcamposvaciosx('suscribeme') && !validarEmail($('#mailmasivo').val())){
			$('#mailmasivo').val('');
			display_message('correo','El correo ingresado no esta correctamente escrito');
		}		
	}).enterKey(function(){
		ejecucion_entermailmasivo();
	});

	$('#suscribemail').click(function(){
		ejecucion_entermailmasivo();
	});
});