<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitfa0a2ead9dc75806df39bff147637111
{
    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'PHPMailer\\PHPMailer\\' => 20,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'PHPMailer\\PHPMailer\\' => 
        array (
            0 => __DIR__ . '/..' . '/phpmailer/phpmailer/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitfa0a2ead9dc75806df39bff147637111::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitfa0a2ead9dc75806df39bff147637111::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitfa0a2ead9dc75806df39bff147637111::$classMap;

        }, null, ClassLoader::class);
    }
}
