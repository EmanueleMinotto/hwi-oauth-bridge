<?php

namespace EmanueleMinotto\HwiOauthBridge\Test\Traits;

use EmanueleMinotto\HwiOauthBridge\Utils;
use PHPUnit_Framework_TestCase;

class UtilsTest extends PHPUnit_Framework_TestCase
{
    const COMMON_NAMESPACE = 'EmanueleMinotto\HwiOauthBridge\Traits\\';

    public function testGetTraitsListWithBrace()
    {
        $traitsList = Utils::getTraitsList();

        foreach ($traitsList as $trait) {
            $this->assertStringStartsWith(self::COMMON_NAMESPACE, $trait);
            $this->assertStringEndsWith('Trait', $trait);
        }
    }

    /**
     * @param string $type
     *
     * @dataProvider typeProvider
     */
    public function testGetTraitsList($type)
    {
        $traitsList = Utils::getTraitsList($type);

        foreach ($traitsList as $trait) {
            $this->assertStringStartsWith(self::COMMON_NAMESPACE.$type.'\\', $trait);
            $this->assertStringEndsWith('Trait', $trait);
        }
    }

    /**
     * @param string $type
     *
     * @dataProvider typeProvider
     */
    public function testGetProvidersList($type)
    {
        $providersList = Utils::getProvidersList($type);

        foreach ($providersList as $trait => $slug) {
            $this->assertStringStartsWith(self::COMMON_NAMESPACE.$type.'\\', $trait);
            $this->assertStringEndsWith('Trait', $trait);

            if (self::COMMON_NAMESPACE.$type.'\\SignalsTrait' === $trait) {
                $this->assertSame('37signals', $slug);
            }
        }
    }

    /**
     * @return array
     */
    public function typeProvider()
    {
        return [
            ['Document'],
            ['Entity'],
        ];
    }
}
