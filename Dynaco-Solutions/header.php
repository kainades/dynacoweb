<!DOCTYPE html>
<html <?php language_attributes(); ?>>
 <head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">

    <title><?php wp_title(' | ', true, 'right'); ?><?php bloginfo('name'); ?></title>

    <link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/img/favicon.png">
   <!--  peticion del ceo-->
    <?php wp_head(); ?><!-- hasta aqui todo igual -->
    <style>html{margin-top: 0px !important;}</style><!-- anulacion de margen que solo afectaba a chrome-->
</head><!-- Preloader -->
 <div id="preloader" >
      <div id="status">&nbsp;</div>
<body <?php  #body_class(); ?> >
    <div id="sb-site">
        <div class="boxed">
           <nav class="navbar navbar-static-top navbar-default navbar-inverse" role="navigation" id="header">
                      <div class="container">
                    <!-- barra lateral izquierda del menu  superior -->
                    <div class="navbar-header">
                           <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                            <span class="sr-only">Toggle navigation</span>
                            <i class="fa fa-bars"></i>
                        </button>
                        <a class="navbar-brand active" href="<?php echo $direcciones['inicio']; ?>" style="width:200px; height:48px;"></a>
                    </div> <!-- fin de barra lateral izquierda -->

                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="pull-right">
                        <a href="javascript:void(0);" class="sb-icon-navbar sb-toggle-right"><i class="fa fa-bars"></i></a>
                    </div><!-- Menu -->
                  <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <?php $defaults = array(
                        'menu'           => 'menubase',
                  'theme_location' => 'primero',
                  'depth'          => 2,/*niveles del menu*/
                        'container'      =>false,
                  'menu_class'     => 'nav navbar-nav navbar-right ',
                  'fallback_cb'    => 'wp_bootstrap_navwalker::fallback',
                      'walker' => new wp_bootstrap_navwalker());
                           wp_nav_menu( $defaults ); ?>
                  </div> <!--div navbar-collapse -->
                
                </div><!-- container -->
              </nav>
           <?php get_sidebar(); ?>     
            
     
            
           