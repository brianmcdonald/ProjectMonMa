<?php
/*
Template Name: superhome
*/
?>
<?php get_header(); ?>

	<div id="banner">
		<div class="market">
			<div class="transbox"><a href="http://projectmonma.org/market/" title="Market">
			<h3>Market</h3>
			<i class="icon-shopping-cart icon-white"></i>
			<p>Browse our collection of handcrafted beads and environmentally friendly sandals
			</p>
			</div>
		</div>
		
		<div class="project">
					<div class="transbox"><a href="http://projectmonma.org/category/projects/" title="Projects">
			<h3>Projects</h3>
			<i class="icon-leaf icon-white"></i>
			<p>Take a look at how your purchases and donations are transforming life in their communities
			</p></a>
			</div>
		</div>	
	</div>
	
	
	
	
	<div id="blog" style="padding-top: 20px;">
		<?php if(have_posts()) : ?><?php while(have_posts()) : the_post(); ?>
		
		<div class="post">



			<div class="entry">
			<?php the_content(); ?>
<a class="btn btn-primary" href="http://projectmonma.org/market/">Market</a>
				<p class="postmetadata">
				<?php // _e('Filed under&#58;'); ?> <?php //the_category(', ') ?> <?php //_e('by'); ?> <?php  //the_author(); ?><br />
				<?php //comments_popup_link('No Comments &#187;', '1 Comment &#187;', '% Comments &#187;'); ?> <?php //edit_post_link('Edit', ' &#124; ', ''); ?>
				</p>
				
			</div>
		</div>
	</div>
		
			
<?php endwhile; ?>

	<div class="navigation">
		<?php posts_nav_link(); ?>
	</div>

<?php endif; ?>

		

<?php get_footer(); ?>



