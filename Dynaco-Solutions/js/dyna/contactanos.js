$(function(){
	$('#InputEmail1').focusin(function(){
		$("#alertaemail").empty();
	}).focusout(function(){
		if(!$('#InputEmail1').val()) display_message('correo',' Debe ingresar un correo electronico');
		else 
			if(!validarEmail($('#InputEmail1').val())){
				display_message('correo','El correo ingresado no esta correctamente escrito');
				$('#InputEmail1').val('');
			}
	});

	$('#InputEmail1, #InputEmail1, #InputMessage').focusin(function(){
		$( "#alertacorreo" ).empty();
	});

	$('#sendmessage').click(function(){
		ejecucion_contactanos();
	});
});