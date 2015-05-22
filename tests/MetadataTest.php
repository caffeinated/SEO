<?php

use Caffeinated\SEO\Handlers\Metadata;

class MetadataTest extends PHPUnit_Framework_TestCase
{
	/**
	 * @var Metadata
	 */
	protected $metadata;

	/**
	 * @var Request
	 */
	protected $request;

	/**
	 * Set up test case.
	 *
	 * @return void
	 */
	public function setUp()
	{
		$this->request  = Mockery::mock('Illuminate\Http\Request');
		$this->metadata = new Metadata($this->request);
	}

	/** @test */
	public function can_generate()
	{

	}
}
