<?php
	require_once('../sistema/database/MYSQL.php');
	require_once('../sistema/operaciones/webmessage.php');
	require_once('../sistema/operaciones/registro_masivo.php');

	class dynaco{
		public $conex;
		public $wmessage;
		public $mailmasivo;
				
	    public function __construct(){
			$this->conex		= new MYSQLclass();
			$this->wmessage		= new mensajes_web($this->conex);
			$this->mailmasivo	= new registro_masivo($this->conex);
		}

	}
	$_SESSION['dynaco'] = new dynaco();
?>