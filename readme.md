## Drago Sessions

[![Codacy Badge](https://api.codacy.com/project/badge/Grade/c97b7e9b16df47daa3c5514a9a531297)](https://www.codacy.com/app/accgit/sessions?utm_source=github.com&utm_medium=referral&utm_content=drago-ex/sessions&utm_campaign=badger)

Použivání sessions mimo presenter.

## Požadavky

- PHP 7.0.8 nebo vyšší
- composer

## Instalace

```
composer require drago-ex/sessions
```

## Registrace služby

```
services:

	# Použivání sessions mimo presenter.
	- Drago\Http\Sessions(@Nette\Http\Session, 'namespace')
```

## Příklad, jak vložit hodnotu do sessions

```php
$sessionSection = $this->sessions->getSessionSection();
$sessionSection->addValue = 'Value';
```

## Dokumentace

[https://doc.nette.org/cs/2.4/sessions](https://doc.nette.org/cs/2.4/sessions)
