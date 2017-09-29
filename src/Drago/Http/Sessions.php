<?php

/**
 * Extension Nette
 * Copyright (c) 2015, Zdeněk Papučík
 */
namespace Drago\Http;

use Nette;
use Nette\Http;

/**
 * Použití sessions mimo presenter.
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
	 * @return Http\Session
	 */
	public function getSession()
	{
		return $this->session;
	}

	/**
	 * @param string
	 * @return Http\SessionSection
	 */
	public function getSessionSection()
	{
		return $this->session->getSection($this->namespace);
	}

}
