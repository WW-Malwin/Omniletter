<?php

namespace Omniletter\\\\Integration\\\\Providers;

use Plenty\\\\Plugin\\\\RouteServiceProvider as ServiceProvider;
use Plenty\\\\Plugin\\\\Routing\\\\Router;

class RouteServiceProvider extends ServiceProvider
{
    public function map(Router $router)
    {
        $router->get("omniletter/settings", "Omniletter\\\\Integration\\\\Controllers\\\\SettingsController@showSettings")->name("omniletter.settings");
        $router->post("omniletter/settings/save", "Omniletter\\\\Integration\\\\Controllers\\\\SettingsController@saveSettings")->name("omniletter.settings.save");
        $router->post("omniletter/sync", "Omniletter\\\\Integration\\\\Controllers\\\\SettingsController@syncContacts")->name("omniletter.sync.contacts");
        $router->get("omniletter/sync", "Omniletter\\\\Integration\\\\Controllers\\\\SettingsController@showSync")->name("omniletter.sync");
        $router->get("omniletter/newsletter", "Omniletter\\\\Integration\\\\Controllers\\\\SettingsController@showNewsletter")->name("omniletter.newsletter");
        $router->post("omniletter/newsletter/send", "Omniletter\\\\Integration\\\\Controllers\\\\SettingsController@sendNewsletter")->name("omniletter.send.newsletter");
    }
}
