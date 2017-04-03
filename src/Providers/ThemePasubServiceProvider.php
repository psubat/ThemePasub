<?php

namespace CeresHipster\Providers;

use IO\Extensions\Functions\Partial;
use IO\Helper\CategoryKey;
use IO\Helper\CategoryMap;
use IO\Helper\TemplateContainer;
use Plenty\Plugin\ServiceProvider;
use Plenty\Plugin\Templates\Twig;
use Plenty\Plugin\Events\Dispatcher;
use Plenty\Plugin\ConfigRepository;
use IO\Helper\ComponentContainer;


class CeresHipsterServiceProvider extends ServiceProvider
{
    const EVENT_LISTENER_PRIORITY = 99;
    /**
     * Register the service provider.
     */

    public function register() {

    }

    public function boot(Twig $twig, Dispatcher $eventDispatcher)
    {
        $eventDispatcher->listen('IO.init.templates', function (Partial $partial) {
					$partial->set('head', 'ThemePasub::PageDesign.Partials.Head');
					//$partial->set('header', 'ThemePasub::PageDesign.Partials.Header.Header');
					$partial->set('footer', 'ThemePasub::PageDesign.Partials.ThemeFooter');
					$partial->set('page-design', 'ThemePasub::PageDesign.PageDesign');

        }, self::EVENT_LISTENER_PRIORITY);
    }
}
