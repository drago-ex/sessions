<?php

declare(strict_types = 1);

namespace Test\Http;

use Drago;
use Nette\Http;
use Tester\Assert;

require __DIR__ . '/../bootstrap.php';

$namespace = 'namespace';
$request = (new Http\RequestFactory())->fromGlobals();
$session = new Http\Session($request, new Http\Response());
$class = new Drago\Http\Sessions($session, $namespace);

Assert::type($class->getSession(), $session);
Assert::type($class->getSessionSection(), $session->getSection($namespace));
