# Symfony TimestampType Bundle

[![Build Status](https://img.shields.io/scrutinizer/build/g/Bukashk0zzz/TimestampTypeBundle.svg?style=flat-square)](https://travis-ci.org/Bukashk0zzz/TimestampTypeBundle)
[![Code Coverage](https://img.shields.io/codecov/c/github/Bukashk0zzz/TimestampTypeBundle.svg?style=flat-square)](https://codecov.io/github/Bukashk0zzz/TimestampTypeBundle)
[![Scrutinizer Code Quality](https://img.shields.io/scrutinizer/g/Bukashk0zzz/TimestampTypeBundle.svg?style=flat-square)](https://scrutinizer-ci.com/g/Bukashk0zzz/TimestampTypeBundle/?branch=master)
[![License](https://img.shields.io/packagist/l/Bukashk0zzz/timestamptype-bundle.svg?style=flat-square)](https://packagist.org/packages/Bukashk0zzz/timestamptype-bundle)
[![Latest Stable Version](https://img.shields.io/packagist/v/Bukashk0zzz/timestamptype-bundle.svg?style=flat-square)](https://packagist.org/packages/Bukashk0zzz/timestamptype-bundle)
[![Total Downloads](https://img.shields.io/packagist/dt/Bukashk0zzz/timestamptype-bundle.svg?style=flat-square)](https://packagist.org/packages/Bukashk0zzz/timestamptype-bundle)
[![SensioLabsInsight](https://insight.sensiolabs.com/projects/98688324-1b62-4140-a717-15d2406a3761/mini.png)](https://insight.sensiolabs.com/projects/98688324-1b62-4140-a717-15d2406a3761)

About
-----

A simple Symfony bundle that adds timestamp form field type.

Installation
------------

Add this to your `composer.json` file:

```json
"require": {
	"bukashk0zzz/timestamptype-bundle": "^2.0",
}
```


Add the bundle to `app/AppKernel.php`

```php
$bundles = array(
	// ... other bundles
	new Bukashk0zzz\TimestampTypeBundle\Bukashk0zzzTimestampTypeBundle(),
);
```

Configuration
-------------

Not needed.


Usage
-----

Inside a FormType:

```php
class AccountProfileType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nameFirst', TextType::class, ['label' => 'First Name'])
            ->add('nameLast', TextType::class, ['label' => 'Last Name'])
            ->add('startWorking', TimestampType::class, [
                'label' => 'Start working from',
                'required' => false,
            ])
        ;
    }
}
```

Copyright / License
-------------------

See [LICENSE](https://github.com/bukashk0zzz/TimestampTypeBundle/blob/master/LICENSE)
