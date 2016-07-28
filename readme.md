## Sessions
Use of sessions outside presenter.

## Example 1
```yaml
services:
	- Drago\Application\Http\Sessions
```

In class we build namespace for session:
```php
$sessionSection = $this->sessions->getSessionSection('namespace');
sessionSection->addValue = 'MyValue';
```

OR

```php
//Notice: you can thus rewrite your original parameter.
$this->sessions->sessionSection = $this->sessions->session->getSection('namespace');
$this->sessions->sessionSection->addValue = 'MyValue';
```

## Example 2
```yaml
services:
	- Drago\Application\Http\Sessions(@Nette\Http\Session, 'namespace')
```

```php
$sessionSection = $this->sessions->getSessionSection();
$sessionSection->addValue = 'MyValue';
```

## Detailed documentation
[https://doc.nette.org/en/2.3/sessions](https://doc.nette.org/en/2.3/sessions)
