<?php
	
	function suscribir_correo(){
	?>
	<h3 class="footer-widget-title">Suscríbete</h3>
		<p>Suscríbete a nuestra lista de correo para estar informado de todo el acontecer tecnológico.</p>
	<div id="alertaemail"></div>
	<div class="input-group">
		<input id="mailmasivo" type="text" class="form-control" placeholder="Correo Electrónico">
		<span class="input-group-btn">
			<button class="btn btn-ar btn-primary" type="button" id="suscribemail">Suscríbeme</button>
		</span>
	</div><!-- /input-group -->
	<?php }

	function slide_1( $direccion ) {
	?>
	<div id="carousel-example-captions" class="carousel carousel-images slide" data-ride="carousel">
	  <ol class="carousel-indicators">
	    <li data-target="#carousel-example-captions" data-slide-to="0" class="active"></li>
	    <li data-target="#carousel-example-captions" data-slide-to="1"></li>
	    <li data-target="#carousel-example-captions" data-slide-to="2"></li>
	    <li data-target="#carousel-example-captions" data-slide-to="3"></li>
	    <li data-target="#carousel-example-captions" data-slide-to="4"></li>
	  </ol>
	<div class="carousel-inner">
	  <div class="item active">
	    <img src="<?php echo $direccion; ?>/img/dynaco/slide1.jpg" alt="Cloud computing">
	      <div class="carousel-caption animated fadeInUpBig">
	          <h3>Cloud Computing</h3>
	          <!-- <p>...</p> -->
	      </div>
	  </div>
	  <div class="item">
	    <img src="<?php echo $direccion; ?>/img/dynaco/slide2.jpg" alt="Construccion de Datacenter">
	      <div class="carousel-caption animated fadeInUpBig">
	          <h3>Diseño y Construcción de Datacenter</h3>
	          <!-- <p>...</p> -->
	      </div>
	  </div>
	  <div class="item">
	    <img src="<?php echo $direccion; ?>/img/dynaco/slide3.jpg" alt="Video aereo con drones">
	      <div class="carousel-caption animated fadeInUpBig">
	          <h3>Desarrollo de Aplicaciones</h3>
	          <!-- <p>...</p> -->
	      </div>
	  </div>
	  <div class="item">
	    <img src="<?php echo $direccion; ?>/img/dynaco/slide4.jpg" alt="Consultoria">
	      <div class="carousel-caption animated fadeInUpBig">
	          <h3>Consultoría</h3>
	          <!-- <p>...</p> -->
	      </div>
	  </div>
	  <div class="item">
	    <img src="<?php echo $direccion; ?>/img/dynaco/slide5.jpg" alt="Desarrollo de Aplicaciones">
	      <div class="carousel-caption animated fadeInUpBig">
	          <h3>Video Aéreo con Drones</h3>
	          <!-- <p>...</p> -->
	      </div>
	  </div>
<!--  
	  <div class="item">
	    <img src="<?php echo $direccion; ?>/img/dynaco/slide6.jpg" alt="Desarrollo de Aplicaciones">
	      <div class="carousel-caption animated fadeInUpBig">
	          <h3>CCTV</h3>
	          <!-- <p>...</p> -->
<!--	      </div>
	  </div>
-->
	</div>
	  <a class="left carousel-control" href="#carousel-example-captions" data-slide="prev">
	    <span class="glyphicon glyphicon-chevron-left"></span>
	  </a>
	  <a class="right carousel-control" href="#carousel-example-captions" data-slide="next">
	    <span class="glyphicon glyphicon-chevron-right"></span>
	  </a>
	</div>
	<?php }
?>