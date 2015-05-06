<?php
	class registro_masivo{
		public $conex;
		private $table= 'dynaptymasivo';
		private $campos_insert = 'correo';

	    public function __construct($conec){
			$this->conex = $conec;
		}
		
		public function ingresar_registro($correo){
			$columnas= strtolower("'".$correo."'");
			return $this->conex->insert($this->table,$this->campos_insert,$columnas);
		}
	}
?>