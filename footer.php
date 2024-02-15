<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package woocommerce_theme
 */

?>
	<footer id="colophon" class="site-footer">
		<div class="bg-primary text-white pt-5 pb-5">
			<div class="container">
				<div class="row">
					<div class="col-2">
						<?php dynamic_sidebar( 'footer_col_one' ); ?> 
					</div>

					<div class="col-2">
						<?php dynamic_sidebar( 'footer_col_two' ); ?> 
					</div>

					<div class="col-md-4 ms-auto">
						<h3>Keep in touch</h3>
						<?php dynamic_sidebar( 'footer_col_three' ); ?> 
					</div>
				</div>
			</div>
		</div>

		<div class="container pb-2 pt-2">
			<div class="row d-flex align-items-center">
				<div class="col">
					<p>&copy; <?php bloginfo( 'name' ); ?> <?php echo date('Y') ?> created by <a href="google.com" target="_blank" rel="noopener noreferrer">Trọng Nhân Dev</a></p>
				</div>
			</div>
		</div>
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
