	</section><!--/main-->
	<div class="push"></div>
</section><!--/container-->


	<ul class="social">			
		<li><a href="http://www.twitter.com/" title="Twitter" target="_blank"><i class="fa fa-twitter"></i></a></li>
		<li><a href="http://www.facebook.com/" title="Facebook" target="_blank"><i class="fa fa-facebook"></i></a></li>
	</ul>

	

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
				<li><a href="http://www.twitter.com/" title="twitter" target="_blank"><i class="fa fa-twitter"></i></a></li>
      			<li><a href="https://www.facebook.com/" title="facebook" target="_blank"><i class="fa fa-facebook"></i></a></li>
			</ul>
		</section>	
	</section>
</footer>

<?php wp_footer(); ?>


<script src="<?php bloginfo('template_url'); ?>/js/responsive.js"></script> 

</body>
</html>