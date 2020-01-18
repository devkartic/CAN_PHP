<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit30d426b94a1cc18bc56bba78c2bf1cd9
{
    public static $classMap = array (
        'Topic' => __DIR__ . '/../..' . '/app/models/Topic.php',
        'User' => __DIR__ . '/../..' . '/app/models/User.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->classMap = ComposerStaticInit30d426b94a1cc18bc56bba78c2bf1cd9::$classMap;

        }, null, ClassLoader::class);
    }
}
