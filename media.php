<?php
/*
Template Name: media
*/
?>
<?php get_header(); ?>

	<div id="blog">
		<?php if(have_posts()) : ?><?php while(have_posts()) : the_post(); ?>
		
		
		
		
		<div class="post">
		<h3 class="title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>


			<div class="entry">
			<?php the_content(); ?> 
			<?php wp_list_bookmarks('title_li=&categorize=0&category=69&show_description=1'); ?> 
				
	
		
<?php endwhile; ?>

	<div class="navigation">
		<?php posts_nav_link(); ?>
	</div>

<?php endif; ?>

</div>


<?php get_footer(); ?>
