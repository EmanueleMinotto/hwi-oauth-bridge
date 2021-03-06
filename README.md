# HWI OAuth Bridge

[![Latest Version on Packagist][ico-version]][link-packagist]
[![Software License][ico-license]](LICENSE.md)
[![Build Status][ico-travis]][link-travis]
[![Coverage Status][ico-scrutinizer]][link-scrutinizer]
[![Quality Score][ico-code-quality]][link-code-quality]

Missing bridge between the [HWIOAuthBundle](https://github.com/hwi/HWIOAuthBundle) and your Symfony 2 project.

## Install

Via Composer

``` bash
$ composer require emanueleminotto/hwi-oauth-bridge
```

## Usage

To use one or more of included traits add them to your entities:

```php
namespace AppBundle;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table
 */
class Example
{
    use \EmanueleMinotto\HwiOauthBridge\Traits\Entity\FacebookTrait;

    /**
     * @ORM\Column(type="integer")
     * @ORM\Id
     */
    private $id;

    // ...
}
```

And all related methods will be available throught the trait, so:

```php
$example = new AppBundle\Example();

$example->setFacebookEmail('user@example.com');

$em->persist($example);
$em->flush();

echo $example->getFacebookEmail(); // user@example.com
```

Doctrine 2 ORM are available under the folder *Entity* and Doctrine ODM under
the *Document* folder.

## Testing

```bash
$ composer test
```

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) and [CONDUCT](CONDUCT.md) for details.

## Security

If you discover any security related issues, please email minottoemanuele@gmail.com instead of using the issue tracker.

## Credits

- [Emanuele Minotto][link-author]
- [All Contributors][link-contributors]

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.

[ico-version]: https://img.shields.io/packagist/v/emanueleminotto/hwi-oauth-bridge.svg?style=flat-square
[ico-license]: https://img.shields.io/badge/license-MIT-brightgreen.svg?style=flat-square
[ico-travis]: https://img.shields.io/travis/EmanueleMinotto/hwi-oauth-bridge/master.svg?style=flat-square
[ico-scrutinizer]: https://img.shields.io/scrutinizer/coverage/g/emanueleminotto/hwi-oauth-bridge.svg?style=flat-square
[ico-code-quality]: https://img.shields.io/scrutinizer/g/emanueleminotto/hwi-oauth-bridge.svg?style=flat-square

[link-packagist]: https://packagist.org/packages/emanueleminotto/hwi-oauth-bridge
[link-travis]: https://travis-ci.org/EmanueleMinotto/hwi-oauth-bridge
[link-scrutinizer]: https://scrutinizer-ci.com/g/emanueleminotto/hwi-oauth-bridge/code-structure
[link-code-quality]: https://scrutinizer-ci.com/g/emanueleminotto/hwi-oauth-bridge
[link-author]: https://github.com/EmanueleMinotto
[link-contributors]: ../../contributors
