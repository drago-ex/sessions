<?php

declare(strict_types=1);

namespace Drago\Http;

use Nette\Http\Session;
use Nette\Http\SessionSection;


/** Helper class for accessing Nette session and session sections outside presenters. */
final readonly class ExtraSession
{
	public function __construct(
		private Session $session,
		private string $section,
	) {
	}


	/** Returns the Nette session service. */
	public function getSession(): Session
	{
		return $this->session;
	}


	/** Returns a specific session section. */
	public function getSessionSection(): SessionSection
	{
		return $this->getSession()
			->getSection($this->section);
	}
}
