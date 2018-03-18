<?php
/**
 * Template part for displaying contact.
 *
 * @package bussiness-lander
 */

?>

<?php

$contact_bg_default = get_template_directory_uri() . '/images/contact-bg.png';

$contact_pages = get_theme_mod( 'front_page_contact');

if ( ! $contact_pages ) {
	return;
}

$image = get_theme_mod( 'contact_section_img', $contact_bg_default );

$query = new WP_Query( array(
	'post_type'      => 'page',
	'page_id'       => $contact_pages,

) );

if ( ! $query->have_posts() ) {
	return;
}

?>
<section class="section--contact" style="background-image: url( <?php echo esc_url( $image ) ?> )">
	<div class="container">
		<div class="section-contact__left">
			<?php while ( $query->have_posts() ) : $query->the_post(); ?>
					<h2 class="name"><?php the_title();?></h2>
					<?php the_excerpt(); ?>
			<?php endwhile; ?>
		</div>
		<div class="section-contact__right">
			<p class="contact-right__title">contact us</p>
		</div>

	</div>
</section>