## Drago Sessions
A helper package for managing sessions outside the presenter in Nette Framework.

[![License: MIT](https://img.shields.io/badge/License-MIT-yellow.svg)](https://raw.githubusercontent.com/drago-ex/sessions/master/license)
[![PHP version](https://badge.fury.io/ph/drago-ex%2Fsessions.svg)](https://badge.fury.io/ph/drago-ex%2Fsessions)
[![Tests](https://github.com/drago-ex/sessions/actions/workflows/tests.yml/badge.svg)](https://github.com/drago-ex/sessions/actions/workflows/tests.yml)
[![Coding Style](https://github.com/drago-ex/sessions/actions/workflows/coding-style.yml/badge.svg)](https://github.com/drago-ex/sessions/actions/workflows/coding-style.yml)
[![CodeFactor](https://www.codefactor.io/repository/github/drago-ex/sessions/badge)](https://www.codefactor.io/repository/github/drago-ex/sessions)
[![Coverage Status](https://coveralls.io/repos/github/drago-ex/sessions/badge.svg?branch=master)](https://coveralls.io/github/drago-ex/sessions?branch=master)

## Requirements
- PHP >= 8.3
- Nette Framework
- Composer

## Features
- Provides access to Nette sessions and session sections outside the presenter.
- Ideal for managing session data in services or components within a Nette application.

## Knowledge
- [Sessions]([https://github.com/dg/dibi](https://doc.nette.org/en/http/sessions))

## Installation
```
composer require drago-ex/sessions
```

## Service registration
In your `neon` configuration, register the `ExtraSession` service:
```neon
service:
	- Drago\Http\ExtraSession(@Nette\Http\Session, 'namespace')
```

## Usage
Setting session values
```php
// Setting a session value in the specified section.
$this->ExtraSession->getSessionSection()->set('key', 'value');
```

Reading session values
```php
// Getting a session value from the section.
$value = $this->ExtraSession->getSessionSection()->get('key');
```


