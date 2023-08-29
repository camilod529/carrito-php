<?php

class Products
{

    private $products = array();
    public function getProducts()
    {
        return $this->products;
    }

    public function addProduct($product, $key)
    {
        $this->products[$key] = $product;
    }


    /**
     * Set the value of products
     *
     * @return  self
     */
    public function setProducts($products)
    {
        $this->products = $products;

        return $this;
    }

}


?>