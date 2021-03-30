<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitc5a940a9261ab6d40a4c6b0a4bd33e26
{
    public static $prefixLengthsPsr4 = array (
        'L' => 
        array (
            'LINE\\' => 5,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'LINE\\' => 
        array (
            0 => __DIR__ . '/..' . '/linecorp/line-bot-sdk/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitc5a940a9261ab6d40a4c6b0a4bd33e26::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitc5a940a9261ab6d40a4c6b0a4bd33e26::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitc5a940a9261ab6d40a4c6b0a4bd33e26::$classMap;

        }, null, ClassLoader::class);
    }
}
