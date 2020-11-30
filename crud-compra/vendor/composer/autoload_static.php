<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitba9a3b39f3803801ec8e320d1638a4ca
{
    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'App\\' => 
        array (
            0 => __DIR__ . '/../..' . '/app',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitba9a3b39f3803801ec8e320d1638a4ca::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitba9a3b39f3803801ec8e320d1638a4ca::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitba9a3b39f3803801ec8e320d1638a4ca::$classMap;

        }, null, ClassLoader::class);
    }
}
