<?php
require_once('wp_bootstrap_navwalker.php');/*registro importante para navegacion*/

	function ds_custom_styles() {
	wp_register_style( 'preload', get_template_directory_uri().'/css/preload.css', false, false, 'screen' );
		wp_enqueue_style( 'preload' );

		wp_register_style( 'bootstrap', get_template_directory_uri().'/css/bootstrap.css', false, false, 'screen' );
		wp_enqueue_style( 'bootstrap' );

		wp_register_style( 'awesome', get_template_directory_uri().'/css/font-awesome.min.css', false, false, 'screen' );
		wp_enqueue_style( 'awesome' );
		
		wp_register_style( 'dynacoe', get_template_directory_uri().'/css/dynaco.css', false, false, 'screen' );
		wp_enqueue_style( 'dynacoe' );

		wp_register_style( 'animate', get_template_directory_uri().'/css/animate.min.css', false, false, 'screen' );
		wp_enqueue_style( 'animate' );
		
		wp_register_style( 'jqueryui', get_template_directory_uri().'/css/jquery-ui.min.css', false, false, 'screen' );
		wp_enqueue_style( 'jqueryui' );
		
		wp_register_style( 'jquerystru', get_template_directory_uri().'/css/jquery-ui.structure.min.css', false, false, 'screen' );
		wp_enqueue_style( 'jquerystru' );

		wp_register_style( 'jqueryteme', get_template_directory_uri().'/css/jquery-ui.theme.min.css', false, false, 'screen' );
		wp_enqueue_style( 'jqueryteme' );
		
		wp_register_style( 'slidebars', get_template_directory_uri().'/css/slidebars.css', false, false, 'screen' );
		wp_enqueue_style( 'slidebars' );

		wp_register_style( 'lightbox', get_template_directory_uri().'/css/lightbox.css', false, false, 'screen' );
		wp_enqueue_style( 'lightbox' );

		wp_register_style( 'bxslider', get_template_directory_uri().'/css/jquery.bxslider.css', false, false, 'screen' );
		wp_enqueue_style( 'bxslider' );

		wp_register_style( 'shCore', get_template_directory_uri().'/css/syntaxhighlighter/shCore.css', false, false, 'screen' );
		wp_enqueue_style( 'shCore' );

		wp_register_style( 'blue', get_template_directory_uri().'/css/style-blue.css', false, false, 'screen' );
		wp_enqueue_style( 'blue' );

		wp_register_style( 'full', get_template_directory_uri().'/css/width-full.css', false, false, 'screen' );
		wp_enqueue_style( 'full' );

		wp_register_style( 'buttons', get_template_directory_uri().'/css/buttons.css', false, false, 'screen' );
		wp_enqueue_style( 'buttons' );

	}
	add_action( 'wp_enqueue_scripts', 'ds_custom_styles' );

	function ds_theme_js(){
		global $wp_scripts;
		# 
		wp_register_script( 'html5shiv', get_template_directory_uri().'/js/html5shiv.min.js', false, false, false );
		wp_register_script( 'respond', get_template_directory_uri().'/js/respond.min.js', false, false, false );

		$wp_scripts->add_data( 'html5shiv', 'conditional', 'lt IE 9' );
		$wp_scripts->add_data( 'respond', 'conditional', 'lt IE 9' );

		# Upthere scripts
		wp_enqueue_script( 'jquery_js', get_template_directory_uri().'/js/jquery.min.js', false, false, false );
		wp_enqueue_script( 'jquery_ui', get_template_directory_uri().'/js/jquery-ui.min.js', false, false, false );/*para jquery ui inclusion en workpress*/
		
		# Plugin para google Analitycs Dynaco-Solutions.com
		wp_enqueue_script( 'tracking', get_template_directory_uri().'/js/dynaco_tracking.js', false, false, false );
		
		wp_enqueue_script( 'wow_js', get_template_directory_uri().'/js/wow.min.js', false, false, false );
		wp_enqueue_script( 'slidebars_js', get_template_directory_uri().'/js/slidebars.js', false, false, false );
		wp_enqueue_script( 'shCore_js', get_template_directory_uri().'/js/syntaxhighlighter/shCore.js', false, false, false );
		wp_enqueue_script( 'app_js', get_template_directory_uri().'/js/app.js', false, false, false );
		/*importante*/
		wp_enqueue_script( 'ejcuciones', get_template_directory_uri().'/js/dyna/ejecuciones.js', false, false, false );
                wp_enqueue_script( 'contactanos', get_template_directory_uri().'/js/dyna/contactanos.js', false, false, false );
		wp_enqueue_script( 'footer', get_template_directory_uri().'/js/dyna/footer.js', false, false, false );
		wp_enqueue_script( 'jpDynaco', get_template_directory_uri().'/js/jqDynaco.js', false, false, false );
               wp_enqueue_script('telefonos', get_template_directory_uri().'/js/intlTelInput.min.js',jquery_js, false , false );
               
 /*importante fin*/
		# Downthere scripts
		wp_enqueue_script( 'jquery.cookie_js', get_template_directory_uri().'/js/jquery.cookie.js', false, false, false );
		wp_enqueue_script( 'bootstrap.min_js', get_template_directory_uri().'/js/bootstrap.min.js', false, false, false );
		wp_enqueue_script( 'jquery.bxslider_js', get_template_directory_uri().'/js/jquery.bxslider.min.js', false, false, false );
		wp_enqueue_script( 'holder_js', get_template_directory_uri().'/js/holder.js', false, false, false );
		wp_enqueue_script( 'buttons_js', get_template_directory_uri().'/js/buttons.js', false, false, false );
		wp_enqueue_script( 'styleswitcher_js', get_template_directory_uri().'/js/styleswitcher.js', false, false, false );
		wp_enqueue_script( 'jquery.mixitup.min_js', get_template_directory_uri().'/js/jquery.mixitup.min.js', false, false, false );
		wp_enqueue_script( 'circles.min_js', get_template_directory_uri().'/js/circles.min.js', false, false, false );
		wp_enqueue_script( 'shBrushXml_js', get_template_directory_uri().'/js/syntaxhighlighter/shBrushXml.js', false, false, false );
		wp_enqueue_script( 'shBrushJScript_js', get_template_directory_uri().'/js/syntaxhighlighter/shBrushJScript.js', false, false, false );
		wp_enqueue_script( 'home_full_js', get_template_directory_uri().'/js/home_full.js', false, false, false );
		wp_enqueue_script( 'carousels', get_template_directory_uri().'/js/carousels.js', false, false, false );
	}
	add_action('wp_enqueue_scripts', 'ds_theme_js');

         
	/*add_theme_support( 'menus' );

	function nuestro_menu(){
		register_nav_menus(
			array(
				'header-menu'	=>	_( 'Menú Principal #1' ),
		         )
		);
	}
   add_action( 'init', 'nuestro_menu');*/

function barra_lateral_wiget(){
	/*__ es para texto que puede ser traducido _e texto traducido y ademas se muestra en pantalla*/
	register_sidebar(array(
	 'name' => __('Barra','ds'),
	 'id' => 'main_sidebar',
	 'description' => __('Este es el sidebar principal','ds'),
	 'before_widget' => '<div id="%1$s" class="widget %2$s">',
	 'after_widget' => '</div>',
	 'before_title' => '<h2 class="widget-title">',
	 'after_title' => '</h2>'	 
	 ));
}
add_action('widgets_init','barra_lateral_wiget');/*asociamos los wigets a un evento*/


//Ejecutar PHP en widgets de texto

function ejecutar_php($html){
    if(strpos($html,"<"."?php")!==false){
             ob_start();
                eval("?".">".$html);
               $html=ob_get_contents();
               ob_end_clean();
                      }
                      return $html;
                      }
add_filter('widget_text','ejecutar_php',100);

/*con esto podemos ejecutar codigo php en un widget de texto*/	

/*para poder saber la direccion ip*/
function direccion_ip(){
if ( ! empty( $_SERVER['HTTP_CLIENT_IP'] ) ) {
    $ip = $_SERVER['HTTP_CLIENT_IP'];} elseif ( ! empty( $_SERVER['HTTP_X_FORWARDED_FOR'] ) ) {
    $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];} else {$ip = $_SERVER['REMOTE_ADDR'];}
return apply_filters( 'wpb_get_ip', $ip );
	}
add_shortcode('i_ip', 'direccion_ip');
/*fin de saber mi direccion ip*/


	
