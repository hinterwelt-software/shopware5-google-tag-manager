<?php
namespace HinterweltGoogleTagManager;

use Exception;
use Shopware\Components\Plugin;
use Shopware\Components\Plugin\Context\ActivateContext;
use Shopware\Components\Plugin\Context\DeactivateContext;
use Shopware\Components\Plugin\Context\InstallContext;
use Shopware\Components\Plugin\Context\UninstallContext;

class HinterweltGoogleTagManager extends Plugin {
    /**
     * @throws Exception
     */
    public function install(InstallContext $context) {}

    public function activate(ActivateContext $context) {
        $context->scheduleClearCache(InstallContext::CACHE_LIST_ALL);
    }

    public function deactivate(DeactivateContext $context) {
        $context->scheduleClearCache(InstallContext::CACHE_LIST_ALL);
    }

    /**
     * @throws Exception
     */
    public function uninstall(UninstallContext $context) {
        $context->scheduleClearCache(InstallContext::CACHE_LIST_ALL);
    }
}
