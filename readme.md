## Sessions
Use of sessions outside presenter.

## Instruction

Example 1:
```neon
services:
	- Drago\Application\Http\Sessions
```

In class we build namespace for session:
```php
$sessionSection = $this->sessions->getSessionSection('namespace');
sessionSection->addValue = 'MyValue';
```

OR:

```php
$this->sessions->sessionSection = $this->sessions->session->getSection('namespace');
$this->sessions->sessionSection->addValue = 'MyValue';
```

Notice:
you can thus rewrite your original parameter!

Example 2:
```neon
services:
	- Drago\Application\Http\Sessions(@Nette\Http\Session, 'namespace')
```

```php
$sessionSection = $this->sessions->getSessionSection();
sessionSection->addValue = 'MyValue';
```

Detailed documentation:
[https://doc.nette.org/en/2.3/sessions](https://doc.nette.org/en/2.3/sessions)
