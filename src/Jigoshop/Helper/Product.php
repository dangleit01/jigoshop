<?php

namespace Jigoshop\Helper;

use Jigoshop\Entity\Product\StockStatus;
use Jigoshop\Entity\Product\Type\Simple;

class Product
{
	/**
	 * Formats price appropriately to the product type and returns a string.
	 *
	 * @param \Jigoshop\Entity\Product $product
	 * @return string
	 */
	public static function getPrice(\Jigoshop\Entity\Product $product)
	{
		switch($product->getType()){
			case Simple::TYPE:
				/** @var $product Simple */
				return $product->getPrice();
			default:
				return apply_filters('jigoshop\\helper\\product\\get_price', '', $product);
		}
	}

	/**
	 * Formats stock status appropriately to the product type and returns a string.
	 *
	 * @param \Jigoshop\Entity\Product $product
	 * @return string
	 */
	public static function getStock(\Jigoshop\Entity\Product $product)
	{
		switch($product->getType()){
			case Simple::TYPE:
				/** @var $product Simple */
				$status = $product->getStock()->getStatus() == StockStatus::IN_STOCK ?
					_x('In stock', 'product', 'jigoshop') :
					'<strong class="attention">'._x('Out of stock', 'product', 'jigoshop').'</strong>';
				return sprintf(_x('%s <strong>(%d)</strong>', 'product', 'jigoshop'), $status, $product->getStock()->getStock());
			default:
				return apply_filters('jigoshop\\helper\\product\\get_stock', '', $product);
		}
	}

	/**
	 * Gets thumbnail <img> tag for the product.
	 *
	 * @param \Jigoshop\Entity\Product $product
	 * @return string
	 */
	public static function getThumbnail(\Jigoshop\Entity\Product $product)
	{
//				if( 'trash' != $post->post_status ) {
//					echo '<a class="row-title" href="'.get_edit_post_link( $post->ID ).'">';
//					echo jigoshop_get_product_thumbnail( 'admin_product_list' );
//					echo '</a>';
//				}
//				else {
//					echo jigoshop_get_product_thumbnail( 'admin_product_list' );
//				}
		return '';
	}

	/**
	 * Formats stock status appropriately to the product type and returns a string.
	 *
	 * @param \Jigoshop\Entity\Product $product
	 * @return string
	 */
	public static function isFeatured(\Jigoshop\Entity\Product $product)
	{
//				$url = wp_nonce_url( admin_url('admin-ajax.php?action=jigoshop-feature-product&product_id=' . $post->ID) );
//				echo '<a href="'.esc_url($url).'" title="'.__('Change','jigoshop') .'">';
//				if ($product->is_featured()) echo '<a href="'.esc_url($url).'"><img src="'.jigoshop::assets_url().'/assets/images/head_featured_desc.png" alt="yes" />';
//				else echo '<img src="'.jigoshop::assets_url().'/assets/images/head_featured.png" alt="no" />';
//				echo '</a>';
	}
}