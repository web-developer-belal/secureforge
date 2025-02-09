<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit547bcc5e48057784c5b5f0b76c394b22
{
    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'Secureforge\\Defendercore\\' => 25,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Secureforge\\Defendercore\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit547bcc5e48057784c5b5f0b76c394b22::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit547bcc5e48057784c5b5f0b76c394b22::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit547bcc5e48057784c5b5f0b76c394b22::$classMap;

        }, null, ClassLoader::class);
    }
}
