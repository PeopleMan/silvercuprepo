<?php
remove_shortcode('gallery');    
add_shortcode('gallery', 'parse_gallery_shortcode');     
function parse_gallery_shortcode($atts) {
 
	global $post;
	
	extract(shortcode_atts(array(
		'orderby' => 'menu_order ASC, ID ASC',
		'id' => $post->ID,
		'itemtag' => 'dl',
		'icontag' => 'dt',
		'captiontag' => 'dd',
		'columns' => 3,
		'size' => 'medium',
		'link' => 'file'
	), $atts));
 
	$args = array(
		'post_type' => 'attachment',
		'post_parent' => $id,
		'numberposts' => -1,
		'orderby' => $orderby
		); 
	ob_start();
	if ( is_array($atts) && array_key_exists('ids', $atts) ) {
	  $mixed_objects = explode(',',$atts['ids']);
	} else {
	  $mixed_objects = get_posts($args);	
	}
  echo '<div class="flexslider" style="height:' . $mixed_objects[1] .'px">'; ?>
         <ul class="slides">
        <?php  $counter = 1;
          foreach($mixed_objects as $mixed_object):
            if ( isset($mixed_object->ID) ) { $image = $mixed_object; } else { $image = get_post($mixed_object); }
          $src_full = wp_get_attachment_image_src($image->ID,'photo_single_full');?>
            <?php $description = $image->post_excerpt;  ?>
            <?php if ( trim($description) == '' ) $description = $image->post_content;  ?>
           <li><img <?php echo ($counter == 1) ? 'class="first"':''; ?> src="<?php echo $src_full[0]?>" alt="<?php echo $image->post_title ?>" data-content="<?php echo str_replace('"','&#34;',$description); ?>" data-num="<?php echo $counter; ?>" width="<?php echo $src_full[1];?>" height="<?php echo $src_full[2];?>" /></li>
        <?php $counter++; ?>
        <?php endforeach; ?>
	</ul>
      </div>
	  <div id="slide_info">
	         <span></span>
	         <p></p>
	       </div>
	  <?php
	  $gallery_html = ob_get_clean();
	  return $gallery_html;
	}
	?>