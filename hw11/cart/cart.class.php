<?php
namespace cart;
var_dump($pathToFile);die();
class Cart
{
    public $countProduct = [];
    public function addProduct($product){
        $product->numberProduct = 1; //если это убрать то тоже буде работать, только не будет учитывать первый
        if(array_key_exists($product->name, $this->countProduct)){
            $this->countProduct[$product->name]->numberProduct++;
            echo '<br>Товар добавлен в корзину<br>';
        }
        else{
            $this->countProduct[$product->name] = $product;
        }
    }
    public function deleteAllProduct($product){ //убрать все одинаковые продукты из корщины
        echo $product->name . ' удалён';
        unset($this->countProduct[$product->name]);
    }
    public function deleteOneProduct($product){ //убрать 1 одинаковый продукт
        if(array_key_exists($product->name, $this->countProduct)){
            if($this->countProduct[$product->name]->numberProduct > 0){
                 $this->countProduct[$product->name]->numberProduct--;
                 echo 'Товар ' . $this->countProduct[$product->name]->name. ' удалён из корзины<br>';
            }
        }
    }
}
}
 ?>