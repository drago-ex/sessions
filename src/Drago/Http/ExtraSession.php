<?php

/**
 * Drago Extension
 * Package built on Nette Framework
 */

declare(strict_types=1);

namespace Drago\Http;

use Nette\Http\Session;
use Nette\Http\SessionSection;


/**
 * This helper class provides an easy way to access the Nette session outside the presenter context.
 * It allows working with specific session sections and provides methods for managing
 * sessions within the application. The class is designed to be used outside of presenters,
 * which is useful when working with session data in services or components.
 */
final readonly class ExtraSession
{
	/**
	 * @param Session $session Nette session service
	 * @param string $section Name of the session section to access
	 */
	public function __construct(
		private Session $session,
		private string $section,
	) {
	}


	/**
	 * Returns the Nette session service.
	 */
	public function getSession(): Session
	{
		return $this->session;
	}


	/**
	 * Returns a specific session section.
	 */
	public function getSessionSection(): SessionSection
	{
		return $this->getSession()
			->getSection($this->section);
	}
}
