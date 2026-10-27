# Drago Sessions

Pomocný balíček pro práci se session mimo presenter v Nette Frameworku.

[![License: MIT](https://img.shields.io/badge/License-MIT-yellow.svg)](https://github.com/drago-ex/sessions/blob/main/license)
[![PHP version](https://badge.fury.io/ph/drago-ex%2Fsessions.svg)](https://badge.fury.io/ph/drago-ex%2Fsessions)
[![Tests](https://github.com/drago-ex/sessions/actions/workflows/tests.yml/badge.svg)](https://github.com/drago-ex/sessions/actions/workflows/tests.yml)
[![Coding Style](https://github.com/drago-ex/sessions/actions/workflows/coding-style.yml/badge.svg)](https://github.com/drago-ex/sessions/actions/workflows/coding-style.yml)

## Požadavky

- PHP >= 8.3, < 9
- Nette Framework
- Composer

## Instalace

```
composer require drago-ex/sessions
```

## Registrace služby

V konfiguraci `neon` zaregistrujte službu `ExtraSession` pro sekci session, kterou potřebujete:
```neon
services:
	- Drago\Http\ExtraSession(section: cart)
```

Argument `Nette\Http\Session` se předá automaticky (autowiring). Pokud potřebujete více sekcí, zaregistrujte
pojmenované služby a vypněte autowiring, aby se správná služba vybírala výslovně:
```neon
services:
	cartSession:
		create: Drago\Http\ExtraSession(section: cart)
		autowired: false

	wishlistSession:
		create: Drago\Http\ExtraSession(section: wishlist)
		autowired: false

	- App\Model\CartService(@cartSession)
```

## Příklady

```php
use Drago\Http\ExtraSession;

final class CartService
{
	public function __construct(
		private readonly ExtraSession $session,
	) {
	}


	public function add(int $productId): void
	{
		$section = $this->session->getSessionSection();
		$items = $section->get('items') ?? [];
		$items[] = $productId;
		$section->set('items', $items);
	}
}
```

## Funkce

- Přístup k Nette session a jejím sekcím mimo presenter.
- Vhodné pro data v session ve službách nebo komponentách aplikace v Nette.

## Další informace

- [Nette Sessions](https://doc.nette.org/cs/http/sessions)
