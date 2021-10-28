<?php
namespace HinterweltGoogleTagManager\Subscriber;

use Enlight\Event\SubscriberInterface;
use Enlight_Controller_ActionEventArgs;
use HinterweltGoogleTagManager\Components\ConfigProvider;

class FrontendSubscriber implements SubscriberInterface {
    public static function getSubscribedEvents() {
        return [
            'Enlight_Controller_Action_PostDispatchSecure_Frontend' => 'onPostDispatchFrontend'
        ];
    }

    private $configProvider;

    public function __construct(ConfigProvider $configProvider) {
        $this->configProvider = $configProvider;
    }

    public function onPostDispatchFrontend(Enlight_Controller_ActionEventArgs $args) {
        $config = $this->configProvider->get();
        $view = $args->getSubject()->View();

        $view->assign('hinterweltGoogleTagManager', [
            'gtmID' => $config['hinterwelt_gtm_id']
        ]);
    }
}