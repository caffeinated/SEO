<?php
namespace Caffeinated\SEO\Facades;

use Illuminate\Support\Facades\Facade;

class Metadata extends Facade
{
	/**
	 * Get the registered name of the component.
	 *
	 * @return string
	 */
	protected static function getFacadeAccessor()
	{
		return 'caffeinated.seo.metadata';
	}
}
