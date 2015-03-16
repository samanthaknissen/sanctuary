<?php
/**
 * Template Name: Home page
 */
?>

<?php
 get_header();
?>
 <?php
 the_field('col-1');
?>
<?php
the_field('col-2');
?>

<?php if( get_field('background-image') ): ?>

	<img class="background" src="<?php the_field('background-image'); ?>" />

<?php endif; ?>

<?php
 get_footer();
 ?>
