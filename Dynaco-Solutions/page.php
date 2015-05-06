<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package WordPress
 * @subpackage Dynacoweb
 * @since Dynacoweb 2.0
 */

get_header(); ?>

<section id="main-content">
				
				<?php if(have_posts()): while(have_posts()): the_post(); ?><!-- codigo para buscar los articulos publicados y ponerlos todos uno detras de otro-->	
				<article class="post">
					<header class="post-title">
						<h1><?php the_title(); ?></h1>
					</header>
					<div class="post-content">
					 <?php the_content(); ?>
					</div>
				</article>	<!-- article -->
				<?php endwhile; endif; ?>
				
               
			</section><!-- /#main-content -->

<?php get_footer(); ?>