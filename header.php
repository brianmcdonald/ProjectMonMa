<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width, initial-scale=0.5">
<title>
<?php wp_title (); ?>
</title>

<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
<link rel="stylesheet" type="text/css" href="<?php bloginfo( 'stylesheet_directory' ); ?>/css/bootstrap.css">
<link rel="stylesheet" type="text/css" href="<?php bloginfo( 'stylesheet_directory' ); ?>/css/bootstrap-responsive.css">
<link rel="shortcut icon" href="<?php bloginfo('stylesheet_directory'); ?>/favicon.ico" />
<script src="http://code.jquery.com/jquery-latest.js"></script>
<script src="http://projectmonma.org/wp-content/themes/projectmonma/js/bootstrap.js" type="text/javascript"></script>
<script src="http://projectmonma.org/wp-content/themes/projectmonma/js/bootstrap-collapse.js" type="text/javascript"></script>
<script type="text/javascript" src="http://twitter.github.io/bootstrap/assets/js/bootstrap-transition.js"></script>

<!--<?php
	/* 
	 * 	Add this to support sites with sites with threaded comments enabled.
	 */
	if ( is_singular() && get_option( 'thread_comments' ) )
		wp_enqueue_script( 'comment-reply' );

	wp_head();
	
	wp_get_archives('type=monthly&format=link');
?> -->
</head>

<body>

<!--navbar-->
<div class="container navbar-wrapper">
	<div class="navbar  navbar-fixed-top">
  		<div class="navbar-inner">
   			 <div class="container">
      			<a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
        		<span class="icon-bar"></span>
        		<span class="icon-bar"></span>
        		<span class="icon-bar"></span> 
				<span class="icon-bar"></span> 
      			</a>
      			<a class="brand" href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a>
      			<?php wp_nav_menu(
          		array(
            		'menu' => 'main-menu',
            		'container_class' => 'nav-collapse collapse',
            		'menu_class' => 'nav',
            		'fallback_cb' => '',
            		'menu_id' => 'main-menu'       
          			)    
        		); ?>

			<div class="icons">
    		<a class="twitter" href="http://twitter.com/projectmonma"></a>
    		<a class="pinterest" href="https://www.pinterest.com/ProjectMonMa"></a>
    		<a class="facebook" href="https://www.facebook.com/ProjectMonMa"></a>
    		<a class="github" href="https://github.com/brianmcdonald/projectmonma"></a> 
			</div>	
    		</div>
  		</div>
	</div>
</div>

<!--navbar end-->
<div id="wrapper">
	<div id="header">	
		<!--banner-->
		<?php
$advert = array(); 
$advert[] = '<img src="http://projectmonma.org/wp-content/uploads/banner1.jpg" alt="Logo" height="245" width="935">';
shuffle($advert); 
echo $advert[0];
?>
<!--banner end-->
		<!--	<img src="http://projectmonma.org/wp-content/uploads/Monma-banner_1st-choice.jpg" alt="Logo" height="245" width="935"> -->
			
			 <div id = "search">
				<form name="doingasearch" class="form-search" >
	  			<input name="searchbox" type="text" class="input-medium search-query">
	  			<button onclick="return googleSearch();" type="submit" class="btn btn-primary">Search</button>
				</form>
			</div>
	</div>
  	<?php ; ?>  
	
  		<!--search box-->
		<script>
			function googleSearch() {
			  if (document.doingasearch.searchbox.value!="") {    
			      window.open("http://www.google.com/search?hl=en&q=" + "site:http://projectmonma.org " + document.doingasearch.searchbox.value) ;        
			  }
			  else {
			    alert("Please enter something to search.")
			    document.doingasearch.searchbox.focus();
			  }
			}
		</script>
		<!--search box end-->



