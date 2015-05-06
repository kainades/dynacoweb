<?php get_header(); ?>
<div class="container" >
        <section class="margin-bottom">
            <div class="row">
	<?php if(have_posts()): while(have_posts()): the_post(); ?><!-- codigo para buscar los articulos publicados y ponerlos todos uno detras de otro-->
				<article class="post resume">
					<header class="post-title">
						<h2><a href="<?php the_permalink(); ?>" ><?php the_title(); ?></a></h2><!-- the_permalink(); enlace de workpress-->
						<small class="meta"><?php the_time(get_option('date_format')); ?> &bull; <a href=""><?php the_category(','); ?></small><!-- the_time() la fecha de publicacion-->
					</header>
					<div class="post-content">
                    	<?php the_excerpt(); ?> 
					<a href="<?php the_permalink(); ?>" class="readmore"><?php _e('Seguir leyendo','ds'); ?> &rarr;</a>
					</div>
				</article>	<!-- article -->
				<?php endwhile; else:?>
                 <article class="post resume">
					<header class="post-title">
						<h2><a href="" ><?php _e('No hay contenidos disponible','ds'); ?></a></h2>
					</header>
					<div class="post-content">
                    <p><?php _e('No hay contenidos que correspondan con esta pagina, Por favor realiza una busqueda lo que deseas ver:','ds'); ?></p>
                     <div class="input-group"><!-- el otro sitio de widget -->
       	  <?php if (is_active_sidebar('main_sidebar')){
				    dynamic_sidebar('main_sidebar');
					  }else{ ?> </div> 
						  <?php
                          }
					  ?>
     </div><!-- /fin del otro sitio de widget -->
					</div>
				</article>	<!-- article --
                <?php endif; ?><!--cierre del loop-->
						
                 <?php if (get_next_posts_link() || get_previous_posts_link()) { ?>      	
				<div class="posts-nav cf">
                    <?php next_posts_link( __('&larr; Previos','ds'));  ?>
                    <?php previous_posts_link( __('Recientes &rarr;','ds'));  ?>
				</div>
				<?php  } ?>
			</section><!-- /#main-content -->
 <!-- fin de seccion de articulos directos -->	           
           
<!--             seccion de pie de pagina -->
  </div> <!-- row -->
  	  
       </section>
       
<?php get_footer(); ?>


              
          