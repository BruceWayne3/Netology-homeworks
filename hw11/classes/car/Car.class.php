<?php
// header ("Content-Type: text/html; charset=utf-8");
namespace classes\Car;
class Car extends classes\Product implements \InterfaceNameForCar
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
 ?>