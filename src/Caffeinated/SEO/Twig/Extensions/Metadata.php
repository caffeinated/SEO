<?php
namespace Caffeinated\SEO\Twig\Extensions;

use Twig_Extension;
use Twig_SimpleFunction;

class Metadata extends Twig_Extension
{
	/**
	 * Returns the name of the extension.
	 *
	 * @return string The extension name
	 */
	public function getName()
	{
		return 'Caffeinated_SEO_Extension_Metadata';
	}

	/**
	 * Returns a list of global functions to add to the existing list.
	 *
	 * @return array An array of global functions
	 */
	public function getFunctions()
	{
		return [
			new Twig_SimpleFunction('meta_generate', function() {
				return \Meta::generate();
			}, ['is_safe' => ['html']]),
		];
	}
}
