<?php

declare(strict_types = 1);

/**
 * Drago Extension
 * Package built on Nette Framework
 */

namespace Drago\Http;

use Nette\Http;
use Nette\SmartObject;


/**
 * Using session outside the presenter.
 */
class Session
{
	use SmartObject;

	/** @var string */
	private $section;

	/** @var Http\Session */
	private $session;


	public function __construct(Http\Session $session, string $section)
	{
		$this->session = $session;
		$this->section = $section;
	}


	/**
	 * Provides access to session sections as well as session settings and management methods.
	 */
	public function getSession(): Http\Session
	{
		return $this->session;
	}


	/**
	 * Returns specified session section.
	 */
	public function getSessionSection(): Http\SessionSection
	{
		return $this->session->getSection($this->section);
	}
}
