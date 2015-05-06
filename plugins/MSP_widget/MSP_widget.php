<?php
/*
Plugin Name: Busqueda bootstrap
Plugin URI: http://www.uno-de-piera.com/
Description: Crea un Widget para añadir a cualquier Sidebar.
Version: 1.0
*/
 
class MSP_widget extends WP_Widget{
 
   public function MSP_widget()
    {
        //constructor de la clase al que le debemos pasar la
        //configuración del widget
        $widget_opts = array(
            "class_name" => "MSP_widget",
            "description" => "Buscador adactado para bootstrap Dynaco");
       $this->WP_Widget("MSP_widget","Buscador bootstrap",$widget_opts); //aquí le añadimos las opciones
    }
    
    public function widget($args, $instance) /*aqui escojemos las variables que queremos para construir en el sidebar esto se hace en funciones en la instansacion*/
    {
       /** no puedo cambiarlos del ingles porque si no tendria que cambiarlos para todos los otros en function.php */
       $title = apply_filters( 'widget_title', 
	                            empty( $instance['title'] ) ? '' : $instance['title'],
							    $instance, $this->id_base );
		echo $args['before_widget'];
		if ( $title ) {echo $args['before_title'] . $title . $args['after_title'];}
		get_search_form();//tomamos el formulario
     	   echo $args['after_widget'];
           echo $before_widget;
       ?>
       <?php // echo $after_widget;
    }
    
    public function update($new_instance, $old_instance) 
    {
     $instance = $old_instance;
	  $new_instance = wp_parse_args((array) $new_instance, array( 'title' => ''));
	 $instance['title'] = strip_tags($new_instance['title']);
	  return $instance;
		 //función para guardar los valores de cada campo en la sección
         //de administración de widgets igual debe ser en ingles por los parametros de wordpress 
    }
    
    public function form($instance)/*este es el formulario del administrador no el constructor*/ 
    {    
      $instance = wp_parse_args( (array) $instance, array( 'title' => '') );
	  $title =$instance['title'];
        //aquí podemos crear los campos de configuración que necesitemos
        //para poder adaptar el widget a las necesidades de cada usuario
        ?>
          <li><a  href="#"><i class="fa fa-laptop"></i>garaga</a></li>
          <li><a  href="#"><i class="fa fa-tablet"></i>sd</a></li>
          <li><a  href="#"><i class="fa fa-mobile"></i>asd</a></li>
        <p><label for="<?php  echo $this->get_field_id('title'); ?>">
       <?php  _e('Title:'); ?>
        <input class="widefat" id=" <?php  echo $this->get_field_id('title'); ?>"
         name="<?php  echo $this->get_field_name('title'); ?>" 
         type="text" value="<?php echo esc_attr($title); ?>" /> 
         
        </label></p> 
<?php
        
    }
    
}
//añadimos la acción en el evento de inicializar el widget, de esta
//forma lo registramos como otro más y se mostrará correctamente
add_action('widgets_init', create_function('', 'return register_widget("MSP_widget");'));