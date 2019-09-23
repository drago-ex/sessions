<p align="center">
  <img src="https://avatars0.githubusercontent.com/u/11717487?s=400&u=40ecb522587ebbcfe67801ccb6f11497b259f84b&v=4" width="100" alt="logo">
</p>

<h3 align="center">Drago</h3>
<p align="center">Simple packages built on Nette Framework</p>

## Info

Using sessions outside the presenter.

[![License: MIT](https://img.shields.io/badge/License-MIT-yellow.svg)](https://raw.githubusercontent.com/drago-ex/sessions/master/license.md)
[![PHP version](https://badge.fury.io/ph/drago-ex%2Fsessions.svg)](https://badge.fury.io/ph/drago-ex%2Fsessions)
[![CodeFactor](https://www.codefactor.io/repository/github/drago-ex/sessions/badge)](https://www.codefactor.io/repository/github/drago-ex/sessions)

## Requirements

- PHP 7.1 or higher
- composer

## Installation

```
composer require drago-ex/sessions
```

## Service registration

```
services:

	# using sessions outside the presenter
	- Drago\Http\Sessions(@Nette\Http\Session, 'namespace')
```

## An example of how to insert a value into sessions

```php
$sessionSection = $this->sessions->getSessionSection();
$sessionSection->addValue = 'Value';
```

## Documentation

[https://doc.nette.org/en/2.4/sessions](https://doc.nette.org/en/2.4/sessions)
