<?php
/*
Template Name: about
*/
?>
<!--contact form php-->
<?php
  
  //response generation function
  $response = "";

  //function to generate response
  function generate_response($type, $message){
    
    global $response;

    if($type == "success") $response = "<div class='alert alert-success'>{$message}</div>";
    else $response = "<div class='alert alert-error'>{$message}</div>";
    
  }
  //response messages
  $not_human       = "Human verification incorrect.";
  $missing_content = "Please supply all information.";
  $email_invalid   = "Email Address Invalid.";
  $message_unsent  = "Message was not sent. Try Again.";
  $message_sent    = "Thanks! Your message has been sent.";

  //user posted variables
  $name = $_POST['message_name'];
  $email = $_POST['message_email'];
  $message = $_POST['message_text'];
  $human = $_POST['message_human'];

  //php mailer variables
  $to = "brian@projectmonma.org, johanna@projectmonma.org";
  $subject = "Contact From".get_bloginfo('name');
  $headers = 'From: '. $email  .
    'Reply-To: ' . $email ;
  
  if(!$human == 0){
    if($human != 2) generate_response("error", $not_human); //not human!
    else {
    
		//validate email
		if(!filter_var($email, FILTER_VALIDATE_EMAIL))
		  generate_response("error", $email_invalid);
		else //email is valid
		{
			//validate presence of name and message
			if(empty($name) || empty($message)){
			  generate_response("error", $missing_content);
			}
			else //ready to go!
			{
				$sent = mail($to, $subject, $message, $headers);
				if($sent) generate_response("success", $message_sent); //message sent!
				else generate_response("error", $message_unsent); //message wasn't sent
			}
		}
    }
  } 
  else if ($_POST['submitted']) generate_response("error", $missing_content);
?>

<!--contact form php end-->
<?php get_header(); ?>

	<div id="blog">
		<?php if(have_posts()) : ?><?php while(have_posts()) : the_post(); ?>
		
		<div class="post">
		<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>








			<div class="entry">
			<?php the_content(); ?>

			 	<?php $recent = new WP_Query("pagename=media"); while($recent->have_posts()) : $recent->the_post();?> 
					<hr>
	       		<h2>Media</h2>
	       		<?php the_content(); ?>
				<?php wp_list_bookmarks('title_li=&categorize=0&category=69&show_description=1'); ?> 
			</br>
				
			<hr>
				<h2>Contact us!</h2>
	       		<!--contact form-->
				<div class="hero-unit">
				
				<div id="respond">
				  <?php echo $response; ?>
				  <form action="<?php the_permalink(); ?>" method="post">
				    <p><label for="name">Name: <span>*</span> <br><input type="text" class="span3" name="message_name" value="<?php echo $_POST['message_name']; ?>"></label></p>
				    <p><label for="message_email">Email: <span>*</span> <br><input type="text" class="span3" name="message_email" value="<?php echo $_POST['message_email']; ?>"></label></p>
				    <p><label for="message_text">Message: <span>*</span> <br><textarea type="text" class="span6"name="message_text"><?php echo $_POST['message_text']; ?></textarea></label></p>
				    <p><label for="message_human">Human Verification: <span>*</span> <br><input type="text" style="width: 60px;" name="message_human"> + 3 = 5</label></p>
				    <input type="hidden" name="submitted" value="1">
				    <p><input type="submit" class="btn btn-primary"></p>
				  </form>
				</div>

				</div>
			</div>
				<!--contact form end-->



				<?php endwhile; ?>
						<div class="comments-template">
						<!--	<h2>What do you think?</h2> -->
							<!--	<?php comments_template(); ?> -->
						</div>
				<p class="postmetadata">
				<?php _e('Last updated on: ');?> <i><?php the_modified_time('F j, Y'); ?></i> <?php _e('by'); ?> <i><?php  the_author_posts_link(); ?></i><br />
				<?php //_e('Filed under&#58;'); ?> <?php //the_category(', ') ?> <?php //_e('by'); ?> <?php  //the_author(); ?><br />
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
