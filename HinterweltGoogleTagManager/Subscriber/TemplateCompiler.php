<?php
namespace HinterweltGoogleTagManager\Subscriber;

use Enlight\Event\SubscriberInterface;
use Enlight_Template_Manager;

class TemplateCompiler implements SubscriberInterface {
    public static function getSubscribedEvents() {
        return [
            'Enlight_Controller_Action_PreDispatch' => 'onPreDispatch'
        ];
    }

    private $_pluginDirectory;
    private $_templateManager;

    public function __construct(string $pluginDirectory, Enlight_Template_Manager $templateManager) {
        $this->_pluginDirectory = $pluginDirectory;
        $this->_templateManager = $templateManager;
    }

    public function onPreDispatch() {
        $this->_templateManager->addTemplateDir($this->_pluginDirectory . '/Resources/views');
    }
}
