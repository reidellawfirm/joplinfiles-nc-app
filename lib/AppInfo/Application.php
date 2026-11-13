<?php
declare(strict_types=1);

namespace OCA\JoplinFiles\AppInfo;

use OCA\JoplinFiles\Listener\LoadAdditionalScripts;
use OCA\JoplinFiles\Search\JoplinSearchProvider;
use OCA\Files\Event\LoadAdditionalScriptsEvent;
use OCP\AppFramework\App;
use OCP\AppFramework\Bootstrap\IBootContext;
use OCP\AppFramework\Bootstrap\IBootstrap;
use OCP\AppFramework\Bootstrap\IRegistrationContext;

class Application extends App implements IBootstrap {
    public const APP_ID = 'joplinfiles_nc_app';

    public function __construct() {
        parent::__construct(self::APP_ID);
    }

    public function register(IRegistrationContext $context): void {
        $context->registerEventListener(
            LoadAdditionalScriptsEvent::class,
            LoadAdditionalScripts::class
        );
        $context->registerSearchProvider(JoplinSearchProvider::class);
    }

    public function boot(IBootContext $context): void {}
}
