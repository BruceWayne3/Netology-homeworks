<?php
// header ("Content-Type: text/html; charset=utf-8");
namespace classes\Pen;
/**
 *Интерфейс
 */
echo "<pre>";
// interface InterfaceNameForPen
// {
//     public function getMaterial($material);
//     public function getInk($ink);
//     public function getColor($color);
//     public function setColor ();
//     public function getDescribe();
// }
class Pen extends classes\Product implements \InterfaceNameForPen
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
 ?>