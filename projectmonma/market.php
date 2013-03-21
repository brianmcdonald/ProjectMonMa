<?php
/*
Template Name: market
*/
?>

<?php get_header(); ?>

	<div id="blog-market">
		<?php if(have_posts()) : ?><?php while(have_posts()) : the_post(); ?>
		

		<div class="post">
	<!--	<h3 class="title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3> -->

			<div class="entry">
			


    <!--start test-->
    <div class="container">  
      <!-- Example row of columns -->  
        <div class="row">  
            <div class="span10">  
              <h2>Beautiful handicrafts from the heart of Africa</h2>  
              <p> </p>  
                <div id="myCarousel" class="carousel slide">  
                <!-- Carousel items -->  
                    <div class="carousel-inner">  
                        <div class="active item">
                            <img src="http://projectmonma.org/wp-content/uploads/banner-earrings.png" alt=""earrings"" width="820" height="250" />
                            <div class="carousel-caption">
                                <h4>Earrings</h4>
                                <p>Take a look at our beautiful range of earrings</p>
                            </div>
                        </div>  
                            <div class="item">
                                <img src="http://projectmonma.org/wp-content/uploads/banner-necklaces.png" alt="JS logo" width="820" height="250" />
                                <div class="carousel-caption">
                                <h4>Necklaces</h4>
                                <p>Take a look at our beautiful range of necklaces</p>
                                </div>
                            </div>  
                            <div class="item">
                                <img src="http://projectmonma.org/wp-content/uploads/banner-bracelets.png" alt="Schema.org logo" width="820" height="250" />
                                <div class="carousel-caption">
                                <h4>Bracelets</h4>
                                <p>Take a look at our beautiful range of bracelets</p>
                                </div>
                            </div>  
                        </div>  
      <!-- Carousel nav -->  
                        <a class="carousel-control left" href="#myCarousel" data-slide="prev">‹</a>  
                        <a class="carousel-control right" href="#myCarousel" data-slide="next">›</a>  
                    </div>  
                        <!--shop not open modal -->
                        <div class="modal hide fade" id="myModal">
                              <div class="modal-header">
                                <a class="close" data-dismiss="modal">×</a>
                                <h3>Warning - Market not yet open</h3>
                              </div>
                              <div class="modal-body">
                                <p>Feel free to browse the products but as of yet they are not yet available for purchase.</p>
                                <p>Keep an eye on our <a href="http://twitter.com/projectmonma">twitter</a> or <a href="http://facebook.com/projectmonma">facebook</a> pages for launch details</p>
                              </div>
                              <div class="modal-footer">
                                <a href="#" class="btn" data-dismiss="modal">Close</a>
                              </div>
                        </div>
                        <!--end shop not open modal -->
            </div>  
        </div>  
  
  
    </div> 
    <!--end test-->
        

			<?php the_content(); ?>

			<!--	<p class="postmetadata">
				<?php //_e('Filed under&#58;'); ?> <?php the_category(', ') ?> <?php // _e('by'); ?> <?php  //the_author(); ?><br />
				<?php //comments_popup_link('No Comments &#187;', '1 Comment &#187;', '% Comments &#187;'); ?> <?php //edit_post_link('Edit', ' &#124; ', ''); ?>
				</p>
                -->
			</div>

		</div>

        <!--horizontal rule -->
        <ul class="nav nav-list">
        <li class="divider"></li>
        </ul>

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


 <script type="text/javascript">
    $(window).load(function(){
        $('#myModal').modal('show');
    });
</script>   
 

<?php get_footer(); ?>




