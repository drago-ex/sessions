## Drago Sessions
Using session outside the presenter.

[![License: MIT](https://img.shields.io/badge/License-MIT-yellow.svg)](https://raw.githubusercontent.com/drago-ex/sessions/master/license.md)
[![PHP version](https://badge.fury.io/ph/drago-ex%2Fsessions.svg)](https://badge.fury.io/ph/drago-ex%2Fsessions)
[![Tests](https://github.com/drago-ex/sessions/actions/workflows/tests.yml/badge.svg)](https://github.com/drago-ex/sessions/actions/workflows/tests.yml)
[![Coding Style](https://github.com/drago-ex/sessions/actions/workflows/coding-style.yml/badge.svg)](https://github.com/drago-ex/sessions/actions/workflows/coding-style.yml)
[![CodeFactor](https://www.codefactor.io/repository/github/drago-ex/sessions/badge)](https://www.codefactor.io/repository/github/drago-ex/sessions)
[![Coverage Status](https://coveralls.io/repos/github/drago-ex/sessions/badge.svg?branch=master)](https://coveralls.io/github/drago-ex/sessions?branch=master)

## Technology
- PHP 8.0 or higher
- composer

## Installation
```
composer require drago-ex/sessions
```

## Service registration
```neon
service:
	- Drago\Http\ExtraSession(@Nette\Http\Session, 'namespace')
```

## Use
```php
$sessionSection = $this->ExtraSession->getSessionSection();
$sessionSection->addValue = 'Value';
```
