<?php
/**
 * Contextual Help
 *
 * @package     RPRESS
 * @subpackage  Admin/Settings
 * @copyright   Copyright (c) 2018, Magnigenie
 * @license     http://opensource.org/licenses/gpl-2.0.php GNU Public License
 * @since  1.0.0
 */

// Exit if accessed directly
if ( ! defined( 'ABSPATH' ) ) exit;

/**
 * Settings contextual help.
 *
 * @access      private
 * @since  1.0.0
 * @return      void
 */
function rpress_settings_contextual_help() {
	$screen = get_current_screen();

	if ( $screen->id != 'fooditem_page_rpress-settings' )
		return;

	$screen->set_help_sidebar(
		'<p><strong>' . sprintf( __( 'For more information:', 'restro-press' ) . '</strong></p>' .
		'<p>' . sprintf( __( 'Visit the <a href="%s">documentation</a> on the RestroPress website.', 'restro-press' ), esc_url( 'http://restropress.magnigenie.com' ) ) ) . '</p>' 
	);

	$screen->add_help_tab( array(
		'id'	    => 'rpress-settings-general',
		'title'	    => __( 'General', 'restro-press' ),
		'content'	=> '<p>' . __( 'This screen provides the most basic settings for configuring your store. You can set the currency, page templates, and turn <em>Test Mode</em> on and off.', 'restro-press' ) . '</p>'
	) );

	$screen->add_help_tab( array(
		'id'	    => 'rpress-settings-payment-gateways',
		'title'	    => __( 'Payment Gateways', 'restro-press' ),
		'content'	=>
			'<p>' . __( 'This screen provides ways to toggle payment gateways on or off, as well as configure gateway-specific settings. Any extra payment gateway extensions you have installed will appear on this page, and can be configured to suit your needs.', 'restro-press' ) . '</p>' .
			'<p>' . __( '<strong>Test Payment</strong> - This included gateway is great for testing your store, as it requires no payment, and leads straight to product fooditems. However, please remember to turn it off once your site is live!', 'restro-press' ) . '</p>' .
			'<p>' . __( '<strong>PayPal</strong> - A PayPal payment gateway is included as standard with RestroPress. To test the PayPal gateway, you need a Sandbox account for PayPal and the site must be placed in Test Mode from the General settings tab. Please remember to enter your PayPal account email address in order for payments to get processed.', 'restro-press' ) . '</p>'.
			'<p>'. __( '<strong>Cash On Delivery</strong> Collect payment on delivery')
	) );

	$screen->add_help_tab( array(
		'id'	    => 'rpress-settings-emails',
		'title'	    => __( 'Emails', 'restro-press' ),
		'content'	=>
			'<p>' . __( "This screen allows you to customize how emails act throughout your store. You can choose a premade template, set the sender's name, email address, and subject.", 'restro-press' ) . '</p>' .
			'<p>' . __( 'A set of email tags has also been provided to allow the creation of personalized emails. A tag consists of a keyword surrounded by curly braces: <code>{tag}</code>. A description of each of these tags appears below the editor.', 'restro-press' ) . '</p>'
	) );

	$screen->add_help_tab( array(
		'id'	    => 'rpress-settings-styles',
		'title'	    => __( 'Styles', 'restro-press' ),
		'content'	=> '<p>' . __( "This screen allows customization of your store's styles. For complete control, you can completely disable all styles generated by the plugin.", 'restro-press' ) . '</p>'
	) );

	$screen->add_help_tab( array(
		'id'	    => 'rpress-settings-taxes',
		'title'	    => __( 'Taxes', 'restro-press' ),
		'content'	=>
			'<p>' . __( 'This screen allows you to configure the tax rules for your store.', 'restro-press' ) . '</p>' .
			'<p>' . __( 'If you do not wish to charge any tax on purchase, simply leave the Enable Taxes option unchecked.', 'restro-press' ) . '</p>' .
			'<p>' . __( '<strong>Default Tax Rate</strong>: The default tax rate is the tax rate charged to customers located in your base country / state or province.', 'restro-press' ) . '</p>' .
			'<p>' . __( '<strong>Base Country</strong>: This determines the country that is loaded by default on the checkout screen for customers that do not have an address stored in their account.', 'restro-press' ) . '</p>' .
			'<p>' . __( '<strong>Base State / Province</strong>: This determines the state / province that is loaded by default on the checkout screen for customers that do not have an address stored in their account.', 'restro-press' ) . '</p>' .
			'<p>' . __( '<strong>Prices Entered with Tax</strong>: if enabled, this means that the price entered on the product edit screens is the total amount the customer will pay after taxes. For example, if enabled and the price of a product is $20, the customer will pay 20$ at checkout. The exact amount charged in tax will be calculated automatically.', 'restro-press' ) . '</p>' .
			'<p>' . __( '<strong>Display Tax Rate on Prices</strong>: when enabled, the amount the customer is expected to pay in tax will be displayed below purchase buttons.', 'restro-press' ) . '</p>' .
			'<p>' . __( '<strong>Display During Checkout</strong>: This determines whether prices are shown with taxes or without taxes on checkout. If set to Including Tax, a $10 product with a 10% tax will be shown as $11.', 'restro-press' ) . '</p>' .
			'<p>' . __( '<strong>Calculate Tax After Discounts</strong>: If enabled, this option will make it so that tax is calculated on the after-discount amount. If a purchase of $20 is made and a 20% discount is applied, tax will be calculated off of $16 instead of $20.', 'restro-press' ) . '</p>' .
			'<p>' . __( '<strong>Additional Tax Rates</strong>: This section lets you add tax rates for specific countries and/or states/provinces in those countries.', 'restro-press' ) . '</p>'
	) );

	do_action( 'rpress_settings_contextual_help', $screen );
}
add_action( 'load-fooditem_page_rpress-settings', 'rpress_settings_contextual_help' );
