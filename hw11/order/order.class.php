<?php
namespace order;
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
    public function sum(){ //подсчитать общую сумму продукта
        $res = 0;
        foreach($this->countProduct as $key => $value){
            $res = $res + ($value->price * $value->numberProduct);
        }
        return $res;
    }
}
 ?>