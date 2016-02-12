#Symfony2/Symfony3 TimestampType Bundle



About
-----

A simple Symfony2/Symfony3 bundle that adds timestamp form field type.

Installation
------------

Add this to your `composer.json` file:

```json
"require": {
	"bukashk0zzz/timestamptype-bundle": "dev-master",
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
