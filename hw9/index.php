<?php
class CarClass
 {
    public $name;
    public $speed;
    public $color;
    public function __construct($name, $speed, $color)
    {
      $this->name = $name;
      $this->speed = $speed;
      $this->color = $color;
    }
}
$car1 = new CarClass('Toyota', 260, 'black');
echo $car1->name . ' со скоростью ';
echo $car1->speed . ' км/ч и цветом ';
echo $car1->color . '<br/>';

$car2 = new CarClass('Audi', 220, 'white');
echo $car2->name . ' со скоростью ';
echo $car2->speed . ' км/ч и цветом ';
echo $car1->color;
echo "<pre>";

class TvClass
{
    public $name;
    public $color = 'Black';
    public $material = 'Plastic';
    public function __construct($name, $color, $material)
    {
      $this->name = $name;
      $this->color = $color;
      $this->material = $material;
    }
}
$tv1 = new TvClass('Thomson', 'Black', 'Plastic');
echo $tv1->name  . ' цвет ';
echo $tv1->color . ' сделан из ';
echo $tv1->material . '<br />';

$tv2 = new TvClass('SAMSUNG', 'Grey', 'Plastic');
echo $tv2->name  . ' цвет ';
echo $tv2->color . ' сделан из ';
echo $tv1->material;
echo "<pre>";

class Pen
{
    public $name;
    public $material;
    public $ink;
    public $color;

    public function __construct($name, $material, $ink, $color)
    {
      $this->name = $name;
      $this->material = $material;
      $this->ink = $ink;
      $this->color = $color;
    }
}
$pen1 = new Pen('ручка', 'пластик', 'черные', 'синий');
echo $pen1->name . ', материал изготовления - ';
echo $pen1->material . ', чернила - ';
echo $pen1->ink . ', цвет корпуса - ';
echo $pen1->color . '<br />';

$pen2 = new Pen('ручка', 'металл', 'синие', 'серый');
echo $pen2->name . ', материал изготовления - ';
echo $pen2->material . ', чернила - ';
echo $pen2->ink . ', цвет корпуса - ';
echo $pen2->color;
echo "<pre>";

class Duck
{
    const CONSTANT = 'Bird';
    public $sex = 'Female';
    public $age = 12;
    public function showConstant ()
    {
      echo self::CONSTANT;
    }
    public function __construct ($age)
    {
      
        if ($this->age < $age)
        {
          echo 'Утка уже старая, ей ' .  $age. ' лет <br />';
        }
        else {
          echo 'Утка молодая, ей ' .  $age. ' лет <br />';
        }
    }
}
$duck1 = new Duck(14);
echo "Тип живого существа - " . Duck::CONSTANT;
echo '; пол - ' . $duck1->sex . ';' . '<br />';
$duck2 = new Duck(6);
echo "Тип живого существа - " . Duck::CONSTANT;
echo '; пол - ' . $duck2->sex . ';' . '<br />';
echo "<pre>";

class Product
{
    public $name;
    public $category;
    public $material;
    public function __construct ($name, $category, $material)
    {
      $this->name = $name;
      $this->category = $category;
      $this->material = $material;
    }
}
$product1 = new Product('Тетрадь', 'Канцелярка', 'Бумага');
echo $product1->name . ' из категории ';
echo $product1->category . ', сделана из материала ';
echo $product1->material . '<br />';
$product2 = new Product('Чашка', 'Посуда', 'Керамика');
echo $product2->name . ' из категории ';
echo $product2->category . ', сделана из материала ';
echo $product2->material . '<br />';
