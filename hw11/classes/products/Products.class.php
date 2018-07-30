<?php
namespace classes\Products;
// interface InterfaceNameForProductClass
// {
//     public function setCopybook($pages);
//     public function setCup($volume);
//     public function getDescribe();
// }
final class Products extends classes\Product implements \InterfaceNameForProductClass
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
        echo "Это {$this->name}, модель - {$this->model}, из категории - {$this->category}, сделана из материала {$this->material}. ";
        if ($this->name == 'Тетрадь') {
            echo "Коичество страниц - {$this->pages}\n";
        } else {
            echo "Объём - {$this->volume} мл\n";
        }
    }
}
 ?>