    <?php 
 

function catch_that_image($my_postid) {
global $post;
$first_img = '';
  ob_start();
  ob_end_clean();
            $output = preg_match_all('/<img.+src=[\'"]([^\'"]+)[\'"].*>/i',  get_post_field('post_content', $my_postid), $matches);

$first_img = $matches [1] [0];

// no image found display default image instead
if(empty($first_img)){

$first_img = "http://www.pampadeportiva.com/images/stories/com_form2content/p3/f2272/aec7f954-c211-4ac3-b537-dafc84143819.jpg";
}
return $first_img;
}
function hu_setup() {
    // Enable title tag
    add_theme_support( 'title-tag' );

    // Enable automatic feed links
    add_theme_support( 'automatic-feed-links' );

    // Enable featured image
    add_theme_support( 'post-thumbnails' );
    add_image_size( 'pampa-full-image', 1000, 472, true );
    add_image_size( 'pampa-post-img', 660, 385, true );
    add_image_size( 'pampa-blog-img', 320, 210, true );
    add_theme_support( 'html5', array(
        'comment-form',
        'comment-list',
        'gallery',
        'caption',
    ) );

    // Enable post format support
    add_theme_support( 'post-formats', array( 'audio', 'aside','gallery', 'image', 'link', 'quote','video' ) );    
    

    // Thumbnail sizes
    /*add_image_size( 'thumb-small', 160, 160, true );
    add_image_size( 'thumb-standard', 320, 320, true );
    add_image_size( 'thumb-medium', 520, 245, true );
    add_image_size( 'thumb-large', 720, 340, true );*/

    // Custom menu areas
    /*register_nav_menus( array(
      'topbar' => 'Topbar',
      'header' => 'Header',
      'footer' => 'Footer',
    ) );*/
}

add_action( 'after_setup_theme', 'hu_setup' );

// Registrando  Navigation Menus
function registrando_menus() {

    $locations = array(
        'menu-top'=>__('Menu Tops','textin'),
        'menu-top-logo' =>__('Menu logo','textin2')
    );
    register_nav_menus( $locations );

}
add_action( 'init', 'registrando_menus' );
function agregar_scripts() {
    $url = get_stylesheet_uri().'/assets/';
     wp_enqueue_style('responsive',$url.'css/responsive.css',false,'1','all');
     wp_enqueue_script('inicio',get_template_directory_uri().'/assets/js/inicio.js',array('jquery'),'1', 'all');

}
add_action('wp_enqueue_scripts', 'agregar_scripts');

function registrar_widgets(){

    register_sidebar( array(
        'name'          => 'Widgets Izq',
        'id'            => 'w_right_1',
        'before_widget' => '<div  class="contenedor-widget">',
        'after_widget'  => '</div>',
        'before_mascara' =>'<div class="mascara-top">',
        'after_mascara' => '</div>',
        'before_title'  => '<h3 class="contenedor-titulo">',
        'after_title'   => '</h3>',
        'before_ads_top' =>'<div class="contenedor-ads-top">',
        'after_ads_top' => '</div>',
        'before_contenedor_feed_top' =>'<div class="contenedor-feed-top" style="background-image:url(',
        'after_contenedor_feed_top' =>'</div>',
        'before_contenedor_label_rank' =>'<span class="label-rank">',
        'after_contenedor_label_rank' => '</span>',        
    ) );
    register_sidebar( array(
        'name'          => 'Social Spot',
        'id'            => 'social-sidebar',
        'before_widget' => '<div  class="contenedor-side-social">',
        'after_widget'  => '</div>',
        'before_title'  => '<h2 class="rounded">',
        'after_title'   => '</h2>',
    ) );

    /*register_sidebar( array(
        'name'          => 'Banner 1 Inicio',
        'id'            => 'w_top_1',
        'before_widget' => '<div  class="contenedor-side-top-1">',
        'after_widget'  => '</div>',
        'before_title'  => '<h2 class="rounded">',
        'after_title'   => '</h2>',
    ) );*/
   



}
add_action( 'widgets_init', 'registrar_widgets' );

/* CODIGO PARA PONERLE THUMBNAIL A LOS ARTICULOS 
<?php 
            if ( has_post_thumbnail() ) {
            $large_image_url = wp_get_attachment_image_src( get_post_thumbnail_id(), 'pampa-full-image' );
            if ( ! empty( $large_image_url[0] ) ) {
                printf( '<a href="%1$s" alt="">%2$s</a>',esc_url( $large_image_url[0] ), get_the_post_thumbnail());
                }
            }
            else{
                echo 'no hay thumbnail';
                echo ' cargando thumbnail...';
                echo var_dump(set_post_thumbnail($query->the_ID(),28812));
            } 
                ?>
*/
 ?>
