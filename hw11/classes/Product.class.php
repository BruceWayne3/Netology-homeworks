<?php
// header ("Content-Type: text/html; charset=utf-8");
namespace classes;
// interface InterfaceNameForProduct
// {
//     public function __construct ($name, $model, $category);
//     public function getDescribe();
// }
abstract class Product implements \InterfaceNameForProduct //суперкласс
{
    protected $price;
    protected $name;
    protected $model;
    protected $category;
    public function __construct ($price, $name, $model, $category)
    {
        $this->price = $price;
        $this->name = $name;
        $this->category = $category;
        $this->model = $model;
    }
    abstract public function getDescribe();
}
?>