<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit960ec6b51a78bfcd3e30ba8d0920c9c5
{
    public static $prefixLengthsPsr4 = array (
        'L' => 
        array (
            'Lcobucci\\JWT\\' => 13,
            'Lcobucci\\Clock\\' => 15,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Lcobucci\\JWT\\' => 
        array (
            0 => __DIR__ . '/..' . '/lcobucci/jwt/src',
        ),
        'Lcobucci\\Clock\\' => 
        array (
            0 => __DIR__ . '/..' . '/lcobucci/clock/src',
        ),
    );

    public static $prefixesPsr0 = array (
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
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit960ec6b51a78bfcd3e30ba8d0920c9c5::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit960ec6b51a78bfcd3e30ba8d0920c9c5::$prefixDirsPsr4;
            $loader->prefixesPsr0 = ComposerStaticInit960ec6b51a78bfcd3e30ba8d0920c9c5::$prefixesPsr0;
            $loader->classMap = ComposerStaticInit960ec6b51a78bfcd3e30ba8d0920c9c5::$classMap;

        }, null, ClassLoader::class);
    }
}
