<?php

/**
 * Test: Drago\Http\ExtraSession
 */

declare(strict_types=1);

use Drago\Http\ExtraSession;
use Nette\Http;
use Tester\Assert;

require __DIR__ . '/../bootstrap.php';

$section = 'section';
$request = new Http\RequestFactory;
$session = new Http\Session($request->fromGlobals(), new Http\Response);
$class = new ExtraSession($session, $section);

Assert::type($class->getSession(), $session);
Assert::type($class->getSessionSection(), $session->getSection($section));
