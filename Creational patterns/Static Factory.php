<?php  
// la classe factory
final class ProductFactory
{
    public static function factory(string $type): Product
    {
        if ($type == 'a')
            return new ProductA();
        else
            return new ProductB();
    }
}

interface Product
{
    public function display();
}

class ProductA implements Product
{
    public function display()
    {
        echo 'Product A';
    }
}

class ProductB implements Product
{
    public function display()
    {
        echo 'Product B';
    }
}
?>
