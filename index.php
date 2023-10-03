<?php

class Product {
    
    private $id, $name, $price;

    public function __construct($id, $name, $price)
    {
        $this->id = $id;
        $this->name = $name;
        $this->price = $price;

        $this->getFormattedPrice();
    }

    private function getFormattedPrice() {
        return $this->price = number_format($this->price, 2);
    }

    public function showDetails () {
        echo "Product Details: \n -ID: {$this->id} \n -Name: {$this->name} \n -Price: \${$this->price} ";
    }
}


$product = new Product(1, 'T-shirt', 19.99);
$product->showDetails();
