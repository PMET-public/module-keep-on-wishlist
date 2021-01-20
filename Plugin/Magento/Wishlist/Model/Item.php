<?php
/**
 * Copyright ©  Adobe Inc, All rights reserved.
 */

declare(strict_types=1);

namespace MagentoEse\KeepInWishlist\Plugin\Magento\Wishlist\Model;

use Magento\Checkout\Model\Cart;
use Magento\Wishlist\Model\Item as WishlistItem;
use Magento\Framework\App\Config\ScopeConfigInterface;

class Item
{
    /** @var ScopeConfigInterface */
    protected $scopeConfig;

    public function __construct(ScopeConfigInterface $scopeConfigInterface)
    {
        $this->scopeConfig = $scopeConfigInterface;
    }
    
    /**
     * @param WishlistItem $item
     * @param  Cart $cart
     * @return array
     */
    public function beforeAddToCart(WishlistItem $item, Cart $cart)
    {
        //false = keep on wishlist
        return [$cart, $this->getConfig('wishlist/general/keep_items_on_wishlists')];
    }

    private function getConfig($config_path)
    {
        return !$this->scopeConfig->getValue(
                $config_path,
                \Magento\Store\Model\ScopeInterface::SCOPE_STORE
                );
    }
}
