<?php get_header(); ?>
<?php ?>
<div id="contenedor-general">
	<?php get_template_part('template-parts/secciones/seccion-pre-destacado') ?>
</div>

<div id="row-content">
	<?php get_template_part('template-parts/columnas/columna-inicio-right') ?>
	<?php get_template_part('template-parts/columnas/columna-inicio-centro');?>
	<?php get_template_part('template-parts/columnas/columna-inicio-left');?>
</div> <!-- #main-content -->


<?php get_footer();