<?php
	class mensajes_web{
		public $conex;
		private $table= 'dynawebmensaje';
		private $campos_insert = 'nombre,correo,mensaje';

	    public function __construct($conec){
			$this->conex = $conec;
			$this->table = 'dynawebmensaje';
		}
		
		public function ingresar_mensaje($nombre, $correo, $mensaje){
			$columnas= strtoupper("'".$nombre."','".$correo."','".$mensaje."'");
			return $this->conex->insert($this->table,$this->campos_insert,$columnas);
		}

	}
?>