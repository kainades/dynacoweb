<head>
</script>
<style type="text/css">
.tabla{box-shadow: 5px 10px 7px rgba(0,0,0,0.5);
        border:solid;
		background-color:#FFF;
        border-spacing:2px;
		border-radius:10px;
	    -moz-border-radius:10px;
	    -webkit-border-radius:10px;
		}	
		
h1, h2, h3, h4 {
	font-family:Impact, Haettenschweiler, "Franklin Gothic Bold", "Arial Black", sans-serif;
	font-weight:normal;
	margin:0px 0px 0px 0px;
	padding:2px 2px 2px 2px;
	color:#000;
}	
.mano{cursor:pointer;}			

</style>
</head>
<body>
<table>
<tr>
 <td valign="top" rowspan="2">
   <table class="tabla" width="599px" height="332px;" border="1" ><!--tabla interna -->
      <tr>
       <th colspan="4" align="left" class="tht"><input type="text" id="titulo" placeholder="TITULO..." </th>
      </tr>		<!-- titulo de la tabla -->
          <tr>
            <td  valign="top" ><textarea  rows="8" id="descripcion" style="resize: none; width:598px;" placeholder="Descripción ..."></textarea></td>
		 </tr>
          <tr>
          <td colspan="4" align="right" width="150px"> 
              <input type="button"  id="1a"  value="Guardar" disabled/>
              <input type="button"  id="2a" value="Limpiar" onclick='javascript:palpadeo();'  />
              <input type="button"  id="3a"  value="Agregar"  style="width:80px;" alt="0" onclick='javascript:validar(this);' />
              </td>
          </tr>  
   </table>
   </td>
    </tr>
    <tr>  
    <td valign="top"> <span id="listado" ></span>
                 </td>  
   </tr>
   </table>

</body>
<?php
function cargadores(){
	global $wpdb;
	$selector="";
	   $a= $wpdb->get_results($wpdb->prepare("SELECT * FROM wp_departamentos where 1=1 GROUP BY detalle;" ));
	     $selector="<select id='departamento' style='width:100%' >";
		 foreach ($a as $uno){$selector=$selector."<option value='".$uno->id."' title='".$uno->detalle."'  >".$uno->detalle."</option>";}
		   $selector=$selector."</select>";echo $selector;
	}
?>