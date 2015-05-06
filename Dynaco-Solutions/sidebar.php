<div class="sb-slidebar sb-right">
    <h2 class="slidebar-header no-margin-bottom">Navigacion</h2> 
      <div class="input-group">
       	  <?php if (is_active_sidebar('main_sidebar')){
				    dynamic_sidebar('main_sidebar');
					  }else{ ?>
						 <div class="widget">
                           <h3 class="widget-title"><?php _e('Buscador','ds'); ?></h3>
                           <?php get_search_form(); ?>
                        </div> 
						  <?php
                          }
					  ?>
     </div><!-- /input-group -->
     <?php $defaults = array(
	              'menu'           => 'inferior',
				  'theme_location' => 'segundo',
				  'depth'          => 0,/*niveles del menu*/
	              'container'      =>false,
				  'menu_class'     => 'slidebar-menu ',
				  'fallback_cb'    => 'wp_bootstrap_navwalker::fallback',
		          'walker' => new wp_bootstrap_navwalker(),
				   );
                      wp_nav_menu( $defaults );	
				?>
     <h2 class="slidebar-header">Social Media</h2>
             <div class="slidebar-social-icons">
            <a href="#" class="social-icon-ar facebook"><i class="fa fa-facebook"></i></a>
            <a href="#" class="social-icon-ar twitter"><i class="fa fa-twitter"></i></a>
            <a href="#" class="social-icon-ar instagram"><i class="fa fa-instagram"></i></a>
            <a href="#" class="social-icon-ar linkedin"><i class="fa fa-linkedin"></i></a>
        </div>
</div> <!-- sb-slidebar sb-right -->


			