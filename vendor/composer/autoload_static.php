<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitfb9f629fe8337560dd413e7a6ac6cb57
{
    public static $files = array (
        '2cffec82183ee1cea088009cef9a6fc3' => __DIR__ . '/..' . '/ezyang/htmlpurifier/library/HTMLPurifier.composer.php',
    );

    public static $prefixLengthsPsr4 = array (
        'E' => 
        array (
            'EdvGraz\\' => 8,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'EdvGraz\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src/classes',
        ),
    );

    public static $prefixesPsr0 = array (
        'H' => 
        array (
            'HTMLPurifier' => 
            array (
                0 => __DIR__ . '/..' . '/ezyang/htmlpurifier/library',
            ),
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitfb9f629fe8337560dd413e7a6ac6cb57::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitfb9f629fe8337560dd413e7a6ac6cb57::$prefixDirsPsr4;
            $loader->prefixesPsr0 = ComposerStaticInitfb9f629fe8337560dd413e7a6ac6cb57::$prefixesPsr0;
            $loader->classMap = ComposerStaticInitfb9f629fe8337560dd413e7a6ac6cb57::$classMap;

        }, null, ClassLoader::class);
    }
}
