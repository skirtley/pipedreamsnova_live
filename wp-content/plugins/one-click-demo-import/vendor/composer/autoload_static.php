<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInita81d367737b674057146095709f0399a
{
    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'ProteusThemes\\WPContentImporter2\\' => 33,
        ),
        'O' => 
        array (
            'OCDI\\' => 5,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'ProteusThemes\\WPContentImporter2\\' => 
        array (
            0 => __DIR__ . '/..' . '/proteusthemes/wp-content-importer-v2/src',
        ),
        'OCDI\\' => 
        array (
            0 => __DIR__ . '/../..' . '/inc',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInita81d367737b674057146095709f0399a::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInita81d367737b674057146095709f0399a::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}