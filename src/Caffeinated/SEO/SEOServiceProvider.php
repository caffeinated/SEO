<?php
namespace Caffeinated\SEO;

use Illuminate\Support\ServiceProvider;

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
		$this->app->singleton('caffeinated.seo.metadata', function() {
			return new Handlers\Metadata;
		});
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
