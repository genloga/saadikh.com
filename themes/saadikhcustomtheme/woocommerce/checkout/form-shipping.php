<?php
/**
 * Checkout shipping information form
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/checkout/form-shipping.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @author  WooThemes
 * @package WooCommerce/Templates
 * @version 2.2.0
 */
if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly
}
?>
    <?php if ( true === WC()->cart->needs_shipping_address() ) : ?>

        <h3 id="ship-to-different-address">
            <label class="checkbox-entry">
                <input id="ship-to-different-address-checkbox" class="input-checkbox" <?php checked( apply_filters( 'woocommerce_ship_to_different_address_checked', 'shipping' === get_option( 'woocommerce_ship_to_destination' ) ? 1 : 0 ), 1 ); ?> type="checkbox" name="ship_to_different_address" value="1" />
                <span class="check"></span> <?php _e( 'Ship to a different address?', 'woocommerce' ); ?>
            </label>

        </h3>

        <div class="row shipping_address">

            <?php do_action( 'woocommerce_before_checkout_shipping_form', $checkout ); ?>

            <?php foreach ( $checkout->checkout_fields['shipping'] as $key => $field ) : ?>

                <div class="col-sm-6">
                    <?php
                    if ($field["type"] == 'country') {
                        $field["class"] = array(" simple-drop-down simple-field");

                        echo "<label>" . $field['label'] . "</label>";

                        $field["label"] = false;
                    } else {
                        $field["input_class"] = array("simple-field");
                    }

                    woocommerce_form_field($key, $field, $checkout->get_value($key));
                    ?>

                </div>


            <?php endforeach; ?>

            <?php do_action( 'woocommerce_after_checkout_shipping_form', $checkout ); ?>

        </div>

    <?php endif; ?>
    <div class="spacer"></div>
    <div class="information-entry">
        <?php do_action( 'woocommerce_before_order_notes', $checkout ); ?>

        <?php if ( apply_filters( 'woocommerce_enable_order_notes_field', get_option( 'woocommerce_enable_order_comments', 'yes' ) === 'yes' ) ) : ?>

            <?php if ( ! WC()->cart->needs_shipping() || wc_ship_to_billing_address_only() ) : ?>

                <h3 class="cart-column-title"><?php _e( 'Additional Information', 'woocommerce' ); ?></h3>

            <?php endif; ?>

            <?php foreach ( $checkout->checkout_fields['order'] as $key => $field ) : ?>

                <?php $field["input_class"] = array("simple-field"); woocommerce_form_field( $key, $field, $checkout->get_value( $key ) ); ?>

            <?php endforeach; ?>

        <?php endif; ?>

        <?php do_action( 'woocommerce_after_order_notes', $checkout ); ?>
    </div>

