<p align="center">
  <img src="https://avatars0.githubusercontent.com/u/11717487?s=400&u=40ecb522587ebbcfe67801ccb6f11497b259f84b&v=4" width="100" alt="logo">
</p>

<h3 align="center">Drago Extension</h3>
<p align="center">Extension for Nette Framework</p>

## Drago Sessions
Using session outside the presenter.

[![License: MIT](https://img.shields.io/badge/License-MIT-yellow.svg)](https://raw.githubusercontent.com/drago-ex/sessions/master/license.md)
[![PHP version](https://badge.fury.io/ph/drago-ex%2Fsessions.svg)](https://badge.fury.io/ph/drago-ex%2Fsessions)
[![Build Status](https://travis-ci.org/drago-ex/sessions.svg?branch=master)](https://travis-ci.org/drago-ex/sessions)
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
extensions:
	- Drago\Http\ExtraSession(@Nette\Http\Session, 'namespace')
```

## Use
```php
$sessionSection = $this->ExtraSession->getSessionSection();
$sessionSection->addValue = 'Value';
```
