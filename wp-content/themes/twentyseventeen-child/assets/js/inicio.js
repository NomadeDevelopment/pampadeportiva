(function( $ ) {
	var posicion_original_contenedor_right = $('.contenedor-inicio-right').position();
$(document).scroll(function(e){

	var posicion_scroll = $(this).scrollTop();
	if(posicion_scroll>75){


	$('header').addClass('sticky');
	}else{
		
		$('header').removeClass('sticky');

	}

});



})( jQuery );