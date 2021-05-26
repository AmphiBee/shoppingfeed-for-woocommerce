<?php

namespace ShoppingFeed\ShoppingFeedWC\Addons;

// Exit on direct access
defined( 'ABSPATH' ) || exit;

use ShoppingFeed\ShoppingFeedWC\Addons\Inventory\Inventory;
use ShoppingFeed\ShoppingFeedWC\Addons\Marketplaces\Marketplaces;
use ShoppingFeed\ShoppingFeedWC\Addons\Plugins\ASTPlugin\ASTPlugin;
use ShoppingFeed\ShoppingFeedWC\Addons\Plugins\ChainedProductsPlugin\ChainedProducts;
use ShoppingFeed\ShoppingFeedWC\Addons\Shipping\Shipping;

class Addons {

	/**
	 * Shipping class
	 * @var Shipping
	 */
	private $shipping;

	/**
	 * Shipping class
	 * @var Inventory
	 */
	private $inventory;

	/**
	 * Shipping class
	 * @var Marketplaces
	 */
	private $marketplaces;

	/**
	 * Shipping class
	 * @var ChainedProducts
	 */
	private $chained_products_plugin;

	/**
	 * Shipping class
	 * @var ASTPlugin
	 */
	private $ast_plugin;

	public function __construct() {
		$this->shipping                = new Shipping();
		$this->inventory               = new Inventory();
		$this->marketplaces            = new Marketplaces();
		$this->chained_products_plugin = new ChainedProducts();
		$this->ast_plugin              = new ASTPlugin();
	}
}
