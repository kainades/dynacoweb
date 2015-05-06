<?php require_once 'conectar.php';
	define ('ACENDENTE' ,'ASC'); 
	define ('DECENDENTE','DESC');
	define ('ASSOCC'    ,'asocc'); 
	define ('ARRAY'     ,'array');

class MYSQLclass Extends conexion{

  private $Nombredb;
  private $Host;
  private $Usuario;
  private $Password;
  private $Enlace;
  private $result;
  private $query;
  private $DEBUG;
  private $sms_error;

        /**
         * CONSTRUCTOR
        */
	    public function __construct(){
			$this->validacion();
			$this->Nombredb		=	$this->get_bd();
			$this->Host		    =	$this->get_host();
			$this->Usuario		=	$this->get_usuario();
			$this->Password 	=	$this->get_pass();
			$this->DEBUG 		=	$this->get_debug();
			$this->TIPO		    =	$this->get_tipo();
			$this->Enlace		=	FALSE;
			$this->result 		=	NULL;
			$this->store 		=	NULL;
			$this->query  		=	NULL;
			$this->sms_error	=	NULL;
		}
        
        /**
         * METODO DE CONEXION
         * @SALIDA = RESOURCEID
        */
        public function Conectar(){
            $this->FreeResult($this->query);
            if(!$this->Enlace){
			     $this->Enlace	=	mysql_connect($this->Host,$this->Usuario,$this->Password);
                 if ($this->Enlace) mysql_select_db($this->Nombredb, $this->Enlace);
                 
                 if (self::error()) return self::cleaner();
                 
                 if(self::GetTablas('COUNT')>0) return $this->Enlace;
                 else{
                    printf('Esta database no dispone de tablas');
                    return self::cleaner();
                 }
			}else return self::cleaner();
		}
		
        /**
         * EL METODO DE DESCONEXION
         * @SALIDA = FALSE
        */
		private function Desconectar(){
			mysql_close($this->Enlace);
            return self::cleaner();
		}
             		
		public function QuerySelect($table, $rows, $tipo = 'ARRAY' ){
		  if($this->Conectar()){
		      $select = 'SELECT '.$rows.' FROM '.$table;

              $salida = self::execution_salida($select,$tipo);
              self::Desconectar();
              return $salida;
		  }else printf('No hay conexion');
	    }
        	    
	    public function QuerySelectDistinct($table, $rows, $tipo = 'ARRAY'){
	       if($this->Conectar()){
		      $select = 'SELECT DISTINCT '.$rows.' FROM '.$table;
              
              $salida = self::execution_salida($select,$tipo);
              self::Desconectar();
              return $salida;
		  }else printf('No hay conexion');  
	    }
	    
	    public function QuerySelectOrder($table, $rows,$order, $tipo = 'ARRAY'){
	       if($this->Conectar()){
		      $select = 'SELECT '.$rows.' FROM '.$table;
              if(count($order) == 2 && ($order[1] == ACENDENTE || $order[1] == DECENDENTE ))
                $select .= ' ORDER BY '.$order[0].' '.$order[1];
              
              $salida = self::execution_salida($select,$tipo);
              self::Desconectar();
              return $salida;
		  }else printf('No hay conexion');
	    }
        		
		public function QuerySelectWhere($table, $rows, $param, array $order,$tipo = 'ARRAY'){
		  if($this->Conectar()){
		      $select = 'SELECT '.$rows.' FROM '.$table;
              
              if($param != null) $select .= ' WHERE '.$param;
              
		      if(count($order) == 2 && ($order[1] == ACENDENTE || $order[1] == DECENDENTE ))
                $select .= ' ORDER BY '.$order[0].' '.$order[1];
              
              $salida = self::execution_salida($select,$tipo);
              self::Desconectar();
              return $salida;
		  }else printf('No hay conexion');
	    }
		
	    public function QuerySelectWhereDistinct($table, $rows, $param, array $order,$tipo = 'ARRAY'){	
			if($this->Conectar()){
		      $select = 'SELECT DISTINCT '.$rows.' FROM '.$table;
              
              if($param != null) $select .= ' WHERE '.$param;
              
		      if(count($order) == 2 && ($order[1] == ACENDENTE || $order[1] == DECENDENTE ))
                $select .= ' ORDER BY '.$order[0].' '.$order[1];
                            
              $salida = self::execution_salida($select,$tipo);
              self::Desconectar();
              return $salida;
		  }else printf('No hay conexion');
	    }
		
		public function QuerySelectWhereGROUP($table, $rows, $param, $group,$tipo = 'ARRAY'){ 
		  if($this->Conectar()){
		      $select = 'SELECT DISTINCT '.$rows.' FROM '.$table;
              
              if($param != null) $select .= ' WHERE '.$param;
              
		      $select .= ' GROUP BY '.$group;
              
              $salida = self::execution_salida($select,$tipo);
              self::Desconectar();
              return $salida;
		  }else printf('No hay conexion');
	    }
        
        public function QueryInnerNJoin($rows,$mastertable,array $inner,$tipo = 'ARRAY'){
            if($this->Conectar()){
                
                if($mastertable) $select = 'SELECT '.$rows.' FROM '.$mastertable;
                if($inner) for($i=0; $i<count($inner); $i++) $select .= ' INNER JOIN '.$inner[$i];	
                
              $salida = self::execution_salida($select,$tipo);
              self::Desconectar();
              return $salida;
            }else printf('No hay conexion');
		}
        
        public function QueryInnerNJoinWhere($rows,$mastertable,$where,array $inner,$tipo = 'ARRAY'){
            if($this->Conectar()){
                
                if($mastertable) $select = 'SELECT '.$rows.' FROM '.$mastertable;
                if($inner) for($i=0; $i<count($inner); $i++) $select .= ' INNER JOIN '.$inner[$i];
                $select .= ' WHERE '.$where;
                
              $salida = self::execution_salida($select,$tipo);
              self::Desconectar();
              return $salida;
            }else printf('No hay conexion');
		}
        
        public function QueryInnerNJoinWhereOrder($rows,$mastertable,$where,$order,array $inner,$tipo = 'ARRAY'){
            if($this->Conectar()){
                if($mastertable) $select = 'SELECT '.$rows.' FROM '.$mastertable;
                if($inner) for($i=0; $i<count($inner); $i++) $select .= ' INNER JOIN '.$inner[$i];
                $select .= ' WHERE '.$where;
                $select .= ' ORDER BY '.$order;
                
              $salida = self::execution_salida($select,$tipo);
              self::Desconectar();
              return $salida;
            }else printf('No hay conexion');
		}
        
        public function QueryCount($table,$rows,$where){
            if($this->Conectar()){
                $select = 'SELECT COUNT('.$rows.') FROM '.$table.' WHERE '.$where;
                $salida = self::execution_salida($select,'ARRAY');
                self::Desconectar();
                return $salida[0][0];
            }else printf('No hay conexion');
        }
       
		public function insert($table, $rows, $values){
		  if($this->Conectar()){
		      $insert = 'INSERT INTO '.$table;
              if($rows) $insert .= ' ('.$rows.') ';
              $insert .= ' VALUES ('.$values.')';
              
              $salida = self::execution_salida($insert);
              self::Desconectar();
              return $salida;
		  }else printf('No hay conexion');
        }
        
        public function update($table,$rows,$where){
            if($this->Conectar()){
		      $update = 'UPDATE '.$table. ' SET '.$rows. ' WHERE ' .$where;
              
              $salida = self::execution_salida($update);
              self::Desconectar();
              return $salida;
            }else printf('No hay conexion');
        }
		
		public function delete($table,$where = null){
            if($this->Conectar()){
		      
              if($where == NULL) $delete = 'DELETE '.$table;
              else $delete = 'DELETE FROM '.$table.' WHERE '.$where;
              
              $salida = self::execution_salida($delete);
              self::Desconectar();
              return $salida;
            }else printf('No hay conexion');
        }
        
        /**
         * METODO QUE BUSCA UN REGISTRO ESPECIFICADO ANTES DE HACER INSERT O UPDATE
         * $parametro array('CAMPO','OPERADOR','CONTENIDO')
         * get_registro('ssi_inventario',ARRAY('DESCRIPCION','=','hgfcghchchgc'))
         * @SALIDA = TRUE: Si lo consigue / FALSE: Si no lo consigue
        */
        public function get_registro($tabla,array $parametro){ //
            $param = "$parametro[0]$parametro[1]'".$parametro[2]."'";
            $cantidad = count(self::QuerySelectWhere($tabla,'*',$param,array($parametro[0],ACENDENTE),'ARRAY'));
            return $cantidad;
        }
		
    public function query(){
	  return $this->query;
	}
			
	public function NumRows($query){
	   if ($this->query) return mysql_num_rows($query);
	   return -1;
	}
	
	public function NumFields($query){
	    if ($this->query) return mysql_num_fields($query);		
	}
	
	public function FieldName($NroCampo,$query){
	  if ($this->query) return mysql_field_name($query,$NroCampo);
    }
		
	public function FreeResult($query){
 		$this->result = array();
	    return @mysql_free_result($query);
	}
    
    private function execution_salida($query = NULL, $tipo = NULL){
        if($query){
            $this->query = mysql_query($query,$this->Enlace);
            self::debugger($query);
            
            mysql_query("SET TEXTSIZE 65536",$this->Enlace);
            ini_set( 'mysql.textlimit' , '65536' );
		    ini_set( 'mysql.textsize' , '65536' );
            
            if($this->query){
                if($tipo){
                    switch($tipo){
                        case 'ARRAY':
                            $numResults = mysql_num_rows($this->query);//número de filas de la consulta o result set
            				for($i = 0; $i < $numResults; $i++){
                                $r = mysql_fetch_array($this->query,MYSQL_NUM);//fila capturada
                                $key = array_keys($r);//devuelve las claves de cadeba (indices)conunt cuantas existen
                                for($x = 0; $x < count($key); $x++){// solo matriz asociativa
                                    if(is_int($key[$x])){
                                        if(mysql_num_rows($this->query) >= 1) $this->result[$i][$key[$x]] = $r[$key[$x]];
                                        elseif(mysql_num_rows($this->query) < 1) $this->result = null;
                                    }
                                }
                            }
                            return $this->result;
                        case 'ASSOCC':
            			 return $this->query = mysql_query($q);
                    }                    
                }else{
                    $insertx = mysql_insert_id($this->Enlace);
                    if($insertx) return $insertx;
                    else return $this->query;
                }
            }return NULL;
        }else printf('Falta Script a ejecutar');
    }
    
    /**
         * METODO CLEANER LIMPIA VARIABLES Y RETORNA FALSE, SI EXISTE ALGUN PROBLEMA
         * @SALIDA = FALSE
        */
        private function cleaner(){
			$this->Enlace		=	FALSE;
			$this->result 		=	NULL;
			$this->store 		=	NULL;
			$this->query  		=	NULL;
			$this->sms_error	=	NULL;
            return FALSE;
        }
        
        /**
         * EL METODO DE VERIFICACIÓN DE ERRORES
         * @SALIDA = FALSE
        */
        private function error(){
            if (mysql_error()){
                $this->sms_error    = 'Error: '.mysql_errno().' : '.mysql_error()."\n";
                $salida             =   $this->sms_error;
                return $salida;
            }else FALSE;
        }
                        
        /**
         * EL METODO DE VERIFICACIÓN DE ERRORES
         * @ENTRADA: ARRAY SI SE NECESITA ARRAY DE TABLAS / COUNT SI SE NECESITA CANTIDAD DE TABLAS
         * @SALIDA = ARRAY/COUNT/FALSE
        */
        private function GetTablas($tipo = 'ARRAY'){
            if($this->Enlace){
                $records = mysql_query("SHOW TABLES",$this->Enlace);
                
                while($array_data = mysql_fetch_array($records)){ $tables[] = $array_data[0]; }
                $ntablas = count($tables);
                    
                if($ntablas > 0){
                    switch($tipo){
                        case 'ARRAY':
                            return $tables;
                            break;
                        case 'COUNT':
                            return $ntablas;
                            break;
                    }
                }else return 0;
            }else printf('No hay conexion');
    	}
        
        public function cantidad_tablas(){
            return self::GetTablas('COUNT');
        }
		
		public function _error($valor = NULL){
			if(!$valor) return $this->sms_error;
            else $this->sms_error = $valor;
		}
		
        private function debugger($query = NULL){
            if($this->DEBUG){
	           echo 'Query='.$query."\n";
               echo 'Resourceid='.$this->query."\n";
		   }
           if (self::error()) printf(self::error());
        }
        
        /**
         * VERIFICA LA CONEXION, PUEDE PROBARLA O PUEDE ESTABLECER LA CONEXION
         * @SALIDA = FALSE
        
        private function verifica_conex(){
			$verifica	=	mysql_connect($this->Host,$this->Usuario,$this->Password);
            mysql_select_db($this->Nombredb, $verifica);
            if(self::error()) printf(self::error());
            else return $verifica;   
        }
        */
}
/**
 * MINI FRAMEWORK CREADO POR JESÚS MATA
 * JAMPZO@GMAIL.COM
**/
?>