<?php
namespace HinterweltGoogleTagManager\Components;

use Shopware\Models\Shop\Shop;

class ShopProvider {
    private $container;

    public function __construct() {
        $this->container = Shopware()->Container();
    }

    public function get(): Shop {
        if($this->container->initialized('shop')) {
            return $this->container->get('shop');
        }

        return $this->container
            ->get('models')
            ->getRepository(Shop::class)
            ->getActiveDefault()
        ;
    }
}
