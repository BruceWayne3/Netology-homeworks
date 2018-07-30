<?php
// header ("Content-Type: text/html; charset=utf-8");
// namespace hw11\classes\Pen\Pen;
/**
 *Интерфейс
 */
echo "<pre>";
interface InterfaceNameForPen
{
    public function getMaterial($material);
    public function getInk($ink);
    public function getColor($color);
    public function setColor ();
    public function getDescribe();
}
 ?>