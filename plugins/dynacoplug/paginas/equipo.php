<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sin título</title>
<script src="<?php echo $dire[0]; ?>" type="text/javascript" ></script>
<script type="text/javascript">
/*------------------------------------------------------------------------*/

function validar(a){
	   social=colectora();
	   if(social){id=social[0].toLowerCase();
	     id=id.replace(/\s/g,'')+Math.floor((Math.random() * 32658) + 1);
		 social.push(id);
		 cache.push(social);
		 armado(social,id);}
    }
function colectora(){
	var social= new Array();var x;
	  var cara=document.getElementById('nombre').value;
		if(vacio(cara)){
			social.push(cara);x=document.getElementById("departamento");social.push(x.value);social.push(x.options[x.selectedIndex].text);
			 cara=document.getElementById('descripcion').value;
			  if(vacio(cara)){social.push(document.getElementById('descripcion').value);
				    }else{if (confirm("Desea incluir este registro\nSin una descripcion?")) {social.push("no");}else{limpiar();return false;}}
			}else{alert("Debe introducir un nombre!");limpiar();return false;}
		 /*seccion de redes sociales*/
		  if(vacio(document.getElementById('face').value)){social.push(document.getElementById('face').value);}else{social.push("no");}
		 if(vacio(document.getElementById('tiw').value)){social.push(document.getElementById('tiw').value);}else{social.push("no");}
		   if(vacio(document.getElementById('ins').value)){social.push(document.getElementById('ins').value);}else{social.push("no");}
		    if(vacio(document.getElementById('linkin').value)){social.push(document.getElementById('linkin').value);}else{social.push("no");}
			 if(vacio(document.getElementById('giti').value)){social.push(document.getElementById('giti').value);}else{social.push("no");}
			    /*fin de seccion de redes sociales*/
			 if(document.getElementById('image').innerHTML==""){
				if(confirm("Desea continuar sin foto?")) {var dato=document.getElementById('oculto').innerHTML;
				social.push(dato+'no.jpg');}else{limpiar();return false;}
				  }else{foto=document.getElementById('image').innerHTML;//social.push(foto);
				  foto1=foto.substring(foto.search('alt="')+5);num=foto1.length-2;foto1=foto1.substring(0,num);social.push(foto1);}
				  return social;
	}
	
function armado(a,id){
	var socialt="";
	var y="";var d="";
	var dato=document.getElementById('oculto').innerHTML;
	if(a[4]!="no"){d=dato+'face.png';socialt=socialt+'<img src="'+d+'" name="soci"  width="25px" height="25px" class="mano" >  ';}
	    if(a[5]!="no"){d=dato+'ttwi.png';socialt=socialt+'<img src="'+d+'" name="soci"  width="25px" height="25px" class="mano" >  ';}
		if(a[6]!="no"){d=dato+'instagr.png';socialt=socialt+'<img src="'+d+'" name="soci"  width="25px" height="25px" class="mano" >  ';}
		if(a[7]!="no"){d=dato+'linkin.png';socialt=socialt+'<img src="'+d+'" name="soci"  width="25px" height="25px" class="mano" >  ';}
		if(a[8]!="no"){d=dato+'gitico.png';socialt=socialt+'<img src="'+d+'" name="soci"  width="25px" height="25px" class="mano" >  ';}
	//document.getElementById('comprova').innerHTML=socialt;
	y='<table id="'+id+'" class="balcon"><tr><td colspan="2" align="right" class="tabla"><input type="button" name="'+id+'" title="'+a[0]+'" value="Modificar" onclick="javascript:encontrado(this);"><input type="button" name="'+id+'" value="Eliminar" onclick="javascript:encontrado(this);"></td></tr><tr><td><table class="tabla" style="width:470px;" ><tr><td>Nombre</td><td>Departamento</td></tr><tr><td ><input type="text" readonly value="'+a[0]+'"></td><td ><input  type="text" size="30"  readonly value="'+a[2]+'"></td></tr><tr><td align="center"><div  style="width:155px; height:155px;" ><img src="'+a[9]+'"  style="width:155px; height:155px;" ></div></td><td ><textarea  cols="25" rows="7"  style="resize: none;" readonly>'+a[3]+'</textarea></td></tr><tr><td colspan="2" ><div  style="height:40px">'+socialt+'</div></td></tr></table></td></tr></table>';
		 var piza=document.getElementById('listado').innerHTML;
		document.getElementById('listado').innerHTML=y+piza;
		limpiar();
	}
	
function limpiar(){document.getElementById('nombre').value="";document.getElementById('descripcion').value="";document.getElementById('face').value="";document.getElementById('image').innerHTML="";document.getElementById('tiw').value="";document.getElementById('ins').value="";document.getElementById('linkin').value="";document.getElementById('giti').value="";
barredora("",false);x1=document.getElementsByName('selector');for(i=0;i<x1.length;i++){if(x1[i].checked){x1[i].checked=false;}}
}

function encontrado(a){
	for(i=0;i<cache.length;i++){if(cache[i][10]==a.name){break;}}
		if(a.value=="Modificar"){
		    document.getElementById('nombre').value=cache[i][0];document.getElementById("departamento").value=cache[i][1];
			document.getElementById('descripcion').value=cache[i][3];
			 if(cache[i][4]!="no"){document.getElementById('face').value=cache[i][4];}else{document.getElementById('face').value="";}
		      if(cache[i][5]!="no"){document.getElementById('tiw').value=cache[i][5];}else{document.getElementById('tiw').value="";}
		        if(cache[i][6]!="no"){document.getElementById('ins').value=cache[i][6];}else{document.getElementById('ins').value="";}
		         if(cache[i][7]!="no"){document.getElementById('linkin').value=cache[i][7];}else{document.getElementById('linkin').value="";}
			       if(cache[i][8]!="no"){document.getElementById('giti').value=cache[i][8];}else{document.getElementById('giti').value="";}}
				   	 jQuery("#"+a.name).remove();cache.splice(i,1);
}

function grabado(){
	 //var x=document.getElementsByClassName('balcon');
	if(cache.length>0){enviarform();}else{alert('no dispones de ningun registro que grabar');}}
	
function enviarform(){
	var m="";
	for(j=0;j<cache.length;j++){m=m+'( ';
	 for(i=0;i<cache[j].length-1;i++){m=m+" |"+cache[j][i]+"|";if(i+1<cache[j].length-1){m=m+', '}}m=m+' ), ';}
	num= m.length-2;m1 = m.substring(0,num);
	document.getElementById('paquete').value=m1;var formulario = document.forms['conato'];if (!formulario) {formulario = document.conato;}formulario.submit();
	document.getElementById('paquete').value='';cache="";
}

	
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
  <td colspan="2" align="right"><table class="tabla"><tr><td ><div  style="float:right; background:#000">
  <input type="button"  id="1a"  value="Guardar"  onclick='javascript:grabado();' style="width:100px;"/>
  </div></td></tr>
 </table>
  </td>
</tr>
<tr>
 <td valign="top" rowspan="2">
   <table class="tabla" width="599px" height="432px;"  border="1" ><!--tabla interna -->
      <tr>
       <th  align="left" class="tht"><h1>Personal de Equipo</h1></th><td colspan="4"><input type="radio" name="fotovideo" checked>Fotografia <input type="radio" name="fotovideo" >Videos</td>
      </tr>		<!-- titulo de la tabla -->
          <tr>
           <td rowspan="4" align="left" width="382px" valign="top">
              <div   style="height:320px; overflow-x:hidden; overflow-y:scroll; max-width:380px;" class="mano"><table id="dato"><?php   
			  $ruta=explode('plugins/',dirname(__FILE__)); listar_directorios_ruta($ruta[0].'uploads/'); ?></table></div>
			  </td>
           <td class="tdca"><h3>Nombre</h3></td>
           <td><div align="center" ><input type="text"  id="nombre" size="31" value="" placeholder="Nombre..."  /></div></td>
		 </tr>
          <tr>
		   <td valign="top"><h3>Departamento</h3></td>
           <td  valign="top" ><div align="center"><?php cargadores(); ?></div></td>
         </tr>
		 <tr>
		   <td  valign="top"><h3>Descripcion</h3></td>
           <td  valign="top" ><textarea cols="28" rows="4" id="descripcion" style="resize: none;" placeholder="Descripción ..."></textarea></td>
         </tr>
		 <tr>
            <td colspan="4">
            <table>
              <tr>
               <td class="tdca"><h2>Redes Sociales</h2></td>
               </tr>
               <tr>
               <td valign="middle" ><table><tr>
                    <td><img src="<?php echo $dire[2] ?>face.png" name="soci" alt="face" width="25px" height="25px" class="mano" ></td><td><input type="text" id="face"  size="31" placeholder="Facebook..."  /></td>
                    </tr><tr>
                    <td><img src="<?php echo $dire[2] ?>ttwi.png" name="soci" alt="tiw" width="25px" height="25px" class="mano"></td><td><input type="text" id="tiw"  size="31" placeholder="Twitter..." /></td>
                     </tr><tr>
                    <td><img src="<?php echo $dire[2] ?>instagr.png" name="soci" alt="ins" width="25px" height="25px" class="mano"></td><td><input type="text" id="ins"  size="31" placeholder="Instagram..." /></td>
                     </tr><tr>
                    <td><img src="<?php echo $dire[2] ?>linkin.png" name="soci" alt="linkin" width="25px" height="25px" class="mano"></td><td><input type="text"  id="linkin" size="31" placeholder="Linkedin..." /></td>
                     </tr><tr>
                    <td><img src="<?php echo $dire[2] ?>gitico.png" name="soci" alt="giti" width="25px" height="25px" class="mano"></td><td><input type="text" id="giti"  size="31"  placeholder="Github..."/></td>
                    </tr>
                  </table>
                    </ul>
               </td>
              </tr>
            </table>
            </td>
         </tr>
         <tr>
          <td colspan="4" align="right" ><h3> Lugar <select id="lugar"><option value="1">1</option></select>  Activo <input type="checkbox" id="activo" >
           <input type="button"  id="2a" value="Limpiar"  style="width:80px;" onclick='javascript:limpiar();'  />
           <input type="button"  id="3a"  value="Agregar"  style="width:80px;" alt="0" onclick='javascript:validar(this);' />
          </h3></td>
          </tr>  
   </table>
   </td>
     </tr>
    <tr>  
    <td valign="top">
    				   <span id="listado" ><table class="tabla" style="width:470px; display:none;" ><tr><td>Nombre</td><td>Departamento</td></tr><tr><td ><input id="nombre1" type="text"  readonly></td><td ><input id="departa" type="text" size="30"  readonly></td></tr><tr><td align="center"><div id="image" style="width:155px; height:155px;" ></div></td><td ><textarea  cols="25" rows="7" id="direc" style="resize: none;"></textarea></td></tr><tr><td colspan="2" ><div id="comprova" style="height:40px"></div></td></tr></table></span>
                                        </td>  
   </tr>
   </table> 
<div id="oculto" style="display:none;"  ><?php echo $dire[2]; ?></div>
</body>
<form id="conato" name="conato" action="" method="post" style="display:none;">
<textarea id="paquete" name="paquete"></textarea>
<a href="javascript: enviarform()">Search</a>
</form>
</html>
<?php
function listar_directorios_ruta($ruta){ 
    $rutafoto=explode('themes',get_template_directory_uri());/*ruta estable dinamica*/
   if (is_dir($ruta)) {  // abrir un directorio y listarlo recursivo 
      if ($dh = opendir($ruta)) { 
         while (($file = readdir($dh)) !== false) { 
           if(filetype($ruta . $file)!="dir"){
				  $por = explode(".", $file);$por[1]=strtolower($por[1]);
				    if($por[1]=="jpg" || $por[1]=="jpeg" || $por[1]=="gif" || $por[1]=="png" || $por[1]=="bmp"){/*solo imagenes*/
                      $aux=$ruta.$file;/*optencion entre ruta real y ruta dynamica*/
					   $rutafo1=explode('wp-content/',$aux);
					    $exif="";$exif = exif_read_data($rutafoto[0].$rutafo1[1], 0, true);/*metadata y ruta inrterna para html*/
                     	 if ($exif['COMPUTED']['Height']<155 && $exif['COMPUTED']['Width']<155 && $exif['COMPUTED']['Height']>130 && $exif['COMPUTED']['Width']>130 ){/*escogiendo el tamano*/
							 $expe[0]=$exif['FILE']['FileName'];/*tomando nombre para direccion el original por tamano*/
							 $vacio1[0]=$rutafoto[0].substr($rutafo1[1],0,strrpos($rutafo1[1],'/'))."/".substr($expe[0], 0,strrpos($expe[0],'-')).substr($expe[0],strrpos($expe[0],'.'));
							 $vacio1[1]=substr($expe[0], 0,strrpos($expe[0],'-')); $vacio1[2]=$rutafoto[0].$rutafo1[1];
							echo "<tr><td><div id='".$vacio1[1]."' class='pendon'><table><tr><td><img src='".$vacio1[2]."'  alt='".$exif['FILE']['FileName']."' ></td>
							  <td><ul><li><input id='".$vacio1[2]."' type='radio' name='".$vacio1[1]."' checked>Tamaño Actual</li>
							      <li><input id='".$vacio1[0]."' type='radio' name='".$vacio1[1]."'>Tamaño Real</li>
							      <li><input type='checkbox' name='selector' title='".$vacio1[1]."' alt='mestiso' onclick='javascript:busqueda(this);' >Seleccionar</li>
							      <li><textarea rows='2' cols='18' style='resize:none; overflow:hidden;' readonly>".$vacio1[1]."</textarea></li></ul></td></tr></table></div></td>
								  </tr>";}}} 
            if (is_dir($ruta . $file) && $file!="." && $file!=".."){listar_directorios_ruta($ruta . $file . "/");}}closedir($dh);} 
   }else echo "<br>No es ruta valida"; 
}

function listar_directorios_videos($ruta){ 
    $rutafoto=explode('themes',get_template_directory_uri());/*ruta estable dinamica*/
   if (is_dir($ruta)) {  // abrir un directorio y listarlo recursivo 
      if ($dh = opendir($ruta)) { 
         while (($file = readdir($dh)) !== false) { 
           if(filetype($ruta . $file)!="dir"){
				  $por = explode(".", $file);$por[1]=strtolower($por[1]);
				    if($por[1]=="mp4" ){/*solo video mp4*/
                      $aux=$ruta.$file;/*optencion entre ruta real y ruta dynamica*/
					   $rutafo1=explode('wp-content/',$aux);
					    $exif="";$exif = exif_read_data($rutafoto[0].$rutafo1[1], 0, true);/*metadata y ruta interna para html*/
                        $expe[0]=$exif['FILE']['FileName'];/*tomando nombre para direccion el original por tamano*/
							 $vacio1[0]=$rutafoto[0].substr($rutafo1[1],0,strrpos($rutafo1[1],'/'))."/".substr($expe[0], 0,strrpos($expe[0],'-')).substr($expe[0],strrpos($expe[0],'.'));
							 $vacio1[1]=substr($expe[0], 0,strrpos($expe[0],'-')); $vacio1[2]=$rutafoto[0].$rutafo1[1];
							echo "<tr><td><div id='".$vacio1[1]."' class='pendon'><table><tr><td><img src='".$vacio1[2]."'  alt='".$exif['FILE']['FileName']."' ></td>
							  <td><ul><li><input id='".$vacio1[2]."' type='radio' name='".$vacio1[1]."' checked>Tamaño Actual</li>
							      <li><input id='".$vacio1[0]."' type='radio' name='".$vacio1[1]."'>Tamaño Real</li>
							      <li><input type='checkbox' name='selector' title='".$vacio1[1]."' alt='mestiso' onclick='javascript:busqueda(this);' >Seleccionar</li>
							      <li><textarea rows='2' cols='18' style='resize:none; overflow:hidden;' readonly>".$vacio1[1]."</textarea></li></ul></td></tr></table></div></td>
								  </tr>";}} 
            if (is_dir($ruta . $file) && $file!="." && $file!=".."){listar_directorios_ruta($ruta . $file . "/");}}closedir($dh);} 
   }else echo "<br>No es ruta valida"; 
}

function cargadores(){
	global $wpdb;
	$selector="";
	   $a= $wpdb->get_results($wpdb->prepare("SELECT * FROM wp_departamentos where 1=1 GROUP BY detalle;" ));
	     $selector="<select id='departamento' style='width:100%' >";
		 foreach ($a as $uno){$selector=$selector."<option value='".$uno->id."' title='".$uno->detalle."'  >".$uno->detalle."</option>";}
		   $selector=$selector."</select>";echo $selector;
	}
 
?>
<script type="text/javascript" >
var maestro=<?php echo json_encode(refrescado($dire[4])); ?>;
var cache=maestro[1];
var piza=document.getElementById('listado').innerHTML;
document.getElementById('listado').innerHTML=maestro[0]+piza;
//alert("listo");
 </script>
