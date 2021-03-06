<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit5d1be5a6fed7ba644089d846ddeb0a91
{
    public static $prefixLengthsPsr4 = array (
        'p' => 
        array (
            'proj4php\\' => 9,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'proj4php\\' => 
        array (
            0 => __DIR__ . '/..' . '/proj4php/proj4php/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit5d1be5a6fed7ba644089d846ddeb0a91::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit5d1be5a6fed7ba644089d846ddeb0a91::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
