<?php

interface InterfaceNameForProduct
{
    public function __construct ($name, $model, $category);
    
}
class Product implements InterfaceNameForProduct 
{
    protected $name;
    protected $model;
    protected $category;
    public function __construct ($name, $model, $category)
    {
        $this->name = $name;
        $this->category = $category;
        $this->model = $model;
    }
}

interface InterfaceNameForCar
{
    public function setSpeed($speed);
    public function setColor($color);
    public function getDescribe();
}
class Car extends Product implements InterfaceNameForCar
{
    protected $speed;
    protected $color;
    public function setSpeed($speed)
    {
        $this->speed = $speed;
        return $this;
    }
    public function setColor($color)
    {
        $this->color = $color;
        return $this;
    }
    public function getDescribe()
    {
        echo "{$this->name}, model - {$this->model}, from category {$this->category} has speed {$this->speed} km/h and color {$this->color}" . '<br />';
    }
}

$car1 = new Car('Toyota', 'Prado', 'Японский автомобиль');
$car1->setSpeed(260)->setColor('Black');
$car1->getDescribe();
$car2 = new Car('Audi', 'q8', 'Немецкий автомобиль');
$car2->setSpeed(220)->setColor('White');
$car2->getDescribe();

echo "<pre>";
interface InterfaceNameForTv
{
    public function changeColor($color);
    public function getDescribe();
}
class Tv extends Product implements InterfaceNameForTv 
{
    protected $color = 'Black';
    protected $material = 'Plastic';
    public function changeColor($color)
    {
      $this->color = $color;
    }
    public function getDescribe()
    {
        echo "Телевизор {$this->name}, модель - {$this->model}, из категории - {$this->category}. Цвет ТВ: {$this->color}. Материал ТВ: {$this->material}. ". '<br />';
    }
}

$tv1 = new Tv('Sony', 'KD-49XE7096BR2', '4k"');
$tv1->getDescribe();
$tv2 = new Tv('SAMSUNG', 'UE-55MU6100UX', 'Smart TV"');
$tv2->changeColor('Grey');
$tv2->getDescribe();

echo "<pre>";
interface InterfaceNameForPen
{
    public function getMaterial($material);
    public function getInk($ink);
    public function getColor($color);
    public function getDescribe();
}
class Pen extends Product implements InterfaceNameForPen
{
    protected $material = "пластик";
    protected $ink = "черные";
    protected $color = "синий";
    public function getMaterial($material)
    {
        $this->material = $material;
        return $this;
    }
    public function getInk($ink)
    {
        $this->ink = $ink;
        return $this;
    }
    public function getColor($color)
    {
        $this->color = $color;
        return $this;
    }
    public function getDescribe()
    {
        echo "{$this->name},  модель - {$this->model}, из категории - {$this->category}, материал изготовления - " . $this->material . ", чернила - " . $this->ink . ", цвет корпуса - " .  $this->color . '<br />';
    }
}

$pen1 = new Pen('Ручка', 'Аташе', 'шариковые ручки');
$pen1->getMaterial('пластик')->getInk('черные')->getColor = ('синий');
$pen1->getDescribe();

$pen2 = new Pen('Ручка', 'Паркер', 'перьевые ручки');
$pen2->getMaterial('металл')->getInk('синие')->getColor = ('серый');
$pen2->getDescribe();

echo "<pre>";
interface InterfaceNameForDuck
{
    public function showConstant ();
    public function getAge ($age);
    public function getDescribe();
}
class Duck extends Product implements InterfaceNameForDuck
{
    const CONSTANT = 'Bird';
    protected $sex = 'Female';
    protected $age = 12;
    public function showConstant ()
    {
      echo self::CONSTANT;
    }
    public function getAge ($age)
    {
        if ($this->age < $age)
        {
          echo 'Утка уже старая, ей ' .  $age. ' лет <br />';
        }
        else {
          echo 'Утка молодая, ей ' .  $age. ' лет <br />';
      }
    }
    public function getDescribe()
    {
        echo 'Отряд - ' . Duck::CONSTANT . ". {$this->name},  вид - {$this->model}, из категории - {$this->category}, пол - {$this->sex}\n";
    }
}

$duck1 = new Duck('Утка', 'Кряква', 'Речная');
$duck1->getDescribe();
$duck1->getAge(14);
$duck2 = new Duck('Утка', 'Чирок-клоктун', 'Речная');
$duck2->getDescribe();
$duck2->getAge(6);
echo "<pre>";

interface InterfaceNameForProductClass
{
    public function setCopybook($pages);
    public function setCup($volume);
    public function getDescribe();
}
final class ProductClass extends Product implements InterfaceNameForProductClass
{
    protected $pages;
    protected $volume;
    protected $material;
    public function getMaterial($material)
    {
        $this->material = $material;
        return $this;
    }
    public function setCopybook($pages)
    {
        $this->pages = $pages;
        return $this;
    }
    public function setCup($volume)
    {
        $this->volume = $volume;
        return $this;
    }
    public function getDescribe()
    {
        echo "{$this->name}, модель - {$this->model}, из категории - {$this->category}, сделана из материала {$this->material}. ";
        if ($this->name == 'Тетрадь') {
            echo "Коичество страниц - {$this->pages}\n";
        } else {
            echo "Объём - {$this->volume} мл\n";
        }
    }
}

$product1 = new ProductClass('Тетрадь', 'в клетку', 'Канцелярка');
$product1->getMaterial('Бумага')->setCopybook(48);
$product1->getDescribe();
$product2 = new ProductClass('Чашка', 'чайная', 'Посуда');
$product2->getMaterial('Керамика')->setCup(300);
$product2->getDescribe();
 ?>