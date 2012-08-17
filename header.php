<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<title>
<?php wp_title (); ?>
</title>

<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
<link rel="stylesheet" type="text/css" href="<?php bloginfo( 'stylesheet_directory' ); ?>/css/MyFontsWebfontsKit.css">
<link rel="stylesheet" type="text/css" href="<?php bloginfo( 'stylesheet_directory' ); ?>/css/bootstrap.css">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />


<script src="http://projectmonma.org/wp-content/themes/projectmonma/js/jquery.js" type="text/javascript"></script>
<script src="http://projectmonma.org/wp-content/themes/projectmonma/js/bootstrap.js" type="text/javascript"></script>

<?php
	/* 
	 * 	Add this to support sites with sites with threaded comments enabled.
	 */
	if ( is_singular() && get_option( 'thread_comments' ) )
		wp_enqueue_script( 'comment-reply' );

	wp_head();
	
	wp_get_archives('type=monthly&format=link');
?>
</head>
<body>

<div id="wrapper">
	<div id="header">
		<h1><a href="<?php echo get_option('home'); ?>"><?php bloginfo('name'); ?></a></h1>
	</div>

  <?php wp_nav_menu( array( 'sort_column' => 'menu_order', 'menu_class' => 'navh', 'theme_location' => 'primary-menu' )  ); ?>  
  <div id="socialicons">
	<a href="https://www.facebook.com/ProjectMonMa" target="_blank">
	<img src="http://projectmonma.org/wp-content/themes/projectmonma/css/glyphicons/glyphicons_390_facebook.png" alt="facebook" />
	<a href="http://www.twitter.com/projectmonma" target="_blank">
	<img src="http://projectmonma.org/wp-content/themes/projectmonma/css/glyphicons/glyphicons_392_twitter.png" alt="twitter" />
	<a href="http://www.youtube.com/user/brianeieio/" target="_blank">
	<img src="http://projectmonma.org/wp-content/themes/projectmonma/css/glyphicons/glyphicons_382_youtube.png" alt="youtube" />
	<a href="https://github.com/brianmcdonald/projectmonma" target="_blank">
	<img src="http://projectmonma.org/wp-content/themes/projectmonma/css/glyphicons/glyphicons_381_github.png" alt="facebook" />
  </div>
