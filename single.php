<?php get_header(); ?>

	<div id="blog">
		<?php if(have_posts()) : ?><?php while(have_posts()) : the_post(); ?>
		
		<div class="post">
		<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
		
			<!--get the google doc to show funding-->
			<?PHP
				$file_handle = fopen("https://docs.google.com/spreadsheet/pub?key=0AlIfqSulwjE5dGhXcnVpSHFoUGJocllSSG9QbzViV1E&single=true&gid=0&output=csv", "r");
					$line_of_text = fgetcsv($file_handle, 1024);
			?>


			<div class="entry">	
				<!--Check if its specific project page-->
				<?php
				if (is_single( 'project1' ) ) {
					?>
					<div id="projectbanner">
						<div id="donateheader">
							<a href="http://projectmonma.org/donate/" class="btn btn-primary">Donate</a>
				  		</div>
						<div class="project-progress-big"><b>Required: AUS$<?php echo $line_of_text[1]; ?></b><b> - Raised so far: AUS$<?php echo $line_of_text[2]; ?></b>
							<div class="progress progress-striped active">
			  					<div class="bar" style="width: 0%;"></div>
			  				</div>
						</div>
		  			</div>
		  			<?
				}
 				?>

				<!--<?php the_post_thumbnail(); ?>-->
				<?php the_content(); ?>

				<p class="postmetadata">
			<!--	<?php _e('Filed under&#58;'); ?> <?php the_category(', ') ?> --><?php _e('by'); ?> <i><?php  the_author_posts_link(); ?></i> on <i><?php the_date(); ?></i>       <br />
			<!--	<?php comments_popup_link('No Comments &#187;', '1 Comment &#187;', '% Comments &#187;'); ?> <?php edit_post_link('Edit', ' &#124; ', ''); ?> -->
				</p>

			</div>

			<div class="comments-template">
					<?php comments_template(); ?>
			</div>

			<!--script for progress bar-->
			<script>
			var progress = setInterval(function() {

			    var $bar = $('.bar');
			    
			    if ($bar.width()>=<?php echo $line_of_text[0]; ?> * 4) {
			        clearInterval(progress);
			        $('.progress').removeClass('active');
			    } else {
			        $bar.width($bar.width()+20);
			    }
			    $bar.text($bar.width()/4 + "%");
			}, 800);
			</script>


	</div>

<?php endwhile; ?>
	
<!--	<div class="navigation">	
		<?php previous_post_link('< %link') ?> <?php next_post_link(' %link >') ?>
	</div> -->

<?php endif; ?>
</div>
<!--
<?php get_sidebar(); ?>	-->
<?php get_footer(); ?>