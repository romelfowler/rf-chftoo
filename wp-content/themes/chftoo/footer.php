<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package CHFtoo
 */

?>
<!-- FOOTER
==================================================== -->
<footer id="footer">
<div class="container">
	<div class="row">
		<div class="col-sm-12">

		</div>
	</div>
</div>
</footer>

<?php wp_footer(); ?>

<!-- SCRIOPT
==================================================== -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
	<script src="<?php bloginfo('template_directory')?>/assets/js/cbpHorizontalMenu.min.js"></script>
	<script>
		$(function() {
			cbpHorizontalMenu.init();
		});
	</script>
</body>
</html>



</body>
</html>
