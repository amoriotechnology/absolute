<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit0ded317553d2bdefb2e98c9d2c3b6ff7
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit0ded317553d2bdefb2e98c9d2c3b6ff7::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit0ded317553d2bdefb2e98c9d2c3b6ff7::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit0ded317553d2bdefb2e98c9d2c3b6ff7::$classMap;

        }, null, ClassLoader::class);
    }
}
