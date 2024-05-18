<?php

namespace Omniletter\\\\Integration\\\\Providers;

use Plenty\\\\Plugin\\\\ServiceProvider;
use Plenty\\\\Plugin\\\\Events\\\\Dispatcher;

class OmniletterServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->getApplication()->register(RouteServiceProvider::class);
    }

    public function boot(Dispatcher $dispatcher)
    {
        // Boot methods
    }
}
