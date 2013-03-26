<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<title>
<?php wp_title (); ?>
</title>

<!--<link href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,400,700' rel='stylesheet' type='text/css'> -->
<!--<link rel="profile" href="http://gmpg.org/xfn/11" /> -->
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
<link rel="stylesheet" type="text/css" href="<?php bloginfo( 'stylesheet_directory' ); ?>/css/bootstrap.css">
<link rel="stylesheet" type="text/css" href="<?php bloginfo( 'stylesheet_directory' ); ?>/css/bootstrap-responsive.css">
<link rel="shortcut icon" href="<?php bloginfo('stylesheet_directory'); ?>/favicon.ico" />
<script src="http://code.jquery.com/jquery-latest.js"></script>
<script src="http://projectmonma.org/wp-content/themes/projectmonma/js/bootstrap.js" type="text/javascript"></script>
<script src="http://projectmonma.org/wp-content/themes/projectmonma/js/bootstrap-collapse.js" type="text/javascript"></script>
<script type='text/javascript'>
    jQuery(function($){
        $(".tweet").tweet({
            username: "ProjectMonMa",
            join_text: "auto",
            avatar_size: 32,
            count: 3,
            auto_join_text_default: ":  ", 
            auto_join_text_ed: ":  ",
            auto_join_text_ing: ":  ",
            auto_join_text_reply: ":  ",
            auto_join_text_url: ":  ",
            loading_text: "loading tweets..."
        });
    });
</script>

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
<!--navbar-->
<div class="container navbar-wrapper">
	<div class="navbar  navbar-fixed-top">
  		<div class="navbar-inner">
   			 <div class="container">
      			<a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
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
        		<div id="socialicons">
					<a href="https://www.facebook.com/ProjectMonMa" target="_blank"><img src="http://projectmonma.org/wp-content/themes/projectmonma/img/glyphicons_390_facebook.png" alt="facebook" ></a>
					<a href="http://www.twitter.com/projectmonma" target="_blank"><img src="http://projectmonma.org/wp-content/themes/projectmonma/img/glyphicons_392_twitter.png" alt="twitter" ></a>
					<a href="http://www.youtube.com/user/brianeieio/" target="_blank"><img src="http://projectmonma.org/wp-content/themes/projectmonma/img/glyphicons_382_youtube.png" alt="youtube" ></a>
					<a href="https://github.com/brianmcdonald/projectmonma" target="_blank"><img src="http://projectmonma.org/wp-content/themes/projectmonma/img/glyphicons_381_github.png" alt="facebook" ></a>
				</div>
				
    		</div>
  		</div>
	</div>
</div>
<!--navbar end-->
<div id="wrapper">
	<div id="header">	
		<!--experiment-->
		<?php
$advert = array(); 
$advert[] = '<img src="http://projectmonma.org/wp-content/uploads/banner1.jpg" alt="Logo" height="245" width="935">';
shuffle($advert); 
echo $advert[0];
?>
<!--experiment end-->
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
		<!--
  		<div id="donateheader">
			<form action="https://www.paypal.com/cgi-bin/webscr" method="post">
			<input type="hidden" name="cmd" value="_donations">
			<input type="hidden" name="business" value="accounts@projectmonma.org">
			<input type="hidden" name="lc" value="US">
			<input type="hidden" name="item_name" value="Project Monma">
			<input type="hidden" name="no_note" value="0">
			<input type="hidden" name="currency_code" value="USD">
			<input type="hidden" name="bn" value="PP-DonationsBF:btn_donate_LG.gif:NonHostedGuest">
			<input type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_donate_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
			<img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
			</form>
  		</div>
		<div id="socialicons">
			<a href="https://www.facebook.com/ProjectMonMa" target="_blank"><img src="http://projectmonma.org/wp-content/themes/projectmonma/img/glyphicons_390_facebook.png" alt="facebook" ></a>
			<a href="http://www.twitter.com/projectmonma" target="_blank"><img src="http://projectmonma.org/wp-content/themes/projectmonma/img/glyphicons_392_twitter.png" alt="twitter" ></a>
			<a href="http://www.youtube.com/user/brianeieio/" target="_blank"><img src="http://projectmonma.org/wp-content/themes/projectmonma/img/glyphicons_382_youtube.png" alt="youtube" ></a>
			<a href="https://github.com/brianmcdonald/projectmonma" target="_blank"><img src="http://projectmonma.org/wp-content/themes/projectmonma/img/glyphicons_381_github.png" alt="facebook" ></a>
		</div> -->



