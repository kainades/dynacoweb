$.fn.enterKey = function (fnc) {
    return this.each(function () {
        $(this).keypress(function (ev) {
            var keycode = (ev.keyCode ? ev.keyCode : ev.which);
            if (keycode == '13') fnc.call(this, ev);
        })
    })
}

direccion = 'http://dynaco-solutions.com/wp-content/themes/Dynaco-Solutions';/*linea se debe cambiar al mano por estar en un js que se interpreta en el cliente*/

function validarEmail(email){expr=/^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;if(!expr.test(email)) return false;else return true;}

function display_message(tipo, mensaje){
	if ( tipo == 'correo' ){
		$("#alertaemail").html('').html('<div class="alert alert-danger"><button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button><strong><i class="fa fa-times"></i> Error!</strong> '+mensaje+'.</div>');
	}

	if ( tipo == 'formulario' ){
		$("#alertacorreo").html('').html('<div class="alert alert-danger"><button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button><strong><i class="fa fa-times"></i> Error!</strong> '+mensaje+'.</div>');
	}

	if ( tipo == 'correook' ){
		$("#alertaemail").html('').html('<div class="alert alert-success"><button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button><strong><i class="fa fa-check"></i> Perfecto!</strong> '+mensaje+'.</div>');
	}
	if ( tipo == 'correobad' ){
		$("#alertaemail").html('').html('<div class="alert alert-danger"><button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button><strong><i class="fa fa-times"></i> Error!</strong> '+mensaje+'.</div>');
	}

	if ( tipo == 'formulariook' ){
		$("#alertacorreo").html('').html('<div class="alert alert-success"><button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button><strong><i class="fa fa-check"></i> Perfecto!</strong> '+mensaje+'.</div>');
	}
}

function validarcamposvaciosx(formulario){
	if (formulario == 'contactanos'){
		if ($('#InputName').val() && $('#InputEmail1').val() && $('#InputMessage').val()) return true;
		else return false;
	}
	if (formulario == 'suscribeme'){
		if ($('#mailmasivo').val() && validarEmail($('#mailmasivo').val())) return true;
		else{
			if ($('#mailmasivo').val() && !validarEmail($('#mailmasivo').val())){
				display_message('correo','El correo ingresado no esta correctamente escrito');
			}
			return false;
		}
	}
}

function ejecucion_entermailmasivo(){
	if(validarcamposvaciosx('suscribeme')){
		$.get(direccion+'/inc/ejecuciones.php',{accion:'newmasive',
			correo:$('#mailmasivo').val()
		},function(data){
			if (data == 'ok'){
				$('#mailmasivo').val('');
				display_message('correook','Hemos registrado su correo!');
			}else{
				$('#mailmasivo').val('');
				display_message('correobad','Su correo no Ingresado correctamente!');
				}
		});
	}else{
		
	}
}

function ejecucion_contactanos(){
	if(validarcamposvaciosx('contactanos')){
		$.get(direccion+'/inc/ejecuciones.php',{accion:'sendwebmessage',
			nombre:$('#InputName').val(),
			correo:$('#InputEmail1').val(),
			mensaje:$('#InputMessage').val()
		},function(data){
                       	if (data == 'ok'){
				$('#InputName, #InputEmail1, #InputMessage').val('');
				display_message('formulariook','Hemos recibido su mensaje, a la brevedad le estaremos contactando.');
			}else {
				$('#InputName, #InputEmail1, #InputMessage').val('');
				display_message('correobad','Hemos experimentado problemas tecnicos con su mensaje pedimos disculpa');
				}
		});
	}else display_message('formulario','Debe llenar todos los campos');
}
