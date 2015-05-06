<?php require_once('inc/dynaco.php');  ?> 
   <aside id="footer-widgets">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <h3 class="footer-widget-title">Mapa del Sitio</h3>
                <div style="height:50px;" align="left">
              <?php $defaults = array(
	              'menu'           => 'inferior',
				  'theme_location' => 'primero',
				  'depth'          => 0,/*niveles del menu*/
	              'container'      =>false,
				  'menu_class'     => 'nav navbar-nav navbar-left ',
				  'fallback_cb'    => 'wp_bootstrap_navwalker::fallback',
		          'walker' => new wp_bootstrap_navwalker(),
				   );
                      wp_nav_menu( $defaults );	
				?>
                </div><!--final del style left -->
            </div><!-- final del col-md -4 -->
             <div class="col-md-8">
               <?php suscribir_correo(); ?>
	         </div><!-- /input-group -->
           
        </div> <!-- row -->
       </div> <!-- container -->
</aside> <!-- footer-widgets -->
         <footer id="footer">
            <p>&copy; <?php echo date('Y'); ?> <a href="#"><?php bloginfo('name'); ?></a>, inc. All rights reserved.</p>
        </footer>
        </div> <!-- boxed -->
        </div> <!-- sb-site -->

        <div id="back-top">
            <a href="#header"><i class="fa fa-chevron-up"></i></a>
        </div>
    </body>
</html>