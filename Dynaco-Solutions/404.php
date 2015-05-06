<?php
/**
 * The template for displaying 404 pages (Not Found)
 *
 * @package WordPress
 * @subpackage Dynacoweb
 * @since Dynacoweb 2.0
 */

get_header(); ?>

<div class="paper-back">
    <div class="absolute-center">
        <div class="text-center">
            <div class="title-logo animated fadeInDown animation-delay-5"><span>Dynaco</span> Solutions</div>
            <div class="transparent-div animated fadeInUp animation-delay-8">
                <h1>Error 404</h1>
                <h2><?php __('Pagina no Encontrada','op') ?></h2>
                <a href="<?php echo home_url( '/' ); ?>" class="btn btn-ar btn-primary btn-lg">Volver</a>
            </div>
        </div>
    </div>
</div>

