<?php 
/*template name:inicio */
get_header(); ?>
<!-- Inicio de carousel -->
<section class="carousel-section">
   <div id="carousel-example-captions" class="carousel carousel-images slide" data-ride="carousel">
	  <ol class="carousel-indicators">
	    <li data-target="#carousel-example-captions" data-slide-to="0" class="active"></li>
	    <li data-target="#carousel-example-captions" data-slide-to="1"></li>
	    <li data-target="#carousel-example-captions" data-slide-to="2"></li>
	    <li data-target="#carousel-example-captions" data-slide-to="3"></li>
	    <li data-target="#carousel-example-captions" data-slide-to="4"></li>
        <li data-target="#carousel-example-captions" data-slide-to="5"></li>
	  </ol>
	<div class="carousel-inner">
	  <div class="item active">
	    <img src="<?php echo get_template_directory_uri(); ?>/img/dynaco/slide1.jpg" alt="Cloud computing">
	      <div class="carousel-caption animated fadeInUpBig">
	          <h3>Cloud Computing</h3>
	          <!-- <p>...</p> -->
	      </div>
	  </div>
	  <div class="item">
	    <img src="<?php echo get_template_directory_uri(); ?>/img/dynaco/slide2.jpg" alt="Construccion de Datacenter">
	      <div class="carousel-caption animated fadeInUpBig">
	          <h3>Diseño y Construcción de Datacenter</h3>
	          <!-- <p>...</p> -->
	      </div>
	  </div>
	  <div class="item">
	    <img src="<?php echo get_template_directory_uri(); ?>/img/dynaco/slide3.jpg" alt="Video aereo con drones">
	      <div class="carousel-caption animated fadeInUpBig">
	          <h3>Desarrollo de Aplicaciones</h3>
	          <!-- <p>...</p> -->
	      </div>
	  </div>
	  <div class="item">
	    <img src="<?php echo get_template_directory_uri(); ?>/img/dynaco/slide4.jpg" alt="Consultoria">
	      <div class="carousel-caption animated fadeInUpBig">
	          <h3>Consultoría</h3>
	          <!-- <p>...</p> -->
	      </div>
	  </div>
	  <div class="item">
	    <img src="<?php echo get_template_directory_uri(); ?>/img/dynaco/slide5.jpg" alt="Desarrollo de Aplicaciones">
	      <div class="carousel-caption animated fadeInUpBig">
	          <h3>CCTV</h3>
	          <!-- <p>...</p> -->
	      </div>
	  </div>
        <div class="item">
	    <img src="<?php echo get_template_directory_uri(); ?>/img/dynaco/slide6.jpg" alt="Video Aéreo con Drones">
	      <div class="carousel-caption animated fadeInUpBig">
	          <h3>Video Aéreo con Drones</h3>
	          <!-- <p>...</p> -->
	      </div>
	  </div>
	</div>
	  <a class="left carousel-control" href="#carousel-example-captions" data-slide="prev">
	    <span class="glyphicon glyphicon-chevron-left"></span>
	  </a>
	  <a class="right carousel-control" href="#carousel-example-captions" data-slide="next">
	    <span class="glyphicon glyphicon-chevron-right"></span>
	  </a>
	</div>
</section>
<!-- fin de carousel -->

<!-- INICIO DE CENTRO PAGE-->
<div class="container">
        <section class="margin-bottom">
            <div class="row">
               <section id="main-content">
				
				<?php if(have_posts()): while(have_posts()): the_post(); ?><!-- codigo para buscar los articulos publicados y ponerlos todos uno detras de otro-->	
				<article class="post">
					<header class="post-title">
						
					</header>
					<div class="post-content">
					 <?php the_content(); ?>
					</div>
				</article>	<!-- article -->
				<?php endwhile; endif; ?>
				
              </section><!-- /#main-content -->
            </div> <!-- row -->
       </section>

         <section class="section-lines">
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <div class="home-devices">
                            <h3>Aplicaciones para todos los dispositivos</h3>
                            <p>¿Su empresa requiere de un software personalizado? En <strong>Dynaco-Solutions</strong> proveemos nuestro servicio de software factory para desarrollar la aplicación que usted necesita,</p>
                            <p>De esta forma, su empresa no necesita tener un departamento de TI dedicado al desarrollo de software, sólo dejelo en manos de Dynaco-Solutions y dediquese a desarrollar el know how de su negocio, sin preocupaciones.</p>
                            <ul class="icon-devices">
                                <li class="active"><a data-toggle="tab" href="#desktop"><i class="fa fa-desktop"></i></a></li>
                                <li><a data-toggle="tab" href="#laptop"><i class="fa fa-laptop"></i></a></li>
                                <li><a data-toggle="tab" href="#tablet"><i class="fa fa-tablet"></i></a></li>
                                <li><a data-toggle="tab" href="#mobile"><i class="fa fa-mobile"></i></a></li>
                            </ul>

                        </div>
                    </div>
                    <div class="col-md-8">
                        <div class="tab-content">
                            <div id="desktop" class="tab-pane active">
                                <img class="img-responsive" alt="" src="<?php echo get_template_directory_uri(); ?>/img/demo/mac.png">
                            </div>
                            <div id="laptop" class="tab-pane">
                                <img class="img-responsive" alt="" src="<?php echo get_template_directory_uri(); ?>/img/demo/macpro.png">
                            </div>
                            <div id="tablet" class="tab-pane">
                                <img class="img-responsive" alt="" src="<?php echo get_template_directory_uri(); ?>/img/demo/ipad.png">
                            </div>
                            <div id="mobile" class="tab-pane">
                                <img class="img-responsive" alt="" src="<?php echo get_template_directory_uri(); ?>/img/demo/iphone.png">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="margin-bottom">
             <p class="lead lead-lg text-center primary-color margin-bottom wow fadeInDown"><strong>Dynaco Solutions</strong> y nuestras características</p>
            <div class="row">
                 <div class="col-md-6 wow fadeInRight">
                     <h2 class="no-margin-top">Acerca de nosotros</h2>
                     <p><strong>Dynaco Solutions</strong> se inició a partir de un sueño universitario, quienes a pesar de tener vidas separadas ya en ese momento compartían un objetivo en común: <strong>Destacar como equipo</strong>.</p>
                     <p></p>
                     <p>Somos un equipo joven, pero con una amplia experiencia en nuestras competencias.</p>
                     <p></p>
                     <p>Generar soluciones Informáticas siempre ha formado parte de nuestra pasión, es por ello que todos nuestros Partners y Clientes tienen total satisfacción de nuestros servicios y plena confianza que todos sus requerimientos serán cumplidos.</p>
                 </div>
                 <div class="col-md-6">
                     <div class="panel-group" id="accordion">
                       <div class="panel panel-default wow fadeInUp">
                         <div class="panel-heading panel-heading-link">
                             <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne">
                               <i class="fa fa-lightbulb-o"></i> Ingenio
                             </a>
                         </div>
                         <div id="collapseOne" class="panel-collapse collapse in">
                           <div class="panel-body">
                             <p>Personal con alta capacidad de generar soluciones a la medida de cada cliente, siempre cumpliendo con altos estandares de calidad.</p>
                           </div>
                         </div>
                       </div>
                       <div class="panel panel-default wow fadeInUp">
                         <div class="panel-heading panel-heading-link">
                             <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" class="collapsed">
                               <i class="fa fa-calendar"></i> Planificación
                             </a>
                         </div>
                         <div id="collapseTwo" class="panel-collapse collapse">
                           <div class="panel-body">
                             <p>Por parte de todo el equipo hay siempre una innata determinación de cumplir con los objetivos, es por eso que la planificación es una de nuestras principales herramientas.</p>
                           </div>
                         </div>
                       </div>
                       <div class="panel panel-default wow fadeInUp">
                         <div class="panel-heading panel-heading-link">
                             <a data-toggle="collapse" data-parent="#accordion" href="#collapseThree" class="collapsed">
                               <i class="fa fa-support"></i> Calidad de servicio
                             </a>
                         </div>
                         <div id="collapseThree" class="panel-collapse collapse">
                           <div class="panel-body">
                             <p>Nuestro principal objetivo es la satisfacción del cliente, es por ello que siempre sobrepasamos las expectativas de nuestros clientes dándole a nuestros clientes una <strong>Esmerada atención</strong> y un <strong>Excelente Servicio</strong>.</p>
                           </div>
                         </div>
                       </div>
                       <div class="panel panel-default wow fadeInUp">
                         <div class="panel-heading panel-heading-link">
                             <a data-toggle="collapse" data-parent="#accordion" href="#collapseFour" class="collapsed">
                               <i class="fa fa-thumbs-o-up"></i> Responsabilidad
                             </a>
                         </div>
                         <div id="collapseFour" class="panel-collapse collapse">
                           <div class="panel-body">
                             <p>El <strong>sentido de pertenencia</strong> es uno de los principales motivos por el cual cuidamos del cumplimiento de nuestras oblicaciones con nuestros clientes, tomando desiciones acertadas y en pro de la solución a cualquiera de sus inquietudes. </p>
                           </div>
                         </div>
                       </div>
                       <div class="panel panel-default wow fadeInUp">
                         <div class="panel-heading panel-heading-link">
                             <a data-toggle="collapse" data-parent="#accordion" href="#collapseFive" class="collapsed">
                               <i class="fa fa-group"></i> Trabajo en Equipo
                             </a>
                         </div>
                         <div id="collapseFive" class="panel-collapse collapse">
                           <div class="panel-body">
                             <p>El <strong>Espíritud de Equipo</strong> y los <strong>Objetivos en común</strong> han sido nuestro elemneto en común desde nuestro incio, es por eso que El trabajo en equipo en la generación de soluciones para nuestros clientes ha sido espontáneo, logrando siempre todos los objetivos.</p>
                           </div>
                         </div>
                       </div>
                     </div>
                 </div>
            </div>
        </section>

    </div>
    <!-- FIN DE CENTRO PAGE-->

    <!-- Inicio de final coment -->
    <section class="section-lines">
        <div class="container">
            <div class="row">
                <div class="col-md-12 padding-40">
                    <p class="slogan text-center no-margin">Descubra todas las <span>Soluciones</span> que podemos proveerle a su empresa. Nuestras principales herramientas son la <span>experiencia</span> y amplio <span>conocimiento</span> en el area de TI.</p>
                </div>
            </div>
        </div>
    </section>
    <!-- Fin de final coment -->	
 <?php get_footer(); ?>
 