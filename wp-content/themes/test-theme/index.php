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
 * @package WordPress
 * @subpackage Test Theme
 * @since Test Theme 1.0
 */

get_header();
?>

<h1><?php echo get_the_title() ?></h1>

<div>
  <?php the_content() ?>
</div>

<?php
get_footer();