<?php

declare(strict_types = 1);

/**
 * Drago Extension
 * Package built on Nette Framework
 */

namespace Drago\Http;

use Nette;
use Nette\Http;


/**
 * Using sessions outside the presenter.
 */
class Sessions
{
	use Nette\SmartObject;

	/** @var string */
	private $section;

	/** @var Http\Session */
	private $session;


	public function __construct(Http\Session $session, $section)
	{
		$this->session = $session;
		$this->section = $section;
	}


	/**
	 * Getting sessions.
	 */
	public function getSession(): Http\Session
	{
		return $this->session;
	}


	/**
	 * Getting sessions section by namespace.
	 */
	public function getSessionSection(): Http\SessionSection
	{
		return $this->session->getSection($this->section);
	}
}
