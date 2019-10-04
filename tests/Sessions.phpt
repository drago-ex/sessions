<?php

declare(strict_types = 1);

use Drago\Http\Sessions;
use Nette\Http\RequestFactory;
use Nette\Http\Response;
use Nette\Http\Session;
use Tester\Assert;

require __DIR__ . '/bootstrap.php';

$request = (new RequestFactory())->createHttpRequest();
$session = new Sessions(new Session($request, new Response()), 'sessions');

$sessionSection = $session->getSessionSection();
$sessionSection->value = 'Value';

Assert::same('Value', $sessionSection->value);

$sessionSection->next = 'Next';
Assert::same('Next', $sessionSection->next);

$sessionSection->array = [
	'Test 1', 'Test 2',
];


Assert::same('Test 1', $sessionSection->array[0]);
Assert::same('Test 2', $sessionSection->array[1]);
Assert::type(Session::class, $session->getSession());
