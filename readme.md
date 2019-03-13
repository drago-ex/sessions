## Drago Sessions

Using sessions outside the presenter.

## Requirements

- PHP 7.2 or higher
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
