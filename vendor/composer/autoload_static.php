<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit91d58c0c477ec5717fe8d42e1e75374c
{
    public static $prefixLengthsPsr4 = array (
        'f' => 
        array (
            'framework\\' => 10,
        ),
        'A' => 
        array (
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'framework\\' => 
        array (
            0 => __DIR__ . '/..' . '/elframework/framework/framework',
        ),
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit91d58c0c477ec5717fe8d42e1e75374c::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit91d58c0c477ec5717fe8d42e1e75374c::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit91d58c0c477ec5717fe8d42e1e75374c::$classMap;

        }, null, ClassLoader::class);
    }
}
