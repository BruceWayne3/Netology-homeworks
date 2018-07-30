<?php
// header ("Content-Type: text/html; charset=utf-8");
namespace hw11\classes\Bird\Duck;
/**
 *Интерфейс
 */
 interface InterfaceNameForBirdDuck
 {
     public function getAge ($age);
 }
final class Duck extends Bird implements InterfaceNameForBirdDuck
{
    protected $age = 12;
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
}
 ?>