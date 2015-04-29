<?php
/**
 * My Account page
 *
 * @author 		WooThemes
 * @package 	WooCommerce/Templates
 * @version     2.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

wc_print_notices(); ?>

<p class="myaccount_user">
	<?php
	printf(
		__( 'Hello <strong>%1$s</strong> (not %1$s? <a href="%2$s">Sign out</a>).', 'woocommerce' ) . ' ',
		$current_user->display_name,
		wc_get_endpoint_url( 'customer-logout', '', wc_get_page_permalink( 'myaccount' ) )
	);

	
	?>
</p>

<?php do_action( 'woocommerce_before_my_account' ); ?>


<?php wc_get_template( 'myaccount/my-orders.php', array( 'order_count' => $order_count ) ); ?>


<?php do_action( 'woocommerce_after_my_account' ); ?>