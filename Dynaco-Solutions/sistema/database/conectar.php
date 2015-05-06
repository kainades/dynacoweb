<?php include_once 'datos_conexion/mysql_datos.php';
class conexion{
	private $BD_NAME;
	private $BD_HOST;
	private $BD_USUARIO;
	private $BD_PASSWORD;
	private $DEBUG;
	private $TIPO;

	 public function validacion(){
            	/*	$this->BD_NAME		=	MYBD_NAME1;
			$this->BD_HOST		=	MYBD_HOST1;
			$this->BD_USUARIO	=	MYBD_USUARIO1;
			$this->BD_PASSWORD	=	MYBD_PASSWORD1;
			$this->DEBUG		=	MYDEPURAR1;*/
		
		if ($_SERVER["SERVER_NAME"] == 'dynaco-solutions.org'){
			$this->BD_NAME		=	MYBD_NAME1;
			$this->BD_HOST		=	MYBD_HOST1;
			$this->BD_USUARIO	=	MYBD_USUARIO1;
			$this->BD_PASSWORD	=	MYBD_PASSWORD1;
			$this->DEBUG		=	MYDEPURAR1;
		}
		if ($_SERVER["SERVER_NAME"] == 'dynaco-solutions.com'){
			$this->BD_NAME		=	MYBD_NAME2;
			$this->BD_HOST		=	MYBD_HOST2;
			$this->BD_USUARIO	=	MYBD_USUARIO2;
			$this->BD_PASSWORD	=	MYBD_PASSWORD2;
			$this->DEBUG		=	MYDEPURAR2;
		}
		
	 }
	 
	 protected function get_bd(){
	 	return $this->BD_NAME;
	 }
	 
	 protected function get_host(){
	 	return $this->BD_HOST;
	 }
	 
	 protected function get_usuario(){
	 	return $this->BD_USUARIO;
	 }
	 
	 protected function get_pass(){
	 	return $this->BD_PASSWORD;
	 }
	 
	 protected function get_debug(){
	 	return $this->DEBUG;
	 }
	 
	 public function get_tipo(){
		 return $this->TIPO;
	 }
}
/**
 * MINI FRAMEWORK CREADO POR JESÚS MATA
 * JAMPZO@GMAIL.COM
**/
?>
