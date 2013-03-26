<?php get_header(); ?>

	<div id="blog">
		

		<?php if(have_posts()) : ?><?php while(have_posts()) : the_post(); ?>
		
		<div class="post">
		<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
			<br>

			<?PHP
				$file_handle = fopen("https://docs.google.com/spreadsheet/pub?key=0AlIfqSulwjE5dGhXcnVpSHFoUGJocllSSG9QbzViV1E&single=true&gid=0&output=csv", "r");
				
					$line_of_text = fgetcsv($file_handle, 1024);
			?>

			<div class="entry">
				<div id="projectbanner">
					<div id="donateheader">
					<a href="http://projectmonma.org/donate/" class="btn btn-primary">Donate</a>
		  			</div>
					<div class="project-progress-big"><b>This Project requires: $<?php echo $line_of_text[1]; ?></b>
						<div class="progress progress-striped active">
		  				<div class="bar" style="width: 0%;"></div>
					</div>
					
		  		</div>
			</div>
			<div class="comments-template">
			<!--	<h2>What do you think?</h2> -->
					<?php comments_template(); ?>
			</div>


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


			<?php the_content(); ?>
			

				<p class="postmetadata">
				<?php _e('by'); ?> <i><?php  the_author_posts_link(); ?></i> on <i><?php the_date(); ?></i><br />
			<!--	<?php edit_post_link('Edit', ' &#124; ', ''); ?> -->
				</p>
<hr />
			</div>

		</div>
		
<?php endwhile; ?>

	<div class="navigation">
		<?php posts_nav_link(); ?>
	</div>
<?php endif; ?>

</div>


<?php get_footer(); ?>