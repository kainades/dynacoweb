<?php
require_once("../sistema/central.php");
if($_REQUEST['accion'] == 'newmasive'){
	if ($_REQUEST['correo']){
		$salida = $_SESSION['dynaco']->mailmasivo->ingresar_registro($_REQUEST['correo']);
		if($salida) echo 'ok';
		else return false;
	}
}else if ($_REQUEST['accion'] == 'sendwebmessage'){
    if ($_REQUEST['nombre'] && $_REQUEST['correo'] && $_REQUEST['mensaje']){
    	$salida = $_SESSION['dynaco']->wmessage->ingresar_mensaje($_REQUEST['nombre'],$_REQUEST['correo'],$_REQUEST['telefono'],$_REQUEST['mensaje']);                
    	if($salida){
            mail('jampzo@gmail.com','ContactoWeb', $_REQUEST['nombre']."\n\n ".$_REQUEST['telefono']."\n\n ".$_REQUEST['mensaje'], null, "-f ".$_REQUEST['correo'] );
    		mail($_REQUEST['correo'],'ContactoWeb', "Su mensaje nos fue entregado, en breve tendrá respuesta de nosotros.\n Dynaco Solutions, Generamos Soluciones!", null, '-f noresponder@dynaco-solutions.info' );
    	}else return false;
    }
}
?>



