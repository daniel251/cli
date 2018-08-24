<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit246ca8410cda1c101c1adc29a4d41645
{
    public static $prefixLengthsPsr4 = array (
        'D' => 
        array (
            'DanielSkiepko\\' => 14,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'DanielSkiepko\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src/DanielSkiepko',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit246ca8410cda1c101c1adc29a4d41645::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit246ca8410cda1c101c1adc29a4d41645::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}