<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit190bc7b0bb6bd20be8082c989868ec59
{
    public static $prefixLengthsPsr4 = array (
        'C' => 
        array (
            'CatchThemes\\WPContentImporter2\\' => 31,
            'CTDI\\' => 5,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'CatchThemes\\WPContentImporter2\\' => 
        array (
            0 => __DIR__ . '/..' . '/catchthemes/wp-content-importer-v2/src',
        ),
        'CTDI\\' => 
        array (
            0 => __DIR__ . '/../..' . '/inc',
        ),
    );

    public static $classMap = array (
        'CTDI\\CatchThemesDemoImport' => __DIR__ . '/../..' . '/inc/CatchThemesDemoImport.php',
        'CTDI\\CustomizerImporter' => __DIR__ . '/../..' . '/inc/CustomizerImporter.php',
        'CTDI\\CustomizerOption' => __DIR__ . '/../..' . '/inc/CustomizerOption.php',
        'CTDI\\Downloader' => __DIR__ . '/../..' . '/inc/Downloader.php',
        'CTDI\\Helpers' => __DIR__ . '/../..' . '/inc/Helpers.php',
        'CTDI\\ImportActions' => __DIR__ . '/../..' . '/inc/ImportActions.php',
        'CTDI\\Importer' => __DIR__ . '/../..' . '/inc/Importer.php',
        'CTDI\\Logger' => __DIR__ . '/../..' . '/inc/Logger.php',
        'CTDI\\ReduxImporter' => __DIR__ . '/../..' . '/inc/ReduxImporter.php',
        'CTDI\\WPCLICommands' => __DIR__ . '/../..' . '/inc/WPCLICommands.php',
        'CTDI\\WXRImporter' => __DIR__ . '/../..' . '/inc/WXRImporter.php',
        'CTDI\\WidgetImporter' => __DIR__ . '/../..' . '/inc/WidgetImporter.php',
        'CatchThemes\\WPContentImporter2\\WPImporterLogger' => __DIR__ . '/..' . '/catchthemes/wp-content-importer-v2/src/WPImporterLogger.php',
        'CatchThemes\\WPContentImporter2\\WPImporterLoggerCLI' => __DIR__ . '/..' . '/catchthemes/wp-content-importer-v2/src/WPImporterLoggerCLI.php',
        'CatchThemes\\WPContentImporter2\\WXRImportInfo' => __DIR__ . '/..' . '/catchthemes/wp-content-importer-v2/src/WXRImportInfo.php',
        'CatchThemes\\WPContentImporter2\\WXRImporter' => __DIR__ . '/..' . '/catchthemes/wp-content-importer-v2/src/WXRImporter.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit190bc7b0bb6bd20be8082c989868ec59::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit190bc7b0bb6bd20be8082c989868ec59::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit190bc7b0bb6bd20be8082c989868ec59::$classMap;

        }, null, ClassLoader::class);
    }
}