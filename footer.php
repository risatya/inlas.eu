<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the id=main div and all content after
 *
 * @package web2feel
 */
?>

	</div><!-- #content -->

	<div id="bottom">
		<div class="container">
			<div class="row">

			<?php if ( !function_exists('dynamic_sidebar')
			        || !dynamic_sidebar("Footer") ) : ?>
			<?php endif; ?>


			</div>
		</div>
	</div>


<footer id="colophon" class="site-footer" role="contentinfo">
	<div class="container">
		<div class="site-info wrap row">
			<div class="fcred-left col-6">
				Copyright &copy; 2012 <a href="http://smartdesigner.eu" title="smartdesigner">Smartdesigner</a> | All Rights Reserved
			</div>
			<div class="fcred-right col-6">
				<a data-toggle="tab" href="#sectionE">Privacy</a>
			</div>
		</div><!-- .site-info -->
	</div>
</footer><!-- #colophon .site-footer -->

</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
