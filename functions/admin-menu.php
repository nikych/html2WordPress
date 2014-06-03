<?php 

add_action('admin_menu', 'create_theme_options_page');
function create_theme_options_page() {  
	add_options_page('Theme Options', 'Theme Options', 'administrator', 'theme-options', 'build_options_page');
}
function build_options_page() {
?>
	<div id="theme-options-wrap" class="widefat">    
		<div class="icon32" id="icon-tools"> <br /> </div>    
			
			<h2>My Theme Options</h2>    
			<p>Here you can control easy your HEADER TEXT and LOGO</p>
			
		<form method="post" action="options.php" enctype="multipart/form-data">
			<?php settings_fields('plugin_options'); ?>
			<?php do_settings_sections(__FILE__); ?> 
			<p class="submit">        
				<input name="Submit" type="submit" class="button-primary" value="<?php esc_attr_e('Save Changes'); ?>" />      
			</p>    
		</form>  
	</div>
<?php
}

add_action('admin_init', 'register_and_build_fields');
function register_and_build_fields() {   
	register_setting('plugin_options', 'plugin_options', 'validate_setting');
	add_settings_section('main_section', 'Main Settings', 'section_cb', __FILE__);
	add_settings_field('banner_heading1', 'First Word in Heading Text:', 'banner_heading1_setting', __FILE__, 'main_section');
	add_settings_field('banner_heading2', 'Second Word in Heading Text:', 'banner_heading2_setting', __FILE__, 'main_section');
	add_settings_field('logo', 'Logo(best size: 87x69):', 'logo_setting', __FILE__, 'main_section'); // LOGO
}

// Banner Heading function
function banner_heading1_setting() {  
	$options = get_option('plugin_options');
	echo "<input name='plugin_options[banner_heading1]' type='text' value='{$options['banner_heading1']}' />";
}

function banner_heading2_setting() {  
	$options = get_option('plugin_options');
	echo "<input name='plugin_options[banner_heading2]' type='text' value='{$options['banner_heading2']}' />";
}

function logo_setting() {  
	echo '<input type="file" name="logo" />';
}

function section_cb() {}

function validate_setting($plugin_options) { 
	$keys = array_keys($_FILES); $i = 0; 
	foreach ( $_FILES as $image ) {   // if a files was upload   
	if ($image['size']) 
	{     // if it is an image     
	if ( preg_match('/(jpg|jpeg|png|gif)$/', $image['type']) ) 
	{       
		$override = array('test_form' => false);       // save the file, and store an array, containing its location in $file       
		$file = wp_handle_upload( $image, $override );       
		$plugin_options[$keys[$i]] = $file['url'];     
	} 
		else 
	{       // Not an image.        
		$options = get_option('plugin_options');       
		$plugin_options[$keys[$i]] = $options[$logo];       // Die and let the user know that they made a mistake.       
		wp_die('No image was uploaded.');     
	}   
	}   // Else, the user didn't upload a file.   // Retain the image that's already on file.   
		else 
	{   $options = get_option('plugin_options');     
		$plugin_options[$keys[$i]] = $options[$keys[$i]];   
	}   $i++; 
	} 
		return $plugin_options;
}

// Add stylesheet
add_action('admin_head', 'admin_register_head');

function admin_register_head() {  
	$url = get_bloginfo('template_directory') . '/functions/options_page.css';  
	echo "<link rel='stylesheet' href='$url' />\n";
}

?>