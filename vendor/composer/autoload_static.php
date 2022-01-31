<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitee4f6fed12db7fd26a16dee4599c6c70
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
            $loader->prefixLengthsPsr4 = ComposerStaticInitee4f6fed12db7fd26a16dee4599c6c70::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitee4f6fed12db7fd26a16dee4599c6c70::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitee4f6fed12db7fd26a16dee4599c6c70::$classMap;

        }, null, ClassLoader::class);
    }
}
