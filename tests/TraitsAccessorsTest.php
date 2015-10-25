<?php

namespace EmanueleMinotto\HwiOauthBridge\Test\Traits;

use EmanueleMinotto\HwiOauthBridge\Utils;
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

    /**
     * @return array
     */
    public function traitsProvider()
    {
        return Utils::getTraitsList();
    }
}
