<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */
?>

		</div><!-- .site-content -->

		<footer id="colophon" class="site-footer" role="contentinfo">
			
         <div class="container">
         <div class="row">
         <div class="col-lg-6">
         	<?php dynamic_sidebar('sidebar-2');?>
         </div>
         <div class="col-lg-6 text-right">
         	<div class="footer-social-menu">
         	<ul>
  <li><a href="https://www.facebook.com/PatioBarNJ/" target="_blank"><i class="fab fa-facebook"></i></a></li>
   <li><a href="https://twitter.com/patiobarnj?lang=en" target="_blank"><i class="fab fa-twitter"></i></a></li>
  <li><a href="http://instagram.com/PatioBarNJ" target="_blank"><i class="fab fa-instagram"></i></a></li>
 </ul>
         	</div>
         <?php dynamic_sidebar('sidebar-3');?>
         </div>
        </div><!-- row -->


       <div class="row">
       <div class="col-lg-12">
      <div class="copyright-section text-center">
       Copyright Patio Bar 2018
      </div>
       </div>
       </div>

        </div><!-- container -->
		</footer><!-- .site-footer -->
	</div><!-- .site-inner -->
</div><!-- .site -->
<script type="text/javascript">
    $('.sunrise_sunset_widget').each(function() {
    var $this = $(this);
    $this.html($this.html().replace(/(\S+)\s*$/, '<span class="foo">$1</span>'));
});
</script>

<?php wp_footer(); ?>
</body>
</html>
<script type="text/javascript">
  $("#direction-image").click(function(){
    window.location = 'http://demosrvr.com/wp/patiobar/directions/';
});

  $("#photo-box").click(function(){
    window.location = 'http://demosrvr.com/wp/patiobar/gallery/';
});

  $("#video-box-image").click(function(){
    window.location = 'http://demosrvr.com/wp/patiobar/gallery/?type=video';
});
</script>