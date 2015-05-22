<?php
namespace Caffeinated\SEO\Handlers;

use Illuminate\Http\Request;

class Metadata
{
	/**
	 * @var string
	 */
	protected $title;

	/**
	 * @var string
	 */
	protected $description;

	/**
	 * @var array|string
	 */
	protected $keywords;

	/**
	 * @var array
	 */
	protected $miscellaneous;

	/**
	 * @var string
	 */
	protected $canonical;

	/**
	 * @var int
	 */
	protected $maxDescriptionLength = 160;

	/**
	 * @var Request
	 */
	protected $request;

	/**
	 * Create a new instance of the Metadata class.
	 *
	 * @param  Request  $request
	 */
	public function __construct(Request $request)
	{
		$this->request = $request;
	}

	/**
	 * Set the metadata title.
	 *
	 * @param  string  $title
	 * @return null
	 */
	public function setTitle($title)
	{
		$title = strip_tags($title);

		$this->title = $title;
	}

	/**
	 * Set the metadata description.
	 *
	 * @param  string  $description
	 * @return null
	 */
	public function setDescription($description)
	{
		$description = strip_tags($description);

		if (strlen($description) > $this->maxDescriptionLength) {
			$description = substr($description, 0, $this->maxDescriptionLength);
		}

		$this->description = $description;
	}

	/**
	 * Set the metadata keywords.
	 *
	 * @param  array|string  $keywords
	 * @return null
	 */
	public function setKeywords($keywords)
	{
		$this->keywords = implode(', ', (array) $keywords);
	}

	/**
	 * Set the canonical URL.
	 *
	 * @param  string  $url
	 * @return null
	 */
	public function setCanonical($url)
	{
		$this->canonical = $url;
	}

	/**
	 * Set miscellaneous metadata.
	 *
	 * @param  string  $name
	 * @param  string  $content
	 * @return null
	 */
	public function set($name, $content)
	{
		$content = strip_tags($content);

		$this->miscellaneous[$name] = $content;
	}

	/**
	 * Get the metadata title.
	 *
	 * @return string|null
	 */
	public function getTitle()
	{
		return $this->title ?: null;
	}

	/**
	 * Get the metadata description.
	 *
	 * @return string|null
	 */
	public function getDescription()
	{
		return $this->description ?: null;
	}

	/**
	 * Get the metadata keywords.
	 *
	 * @return string|null
	 */
	public function getKeywords()
	{
		return $this->keywords ?: null;
	}

	/**
	 * Get miscellaneous metadata.
	 *
	 * @return array|null
	 */
	public function getMiscellaneous()
	{
		return $this->miscellaneous ?: null;
	}

	/**
	 * Get the canonical URL.
	 *
	 * @return string
	 */
	public function getCanonical()
	{
		return $this->canonical ?: null;
	}

	/**
	 * Reset all metadata.
	 *
	 * @return void
	 */
	public function reset()
	{
		$this->title         = null;
		$this->description   = null;
		$this->keywords      = null;
		$this->miscellaneous = null;
		$this->canonical     = null;
	}

	/**
	 * Generate and render the HTML metadata tags.
	 *
	 * @return string
	 */
	public function generate()
	{
		$title         = $this->getTitle();
		$description   = $this->getDescription();
		$keywords      = $this->getKeywords();
		$miscellaneous = $this->getMiscellaneous();
		$canonical     = $this->getCanonical();

		$html[] = '<title>'.$title.'</title>'.PHP_EOL;

		if (! is_null($description)) {
			$html[] = '<meta name="description" content="'.$description.'">';
		}

		if (! is_null($keywords)) {
			$html[] = '<meta name="keywords" content="'.$keywords.'">';
		}

		if (! is_null($miscellaneous)) {
			foreach ($miscellaneous as $name => $content) {
				$html[] = '<meta name="'.$name.'" content="'.$content.'">';
			}
		}

		if (! is_null($canonical)) {
			$currentUrl = $this->request->fullUrl();

			if ($canonical != $currentUrl) {
				$html[] = PHP_EOL.'<link rel="canonical" href="'.$canonical.'">';
			}
		}

		return implode(PHP_EOL, $html);
	}
}
