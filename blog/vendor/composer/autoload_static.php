<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInite8f84264a3ff78180ed085dff9379167
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

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInite8f84264a3ff78180ed085dff9379167::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInite8f84264a3ff78180ed085dff9379167::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
