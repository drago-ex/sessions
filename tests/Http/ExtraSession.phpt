<?php

/**
 * Test: Drago\Http\ExtraSession
 */

declare(strict_types=1);

use Drago\Http\ExtraSession;
use Nette\DI\Compiler;
use Nette\DI\ContainerLoader;
use Nette\Http;
use Tester\Assert;
use Tester\FileMock;

require __DIR__ . '/../bootstrap.php';


function createSession(): Http\Session
{
	return new Http\Session((new Http\RequestFactory)->fromGlobals(), new Http\Response);
}


test('The helper returns the session and its configured section', function () {
	$session = createSession();
	$extraSession = new ExtraSession($session, 'cart');

	Assert::same($session, $extraSession->getSession());
	$extraSession->getSessionSection()->set('key', 'value');
	Assert::same('value', $session->getSection('cart')->get('key'));
});


test('Values written through the section are stored in the session', function () {
	$session = createSession();
	(new ExtraSession($session, 'cart'))->getSessionSection()->set('items', [1, 2]);

	Assert::same([1, 2], $session->getSection('cart')->get('items'));
	Assert::null($session->getSection('wishlist')->get('items'));
});


test('The services from the README can be registered in the container', function () {
	$tempDir = __DIR__ . '/../tmp';
	@mkdir($tempDir);

	$loader = new ContainerLoader($tempDir, autoRebuild: true);
	$class = $loader->load(function (Compiler $compiler): void {
		$compiler->loadConfig(FileMock::create('
			services:
				- Nette\Http\RequestFactory
				- @Nette\Http\RequestFactory::fromGlobals
				- Nette\Http\Response
				- Nette\Http\Session

				- Drago\Http\ExtraSession(section: cart)

				wishlistSession:
					create: Drago\Http\ExtraSession(section: wishlist)
					autowired: false
		', 'neon'));
	}, 'readme');

	/** @var Nette\DI\Container $container */
	$container = new $class;
	$container->getByType(ExtraSession::class)->getSessionSection()->set('key', 'cart');
	$container->getService('wishlistSession')->getSessionSection()->set('key', 'wishlist');

	$session = $container->getByType(Http\Session::class);
	Assert::same('cart', $session->getSection('cart')->get('key'));
	Assert::same('wishlist', $session->getSection('wishlist')->get('key'));
});
