
<div class="contenedor-inicio-centro">
<div class="feed-content-destacado">


<?php 
$args = array('post_type' => 'post',
			  'posts_per_page'=>'4',
			  'offset'=>'10');
$query =new WP_Query($args);
//echo var_dump($query);
if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post();?>

	<?php  $img = catch_that_image($query->the_ID());?>
	
	<div class="item-content-destacado" 
		style="background-image: url(<?php echo $img;?>);">

		<div class="mascara-top">
		<div class="item-contenedor-categoria">
			<h4><?php the_category( $separator = '', $parents = '', $post_id = $query->the_ID() ) ?></h4>
			<div class="contenedor-resultado-partido">
			<span class="resultado-partido">
				<div class="resultado-1"><h6>2</h6></div><div class="resultado-2"><h6>2</h6></div>
			</span>
			</div>
		</div>
			<h2><a href="<?php the_permalink(); ?>"><?php the_title()?></a></h2>
			<h3><?php //the_excerpt() ?></h3>
		</div>
					
	</div>

<?php endwhile; else : ?>
	<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
<?php endif; ?>
<div class="feed-content-normal"></div>	
</div><!-- feed-content-destacado -->
</div><!-- contenedor-inicio-centro-->