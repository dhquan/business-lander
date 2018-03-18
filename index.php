<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package bussiness-lander
 */

get_header(); ?>
<?php
	$sidebar = 1;
	$blog_style = 1;
?>

	<main class="site-main" role="main">
		<?php
			get_template_part( 'template-parts/content', 'blogfull' );
		?>

	<?php if ( $sidebar === 1) :
			get_sidebar();
		endif; ?>
	</main>

<?php
get_footer();
