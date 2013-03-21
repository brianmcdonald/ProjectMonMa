<!--</div> --put in because of a break problem. seems to have fixed it-->
  <div id="footer">
		<script src="http://projectmonma.org/wp-content/themes/projectmonma/js/bootstrap-transition.js"></script>
	    <script src="http://projectmonma.org/wp-content/themes/projectmonma/js/bootstrap-carousel.js"></script>


	     <p><a href="http://projectmonma.org/projects/feed/">Projects RSS</a> | <a href="http://projectmonma.org/blog/feed/">Blog RSS</a> | <a href="http://projectmonma.org/events/feed/">Events RSS</a> | <a href="https://github.com/brianmcdonald/projectmonma">Github</a> | <a href="http://facebook.com/projectmonma">Facebook</a> | <a href="http://twitter.com/projectmonma">Twitter</a></p>
    <p>
      &copy2013 <?php bloginfo('name'); ?> <strong>|</strong> Made by <a href="http://brianmcdonald.me">Brian Mc Donald</a>
    </p>
	</div>
</div>

<!--facebook like box -->
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_GB/all.js#xfbml=1&appId=457829977603852";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

<!--google analytics-->
<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-37678390-1']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>
<!--google analytics end-->

</body>
</html>
