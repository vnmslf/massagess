<?php

namespace Sprint\Migration;

use COption;
use Exception;

/**
 *
 * В этом классе у свойств не надо указывать тип
 *  ради совместимости с php < 7.4, чтобы админка
 *  могла корректно показать фразу PHP 7.3 не поддерживается
 */
class Module
{
    const ID = 'sprint.migration';
    /**
     * @var string
     */
    private static $version = '';
    /**
     * @var array
     */
    private static $defaultOptions = [
        'show_schemas' => 'Y',
        'show_support' => 'Y',
    ];

    public static function getDbOption($name, $default = '')
    {
        return COption::GetOptionString(Module::ID, $name, $default);
    }

    public static function setDbOption($name, $value)
    {
        if ($value != COption::GetOptionString(Module::ID, $name)) {
            COption::SetOptionString(Module::ID, $name, $value);
        }
    }

    public static function removeDbOption($name)
    {
        COption::RemoveOption(Module::ID, $name);
    }

    public static function removeDbOptions()
    {
        COption::RemoveOption(Module::ID);
    }

    public static function checkDbOption(string $name, bool $checked)
    {
        self::setDbOption($name, $checked ? 'Y' : 'N');
    }

    public static function isDbOptionChecked(string $name)
    {
        return self::getDbOption($name, self::$defaultOptions[$name]) == 'Y';
    }

    public static function getDocRoot(): string
    {
        return rtrim($_SERVER['DOCUMENT_ROOT'], DIRECTORY_SEPARATOR);
    }

    public static function getPhpInterfaceDir(): string
    {
        if (is_dir(self::getDocRoot() . '/local/php_interface')) {
            return self::getDocRoot() . '/local/php_interface';
        } else {
            return self::getDocRoot() . '/bitrix/php_interface';
        }
    }

    public static function getModuleDir(): string
    {
        if (is_file(self::getDocRoot() . '/local/modules/' . Module::ID . '/include.php')) {
            return self::getDocRoot() . '/local/modules/' . Module::ID;
        } else {
            return self::getDocRoot() . '/bitrix/modules/' . Module::ID;
        }
    }

    public static function getRelativeDir($dir)
    {
        $docroot = Module::getDocRoot();
        $docroot = str_replace('/', DIRECTORY_SEPARATOR, $docroot);
        $dir = str_replace('/', DIRECTORY_SEPARATOR, $dir);
        if (strpos($dir, $docroot) === 0) {
            $dir = substr($dir, strlen($docroot));
        }
        return $dir;
    }

    /**
     * @param $dir
     *
     * @throws Exception
     * @return mixed
     */
    public static function createDir($dir)
    {
        if (!is_dir($dir)) {
            mkdir($dir, BX_DIR_PERMISSIONS, true);
        }

        if (!is_dir($dir)) {
            throw new Exception(
                Locale::getMessage(
                    'ERR_CANT_CREATE_DIRECTORY',
                    [
                        '#NAME#' => $dir,
                    ]
                )
            );
        }

        return $dir;
    }

    public static function getVersion(): string
    {
        if (!self::$version) {
            $arModuleVersion = [];
            include self::getModuleDir() . '/install/version.php';
            self::$version = (string)($arModuleVersion['VERSION'] ?? '');
        }
        return self::$version;
    }

    /**
     * @throws Exception
     */
    public static function checkHealth()
    {
        if (isset($GLOBALS['DBType']) && strtolower($GLOBALS['DBType']) == 'mssql') {
            throw new Exception(
                Locale::getMessage(
                    'ERR_MSSQL_NOT_SUPPORTED'
                )
            );
        }

        if (!function_exists('json_encode')) {
            throw new Exception(
                Locale::getMessage(
                    'ERR_JSON_NOT_SUPPORTED'
                )
            );
        }

        if (version_compare(PHP_VERSION, '7.4', '<')) {
            throw new Exception(
                Locale::getMessage(
                    'ERR_PHP_NOT_SUPPORTED',
                    [
                        '#NAME#' => PHP_VERSION,
                    ]
                )
            );
        }

        if (
            is_file($_SERVER['DOCUMENT_ROOT'] . '/bitrix/modules/' . Module::ID . '/include.php')
            && is_file($_SERVER['DOCUMENT_ROOT'] . '/local/modules/' . Module::ID . '/include.php')
        ) {
            throw new Exception('module installed to bitrix and local folder');
        }
    }
}



