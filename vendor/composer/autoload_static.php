<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit8f92f6f401e1fb857c37bf9e55e8f190
{
    public static $prefixesPsr0 = array (
        'A' => 
        array (
            'Acme' => 
            array (
                0 => __DIR__ . '/../..' . '/src',
            ),
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixesPsr0 = ComposerStaticInit8f92f6f401e1fb857c37bf9e55e8f190::$prefixesPsr0;

        }, null, ClassLoader::class);
    }
}
