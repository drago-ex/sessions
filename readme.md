## Drago Sessions

[![Codacy Badge](https://api.codacy.com/project/badge/Grade/c97b7e9b16df47daa3c5514a9a531297)](https://www.codacy.com/app/accgit/sessions?utm_source=github.com&utm_medium=referral&utm_content=drago-ex/sessions&utm_campaign=badger)

Using a session outside the Presenter.

## Instruction

Add the configuration file:

```
services:

	# Use of sessions outside presenter.
	- Drago\Http\Sessions(@Nette\Http\Session, 'namespace')
```

## Usage

```php
$sessionSection = $this->sessions->getSessionSection();
$sessionSection->addValue = 'MyValue';
```

## Documentation

[https://doc.nette.org/en/2.4/sessions](https://doc.nette.org/en/2.4/sessions)
