<?php
class CarClass
 {
    public $name;
    public $speed;
    public $color = 'Black';
    public function describe()
    {
        return $this->name . " has speed " . $this->speed . " km/h and color " . $this->color;
    }
}
$car1 = new CarClass();
$car1->name = 'Toyota';
$car1->speed = 260;
$car1->color;
$car1->describe();
echo $car1->describe() . '<br />';
$car2 = new CarClass();
$car2->name = 'Audi';
$car2->speed = 220;
$car2->color = 'white';
$car2->describe();
echo $car2->describe() . '<br />';
echo "<pre>";

class TvClass
{
    public $name;
    public $color = 'Black';
    public $material = 'Plastic';
    public function changeColor($color)
    {
      $this->color = $color;
    }
}
$tv1 = new TvClass();
echo $tv1->name = 'Thomson' . ' ';
echo $tv1->color . ' made from ';
echo $tv1->material . '<br />';
$tv2 = new TvClass();
echo $tv2->name = 'SAMSUNG ';
$tv2->changeColor('Grey');
echo $tv2->color . ' made from ';
echo $tv2->material . '<br />';
echo "<pre>";

class Pen
{
    public $name = 'ручка';
    
    public function describe()
    {
        return $this->name . ", материал изготовления - " . $this->material . ", чернила - " . $this->ink . ", цвет корпуса - " .  $this->color;
    }
}
$pen1 = new Pen();
$pen1->material = "пластик";
$pen1->ink = "черные";
$pen1->color = "синий";
$pen1->describe();
echo $pen1->describe() . '<br />';
$pen2 = new Pen();
$pen2->material = "металл";
$pen2->ink = "синие";
$pen2->color = "серый";
$pen2->describe();
echo $pen2->describe();
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
?>