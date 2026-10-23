# Drago Sessions

English | [Čeština](readme.cs.md)

A helper package for managing sessions outside the presenter in Nette Framework.

[![License: MIT](https://img.shields.io/badge/License-MIT-yellow.svg)](https://github.com/drago-ex/sessions/blob/main/license)
[![PHP version](https://badge.fury.io/ph/drago-ex%2Fsessions.svg)](https://badge.fury.io/ph/drago-ex%2Fsessions)
[![Tests](https://github.com/drago-ex/sessions/actions/workflows/tests.yml/badge.svg)](https://github.com/drago-ex/sessions/actions/workflows/tests.yml)
[![Coding Style](https://github.com/drago-ex/sessions/actions/workflows/coding-style.yml/badge.svg)](https://github.com/drago-ex/sessions/actions/workflows/coding-style.yml)

## Requirements

- PHP >= 8.3, < 9
- Nette Framework
- Composer

## Installation

```
composer require drago-ex/sessions
```

## Service Registration

Register an `ExtraSession` service for the session section you need in your `neon` configuration:
```neon
services:
	- Drago\Http\ExtraSession(section: cart)
```

The `Nette\Http\Session` argument is autowired. When you need several sections, register named services
and disable autowiring, so the right one is chosen explicitly:
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

## Examples

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

## Features

- Provides access to Nette sessions and session sections outside the presenter.
- Ideal for managing session data in services or components within a Nette application.

## Knowledge

- [Nette Sessions](https://doc.nette.org/en/http/sessions)
