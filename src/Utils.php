<?php

namespace EmanueleMinotto\HwiOauthBridge;

class Utils
{
    /**
     * Get Traits list.
     *
     * @param string $globPattern
     *
     * @return array
     */
    public static function getTraitsList($globPattern = '{Document,Entity}')
    {
        $files = glob(__DIR__.'/Traits/'.$globPattern.'/*.php');

        return array_map(function ($path) {
            $class = basename($path, '.php');
            $namespace = basename(dirname($path));

            return array(
                'EmanueleMinotto\HwiOauthBridge\Traits\\'.$namespace.'\\'.$class,
            );
        }, $files);
    }

    /**
     * Get Providers List.
     *
     * @param string $type Document or Entity.
     *
     * @return array
     */
    public static function getProvidersList($type = 'Document')
    {
        $traitsList = static::getTraitsList($type);

        $providers = array();

        foreach ($traitsList as $trait) {
            $class = str_replace($type, null, basename($trait));

            // special case
            if ('signals' === $class) {
                $class = sprintf('37%s', $class);
            }

            $providers[$trait] = strtolower($class);
        }

        return $providers;
    }
}
