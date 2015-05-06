
<?php
/*Plugin Name: Dynaco menu
	Plugin URI: http://localhost/
	Description: plungin para la administracion de contactos, equipos de trabajo, y fundamentos
	Version: 0.2
	Author: Yancy Marine
	Author URI: http://localhost/	
	*/
	
function dynacoplug_instala(){
	global $wpdb; 
	$table_name= $wpdb->prefix."departamentos";
	  $sql = "CREATE TABLE IF NOT EXISTS $table_name (id int(10) unsigned NOT NULL AUTO_INCREMENT, detalle varchar(45) NOT NULL, PRIMARY KEY (id)) ENGINE=InnoDB DEFAULT CHARSET=latin1;";
		  $wpdb->query($sql);
		  $sql="SELECT * FROM $table_name"; $miregistro=$wpdb->get_results($sql);
		  if(count($miregistro)<4){
		  $sql = "INSERT INTO $table_name (detalle) VALUES ('Proyecto'),('TI'),('Personal'),('Software');";
		  $wpdb->query($sql);}
	   $table_name= $wpdb->prefix."categoria";
	   $sql = "CREATE TABLE IF NOT EXISTS $table_name (id int(10) unsigned NOT NULL AUTO_INCREMENT, detalle varchar(45) NOT NULL, PRIMARY KEY (id)) ENGINE=InnoDB DEFAULT CHARSET=latin1;";
	      $wpdb->query($sql);
		  $sql="SELECT * FROM $table_name"; $miregistro=$wpdb->get_results($sql);
		  if(count($miregistro)<4){
	      $sql = "INSERT INTO $table_name (detalle) VALUES ('Infraestructura'),('Desarrollo web'),('Lenguages de Programacion'),('Idiomas');";
	      $wpdb->query($sql);}
	    $table_name= $wpdb->prefix."personal";
        $sql = "CREATE TABLE IF NOT EXISTS $table_name (id int(10) unsigned NOT NULL AUTO_INCREMENT, nombre varchar(80) NOT NULL, 	        id_departamento int(10) unsigned DEFAULT NULL, departamento varchar(40) DEFAULT NULL,
            detalle varchar(255) DEFAULT NULL, foto varchar(255) DEFAULT NULL,  face varchar(80) DEFAULT NULL, twit varchar(80) DEFAULT NULL, instag varchar(80) DEFAULT NULL, 
			linke varchar(80) DEFAULT NULL, githu varchar(80) DEFAULT NULL, activo tinyint(4) DEFAULT '1', posicion  int(10) DEFAULT '1', PRIMARY KEY (id)) ENGINE=InnoDB DEFAULT CHARSET=latin1;";
	$wpdb->query($sql);
	$table_name= $wpdb->prefix."nosotros";
	$sql = "CREATE TABLE IF NOT EXISTS $table_name (id int(10) unsigned NOT NULL AUTO_INCREMENT,  titulo varchar(80) NOT NULL,  detalle varchar(255) DEFAULT NULL, nivel int(10) DEFAULT NULL,
            PRIMARY KEY (id)) ENGINE=InnoDB DEFAULT CHARSET=latin1;";
	$wpdb->query($sql);
	$table_name= $wpdb->prefix."habilidad";
	$sql = "CREATE TABLE IF NOT EXISTS $table_name (id int(11) NOT NULL,  id_categoria int(10) unsigned DEFAULT NULL,  nombre varchar(80) DEFAULT NULL, porcentaje int(11) DEFAULT NULL, PRIMARY KEY (id))ENGINE=InnoDB DEFAULT CHARSET=latin1;";
	$wpdb->query($sql);
}

function dynacoplug_desinstala(){
	/*global $wpdb; 
	$table_name = $wpdb->prefix . "departamentos"; $sql = "DROP TABLE $table_name"; $wpdb->query($sql);
	$table_name = $wpdb->prefix . "personal"; $sql = "DROP TABLE $table_name"; 	$wpdb->query($sql); 
	$table_name = $wpdb->prefix . "categoria"; 	$sql = "DROP TABLE $table_name"; $wpdb->query($sql);
	$table_name = $wpdb->prefix . "nosotros"; 	$sql = "DROP TABLE $table_name"; $wpdb->query($sql);
	$table_name = $wpdb->prefix . "habilidad"; 	$sql = "DROP TABLE $table_name"; $wpdb->query($sql);*/
}
function menu_dynaco(){
  $bloque="<div style='height:30px;'><h1>Dynaco</h1></div>";
  add_menu_page('Menu Dynaco', "$bloque", 'manage_options', 'theme-options', 'wps_theme_func',plugins_url( 'dynacoplug/img/logo.png' ),2);
 /*add_submenu_page( 'theme-options', 'Nosotros', 'Nosotros', 'manage_options', 'theme-op-settings', 'nosotrosform');*/
  add_submenu_page( 'theme-options', 'Equipo', 'Nuestro Equipo', 'manage_options', 'theme-op-faq', 'equipoform');
  /*add_submenu_page( 'theme-options', 'Contacto', 'Contactenos', 'manage_options', 'theme-op-faq1', 'contactoform');*/
}

function equipos_frontal(){
	include('paginas/underground/equipof.php');
	}
function wps_theme_func(){
               /* echo '<div class="wrap"><div id="icon-options-general" class="icon32"><br></div>
                <h2>Sistema ayuda</h2></div>';*/
				/*nosotrosform();*/
}
function nosotrosform(){
	             $a=explode('themes/',get_template_directory_uri());
				 $dire[0]=$a[0].'plugins/dynacoplug/paginas/js/utilidades.js';
				 $dire[1]=$a[0].'plugins/dynacoplug/paginas/underground/sistema.php';
				 $dire[2]=$a[0].'plugins/dynacoplug/img/';
				 include('paginas/nosotros.php');/*aqui nos traemos la pagina*/			
               
}
function equipoform(){
	             $a=explode('themes/',get_template_directory_uri());
				 $dire[0]=$a[0].'plugins/dynacoplug/paginas/js/utilidades.js';
				 $dire[1]=$a[0].'plugins/dynacoplug/paginas/underground/sistema.php';
				 $dire[2]=$a[0].'plugins/dynacoplug/img/';
				 $dire[4]=refrescado();
				 $dire[3]=$a[0].'plugins/dynacoplug/paginas/js/jquery-1.11.1.min.js';
				    $dato=($_POST['paquete']);
				    $dato=str_replace('|',"'",$dato);
				    global $wpdb;
	                $table_name = $wpdb->prefix . "personal";$sql="";
	            if(isset($dato)&&strlen($dato)>5){
					$sql = "TRUNCATE TABLE $table_name;"; $wpdb->query($sql);
			        $sql = "INSERT INTO $table_name (nombre,id_departamento, departamento, detalle, face, twit, instag, linke, githu, foto) VALUES ".$dato.";"; $wpdb->query($sql);}
				include('paginas/equipo.php');
}

/*extremo para salir de los siclos*/
function refrescado(){
	  $direccion=explode('themes/',get_template_directory_uri());
	  global $wpdb;
	  $table_name = $wpdb->prefix . "personal";
	  $cache1=array();$aux=array();$my_column="";
	  $sql = "SELECT * FROM  $table_name";
	  $miregistro=$wpdb->get_results($sql);
	    foreach($miregistro as $key => $row) {
			    $social="";
				if($row->face!="no"){ $social=$social.'<img src="'.$direccion[0].'plugins/dynacoplug/img/face.png" name="soci"  width="25px" height="25px" class="mano" >';}
	            if($row->twit!="no"){$social=$social.'<img src="'.$direccion[0].'plugins/dynacoplug/img/ttwi.png" name="soci"  width="25px" height="25px" class="mano" >';}
		        if($row->instag!="no"){$social=$social.'<img src="'.$direccion[0].'plugins/dynacoplug/img/instagr.png" name="soci"  width="25px" height="25px" class="mano" >';}
		        if($row->linke!="no"){$social=$social.'<img src="'.$direccion[0].'plugins/dynacoplug/img/linkin.png" name="soci"  width="25px" height="25px" class="mano" >';}
		        if($row->githu!="no"){$social=$social.'<img src="'.$direccion[0].'plugins/dynacoplug/img/gitico.png" name="soci"  width="25px" height="25px" class="mano" >';}
				$d=str_replace(' ', '', $row->nombre);$d=$d.rand();	
                $my_column =$my_column.'<table class="balcon" id="'.$d.'"><tr><td colspan="2" align="right" class="tabla"><input type="button" name="'.$d.'" title="'.$row->nombre.'" value="Modificar" onclick="javascript:encontrado(this);"><input type="button" name="'.$d.'"  value="Eliminar" onclick="javascript:encontrado(this);"></td></tr><tr><td><table class="tabla" style="width:470px; " ><tr><td>Nombre</td><td>Departamento</td></tr><tr><td ><input  type="text" value="'.$row->nombre.'" readonly></td><td ><input id="departa" type="text" size="30" value="'.$row->departamento.'"  readonly></td></tr><tr><td align="center"><div  style="width:155px; height:155px;" ><img src="'.$row->foto.'" ></td><td ><textarea  cols="25" rows="7"  style="resize: none;">'.$row->detalle.'</textarea></td></tr><tr><td colspan="2" ><div  style="height:40px"></div>'.$social.'</td></tr></table></td></tr></table>';	
$aux[0]=$row->nombre;$aux[1]=$row->id_departamento;$aux[2]=$row->departamento;$aux[3]=$row->detalle;$aux[4]=$row->face;$aux[5]=$row->twit;$aux[6]=$row->instag;$aux[7]=$row->linke;$aux[8]=$row->githu;$aux[9]=$row->foto;$aux[10]=$d;array_push($cache1,$aux);}
								$toma[0]=$my_column;/*guardado de base tipo tabla*/	
				                $toma[1]=$cache1;
								return $toma;
}

/*siclo final de salida*/
function contactoform(){
                include('paginas/contactos.php');/*aqui nos traemos la pagina*/			
}



add_action('admin_menu', 'menu_dynaco');
add_action('activate_dynacoplug/dynacoplug.php','dynacoplug_instala');
add_action('deactivate_dynacoplug/dynacoplug.php', 'dynacoplug_desinstala');		
?>


