<?php

declare(strict_types = 1);

namespace Test\Http;

use Drago;
use Nette\Http\Session;
use Nette\Http\SessionSection;
use Test\TestCaseAbstract;
use Tester\Assert;

$container = require __DIR__ . '/../bootstrap.php';


class Sessions extends TestCaseAbstract
{
	public function test01(): void
	{
		$class = $this->container->getByType(Drago\Http\Sessions::class);
		Assert::type(Drago\Http\Sessions::class, $class);
		Assert::type(Session::class, $class->getSession());
		Assert::type(SessionSection::class, $class->getSessionSection());
	}
}

$class = new Sessions($container);
$class->run();
