<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit3d801649884e31208b8b461dbbeed135
{
    public static $prefixLengthsPsr4 = array (
        'C' => 
        array (
            'Core\\' => 5,
            'Controller\\' => 11,
        ),
        'A' => 
        array (
            'Api\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Core\\' => 
        array (
            0 => __DIR__ . '/../..' . '/Core',
        ),
        'Controller\\' => 
        array (
            0 => __DIR__ . '/../..' . '/Controllers',
        ),
        'Api\\' => 
        array (
            0 => __DIR__ . '/../..' . '/api',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
        'Core\\Run' => __DIR__ . '/../..' . '/Core/Run.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit3d801649884e31208b8b461dbbeed135::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit3d801649884e31208b8b461dbbeed135::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit3d801649884e31208b8b461dbbeed135::$classMap;

        }, null, ClassLoader::class);
    }
}
