<?php
/**
 * Template Name: Featured project
 * Description: Featured template
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
	    <?php $args = array( 'post_type' => 'wds_project', 'posts_per_page' => -1 );
	   			  $loop = new WP_Query( $args ); ?>
	   	    <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>	
				
				   <?php endwhile; ?>	
		<div class="container" id="main-content">
		    <div class="sixteen columns">
		      <div class="tab-content sixteen columns">
		        <div class="tab-pane active" id="table1">
		          <p class="table-name"><?php echo get_field('featured_projects'); ?></p>
		          <table class="footable">
		            <thead>
		              <tr>          
		                <th data-class="expand" data-sort-initial="true"> <span title="table sorted by this column on load"><?php echo get_field('project'); ?></span> </th>
		                <th> <span title="sorting disabled on this column"><?php echo get_field('photos_project'); ?></span> </th>
		                <th><?php echo get_field('address'); ?></th>
		                <th data-hide="phone" data-type="numeric"><?php echo get_field('year'); ?></th>
		                <th data-hide="phone" data-type="numeric"><?php echo get_field('apts'); ?></th>
		                <th data-hide="phone" data-type="numeric"><?php echo get_field('sq_ft'); ?></th>
		                <th data-hide="phone" data-type="numeric"><?php echo get_field('status'); ?></th>
		              </tr>
		            </thead>
		            <tbody>
					    <?php $args = array( 'post_type' => 'Properties', 'posts_per_page' => -1 );
					   			  $loop = new WP_Query( $args ); ?>
					   	    <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>	
						 <?php if(get_field('featured_project')){ ?>		
						   <tr>
				            <td><a href="<?php the_permalink(); ?>"><?php echo get_field('property_name')  ; ?></a></td>
						<td><a class="photo-icon" href="<?php the_permalink(); ?>"><?php echo get_field('property_photo'); ?></a></td>
						   <td class><?php echo get_field('property_address'); ?></td>
						   <td><?php echo get_field('property_date'); ?></td>
						   <td><?php echo get_field('property_apts'); ?></td>
						   <td><?php echo get_field('property_size'); ?></td>
						   <td><?php echo get_field('property_status'); ?></td>
					      </tr>
						    <?php } ?>
					  <?php endwhile; ?>
	  
					   </tbody>
				      </table> 	  
			         </div>	 
		            </div>  
		          </div>
		         </div>
		     

 

		<?php get_footer(); ?>