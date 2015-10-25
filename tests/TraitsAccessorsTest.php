<?php

namespace EmanueleMinotto\HwiOauthBridge\Test\Traits;

use PHPUnit_Framework_TestCase;
use ReflectionClass;

class TraitsAccessorsTest extends PHPUnit_Framework_TestCase
{
    /**
     * @param string $trait
     *
     * @dataProvider traitsProvider
     */
    public function testAccessors($trait)
    {
        $object = $this->getMockForTrait($trait);
        $reflectionClass = new ReflectionClass($trait);

        $defaultProperties = $reflectionClass->getDefaultProperties();

        foreach ($defaultProperties as $property => $value) {
            $setter = sprintf('set%s', ucfirst($property));
            $getter = sprintf('get%s', ucfirst($property));

            $this->assertNull($value);

            $newValue = 'test';
            if ('Data' === substr($property, -4)) {
                $newValue = array();
            }

            $this->assertInstanceOf(get_class($object), $object->$setter($newValue));
            $this->assertSame($newValue, $object->$getter());
        }
    }

    public function traitsProvider()
    {
        $files = glob(__DIR__.'/../src/Traits/*/*.php');

        return array_map(function ($path) {
            $class = basename($path, '.php');
            $namespace = basename(dirname($path));

            return array(
                'EmanueleMinotto\HwiOauthBridge\Traits\\'.$namespace.'\\'.$class,
            );
        }, $files);
    }
}
