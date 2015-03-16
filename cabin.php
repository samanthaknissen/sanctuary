<?php
/**
 * Template Name: Cabin
 */
?>

<?php
 get_header();
?>
<?php if( get_field('cabin-background') ): ?>

	<img class="background" src="<?php the_field('cabin-background'); ?>" />

<?php endif; ?>

  <div class="content-area">
    <div class="gallery">
      <?php if (function_exists('slideshow')) { slideshow($output = true, $post_id = false, $gallery_id = false, $params = array()); } ?>
    </div>

    <div class="sidebar">
      <h2>
        <?php the_field('cabin-name'); ?>
      </h2>
        <div class="cabin-description">
      <?php the_field('cabin-description'); ?>
        </div>
        <div class="art-features">
      <h3>Art making features:</h3>
      <?php the_field('art-features'); ?>
        </div>
        <div class="cabin-features">
      <h3>Standard cabin features include:</h3>
      <?php the_field('cabin-features'); ?>
        </div>
        <div class="rental-cost">
      <p>Once accepted (application process):</p>
      <?php the_field('rental-cost'); ?>
        </div>
        <div class="availability">
      <?php the_field('availability'); ?>
      </div>
      <button class="pure-button">A Pure Button</button>
  </div>
</div>


<?php
 get_footer();
 ?>
