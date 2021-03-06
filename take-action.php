<?php
/*
Template Name: take-action
*/
?>
<?php get_header(); ?>

	<div id="blog">
		<?php if(have_posts()) : ?><?php while(have_posts()) : the_post(); ?>
		
		<div class="post">
		<h3 class="title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>


			<div class="entry">
			<?php the_content(); ?>
			<hr>
			</div>
			<?php wp_list_bookmarks('title_li=&exclude_category=69&category_before=&category_after='); ?>
			</br>
				<p class="postmetadata">
				<?php _e('Last updated on: ');?> <i><?php the_modified_time('F j, Y'); ?></i> <?php _e('by'); ?> <i><?php  the_author_posts_link(); ?></i><br />
				<?php //_e('Filed under&#58;'); ?> <?php //the_category(', ') ?> <?php //_e('by'); ?> <?php  //the_author(); ?><br />
				<?php //comments_popup_link('No Comments &#187;', '1 Comment &#187;', '% Comments &#187;'); ?> <?php //edit_post_link('Edit', ' &#124; ', ''); ?>
				</p>
			<div class="comments-template">
			<!--	<h2>What do you think?</h2> -->
					<?php comments_template(); ?>
			</div>



		</div>
		
<?php endwhile; ?>

	<div class="navigation">
		<?php posts_nav_link(); ?>
	</div>

<?php endif; ?>

</div>


<?php get_footer(); ?>
