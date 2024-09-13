<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitec8282d23e73d94f0c3e683e576dc922
{
    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'Psr\\Log\\' => 8,
        ),
        'M' => 
        array (
            'MeuProjeto\\' => 11,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Psr\\Log\\' => 
        array (
            0 => __DIR__ . '/..' . '/psr/log/src',
        ),
        'MeuProjeto\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitec8282d23e73d94f0c3e683e576dc922::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitec8282d23e73d94f0c3e683e576dc922::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitec8282d23e73d94f0c3e683e576dc922::$classMap;

        }, null, ClassLoader::class);
    }
}
