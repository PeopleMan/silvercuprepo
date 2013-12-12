<?php
/**
 * Template Name: About
 * Description: About template
 *
 * @package SILVERCUPproperties
 * 
 */


get_header(); ?>
   <?php the_post(); ?>
        <div class="img_container">
	    <ul class="slides">
	   <?php
		$post_id = 40;
		$queried_post = get_post($post_id);
		$content = $queried_post->post_content;
		$content = apply_filters('the_content', $content);
		$content = str_replace(']]>', ']]&gt;', $content);
		echo  $content;
		?>
	
	</ul>
   </div>
	<div class="img_container">
	<div class="container">
		   <div class="content-size ten columns">
			   <h2><?php the_field('some');?></h2>
				 <p><?php the_content();?></p> 
			</div>  
	   </div>
	</div>
 

<?php get_footer(); ?>