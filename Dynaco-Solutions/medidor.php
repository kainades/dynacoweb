<?php 
/*template name:velocidad */
get_header(); ?>

<section id="main-content">
				
				<?php if(have_posts()): while(have_posts()): the_post(); ?><!-- codigo para buscar los articulos publicados y ponerlos todos uno detras de otro-->	
				<article class="post">
					<div class="post-content">
					 <?php the_content(); ?>
					</div>
				</article>	<!-- article -->
				<?php endwhile; endif; ?>
				
               
			</section><!-- /#main-content -->

<?php get_footer(); ?>