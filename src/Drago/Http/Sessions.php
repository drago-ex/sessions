<?php

declare(strict_types = 1);

/**
 * Drago Sessions
 * Copyright (c) 2015, Zdeněk Papučík
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

	/**
	 * @var string
	 */
	private $namespace;

	/**
	 * @var Http\Session
	 */
	private $session;


	public function __construct(Http\Session $session, $namespace)
	{
		$this->session   = $session;
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
