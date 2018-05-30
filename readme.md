## Drago Sessions

[![Codacy Badge](https://api.codacy.com/project/badge/Grade/c97b7e9b16df47daa3c5514a9a531297)](https://www.codacy.com/app/accgit/sessions?utm_source=github.com&utm_medium=referral&utm_content=drago-ex/sessions&utm_campaign=badger)

Using sessions outside the presenter.

## Requirements

- PHP 5.6 or higher
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
