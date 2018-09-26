<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit6bbf8e2d87f6ce58af1fe769c3f48386
{
    public static $prefixLengthsPsr4 = array (
        'H' => 
        array (
            'Helpers\\' => 8,
        ),
        'C' => 
        array (
            'Config\\' => 7,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Helpers\\' => 
        array (
            0 => __DIR__ . '/../..' . '/Helpers',
        ),
        'Config\\' => 
        array (
            0 => __DIR__ . '/../..' . '/Config',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit6bbf8e2d87f6ce58af1fe769c3f48386::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit6bbf8e2d87f6ce58af1fe769c3f48386::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
