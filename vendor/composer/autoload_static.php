<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit431c7a35163d58d018d6300c60fc22c8
{
    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->classMap = ComposerStaticInit431c7a35163d58d018d6300c60fc22c8::$classMap;

        }, null, ClassLoader::class);
    }
}
