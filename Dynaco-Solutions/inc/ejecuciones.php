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
          $salida = $_SESSION['dynaco']->wmessage->ingresar_mensaje($_REQUEST['nombre'],$_REQUEST['correo'],$_REQUEST['mensaje']);                
            if($salida){
                  mail('jmata@dynaco-solutions.com', $_REQUEST['nombre'],$_REQUEST['mensaje'], '');
                     echo 'ok';
	       }else return false;
            }    
	}
?>