

<div class="contenedor-general-p-destacado">
<?php 
$args = array('post_type' => 'post',
			  'posts_per_page'=>'1',
			  'offset'=>'4');
$query =new WP_Query($args); 

while ( $query->have_posts() ) : $query->the_post(); 
$img = catch_that_image($query->the_ID()); 
    ?>

<div class="contenedor-p-destacado-principal">
	<h1><a href="<?php the_permalink() ?>"><?php  the_title() ?></a></h1>
	<p><?php the_excerpt() ?></p>
	
		<img src="<?php echo $img ?>" alt="">
	
</div>
<?php
        endwhile; 
        wp_reset_postdata(); // Reset loop data
    ?>
    <div class="contenedor-p-destacado-secundario">
	
<?php 
$args = array('post_type' => 'post',
			  'posts_per_page'=>'2',
			  'offset'=>'6');
$query =new WP_Query($args); 

while ( $query->have_posts() ) : $query->the_post(); 
$img = catch_that_image($query->the_ID()); 
    ?>

	<div class="contenedor-secundario-noticia">
		<h2><a href="<?php the_permalink();?>"><?php  the_title() ?></a></h2>
		<img src="<?php echo $img ?>" alt="">
	</div>
	<?php
        endwhile; 
        wp_reset_postdata(); // Reset loop data
    ?>		
	</div><!-- cierra contenedor-p-destacado-secundario -->
			<div class="contenedor-feed-footer-destacado">
			<?php 
		$args = array('post_type' => 'post',
					  'posts_per_page'=>'3',
					  'offset'=>'55');
		$query =new WP_Query($args); 

		while ( $query->have_posts() ) : $query->the_post(); 
		$img = catch_that_image($query->the_ID()); 
		    ?>

		    <div class="contenedor-footer-destacado-noticia">
		    	<h2><a href="<?php the_permalink();?>"><?php  the_title() ?></a></h2>
				<img src="<?php echo $img ?>" alt="">
		    </div>

			<?php
		        endwhile; 
		        wp_reset_postdata(); // Reset loop data
		    ?>
			</div><!-- cierra contenedor-feed-footer-destacado -->
</div><!-- cierra contenedor-general-p-destacado -->