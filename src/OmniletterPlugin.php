<?php

namespace Omniletter;

use Plenty\Modules\Plugin\Plugin;
use Plenty\Modules\Cron\Services\CronContainer;
use Plenty\Plugin\Events\Dispatcher;

class OmniletterPlugin extends Plugin
{
    public function registerCron(CronContainer $container)
    {
        // Registriere Cron-Jobs, falls erforderlich
    }

    public function boot(Dispatcher $eventDispatcher)
    {
        // Registriere Event-Handler, falls erforderlich
    }

    public function install()
    {
        // Installationslogik
    }

    public function uninstall()
    {
        // Deinstallationslogik
    }
}