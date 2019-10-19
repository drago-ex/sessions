<?php

declare(strict_types = 1);

namespace Test\Http;

use Drago\Http\Sessions;
use Nette\Http\RequestFactory;
use Nette\Http\Response;
use Nette\Http\Session;
use Tester\Assert;

require __DIR__ . '/../bootstrap.php';

$namespace = 'namespace';
$request = (new RequestFactory)->createHttpRequest();
$session = new Session($request, new Response);
$class = new Sessions($session, $namespace);

Assert::type($class->getSession(), $session);
Assert::type($class->getSessionSection(), $session->getSection($namespace));
