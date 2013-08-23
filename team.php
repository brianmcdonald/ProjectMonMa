<?php
/*
Template Name: team
*/
?>
<?php get_header(); ?>

	<div id="blog">
		<?php if(have_posts()) : ?><?php while(have_posts()) : the_post(); ?>
		
		
		
		
		<div class="post">
		<h3 class="title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>


			<div class="entry">
			<!--photos start-->
			<h5><strong>Introducing the people responsible for the project:</strong></h5>

			<div class="teambox">
			<ul class="thumbnails" style="margin-left: 0px;">
				<li class="span3">
			<div class="thumbnail"><img alt="" src="http://projectmonma.org/wp-content/uploads/2012/08/Johanna.jpg" />
			<h5 style="text-align: center;">Program Director</h5>
			Johanna Higgs is the program director.</br>
			<a class="btn btn-small " href="mailto:johanna@projectmonma.org"><i class="icon-envelope"></i> email</a>

			</div></li>
				<li class="span3">
			<div class="thumbnail"><img alt="" src="http://projectmonma.org/wp-content/uploads/2012/08/Tosha.jpg" />
			<h5 style="text-align: center;">Operations Manager</h5>
			Tosha Maggie is our Project Manager based in Uganda.
			<a class="btn btn-small " href="mailto:toshamaggie@yahoo.com"><i class="icon-envelope"></i> email</a>

			</div></li>
				<li class="span3">
			<div class="thumbnail"><img alt="" src="http://projectmonma.org/wp-content/uploads/2012/08/Brian.jpg" />
			<h5 style="text-align: center;">Technical Manager</h5>
			Brian Mc Donald is responsible for the site.</br>
			<a class="btn btn-small " href="mailto:brian@projectmonma.org"><i class="icon-envelope"></i> email</a>

			</div></li>
				<li class="span3">
			<div class="thumbnail"><img alt="" src="http://projectmonma.org/wp-content/uploads/Clara-e1350107795326.jpg" />
			<h5 style="text-align: center;">Policy Research Advisor</h5>
			Clara Bradley is our policy research adviser.</br>
			<a class="btn btn-small " href="clarabradley@live.com.au"><i class="icon-envelope"></i> email</a>

			</div></li>
			<li class="span3">
			<div class="thumbnail"><img alt="" src="http://projectmonma.org/wp-content/uploads/lindsey.jpeg" />
			<h5 style="text-align: center;">Marketing Manager</h5>
			Lindsey Henderson is our marketing manager.</br>
			<a class="btn btn-small " href="lindsey@projectmonm.org"><i class="icon-envelope"></i> email</a>

			</div></li>
			       <li class="span3">
			<div class="thumbnail" style="padding-bottom:50px"><img alt="" src="http://projectmonma.org/wp-content/uploads/saad.jpg" />
			<h5 style="text-align: center;">Advisor</h5>
			Saad Karim

			</br>
			</div></li>
				<li class="span3">
			<div class="thumbnail"><img alt="" src="http://projectmonma.org/wp-content/uploads/Prad.jpg" />
			<h5 style="text-align: center;">Advisor</h5>
			Pradyuman Singh Rawat 

			</div></li>
			</ul>
			</div>
			<hr>
			<!--photo end-->	
				
			<?php the_content(); ?>

				<p class="postmetadata">
				<?php _e('Last updated on: ');?> <i><?php the_modified_time('F j, Y'); ?></i> <?php _e('by'); ?> <i><?php  the_author_posts_link(); ?></i><br />
				<?php //_e('Filed under&#58;'); ?> <?php the_category(', ') ?> <?php //_e('by'); ?> <?php  //the_author(); ?><br />
				<?php //comments_popup_link('No Comments &#187;', '1 Comment &#187;', '% Comments &#187;'); ?> <?php //edit_post_link('Edit', ' &#124; ', ''); ?>
				</p>

			</div>




        
       


		</div>
		
<?php endwhile; ?>

	<div class="navigation">
		<?php posts_nav_link(); ?>
	</div>

<?php endif; ?>

</div>


<?php get_footer(); ?>
