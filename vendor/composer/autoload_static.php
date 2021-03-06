<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit0af911d11bc65f549818b378d85d56a4
{
    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'Stripe\\' => 7,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Stripe\\' => 
        array (
            0 => __DIR__ . '/..' . '/stripe/stripe-php/lib',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit0af911d11bc65f549818b378d85d56a4::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit0af911d11bc65f549818b378d85d56a4::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit0af911d11bc65f549818b378d85d56a4::$classMap;

        }, null, ClassLoader::class);
    }
}
