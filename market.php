<?php
/*
Template Name: market
*/
?>

<?php get_header(); ?>

	<div id="blog">
		<?php if(have_posts()) : ?><?php while(have_posts()) : the_post(); ?>
		

		<div class="post">
		<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>

			<div class="entry">
			

<div class="container" stye;="margin-left: auto; margin-right: auto; width: 780px;">
      <div class="row">
        <div class="span10">
            <h2>Shop til you drop in our sooper dooper marketplace</h2>
            <p>Click on the product to get further details</p>
            <div id="main-carousel" class="carousel slide">
                <!-- Carousel items -->
                <div class="carousel-inner">
                    <div class="item active">
                        <img alt="Jaipur" src="http://projectmonma.org/wp-content/uploads/sandals.jpg" />
                        <div class="carousel-caption">
                            <h4>Sandals</h4>
                            <p>Sandals that will make you run faster than Usain Bolt</p>
                        </div>
                    </div>
                    <div class="item">
                        <img alt="Jaipur" lazy-src="http://projectmonma.org/wp-content/uploads/necklace.jpg" />
                        <div class="carousel-caption">
                            <h4>Necklaces</h4>
                            <p>Take a look at out range of necklaces</p>
                        </div>
                    </div>
                    
                </div>
                <!-- Image loading -->
                <div class="loading hide"><img src="http://projectmonma.org/wp-content/themes/projectmonma/img/ajax-loader.gif"/></div>
                <!-- Carousel nav -->
                <a class="carousel-control left" href="#main-carousel" data-slide="prev">&lsaquo;</a>
                <a class="carousel-control right" href="#main-carousel" data-slide="next">&rsaquo;</a>
            </div>
        </div>
      </div>
    </div> <!-- /container -->


			<?php the_content(); ?>

				<p class="postmetadata">
				<?php //_e('Filed under&#58;'); ?> <?php the_category(', ') ?> <?php // _e('by'); ?> <?php  //the_author(); ?><br />
				<?php //comments_popup_link('No Comments &#187;', '1 Comment &#187;', '% Comments &#187;'); ?> <?php //edit_post_link('Edit', ' &#124; ', ''); ?>
				</p>

			</div>

		</div>
		<?php //show_post('products-page');?>
		<?php 
			$page_id = 62; // 123 should be replaced with a specific Page's id from your site, which you can find by mousing over the link to edit that Page on the Manage Pages admin page. The id will be embedded in the query string of the URL, e.g. page.php?action=edit&post=123.

			$page_data = get_page( $page_id ); // You must pass in a variable to the get_page function. If you pass in a value (e.g. get_page ( 123 ); ), WordPress will generate an error. By default, this will return an object.

		//	echo '<h3>'. $page_data->post_title .'</h3>';// echo the title
			echo apply_filters('the_content', $page_data->post_content); // echo the content and retain Wordpress filters such as paragraph tags. Origin from: http://wordpress.org/support/topic/get_pagepost-and-no-paragraphs-problem
		?>
		
		
<?php endwhile; ?>

	<div class="navigation">
		<?php posts_nav_link(); ?>
	</div>

<?php endif; ?>

</div>
    <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="http://projectmonma.org/wp-content/themes/projectmonma/js/jquery-1.7.2.min.js"></script>
    
    
    <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="http://projectmonma.org/wp-content/themes/projectmonma/js/jquery-1.7.2.min.js"></script>
    <script src="http://projectmonma.org/wp-content/themes/projectmonma/js/bootstrap/bootstrap-transition.js"></script>
    <!-- If you don't need a lazy carousel use the following code -->
    <!--<script src="js/bootstrap/bootstrap-carousel.js"></script>-->
    <script src="http://projectmonma.org/wp-content/themes/projectmonma/js/lazy-bootstrap-carousel.js"></script>
    <script src="http://projectmonma.org/wp-content/themes/projectmonma/js/base.js"></script>
  

<?php get_footer(); ?>




