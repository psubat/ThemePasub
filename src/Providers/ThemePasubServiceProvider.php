<?php

namespace ThemePasub\Providers;

use IO\Extensions\Functions\Partial;
use IO\Helper\CategoryKey;
use IO\Helper\CategoryMap;
use IO\Helper\TemplateContainer;
use Plenty\Plugin\ServiceProvider;
use Plenty\Plugin\Templates\Twig;
use Plenty\Plugin\Events\Dispatcher;
use Plenty\Plugin\ConfigRepository;

class ThemePasubServiceProvider extends ServiceProvider
{

	/**
	 * Register the service provider.
	 */
	public function register(){}

	/**
 * Boot a template for the footer that will be displayed in the template plugin instead of the original footer.
 */
	public function boot(Twig $twig, Dispatcher $eventDispatcher)
	{

		$eventDispatcher->listen('IO.init.templates', function (Partial $partial) {
				$partial->set('head', 'ThemePasub::PageDesign.Partials.Head');
				//$partial->set('header', 'ThemePasub::PageDesign.Partials.Header.Header');
				$partial->set('footer', 'ThemePasub::PageDesign.Partials.ThemeFooter');
				$partial->set('page-design', 'ThemePasub::PageDesign.PageDesign');
			}, 1);
	}
}
