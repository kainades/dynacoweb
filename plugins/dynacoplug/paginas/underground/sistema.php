<?php

switch ($_REQUEST['accion']){//SELECTOR DE FUNCIONES
    case 0:palabras();break;
    case 1:pregatillo($_REQUEST['ruta']);break;
	case 2:cargadores();break;
   	 }

function pregatillo($ruta){
	//$cajon=listar_directorios_ruta($ruta);
	echo $ruta;
	}
	 

function palabras(){
	echo "arrecho";
	}

function insertar(){
	global $wpdb; 
	$table_name = $wpdb->prefix . "saludos";
	if(isset($_POST['saludo_inserta'])){	
			$sql = "INSERT INTO $table_name (saludo) VALUES ('{$_POST['saludo_inserta']}');";
			$wpdb->query($sql);
	}
	}
	
function cargadores(){
	global $wpdb;
	$selector="";
	   $a= $wpdb->get_results($wpdb->prepare("SELECT * FROM wp_departamentos where 1=1 GROUP BY detalle;" ));
	     $selector="<select id='selectado' >";
		 foreach ($a as $uno){$selector=$selector."<option value='".$uno->id."'>".$uno->detalle."</option>";}
		 $selector=$selector."</select>";
		  echo $selector;
	}
?>