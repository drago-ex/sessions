## Drago Sessions

[![Codacy Badge](https://api.codacy.com/project/badge/Grade/c97b7e9b16df47daa3c5514a9a531297)](https://www.codacy.com/app/accgit/sessions?utm_source=github.com&utm_medium=referral&utm_content=drago-ex/sessions&utm_campaign=badger)

Using a session outside the Presenter.

## Example 1

Add the configuration file:

```
services:

	# Use of sessions outside presenter.
	- Drago\Http\Sessions
```

The namespace used in the class:

```php
$sessionSection = $this->sessions->getSessionSection('namespace');
sessionSection->addValue = 'MyValue';
```

OR

```php
// Notice: you can thus rewrite your original parameter.
$this->sessions->sessionSection = $this->sessions->session->getSection('namespace');
$this->sessions->sessionSection->addValue = 'MyValue';
```

## Example 2

Add the configuration file:

```
services:

	# Use of sessions outside presenter.
	- Drago\Http\Sessions(@Nette\Http\Session, 'namespace')
```
The namespace used in the configuration file:

```php
$sessionSection = $this->sessions->getSessionSection();
$sessionSection->addValue = 'MyValue';
```

## Documentation

[https://doc.nette.org/en/2.4/sessions](https://doc.nette.org/en/2.4/sessions)
