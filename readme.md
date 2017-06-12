## Drago Sessions

[![Codacy Badge](https://api.codacy.com/project/badge/Grade/98971344422d45dcbadcdc771b9a70ed)](https://www.codacy.com/app/zdenek.papucik/sessions?utm_source=github.com&amp;utm_medium=referral&amp;utm_content=drago-ex/sessions&amp;utm_campaign=Badge_Grade)

Use of sessions outside presenter.

## Example 1

```
services:

	# Use of sessions outside presenter.
	- Drago\Http\Sessions
```

In class we build namespace for session:

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

```
services:

	# Use of sessions outside presenter.
	- Drago\Http\Sessions(@Nette\Http\Session, 'namespace')
```

```php
$sessionSection = $this->sessions->getSessionSection();
$sessionSection->addValue = 'MyValue';
```

## Documentation

[https://doc.nette.org/en/2.4/sessions](https://doc.nette.org/en/2.4/sessions)
