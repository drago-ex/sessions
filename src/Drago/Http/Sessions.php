<?php

/**
 * Extending for Nette Framework.
 * Copyright (c) 2015, Zdeněk Papučík
 */
namespace Drago\Http;

use Nette;
use Nette\Http;

/**
 * Use of sessions outside presenter.
 * @author Zdeněk Papučík
 */
class Sessions
{
	use Nette\SmartObject;

	/**
	 * @var Http\Session
	 */
	public $session;

	/**
	 * @var Http\SessionSection
	 */
	public $sessionSection;

	public function __construct(Http\Session $session, $section = NULL)
	{
		$this->session = $session;
		if (isset($section)) {
			$this->sessionSection = $this->session->getSection($section);
		}
	}

	/**
	 * @param  string
	 * @return Http\SessionSection
	 */
	public function getSessionSection($section = NULL)
	{
		if (isset($section)) {
			$this->sessionSection = $this->session->getSection($section);
		}
		return $this->sessionSection;
	}

}
