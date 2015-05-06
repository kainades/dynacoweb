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
				<article class="post"><div class="post-content"><?php the_content(); ?></div></article>	<!-- article -->
				<?php endwhile; endif; ?>
			   </section><!-- /#main-content -->
            </div> <!-- row -->
       </section></div>
<section>
        <div class="well well-sm">
          <iframe width="100%" height="350" frameborder="0" style="border:0" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3940.9308686570353!2d-79.512389!3d8.97850900000001!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0000000000000000%3A0x8fb010f64db45443!2sDynaco+Solutions!5e0!3m2!1ses!2sus!4v1421782574365"></iframe>
        </div>
      </section>
</div>
</div>
<script type="text/javascript">
$(function(){
$('[type="names"]').valname();$('[type="email"]').valmail();$('[type="phone"]').valphone();$('[type="submit"]').click(function(){var a=0;dynacaptcha&&320<dynacaptcha.length?(a+=1,6<$('[type="names"]').val().length&&(a=parseInt(a)+1),/[\w-\.]{3,}@([\w-]{2,}\.)*([\w-]{2,}\.)[\w-]{2,4}/.test($('[type="email"]').val())&&(a=parseInt(a)+1),7<$('[type="phone"]').val().length&&(a=parseInt(a)+1),4<$("#InputMessage").val().length&&(a=parseInt(a)+1),5<=a?$.get("http://dynaco-solutions.com/wp-content/themes/Dynaco-Solutions/inc/ejecuciones.php",{accion:"sendwebmessage",nombre:$('[type="names"]').val(),correo:$('[type="email"]').val(),telefono:$('[type="phone"]').val(),mensaje:$("#InputMessage").val()},function(a){a&&setTimeout(location.href="http://dynaco-solutions.com",20)}):alert("Revise campos faltantes.")):alert("Debe aceptar Captcha y llenar todos los campos")})});$('[type="phone"]').intlTelInput({autoFormat:!0,autoHideDialCode:!0,defaultCountry:"pa",preferredCountries:["pa","ve","mx","es","us"],utilsScript:"http://dynaco-solutions.com/wp-content/themes/Dynaco-Solutions/js/lib/libphonenumber/build/utils.js"});
var dynacaptcha,verifyCallback=function(a){dynacaptcha=a},onloadCallback=function(){grecaptcha.render("dynaxcaptcha",{sitekey:"6LejMwUTAAAAABOL2JIvLYLJ57y5iBYca0yJg0ot",callback:verifyCallback,theme:"light"})};
</script>
 <?php get_footer(); ?>
 
