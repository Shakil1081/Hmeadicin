<!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <head>
    <title><?php wp_title(); ?></title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta charset="<?php bloginfo( 'charset' ); ?>" />
		<link href="<?php echo esc_url( get_template_directory_uri() ); ?>/css/bootstrap.min.css" rel="stylesheet" media="screen">
		<link href="<?php bloginfo('stylesheet_url');?>" type="text/css" rel="stylesheet" media="screen, projection" />
		<script src="http://code.jquery.com/jquery.js"></script>
		<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/bootstrap.min.js"></script>
    <?php
    // add JS for comment threading support
    if ( is_singular() ) wp_enqueue_script( 'comment-reply' );
    ?>
		<?php wp_head(); ?>
	</head>
 
  <body <?php body_class(isset($class) ? $class : ''); ?>>
      <div id="main-container" class="container">
    
    
    
    	
    	
