<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit0cc4e55ef81bc93decaaef8eaaac7e7d
{
    public static $classMap = array (
        'AdminPsThemeCustoAdvancedController' => __DIR__ . '/../..' . '/controllers/admin/AdminPsThemeCustoAdvanced.php',
        'AdminPsThemeCustoConfigurationController' => __DIR__ . '/../..' . '/controllers/admin/AdminPsThemeCustoConfiguration.php',
        'ThemeCustoRequests' => __DIR__ . '/../..' . '/classes/ThemeCustoRequests.php',
        'ps_themecusto' => __DIR__ . '/../..' . '/ps_themecusto.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->classMap = ComposerStaticInit0cc4e55ef81bc93decaaef8eaaac7e7d::$classMap;

        }, null, ClassLoader::class);
    }
}
