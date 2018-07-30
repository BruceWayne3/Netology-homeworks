<?php
header ("Content-Type: text/html; charset=utf-8");
// Начало ДЗ
interface InterfaceNameForProduct
{
    public function __construct ($price, $name, $model, $category);
    public function getDescribe();
}
abstract class Product implements InterfaceNameForProduct //суперкласс
{
    public $price;
    public $name;
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
/**
 * Дочерний класс
 */
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
        echo "Цена: {$this->price} руб. Машина {$this->name}, модель - {$this->model}, из категории {$this->category} имеет скорость {$this->speed} км/ч и цвет {$this->color}" . '<br />';
    }
}
/**
 * Эксплуатация кода
 */
$car1 = new Car(5000000, 'BMW', 6, 'Иномарка');
$car1->setSpeed(260)->setColor('Green');
$car1->getDescribe();
$car2 = new Car(200000, 'VAZ', 2107, 'Отечественный автопром');
$car2->setSpeed(180)->setColor('White');
$car2->getDescribe();
/**
 *Интерфейс
 */
echo '<br>';
interface InterfaceNameForTv
{
    public function changeColor($color);
    public function getDescribe();
}
class Tv extends Product implements InterfaceNameForTv //суперкласс
{
    protected $color = 'Black';
    protected $material = 'Plastic';
    public function changeColor($color)
    {
      $this->color = $color;
    }
    public function getDescribe()
    {
        echo "Цена: {$this->price} руб.. Телевизор {$this->name}, модель - {$this->model}, из категории - {$this->category}. Цвет ТВ: {$this->color}. Материал ТВ: {$this->material}. ". '<br />';
    }
}
/**
 * Эксплуатация кода
 */
$tv1 = new Tv(15000, 'LG', 'LA860V', '42"');
$tv1->getDescribe();
$tv2 = new Tv(18000, 'SAMSUNG', 'UE49M5000AK', '49"');
$tv2->changeColor('Grey');
$tv2->getDescribe();
/**
 *Интерфейс
 */
echo '<br>';
interface InterfaceNameForPen
{
    public function getMaterial($material);
    public function getInk($ink);
    public function getColor($color);
    public function setColor ();
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
    public function setColor ()
    {
        echo '"У меня есть цвет!" ';
    }
    public function getDescribe()
    {
        echo "Цена: {$this->price} руб.. Это {$this->name},  модель - {$this->model}, из категории - {$this->category}, материал изготовления - " . $this->material . ", чернила - " . $this->ink . ", цвет корпуса - " .  $this->color . '<br />';
    }
}
/**
 * Эксплуатация кода
 */
$pen1 = new Pen(15, 'Ручка', 'Аташе', 'шариковые ручки');
$pen1->getMaterial('пластик')->getInk('черные')->getColor = ('синий');
$pen1->getDescribe();
// echo $pen1->getDescribe() . '<br />';
$pen2 = new Pen(8000, 'Ручка', 'Паркер', 'перьевые ручки');
$pen2->getMaterial('металл')->getInk('синие')->getColor = ('серый');
echo 'Вдруг резко крикнула: ';
$pen2->setColor();
$pen2->getDescribe();
/**
 *Интерфейс
 */
echo '<br>';
interface InterfaceNameForDuck
{
    public function showConstant ();
    public function getAge ($age);
    public function getDescribe();
}
class Duck extends Product implements InterfaceNameForDuck//суперкласс
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
          echo 'Утке осталось недолго :(, потому что ей ' .  $age. ' лет <br />';
        }
        else {
          echo 'Утка ещё молода! Ей всего ' .  $age. ' лет <br />';
      }
    }
    public function getDescribe()
    {
        echo "Цена: {$this->price} руб.. Отряд - " . Duck::CONSTANT . ". Это {$this->name},  вид - {$this->model}, из категории - {$this->category}, пол - {$this->sex}\n";
    }
}
/**
 * Эксплуатация кода
 */
$duck1 = new Duck(5000, 'Утка', 'Кряква', 'Речная');
$duck1->getDescribe();
$duck1->getAge(13);
$duck2 = new Duck(15000, 'Утка', 'Мандаринка', 'Декоративная');
$duck2->getDescribe();
$duck2->getAge(5);
echo '<br>';
/**
 * Дочерний класс
 */
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
        echo "Цена: {$this->price} руб. Это {$this->name}, модель - {$this->model}, из категории - {$this->category}, сделана из материала {$this->material}. ";
        if ($this->name == 'Тетрадь') {
            echo "Коичество страниц - {$this->pages} <br>";
        } else {
            echo "Объём - {$this->volume} мл <br>";
        }
    }
}
/**
 * Эксплуатация кода
 */
$product1 = new ProductClass(10, 'Тетрадь', 'в клетку', 'Канцелярка');
$product1->getMaterial('Бумага')->setCopybook(100);
$product1->getDescribe();
$product2 = new ProductClass(50, 'Чашка', 'чайная', 'Посуда');
$product2->getMaterial('Керамика')->setCup(300);
$product2->getDescribe();
class Cart
{
    public $countProduct = [];
    public function addProduct($product){
        $product->numberProduct = 1; //если это убрать то тоже буде работать, только не будет учитывать первый
        if (array_key_exists($product->name, $this->countProduct)) {
            $this->countProduct[$product->name]->numberProduct++;
            echo '<br>Товар добавлен в корзину<br>';
        }
        else{
            $this->countProduct[$product->name] = $product;
        }
    }
    public function deleteAllProduct($product) { //убрать все одинаковые продукты из корщины
        echo $product->name . ' удалён';
        unset($this->countProduct[$product->name]);
    }
    public function deleteOneProduct($product) { //убрать 1 одинаковый продукт
        if (array_key_exists($product->name, $this->countProduct)) {
            if ($this->countProduct[$product->name]->numberProduct > 0) {
                 $this->countProduct[$product->name]->numberProduct--;
                 echo 'Товар ' . $this->countProduct[$product->name]->name. ' удалён из корзины<br>';
            }
        }
    }
}
final class Order extends Cart
{
    public function showAllProduct() { //показать список продуктов и количество
        $resCountProduct = 0;
        foreach($this->countProduct as $key => $value) {
            echo 'Товар ' . $key . ', количество: ' . $value->numberProduct . '<br>';
            $resCountProduct = $resCountProduct + $value->numberProduct;
        }
        echo '<br>' . 'Общее количество товаров: ' . $resCountProduct;
    }
    public function sum() { //подсчитать общую сумму продукта
        $res = 0;
        foreach ($this->countProduct as $key => $value) {
            $res = $res + ($value->price * $value->numberProduct);
        }
        return $res;
    }
}
// $cart = new Cart();
//$cart->deleteOneProduct($pen2);
$order = new Order();
$order->addProduct($car1); //добавляю товар в корзину
$order->addProduct($car2); //добавляю товар в корзину
$order->addProduct($tv1); //добавляю товар в корзину
$order->addProduct($tv2); //добавляю товар в корзину
$order->addProduct($pen1); //добавляю товар в корзину
$order->addProduct($pen2); //добавляю товар в корзину
$order->addProduct($duck1); //добавляю товар в корзину
$order->addProduct($duck2); //добавляю товар в корзину
$order->addProduct($product1); //добавляю товар в корзину
$order->addProduct($product2); //добавляю товар в корзину
echo '<br>';
$order->showAllProduct();
echo '<br>';
echo '<br>';
echo 'На сумму: ' . $order->sum();
 ?>