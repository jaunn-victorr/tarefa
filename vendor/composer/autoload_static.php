<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitde991353cdcb799b2355ff44a53166d2
{
    public static $prefixLengthsPsr4 = array (
        't' => 
        array (
            'tarefa\\' => 7,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'tarefa\\' => 
        array (
            0 => __DIR__ . '/../..' . '/scr',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitde991353cdcb799b2355ff44a53166d2::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitde991353cdcb799b2355ff44a53166d2::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
