<?php 
/*template name:contactos */
get_header(); ?>
<div id="sb-site"><!-- los primeros 3 son para que mantenga el css -->
	<div class="boxed">
		<div class="container">
		   <section class="margin-bottom">
            <div class="row">
               <section id="main-content">
				<?php if(have_posts()): while(have_posts()): the_post(); ?><!-- codigo para buscar los articulos publicados y ponerlos todos uno detras de otro-->	
				<article class="post">
					
					<div class="post-content">
					 <?php the_content(); ?>
					</div>
				</article>	<!-- article -->
				<?php endwhile; endif; ?>
			   </section><!-- /#main-content -->
            </div> <!-- row -->
       </section>
       </div>
	</div>
</div>
<script src="<?php echo get_template_directory_uri(); ?>/js/dyna/contactanos.js" ></script>
 <?php get_footer(); ?>
 