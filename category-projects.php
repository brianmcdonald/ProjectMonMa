<?php get_header(); ?>

	<div id="blog">

		<?php if(have_posts()) : ?><?php while(have_posts()) : the_post(); ?>
		
		<div class="post">
		<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
			<br>

			<div class="entry">
			
				<?php the_excerpt(); ?><a href="<?php echo get_permalink(); ?>"> Read More...</a>

			</div>
			<!--	<?php the_content(); ?> -->
			
			<div class="comments-template">
					<?php comments_template(); ?>
			</div>
				<p class="postmetadata">
				<?php _e('by'); ?> <i><?php  the_author_posts_link(); ?></i> on <i><?php the_date(); ?></i><br />
				<!--<?php edit_post_link('Edit', ' &#124; ', ''); ?> -->
				</p>
			</div>

		</div>
		<ul class="nav nav-list">
			  <li class="divider"></li> 
		</ul><!--Added divider-->

		
<?php endwhile; ?>

	<div class="navigation">
		<?php posts_nav_link(); ?>
	</div>
<?php endif; ?>

</div>


<?php get_footer(); ?>