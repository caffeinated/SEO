<?php
namespace Caffeinated\SEO;

use Illuminate\Support\ServiceProvider;
use Caffeinated\SEO\Handlers\Metadata;

class SEOServiceProvider extends ServiceProvider
{
	/**
	 * Indicates if loading of the provider is deferred.
	 *
	 * @var bool
	 */
	protected $defer = false;

	/**
	 * Perform post-registration booting of services.
	 *
	 * @return void
	 */
	public function boot()
	{
		//
	}

	/**
	 * Register bindings in the container.
	 *
	 * @return void
	 */
	public function register()
	{
		$this->registerServices();

		$this->configureSapling();
	}

	/**
	 * Register the package services.
	 *
	 * @return void
	 */
	protected function registerServices()
	{
		$this->app->singleton('caffeinated.seo.metadata', function($app) {
			return new Metadata($app['request']);
		});
	}

	/**
	 * Configure Sapling
	 *
	 * Configures Sapling (Twig) extensions if the Sapling package
	 * is found to be installed.
	 *
	 * @return void
	 */
	protected function configureSapling()
	{
		if ($this->app['config']->has('sapling')) {
			$this->app['config']->push(
				'sapling.extensions',
				'Caffeinated\SEO\Twig\Extensions\Metadata'
			);
		}
	}

	/**
	 * Get the services provided by the provider.
	 *
	 * @return array
	 */
	public function provides()
	{
		return [
			'caffeinated.metadata'
		];
	}
}
