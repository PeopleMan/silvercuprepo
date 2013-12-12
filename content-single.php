<?php
/**
 * @package Silvercup Properties
 */
?>

<?php get_header(); ?>        
  <div class="container" id="main-content">
    <div class="eight columns">
      <figure class="effeckt-caption" data-effeckt-type="quarter-appear">
        <img src="<?php the_field('image_property'); ?>"alt="">
        <figcaption>
          <div class="effeckt-figcaption-wrap">
            <p><?php the_field('property_apts'); ?> Units &#149; <?php the_field('property_duration'); ?> Duration &#149; Completed in <?php the_field('property_date'); ?> &#149; <?php the_field('property_use'); ?></p>
          </div>
        </figcaption>
      </figure>
      

    </div>
    <div class="eight columns">
      <h2><?php the_field('property_name'); ?></h2>
      <address><?php the_field('property_address'); ?></address>
      <p><?php the_field('property_description'); ?></p>
    </div>
  </div>
          
          
<?php get_footer(); ?>
