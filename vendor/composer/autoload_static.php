<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitbbc929f7dba65faeeecd89e080fdb5ff
{
    public static $files = array (
        'c7359326b6707d98bdc176bf9ddeaebf' => __DIR__ . '/..' . '/catfan/medoo/medoo.php',
    );

    public static $prefixesPsr0 = array (
        'R' => 
        array (
            'RestService' => 
            array (
                0 => __DIR__ . '/..' . '/marcj/php-rest-service',
            ),
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixesPsr0 = ComposerStaticInitbbc929f7dba65faeeecd89e080fdb5ff::$prefixesPsr0;

        }, null, ClassLoader::class);
    }
}
