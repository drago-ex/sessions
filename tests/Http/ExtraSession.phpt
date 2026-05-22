<?php

/**
 * Test: Drago\Http\ExtraSession
 */

declare(strict_types=1);

use Drago\Http\ExtraSession;
use Nette\Http;
use Nette\Http\Session;
use Nette\Http\SessionSection;
use Tester\Assert;

require __DIR__ . '/../bootstrap.php';

$section = 'section';
$request = new Http\RequestFactory;
$session = new Http\Session($request->fromGlobals(), new Http\Response);
$class = new ExtraSession($session, $section);

Assert::type(Session::class, $class->getSession());
Assert::type(SessionSection::class, $class->getSessionSection());
