<?php

add_theme_support( 'post-thumbnails' );

register_sidebar(array(
	'name' => __( 'Right Sidebar' ),
	'id' => 'right-sidebar',
	'description' => __( 'Widgets in this area will be shown on the right-hand side.' ),
	'before_widget' => '<div class="sidebar">',
	'after_widget'  => '</div>',
	'before_title'  => '<div class="header"><h6><span class="widget-title">',
	'after_title'   => '</span></h6></div>'
));

register_nav_menu('top-menu', 'Menu Top');

// changing the login page URL

  	function my_login_logo_url() {
    return get_bloginfo( 'url' );
	}
	add_filter( 'login_headerurl', 'my_login_logo_url' );

//changing the login page URL hover text

	function my_login_logo_url_title() {
	return get_bloginfo( 'title' );
	}
	add_filter( 'login_headertitle', 'my_login_logo_url_title' );
	
//Change Login Screen

function custom_login_logo() {
echo '<style type="text/css">
.login h1 a { 
	background-image: url('.get_bloginfo('template_directory').'/images/telerik.jpg) !important; 
	background-size: 300px 200px !important;
	display: block; 
	height: 200px; 
	overflow: hidden; 
	padding-bottom: 15px; 
	text-indent: -9999px; 
	width: 300px; 
	margin: 0 auto; 
}
body.login { 
	background: none repeat scroll 0 0 #FFF; 
	min-width: 0;  
}
#login { 
	padding: 50px 0 0!important; 
}
.login form { 
	background: rgb(76,76,76); 
	background: -moz-linear-gradient(top,  rgba(76,76,76,1) 0%, rgba(44,44,44,1) 38%, rgba(0,0,0,1) 39%, rgba(19,19,19,1) 100%); 
	background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,rgba(76,76,76,1)), color-stop(38%,rgba(44,44,44,1)), color-stop(39%,rgba(0,0,0,1)), color-stop(100%,rgba(19,19,19,1))); 
	background: -webkit-linear-gradient(top,  rgba(76,76,76,1) 0%,rgba(44,44,44,1) 38%,rgba(0,0,0,1) 39%,rgba(19,19,19,1) 100%); 
	background: -o-linear-gradient(top,  rgba(76,76,76,1) 0%,rgba(44,44,44,1) 38%,rgba(0,0,0,1) 39%,rgba(19,19,19,1) 100%); 
	background: -ms-linear-gradient(top,  rgba(76,76,76,1) 0%,rgba(44,44,44,1) 38%,rgba(0,0,0,1) 39%,rgba(19,19,19,1) 100%); 
	background: linear-gradient(top,  rgba(76,76,76,1) 0%,rgba(44,44,44,1) 38%,rgba(0,0,0,1) 39%,rgba(19,19,19,1) 100%); 
 	border: 1px solid #E5E5E5; -moz-border-radius: 15px 15px 15px 15px; -webkit-border-radius: 15px 15px 15px 15px; border-radius: 15px 15px 15px 15px; box-shadow: 0 0 10px 0 rgba(0, 0, 0, 0.5); font-weight: normal; margin-left: 8px; padding: 26px 24px 46px; 
}
.login .button-primary { 
	padding: 5px 25px !important;
}
input.button-primary, button.button-primary, a.button-primary {
	background: rgb(117,174,255); 
	background: -moz-linear-gradient(top,  rgba(117,174,255,1) 0%, rgba(117,174,255,1) 35%, rgba(66,142,255,1) 65%, rgba(66,142,255,1) 100%); 
	background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,rgba(117,174,255,1)), color-stop(35%,rgba(117,174,255,1)), color-stop(65%,rgba(66,142,255,1)), color-stop(100%,rgba(66,142,255,1))); 
	background: -webkit-linear-gradient(top,  rgba(117,174,255,1) 0%,rgba(117,174,255,1) 35%,rgba(66,142,255,1) 65%,rgba(66,142,255,1) 100%); 
	background: -o-linear-gradient(top,  rgba(117,174,255,1) 0%,rgba(117,174,255,1) 35%,rgba(66,142,255,1) 65%,rgba(66,142,255,1) 100%); 
	background: -ms-linear-gradient(top,  rgba(117,174,255,1) 0%,rgba(117,174,255,1) 35%,rgba(66,142,255,1) 65%,rgba(66,142,255,1) 100%); 
	background: linear-gradient(top,  rgba(117,174,255,1) 0%,rgba(117,174,255,1) 35%,rgba(66,142,255,1) 65%,rgba(66,142,255,1) 100%); border: none !important; color: #FFFFFF; font-weight: bold; text-shadow: 0 -1px 0 rgba(0, 0, 0, 0.3); 
}	
input.button-primary:hover, button.button-primary:hover, a.button-primary:hover, input.button-primary:active, button.button-primary:active, a.button-primary:active {
	background: rgb(66,142,255); 
	background: -moz-linear-gradient(top,  rgba(66,142,255,1) 0%, rgba(66,142,255,1) 35%, rgba(117,174,255,1) 65%, rgba(117,174,255,1) 100%); 									
	background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,rgba(66,142,255,1)), color-stop(35%,rgba(66,142,255,1)), color-stop(65%,rgba(117,174,255,1)), color-stop(100%,rgba(117,174,255,1))); 
	background: -webkit-linear-gradient(top,  rgba(66,142,255,1) 0%,rgba(66,142,255,1) 35%,rgba(117,174,255,1) 65%,rgba(117,174,255,1) 100%); 	
	background: -o-linear-gradient(top,  rgba(66,142,255,1) 0%,rgba(66,142,255,1) 35%,rgba(117,174,255,1) 65%,rgba(117,174,255,1) 100%); 
	background: -ms-linear-gradient(top,  rgba(66,142,255,1) 0%,rgba(66,142,255,1) 35%,rgba(117,174,255,1) 65%,rgba(117,174,255,1) 100%); 
	background: linear-gradient(top,  rgba(66,142,255,1) 0%,rgba(66,142,255,1) 35%,rgba(117,174,255,1) 65%,rgba(117,174,255,1) 100%); 
}
.login #nav { 
	float: left; 
	margin: 0 0 0 16px; 
	padding: 10px 0 0; 
	text-shadow: 0 1px 0 #FFFFFF; 
	width: 160px;
}
.login #nav a { 
	color: #CF0404 !important; 
	text-decoration: none; 
	display: block; 
	min-height: 20px; 
	height: auto !important;
	width: 120px; 
	-moz-text-shadow: 0 1px 0 rgba(0, 0, 0, 0.3); 
	-webkit-text-shadow: 0 1px 0 rgba(0, 0, 0, 0.3); 
	text-shadow: 0 1px 0 rgba(0, 0, 0, 0.3);  
	padding: 5px 0 0 10px; 
}
.login #nav a:hover, .login #nav a:active  { 
	background-color: #cf0404; 
	-moz-border-radius: 5px 5px 5px 5px;  
	-webkit-border-radius: 5px 5px 5px 5px; 
	 border-radius: 5px 5px 5px 5px; color: #F2F2F2 !important; 
	 text-decoration: none; 
	 display: block; 
	 min-height: 20px; 
	 height: auto !important; 
	 width: 120px;
	 -moz-text-shadow: 0 -1px 0 rgba(0, 0, 0, 0.3); 
	 -webkit-text-shadow: 0 -1px 0 rgba(0, 0, 0, 0.3); 
	 text-shadow: 0 -1px 0 rgba(0, 0, 0, 0.3); 
	 padding: 5px 0 0 10px;
	}
.login #backtoblog { 
	float: left; 
	margin: 0 0 0 16px; 
	padding: 10px 0 0; 
	text-shadow: 0 1px 0 #FFFFFF; 
	width: 110px; 
}
.login #backtoblog a { 
	display: block; 
	color: #428EFF !important; 
	text-decoration: none; 
	-moz-text-shadow: 0 1px 0 rgba(0, 0, 0, 0.3); 
	-webkit-text-shadow: 0 1px 0 rgba(0, 0, 0, 0.3); 
	text-shadow: 0 1px 0 rgba(0, 0, 0, 0.3); 
	padding: 5px 0 0 0; 
	width: 120px; 
	min-height: 20px; 
	height: auto !important;
}
.login #backtoblog a:hover, .login #backtoblog a:active { 
	background-color: #428EFF; 
	display: block; 
	min-height: 20px; 
	height: auto !important; 
	width: 120px; 
	-moz-border-radius: 5px;  
	-webkit-border-radius: 5px;  
	border-radius: 5px; 
	color: #F2F2F2 !important; 
	text-decoration: none;  
	-moz-text-shadow: 0 -1px 0 rgba(0, 0, 0, 0.3); 
	-webkit-text-shadow: 0 -1px 0 rgba(0, 0, 0, 0.3); 
	text-shadow: 0 -1px 0 rgba(0, 0, 0, 0.3); 
	padding: 5px 0 0 0;
}
 </style>';
}

add_action('login_head', 'custom_login_logo');

require_once(TEMPLATEPATH . '/functions/admin-menu.php');

?>