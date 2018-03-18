jQuery( function ( $ ) {

	/**
	 * Homepage testimonial slider.
	 */
	function initTestimonialSlider() {
		$( '.testimonial' ).slick( {
			speed: 1000,
			fade: true,
			arrows: false,
			dots: true,
			slidesToShow: 1,
			slidesToScroll: 1,
			autoplay: true,
			autoplaySpeed: 3000,

		} );
	}

	if ( $().slick ) {
		initTestimonialSlider();

	}


} );
