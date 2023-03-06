<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit25f8e3b702ef764a6c077ccae278b2af
{
    public static $prefixLengthsPsr4 = array (
        'R' => 
        array (
            'Rundiz\\Upload\\' => 14,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Rundiz\\Upload\\' => 
        array (
            0 => __DIR__ . '/..' . '/rundiz/upload/Rundiz/Upload',
        ),
    );

    public static $prefixesPsr0 = array (
        'U' => 
        array (
            'Upload' => 
            array (
                0 => __DIR__ . '/..' . '/codeguy/upload/src',
            ),
        ),
        'S' => 
        array (
            'Slug' => 
            array (
                0 => __DIR__ . '/..' . '/kevinlebrun/slug.php/src',
            ),
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
        'FPDF' => __DIR__ . '/..' . '/setasign/fpdf/fpdf.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit25f8e3b702ef764a6c077ccae278b2af::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit25f8e3b702ef764a6c077ccae278b2af::$prefixDirsPsr4;
            $loader->prefixesPsr0 = ComposerStaticInit25f8e3b702ef764a6c077ccae278b2af::$prefixesPsr0;
            $loader->classMap = ComposerStaticInit25f8e3b702ef764a6c077ccae278b2af::$classMap;

        }, null, ClassLoader::class);
    }
}
