# tdd-phpspec

Quick Start
Create a composer.json file:
```
{
    "require-dev": {
        "phpspec/phpspec": "~2.0"
    },
    "config": {
        "bin-dir": "bin"
    },
    "autoload": {"psr-0": {"": "src"}}
}
```

Install phpspec with composer:

```
curl http://getcomposer.org/installer | php
php composer.phar install
```

Note: The composer.json file is already included in the master branch
