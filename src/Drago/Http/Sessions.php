<?php

declare(strict_types = 1);

/**
 * Drago Extension
 * Package built on Nette Framework
 */

namespace Drago\Http;

use Nette\Http\Session;
use Nette\Http\SessionSection;
use Nette\SmartObject;


/**
 * Using sessions outside the presenter.
 */
class Sessions
{
	use SmartObject;

	/** @var string */
	private $namespace;

	/** @var Session */
	private $session;


	public function __construct(Session $session, $namespace)
	{
		$this->session = $session;
		$this->namespace = $namespace;
	}


	/**
	 * Getting sessions.
	 */
	public function getSession(): Session
	{
		return $this->session;
	}


	/**
	 * Getting sessions section by namespace.
	 */
	public function getSessionSection(): SessionSection
	{
		return $this->session->getSection($this->namespace);
	}
}
