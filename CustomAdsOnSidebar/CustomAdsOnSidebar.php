<?php
/*
Plugin Name: Custom Ads On Sidebar
Plugin URI: https://github.com/UlisesFreitas/CustomAdsOnSidebar
Version: 1.0
Description: Customized Ads on Sidebar, put up to four block of ads on your sidebar, is just a pair of image/link
Author: Ulises Freitas
Author URI: http://ulisesfreitas.com/
*/
 
class CustomAdsOnSidebar extends WP_Widget
{
  function CustomAdsOnSidebar()
  {
    $widget_ops = array('classname' => 'CustomAdsOnSidebar', 'description' => 'Customized Ads on Sidebar');
    $this->WP_Widget('CustomAdsOnSidebar', 'Custom Ads On Sidebar', $widget_ops);
  }
 
  function form($instance)
  {
    $instance = wp_parse_args((array) $instance, array( 
    													'title' => '', 'linkI' => '',
    													'imageI' => '', 'linkII' => '',
    													'imageII' => '', 'linkIII' => '', 
    													'imageIII' => '', 'linkIV' => '', 
    													'imageIV' => '' ));
    $title = $instance['title'];
    $linkI  = esc_attr($instance['linkI']);
    $imageI = $instance['imageI'];
    $linkII  = esc_attr($instance['linkII']);
    $imageII = $instance['imageII'];
    $linkIII  = esc_attr($instance['linkIII']);
    $imageIII = $instance['imageIII'];
    $linkIV  = esc_attr($instance['linkIV']);
    $imageIV = $instance['imageIV'];
?>
	
  <p>
  	<label for="<?php echo $this->get_field_id('title'); ?>">Title:</label>
  	<input class="widefat" id="<?php echo $this->get_field_id('title'); ?>" name="<?php echo $this->get_field_name('title'); ?>" type="text" value="<?php echo attribute_escape($title); ?>" placeholder="Widget Title">
  </p>
  
  <div style="border: 1px solid #ccc; padding: 10px; border-radius: 5px; background: rgba(255, 255, 255, 0.67);">
  <strong>Ad I</strong>
  <p>
  	<label for="<?php echo $this->get_field_id('linkI'); ?>">Ad Link I:</label>
  	<input class="widefat" id="<?php echo $this->get_field_id('linkI'); ?>" name="<?php echo $this->get_field_name('linkI'); ?>" type="text" value="<?php echo attribute_escape($linkI); ?>" placeholder="http://www.ulisesfreitas.com">
  </p>
            
  <p>
  	<label for="<?php echo $this->get_field_id('imageI'); ?>">Ad Image I:</label>
  	<input class="widefat" id="<?php echo $this->get_field_id('imageI'); ?>" name="<?php echo $this->get_field_name('imageI'); ?>" type="text" value="<?php echo attribute_escape($imageI); ?>" placeholder="Image Url or Media Library">
  </p>
  </div>
  <br>
  <div style="border: 1px solid #ccc; padding: 10px; border-radius: 5px; background: rgba(255, 255, 255, 0.67);">
  <strong>Ad II</strong>
  <p>
  	<label for="<?php echo $this->get_field_id('linkII'); ?>">Ad Link II:</label>
  	<input class="widefat" id="<?php echo $this->get_field_id('linkII'); ?>" name="<?php echo $this->get_field_name('linkII'); ?>" type="text" value="<?php echo attribute_escape($linkII); ?>" placeholder="http://www.ulisesfreitas.com">
  </p>
            
  <p>
  	<label for="<?php echo $this->get_field_id('imageII'); ?>">Ad Image II:</label>
  	<input class="widefat" id="<?php echo $this->get_field_id('imageII'); ?>" name="<?php echo $this->get_field_name('imageII'); ?>" type="text" value="<?php echo attribute_escape($imageII); ?>" placeholder="Image Url or Media Library">
  </p>
  </div>
  <br>
  <div style="border: 1px solid #ccc; padding: 10px; border-radius: 5px; background: rgba(255, 255, 255, 0.67);">
  <strong>Ad III</strong>
  <p>
  	<label for="<?php echo $this->get_field_id('linkIII'); ?>">Ad Link III:</label>
  	<input class="widefat" id="<?php echo $this->get_field_id('linkIII'); ?>" name="<?php echo $this->get_field_name('linkIII'); ?>" type="text" value="<?php echo attribute_escape($linkIII); ?>" placeholder="http://www.ulisesfreitas.com">
  </p>
            
  <p>
  	<label for="<?php echo $this->get_field_id('imageIII'); ?>">Ad Image III:</label>
  	<input class="widefat" id="<?php echo $this->get_field_id('imageIII'); ?>" name="<?php echo $this->get_field_name('imageIII'); ?>" type="text" value="<?php echo attribute_escape($imageIII); ?>" placeholder="Image Url or Media Library">
  </p>
  </div>
  <br>
  <div style="border: 1px solid #ccc; padding: 10px; border-radius: 5px; background: rgba(255, 255, 255, 0.67);">
  <strong>Ad IV</strong>
  <p>
  	<label for="<?php echo $this->get_field_id('linkIV'); ?>">Ad Link IV:</label>
  	<input class="widefat" id="<?php echo $this->get_field_id('linkIV'); ?>" name="<?php echo $this->get_field_name('linkIV'); ?>" type="text" value="<?php echo attribute_escape($linkIV); ?>" placeholder="http://www.ulisesfreitas.com">
  </p>
            
  <p>
  	<label for="<?php echo $this->get_field_id('imageIV'); ?>">Ad Image IV:</label>
  	<input class="widefat" id="<?php echo $this->get_field_id('imageIV'); ?>" name="<?php echo $this->get_field_name('imageIV'); ?>" type="text" value="<?php echo attribute_escape($imageIV); ?>" placeholder="Image Url or Media Library">
  </p>
  </div>
  
  
<?php
  }
 
  function update($new_instance, $old_instance)
  {
    $instance = $old_instance;
    $instance['title'] = $new_instance['title'];
    $instance['linkI']  = $new_instance['linkI'];
    $instance['imageI']  = $new_instance['imageI'];
    $instance['linkII']  = $new_instance['linkII'];
    $instance['imageII']  = $new_instance['imageII'];
    $instance['linkIII']  = $new_instance['linkIII'];
    $instance['imageIII']  = $new_instance['imageIII'];
    $instance['linkIV']  = $new_instance['linkIV'];
    $instance['imageIV']  = $new_instance['imageIV'];
    
    return $instance;
  }
 
  function widget($args, $instance)
  {
    extract($args, EXTR_SKIP);
    
    
    
    echo $before_widget;
    $title = empty($instance['title']) ? '' : apply_filters('widget_title', $instance['title']);

    
    $linkI  = $instance['linkI'];
    $imageI  = $instance['imageI'];
    $linkII  = $instance['linkII'];
    $imageII  = $instance['imageII'];
    $linkIII  = $instance['linkIII'];
    $imageIII  = $instance['imageIII'];
    $linkIV  = $instance['linkIV'];
    $imageIV  = $instance['imageIV'];
    
    if (!empty($title))
      echo $before_title . $title . $after_title;
    if (!empty($imageI))
    	echo    '<a href="'.$linkI.'" target="_blank"><img src="'.$imageI.'" width="125" height="125" alt="'.$linkI.'" style="margin:2px;"></a>';
    if (!empty($imageII))
    	echo    '<a href="'.$linkII.'" target="_blank"><img src="'.$imageII.'" width="125" height="125" alt="'.$linkII.'" style="margin:2px;"></a>';
    if (!empty($imageIII))
    	echo    '<a href="'.$linkIII.'" target="_blank"><img src="'.$imageIII.'" width="125" height="125" alt="'.$linkIII.'" style="margin:2px;"></a>';
    if (!empty($imageIV))
    	echo    '<a href="'.$linkIV.'" target="_blank"><img src="'.$imageIV.'" width="125" height="125" alt="'.$linkIV.'" style="margin:2px;"></a>';
      
    echo $after_widget;
  }
}
add_action( 'widgets_init', create_function('', 'return register_widget("CustomAdsOnSidebar");') );
 
?>