<?php

declare(strict_types=1);

/**
 * Drago Extension
 * Package built on Nette Framework
 */

namespace Drago\Http;

use Nette\Http\Session;
use Nette\Http\SessionSection;
use Nette\SmartObject;


/**
 * Using session outside the presenter.
 */
class ExtraSession
{
	use SmartObject;

	public function __construct(
		private Session $session,
		private string $section,
	) {
	}


	/**
	 * Provides access to session sections as well as session settings and management methods.
	 */
	public function getSession(): Session
	{
		return $this->session;
	}


	/**
	 * Returns specified session section.
	 */
	public function getSessionSection(): SessionSection
	{
		return $this->session->getSection($this->section);
	}
}
