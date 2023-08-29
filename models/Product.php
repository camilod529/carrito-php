<?php
class Product
{

    private string $name;
    private float $price;
    private string $img;
    private int $stock;


    public function __construct($name, $price, $img, $stock)
    {
        $this->name = $name;
        $this->price = $price;
        $this->img = $img;
        $this->stock = $stock;
    }







    /**
     * Get the value of name
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set the value of name
     *
     * @return  self
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get the value of price
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * Set the value of price
     *
     * @return  self
     */
    public function setPrice($price)
    {
        $this->price = $price;

        return $this;
    }

    /**
     * Get the value of img
     */
    public function getImg()
    {
        return $this->img;
    }

    /**
     * Set the value of img
     *
     * @return  self
     */
    public function setImg($img)
    {
        $this->img = $img;

        return $this;
    }

    public static function __set_state($data)
    {
        $product = new Product('', 1, '', 0);
        foreach ($data as $key => $value) {
            $product->$key = $value;
        }
        return $product;
    }

    /**
     * Get the value of stock
     */
    public function getStock()
    {
        return $this->stock;
    }

    /**
     * Set the value of stock
     *
     * @return  self
     */
    public function setStock($stock)
    {
        $this->stock = $stock;

        return $this;
    }
}


?>