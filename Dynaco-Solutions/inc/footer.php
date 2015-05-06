<?php require_once('dynaco.php'); ?>
<aside id="footer-widgets">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <h3 class="footer-widget-title">Mapa del Sitio</h3>
                <ul class="list-unstyled three_cols">
                    <li><a href="<?php echo $direcciones['inicio']; ?>">Inicio</a></li>
                    <li><a href="<?php echo $direcciones['nosotros']; ?>">Nosotros</a></li>
                    <li><a href="<?php echo $direcciones['contacto']; ?>">Contacto</a></li>
                </ul>
            </div>
            <div class="col-md-8">
            <?php suscribir_correo(); ?>
            </div>
            <!--
            <div class="col-md-4">
                <div class="footer-widget">
                    <h3 class="footer-widget-title">Recent Post</h3>
                    <div class="media">
                        <a class="pull-left" href="#"><img class="media-object" src="<?php echo $direccion; ?>/img/demo/m2.jpg" width="75" height="75" alt="image"></a>
                        <div class="media-body">
                            <h4 class="media-heading"><a href="#">Lorem ipsum Duis quis occaecat minim lorem ipsum tempor officia labor</a></h4>
                            <small>August 18, 2013</small>
                        </div>
                    </div>
                    <div class="media">
                        <a class="pull-left" href="#"><img class="media-object" src="<?php echo $direccion; ?>/img/demo/m11.jpg" width="75" height="75" alt="image"></a>
                        <div class="media-body">
                            <h4 class="media-heading"><a href="#">Lorem ipsum dolor excepteur sunt in lorem ipsum cillum tempor</a></h4>
                            <small>September 14, 2013</small>
                        </div>
                    </div>
                    <div class="media">
                        <a class="pull-left" href="#"><img class="media-object" src="<?php echo $direccion; ?>/img/demo/m4.jpg" width="75" height="75" alt="image"></a>
                        <div class="media-body">
                            <h4 class="media-heading"><a href="#">Lorem ipsum Dolor cupidatat minim adipisicing et fugiat</a></h4>
                            <small>October 9, 2013</small>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="footer-widget">
                    <h3 class="footer-widget-title">Recent Works</h3>
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-3 col-xs-6">
                            <a href="#" class="thumbnail"><img src="<?php echo $direccion; ?>/img/demo/wf1.jpg" class="img-responsive" alt="Image"></a>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-3 col-xs-6">
                            <a href="#" class="thumbnail"><img src="<?php echo $direccion; ?>/img/demo/wf2.jpg" class="img-responsive" alt="Image"></a>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-3 col-xs-6">
                            <a href="#" class="thumbnail"><img src="<?php echo $direccion; ?>/img/demo/wf3.jpg" class="img-responsive" alt="Image"></a>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-3 col-xs-6">
                            <a href="#" class="thumbnail"><img src="<?php echo $direccion; ?>/img/demo/wf4.jpg" class="img-responsive" alt="Image"></a>
                        </div>
                    </div>
                </div>
            </div>
            -->
        </div> <!-- row -->
    </div> <!-- container -->
</aside> <!-- footer-widgets -->
<footer id="footer">
    <p>&copy; 2014 <a href="<?php echo $direcciones['inicio']; ?>"><strong>Dynaco</strong> Solutions</a>, inc. Todos los derechos reservados.</p>
</footer>

</div> <!-- boxed -->
</div> <!-- sb-site -->

<div class="sb-slidebar sb-right">
    <!--
    <div class="input-group">
        <input type="text" class="form-control" placeholder="Search...">
        <span class="input-group-btn">
            <button class="btn btn-default" type="button"><i class="fa fa-search"></i></button>
        </span>
    </div>
    -->
<!--
    <h2 class="slidebar-header no-margin-bottom">Dynaco-Solutions</h2>
    <ul class="slidebar-menu">
        <li><a href="<?php echo $direcciones['inicio']; ?>">Inicio</a></li>
        <li><a href="<?php echo $direcciones['nosotros']; ?>">Nosotros</a></li>
        <li><a href="<?php echo $direcciones['equipo']; ?>">Nuestro Equipo</a></li>
        <li><a href="<?php echo $direcciones['contacto']; ?>">Contáctanos</a></li>
    </ul>
-->

    <h2 class="slidebar-header">Social Media</h2>
    <div class="slidebar-social-icons">
        <a href="<?php echo $socialaddress['none']; ?>" class="social-icon-ar facebook"><i class="fa fa-facebook"></i></a>
        <a href="<?php echo $socialaddress['none']; ?>" class="social-icon-ar twitter"><i class="fa fa-twitter"></i></a>
        <a href="<?php echo $socialaddress['none']; ?>" class="social-icon-ar instagram"><i class="fa fa-instagram"></i></a>
        <a href="<?php echo $socialaddress['none']; ?>" class="social-icon-ar linkedin"><i class="fa fa-linkedin"></i></a>
        <a href="<?php echo $socialaddress['none']; ?>" class="social-icon-ar git"><i class="fa fa-git"></i></a>
    </div>
</div> <!-- sb-slidebar sb-right -->
<div id="back-top">
    <a href="#header"><i class="fa fa-chevron-up"></i></a>
</div>
<!-- Scripts -->

<script src="<?php echo $direccion; ?>/js/jquery.cookie.js"></script>
<script src="<?php echo $direccion; ?>/js/bootstrap.min.js"></script>
<script src="<?php echo $direccion; ?>/js/wow.min.js"></script>
<script src="<?php echo $direccion; ?>/js/slidebars.js"></script>
<script src="<?php echo $direccion; ?>/js/jquery.bxslider.min.js"></script>
<script src="<?php echo $direccion; ?>/js/holder.js"></script>
<script src="<?php echo $direccion; ?>/js/buttons.js"></script>
<script src="<?php echo $direccion; ?>/js/styleswitcher.js"></script>
<script src="<?php echo $direccion; ?>/js/jquery.mixitup.min.js"></script>
<script src="<?php echo $direccion; ?>/js/circles.min.js"></script>
<!-- Syntaxhighlighter -->
<script src="<?php echo $direccion; ?>/js/syntaxhighlighter/shCore.js"></script>
<script src="<?php echo $direccion; ?>/js/syntaxhighlighter/shBrushXml.js"></script>
<script src="<?php echo $direccion; ?>/js/syntaxhighlighter/shBrushJScript.js"></script>

<script src="<?php echo $direccion; ?>/js/app.js"></script>
<script src="<?php echo $direccion; ?>/js/home_services.js"></script>
<script src="<?php echo $direccion; ?>/js/dynaco_tracking.js"></script>
<script src="<?php echo $direccion; ?>/js/dyna/footer.js"></script>
<script src="<?php echo $direccion; ?>/js/dyna/ejecuciones.js"></script>
</body>
</html>