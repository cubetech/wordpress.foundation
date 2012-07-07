			<footer role="contentinfo">
			
				<div id="inner-footer" class="row">
					<nav class="six columns offset-by-six clearfix">
						<?php bones_footer_links(); ?>
					</nav>
				</div>
				
				<div class="panel">
				<div class="row">
					<p class="attribution two columns offset-by-ten"><a href="http://320press.com" id="credit320" class="hide-on-phones" title="By the dudes of 320press">320press</a></p>
				</div>
			</div>
					
			</footer> <!-- end footer -->
		
		</div> <!-- end #container -->
		
		<!-- scripts are now optimized via Modernizr.load -->	
		<script src="<?php echo get_template_directory_uri(); ?>/library/js/scripts.js"></script>

		<!-- Included JS Files -->
		<script src="<?php echo get_template_directory_uri(); ?>/javascripts/jquery.min.js"></script>
		<script src="<?php echo get_template_directory_uri(); ?>/javascripts/foundation/jquery.reveal.js"></script>
		<script src="<?php echo get_template_directory_uri(); ?>/javascripts/foundation/jquery.orbit-1.4.0.js"></script>
		<script src="<?php echo get_template_directory_uri(); ?>/javascripts/foundation/jquery.customforms.js"></script>
		<script src="<?php echo get_template_directory_uri(); ?>/javascripts/foundation/jquery.placeholder.min.js"></script>
		<script src="<?php echo get_template_directory_uri(); ?>/javascripts/foundation/jquery.tooltips.js"></script>
		<script src="<?php echo get_template_directory_uri(); ?>/javascripts/app.js"></script>
		
		<!--[if lt IE 7 ]>
  			<script src="//ajax.googleapis.com/ajax/libs/chrome-frame/1.0.3/CFInstall.min.js"></script>
  			<script>window.attachEvent('onload',function(){CFInstall.check({mode:'overlay'})})</script>
		<![endif]-->
		
		<?php wp_footer(); // js scripts are inserted using this function ?>

	</body>

</html>