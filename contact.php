<?php
/*
Template Name: contact
*/
?>
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
<?php get_header(); ?>

	<div id="blog">
		<?php if(have_posts()) : ?><?php while(have_posts()) : the_post(); ?>
		
		
		
		
		<div class="post">
		<h3 class="title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>


			<div class="entry">
	<!--		<?php the_content(); ?> -->

			
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


		</div>
		
<?php endwhile; ?>

	<div class="navigation">
		<?php posts_nav_link(); ?>
	</div>

<?php endif; ?>

</div>


<?php get_footer(); ?>
