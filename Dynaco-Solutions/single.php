<?php
/**
 * The Template for displaying all single posts
 *
 * @package WordPress
 * @subpackage Dynaco-Solutions
 * @since Dynacoweb 2.0
 */
get_header(); ?>
<div class="container">
<section id="main-content">
     <section class="margin-bottom">
            <div class="row">
				<article class="post">
					<header class="post-title">
						<h1><?php the_title(); ?></h1><!-- the_permalink(); enlace de workpress-->
						<small class="meta"><?php the_time(get_option('date_format')); ?> &bull; <a href=""><?php the_category(','); ?></small><!-- the_time() la fecha de publicacion-->
					</header>
					<div class="post-content">
                         <?php the_post(); ?> 
						 <?php the_content(''); ?><?php saludo(); ?>
                       
					</div>
				</article>	<!-- article -->
				
			 </section><!-- /#main-content -->
            </div> <!-- row -->
			</section><!-- /#main-content -->
   
<?php get_footer(); ?>