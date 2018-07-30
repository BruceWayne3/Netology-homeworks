<?php
// var_dump($pathToFile);die();
function myAutoload($classNameWithNamespace)
{
  //учитываем пространство имён
  $pathToFile = $_SERVER['DOCUMENT_ROOT'] //ищем файлы начиная
    . str_replace('\\', DIRECTORY_SEPARATOR, $classNameWithNameSpace)
    . 'class.php'; //добавляем расширение
  if (file_exists($pathToFile)) {
    include "$pathToFile";
  }
  //Данная функция будет работать, если namespace дублирует 1
}
spl_autoload_register('myAutoload');
 ?>