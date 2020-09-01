<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInita79607c377b2933d549860651822b8d6
{
    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'Symfony\\Component\\Process\\' => 26,
        ),
        'F' => 
        array (
            'Facebook\\WebDriver\\' => 19,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Symfony\\Component\\Process\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/process',
        ),
        'Facebook\\WebDriver\\' => 
        array (
            0 => __DIR__ . '/..' . '/facebook/webdriver/lib',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInita79607c377b2933d549860651822b8d6::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInita79607c377b2933d549860651822b8d6::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}