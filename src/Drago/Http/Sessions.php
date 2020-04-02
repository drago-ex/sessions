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
 * Using sessions outside the presenter.
 */
class Sessions
{
	use SmartObject;

	/** @var string */
	private $namespace;

	/** @var Http\Session */
	private $session;


	public function __construct(Http\Session $session, $namespace)
	{
		$this->session = $session;
		$this->namespace = $namespace;
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
		return $this->session->getSection($this->namespace);
	}
}
