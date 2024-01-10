<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit13cdb88f122deb5c99dc7c7d06000d8d
{
    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'PHPMailer\\PHPMailer\\' => 20,
        ),
        'A' => 
        array (
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'PHPMailer\\PHPMailer\\' => 
        array (
            0 => __DIR__ . '/..' . '/phpmailer/phpmailer/src',
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit13cdb88f122deb5c99dc7c7d06000d8d::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit13cdb88f122deb5c99dc7c7d06000d8d::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit13cdb88f122deb5c99dc7c7d06000d8d::$classMap;

        }, null, ClassLoader::class);
    }
}
