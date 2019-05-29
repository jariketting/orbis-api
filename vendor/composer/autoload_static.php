<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInited5d970ae004c0b5383c9691f3a0451b
{
    public static $prefixLengthsPsr4 = array (
        'O' => 
        array (
            'Orbis\\' => 6,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Orbis\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInited5d970ae004c0b5383c9691f3a0451b::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInited5d970ae004c0b5383c9691f3a0451b::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}