<div id="sb-site">
	<div class="boxed">
		<div class="container">
		    <div class="row">
		        <div class="col-md-12">
					<blockquote class="blockquote-color-bg-light">
						<p>Juntos Generamos Soluciones.</p>
						<footer>Ing. Jesús Mata <cite title="Source Title"> - Dynaco Solutions, Presidente.</cite></footer>
					</blockquote>
				</div>
				
				<div class="col-md-12">
					<h2 class="right-line">Nuestro Equipo</h2>
				</div>
		        <div class="col-md-12">
				 <?php constructor_equipo() ?>
				</div>
		    </div>
		</div>
	</div>
<?php
function constructor_equipo(){
	  $direccion=explode('themes/',get_template_directory_uri());
	   global $wpdb;$cuadro="";
	   $table_name = $wpdb->prefix . "personal";
	   $cache1=array();$aux=array();$my_column=""; 
	   $sql = "SELECT * FROM  wp_personal ORDER BY departamento";
	   $miregistro=$wpdb->get_results($sql);
	   foreach($miregistro as $key => $row){
		   $cuadro=$cuadro.'<div class="col-md-6">
			            <section>
			                <div class="panel panel-default  animated fadeInDown animation-delay-18">
			                    <div class="panel-body">
			                        <h3 class="section-title no-margin-top">'.$row->nombre.'<small class="pull-right">'.$row->departamento.'</small><div class="clearfix"></div></h3>
			                        <div class="clearfix"></div><img class="alignleft imageborder fotonoso" name="fotoperso"  style="z-index:999" src="'.$row->foto.'" height="232px" width="192" ><p class="no-margin-top">'.$row->detalle.'</p>
			                        <div class="clearfix"></div>'; 
		if($row->face!='no'){$cuadro=$cuadro.'<a class="social-icon-ar sm facebook animated fadeInDown" href="'.$row->face.'"><i class="fa fa-facebook"></i></a>';}
	    if($row->twit!='no'){$cuadro=$cuadro.'<a class="social-icon-ar sm twitter animated fadeInDown" href="'.$row->twit.'"><i class="fa fa-twitter"></i></a>';} 
		if($row->instag!='no'){$cuadro=$cuadro.'<a class="social-icon-ar sm instagram animated fadeInDown" href="'.$row->instag.'"><i class="fa fa-instagram"></i></a>';}
		if($row->linke!='no'){ $cuadro=$cuadro.'<a class="social-icon-ar sm linkedin animated fadeInDown" href="'.$row->linke.'"><i class="fa fa-linkedin"></i></a>';} 
		if($row->githu!='no'){ $cuadro=$cuadro.'<a class="social-icon-ar sm git animated fadeInDown" href="'.$row->githu.'"><i class="fa fa-github"></i></a>';} 
		 $cuadro=$cuadro.'</div></div></section></div>';
		   }
		  echo $cuadro;
}
?>
