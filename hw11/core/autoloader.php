<?php
function autoloader($className)
{
    $className = str_replace('\\', DIRECTORY_SEPARATOR, $className);
    $pathToClassFile = './classes/' . DIRECTORY_SEPARATOR . $className . '.class.php';;
    $pathToInterfaceFile = './classes/.' . DIRECTORY_SEPARATOR . $className . '.interface.php';
    if (file_exists($pathToClassFile)) {
        include "$pathToClassFile";
    } elseif (file_exists($pathToInterfaceFile)) {
        include "$pathToInterfaceFile";
    }
}
function coreAutoloader($className)
{
    $className = str_replace('\\', DIRECTORY_SEPARATOR, $className);
    $pathToClassFile = 'core' . DIRECTORY_SEPARATOR . $className . '.class.php';
    if (file_exists($pathToClassFile)) {
        include "$pathToClassFile";
}
spl_autoload_register('coreAutoloader');
spl_autoload_register('autoloader');
 ?>