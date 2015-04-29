<?php
/**
 * Template Name: Dashboard
 */
?>
<p class="myaccount_user">
	<?php
	printf(
		__( 'Hello <strong>%1$s</strong> (not %1$s? <a href="%2$s">Sign out</a>).', 'woocommerce' ) . ' ',
		$current_user->display_name,
		wc_get_endpoint_url( 'customer-logout', '', wc_get_page_permalink( 'myaccount' ) )
	);

	?>
</p>

<?php while (have_posts()) : the_post(); ?>

  <?php get_template_part('templates/content', 'page'); ?>
<?php endwhile; ?>