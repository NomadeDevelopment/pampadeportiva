
<?php
/*
Plugin Name: Top PAMPA

Description: Agregando el primer plugin
*/
/* Start Adding Functions Below this Line */

/* Stop Adding Functions Below this Line */

class wpb_widget extends WP_Widget {

function __construct() {
parent::__construct(
// Base ID of your widget
'wpb_widget', 

// Widget name will appear in UI
__('Top Articulos Pampa', 'wpb_widget_domain'), 

// Widget description
array( 'description' => __( 'Muestra la cantidad de articulos especificados en orden de visitas', 'wpb_widget_domain' ), ) 
);
}

// Creating widget front-end
// This is where the action happens
public function widget( $args, $instance ) {
	//echo var_dump($instance);
	
$title = apply_filters( 'widget_title', $instance['title'] );
// before and after widget arguments are defined by themes
echo $args['before_widget'];
if ( ! empty( $title ) )
echo $args['before_title'] . $title . $args['after_title'];
$cantidad = $instance['cantidad'];

// This is where you run the code and display the output

global $wpdb;
$results = $wpdb->get_results( "SELECT * FROM wp_2_posts RIGHT JOIN wp_2_popularpostsdata ON wp_2_posts.ID = wp_2_popularpostsdata.postid ORDER BY wp_2_popularpostsdata.pageviews DESC LIMIT $cantidad", OBJECT );
//echo var_dump($results);
$top_posts_count =1;

foreach ($results as $post) {
	$img = catch_that_image($post->ID);
	echo $args['before_contenedor_feed_top'].$img.');">';
	echo $args['before_mascara'];


	
	echo $args['before_contenedor_label_rank'];
	echo $top_posts_count++;
	echo $args['after_contenedor_label_rank'];

	echo '<div class="contenedor-contenido-rank">';
		echo '<i class="fa fa-chevron-right" aria-hidden="true"></i><i class="fa fa-chevron-right arriba-chevron" aria-hidden="true"></i>';
		echo '<h2 class="titulo_rank">';	
		echo '<a href="'.$post->guid.'">'.$post->post_title.'</a>';
		echo '</h2>';
	echo '</div>';
	echo '<footer class="visitas-rank">';
	echo '<span><i class="ion-android-star" aria-hidden="true"></i>'.$post->pageviews.'</span>';
	echo '</footer>';
	



	echo $args['after_mascara'];
	echo $args['after_contenedor_feed_top'];
}




echo $args['after_widget'];//cerrando el div del widget
}
		
// Widget Backend 
public function form( $instance ) {

if ( isset($instance['title'])) {
	$titulo = $instance['title'];		
	$cantidad = intval($instance['cantidad']);
}
// Widget admin form
?>

<p>
<label for="<?php echo $this->get_field_id( 'cantidad' ); ?>"><?php _e( 'Cantidad de Articulos:' ); ?></label> 
<input  class="widefat" id="<?php echo $this->get_field_id( 'cantidad' ); ?>" name="<?php echo $this->get_field_name( 'cantidad' ); ?>" type="text" value="<?php echo esc_attr( $cantidad ); ?>" />
</p>



<?php 
}
	
// Updating widget replacing old instances with new
public function update( $new_instance, $old_instance ) {

$instance = array();
$instance['title'] = 'Lo mas visto';
$instance['cantidad']= (!empty($new_instance['cantidad']) ) ? intval($new_instance['cantidad'] ) : 5;

return $instance;
}
} // Class wpb_widget ends here

// Register and load the widget
function wpb_load_widget() {
	register_widget( 'wpb_widget' );
}
add_action( 'widgets_init', 'wpb_load_widget' );
?>