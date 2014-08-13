	</section><!--/main-->
	<div class="push"></div>
</section><!--/container-->


	

<footer role="contentinfo">
	
	<?php if (function_exists('dynamic_sidebar')) { ?>
    	<section class="row clearfix">
    		<?php dynamic_sidebar('Footer Widgets'); ?>
    	</section>
    <?php } ?>
	
	
	<section class="footer-wrap">
		<section class="row clearfix">
  			<div class="left"> &#169; <?php echo date('Y'); ?> 
  				<span class="url fn org">
    				<?php bloginfo('name'); ?>
    			</span> 
    			</div>
			<ul class="social right">			
				<li><a href="http://www.twitter.com/" title="twitterbird" target="_blank"><i class="fa fa-twitter"></i></a></li>
      			<li><a href="https://www.facebook.com/" title="facebook" target="_blank"><i class="fa fa-facebook"></i></a></li>
			</ul>
		</section>	
	</section>
</footer>

<?php wp_footer(); ?>


<script src="<?php bloginfo('template_url'); ?>/js/responsive.js"></script> 

</body>
</html>