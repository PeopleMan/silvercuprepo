<?php
/**
 * Template Name: News
 * Description: News template
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
	   <?php query_posts('post_type=press'); ?>
  	<div class="container">
		    <h2>Silvercup Press</h2> 
			<?php while ( have_posts() ) : the_post(); ?>
					<div class="one-third column press-item">
						<img src="<?php the_field('press_image'); ?>" alt="">
			      <h4><?php the_field('publication_name'); ?></h4>
			      <time pubdate><?php the_field('article_date'); ?></time>
			      <p><?php the_field('article_excerpt'); ?></p>
			      <a href="<?php the_field('article_link'); ?>" target="_blank">View Article</a>
			    </div> 
			    <?php endwhile;?>   
				
			  
			   
	 </div>
   </div>
 

<?php get_footer(); ?>