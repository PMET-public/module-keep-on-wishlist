# MagentoEse_KeepOnWishlist


## Function
The default Wish List funcionality removes items from a Wish List when the are added to the cart. This module adds an admin configuration option that will allow those items to remain on a Wish List after they are added to cart.

## Installation

 - Add the composer repository to the configuration by running `composer config repositories.wishlist git https://github.com/PMET-public/module-keep-on-wishlist.git;`
 - Install the module composer by running `composer require magentoese/module-keep-on-nwishlist`
 - enable the module by running `php bin/magento module:enable MagentoEse_KeepInWishlist` or by running `php bin/magento setup:upgrade`
 - Flush the cache by running `php bin/magento cache:flush`


## Configuration

 - Turn on the functionaly in the store admin by setting *Stores->Configuration->Customers->Wish List->General Options->Keep Items on Wish Lists* to **Yes**
