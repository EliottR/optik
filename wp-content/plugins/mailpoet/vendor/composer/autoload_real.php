<?php
if (!defined('ABSPATH')) exit;
// autoload_real.php @generated by Composer
class ComposerAutoloaderInitd29ba172e58ac37aa0f3f89ca0faac01
{
 private static $loader;
 public static function loadClassLoader($class)
 {
 if ('Composer\Autoload\ClassLoader' === $class) {
 require __DIR__ . '/ClassLoader.php';
 }
 }
 public static function getLoader()
 {
 if (null !== self::$loader) {
 return self::$loader;
 }
 require __DIR__ . '/platform_check.php';
 spl_autoload_register(array('ComposerAutoloaderInitd29ba172e58ac37aa0f3f89ca0faac01', 'loadClassLoader'), true, true);
 self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(\dirname(__FILE__)));
 spl_autoload_unregister(array('ComposerAutoloaderInitd29ba172e58ac37aa0f3f89ca0faac01', 'loadClassLoader'));
 $useStaticLoader = PHP_VERSION_ID >= 50600 && !defined('HHVM_VERSION') && (!function_exists('zend_loader_file_encoded') || !zend_loader_file_encoded());
 if ($useStaticLoader) {
 require __DIR__ . '/autoload_static.php';
 call_user_func(\Composer\Autoload\ComposerStaticInitd29ba172e58ac37aa0f3f89ca0faac01::getInitializer($loader));
 } else {
 $map = require __DIR__ . '/autoload_namespaces.php';
 foreach ($map as $namespace => $path) {
 $loader->set($namespace, $path);
 }
 $map = require __DIR__ . '/autoload_psr4.php';
 foreach ($map as $namespace => $path) {
 $loader->setPsr4($namespace, $path);
 }
 $classMap = require __DIR__ . '/autoload_classmap.php';
 if ($classMap) {
 $loader->addClassMap($classMap);
 }
 }
 $loader->register(true);
 if ($useStaticLoader) {
 $includeFiles = Composer\Autoload\ComposerStaticInitd29ba172e58ac37aa0f3f89ca0faac01::$files;
 } else {
 $includeFiles = require __DIR__ . '/autoload_files.php';
 }
 foreach ($includeFiles as $fileIdentifier => $file) {
 composerRequired29ba172e58ac37aa0f3f89ca0faac01($fileIdentifier, $file);
 }
 return $loader;
 }
}
function composerRequired29ba172e58ac37aa0f3f89ca0faac01($fileIdentifier, $file)
{
 if (empty($GLOBALS['__composer_autoload_files'][$fileIdentifier])) {
 $GLOBALS['__composer_autoload_files'][$fileIdentifier] = true;
 require $file;
 }
}