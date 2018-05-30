<?php

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
	 * @return Http\Session
	 */
	public function getSession()
	{
		return $this->session;
	}

	/**
	 * Getting sessions section by namespace.
	 * @return Http\SessionSection
	 */
	public function getSessionSection()
	{
		return $this->session->getSection($this->namespace);
	}

}
