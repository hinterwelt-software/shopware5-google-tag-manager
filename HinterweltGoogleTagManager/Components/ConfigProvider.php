<?php
namespace HinterweltGoogleTagManager\Components;

use Shopware\Components\Plugin\ConfigReader;

class ConfigProvider {
    private $configReader;
    private $pluginName;
    private $shopProvider;

    public function __construct(
        string $pluginName,
        ConfigReader $configReader,
        ShopProvider $shopProvider
    ) {
        $this->configReader = $configReader;
        $this->pluginName = $pluginName;
        $this->shopProvider = $shopProvider;
    }

    public function get(): array {
        return $this->configReader->getByPluginName(
            $this->pluginName,
            $this->shopProvider->get()
        );
    }
}
