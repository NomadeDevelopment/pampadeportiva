<?php
/*
* Template Name: Custom Home Page
* Description: A home page with featured slider and widgets.
*
* @package sporty
* @since sporty 1.0
*/

get_header(); ?>

<?php

	// Setup options
	$featured_cat   	=   esc_attr( get_theme_mod( 'homepage_slider_cat') );
	$number         	=   absint( get_theme_mod( 'homepage_slider_slide_no', 3 ) );
	$hideTitleTeaser  =   esc_attr( get_theme_mod( 'homepage_slider_hide_text', false ) );
	$hideTeaser     	=   esc_attr( get_theme_mod( 'homepage_slider_hide_teaser', false ) );

	$the_query     =   new WP_Query( array(
		'cat'             => $featured_cat,
		'posts_per_page'  => $number,
		'meta_query'      => array(
			array(
			  'key'           => '_thumbnail_id',
			  'compare'       => 'EXISTS',
			),
		),
	));

?>

<div class="flex-container">
    <div class="flexslider">
        <ul class="slides">
            <?php while ($the_query -> have_posts()) : $the_query -> the_post(); ?>
            <li>
                <?php the_post_thumbnail(); ?>
								<?php if( ! $hideTitleTeaser ): ?>
	                <div class="flex-caption">
	                    <div class="flex-caption-title">
	                        <a href="<?php the_permalink() ?>">
	                            <?php the_title(); ?>
	                        </a>
	                    </div>
											<?php if( ! $hideTeaser ): ?>
		                    <p><?php echo sporty_get_slider_excerpt(); ?><a href="<?php the_permalink() ?>">...</a></p>
											<?php endif; ?>
	                </div>
								<?php endif; ?>
            </li>
            <?php endwhile; wp_reset_query(); ?>
        </ul>
    </div>
</div>

<?php
	$useAdvOptions = esc_attr( get_theme_mod('promo_use_new', false));
	$featuredTitle = esc_html( get_theme_mod('featured_title', __( 'THE ULTIMATE THEME FOR SPORTS CLUBS ', 'sporty' )));
	$featuredBtnTxt = esc_html( get_theme_mod('featured_btn_txt', __( 'Find Out More', 'sporty' )) );
	$featuredBtnUrl = esc_url( get_theme_mod('featured_btn_url', __( 'http://', 'sporty')) );

	if( $useAdvOptions ):
		echo '<div class="featuretext_top">';
			echo '<h3>' . $featuredTitle . '<a href="' . $featuredBtnUrl . '">' . $featuredBtnTxt . '</a></h3>' ;
		echo '</div>';
	else:
 ?>
	<div class="featuretext_top">
	    <h3><?php echo get_theme_mod( 'featured_textbox' ); ?></h3>
	</div>
<?php endif; ?>

<div id="primary" class="content-area">
    <div id="content" class="fullwidth" role="main">

        <div class="group">
            <div class="col span_2_of_3">
                <?php query_posts(array( 'showposts'=> 2,'post__in'=>get_option('sticky_posts'))); ?>
                <?php while (have_posts()) : the_post(); ?>
                <article class="sticky">
                    <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                    <div class="blog-image">
                        <?php if ( has_post_thumbnail() ) { $image_src=wp_get_attachment_image_src( get_post_thumbnail_id(), 'featured' ); echo '<img alt="post" class="imagerct" src="' . $image_src[0] . '">'; } ?>
                    </div>
                    <?php echo sporty_content(26); ?>
                    <div class="stickymore">
                        <a href="<?php the_permalink() ?>">
                            <?php echo __( 'More', 'sporty'); ?>
                        </a>
                    </div>
                </article>
                <?php endwhile; ?>

                <?php wp_reset_query(); ?>
            </div>


            <div class="col span_1_of_3">
                <div class="home_widget">
                    <?php if ( is_active_sidebar( 'right_home_column' ) && dynamic_sidebar( 'right_home_column') ) : else : ?>
                    <?php echo '<h4>' . __( 'Widget Ready', 'sporty') . '</h4>'; ?>
                    <?php echo '<p>' . __( 'This right column is widget ready! Add one in the admin panel.', 'sporty') . '</p>'; ?>
                </div>
                <?php endif; ?>
            </div>

        </div>


    </div>
    <!-- #content .site-content -->
</div>
<!-- #primary .content-area -->
</div>
<?php get_footer(); ?>
