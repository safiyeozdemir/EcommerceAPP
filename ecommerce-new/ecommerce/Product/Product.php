<?php

namespace Product;

class Product implements iProduct
{

    private $id;
    private $image;
    private $name;
    private $price;
    private $currency;
    private $status;
    private $category;
    private $subCategory;

    public function __construct($details = null)
    {
        if ($details !== null) {
            $this->id = $details->id;
            $this->image = $details->image;
            $this->name = $details->name;
            $this->price = $details->price;
            $this->currency = $details->currency;
            $this->status = $details->status;
            $this->category = $details->category;
           // $this->subCategory = $details->subCategory;
        }
    }

    public function getProductId(): int
    {
        return $this->id;
    }

    public function getProductImage(int $productId): string
    {


            return \Db::$list[$productId]['image'];

    }
/*
    public function getProductImage(): string
    {

        foreach (glob("view/*.jpg") as $image) {
            include \Db::$list;
        }
        return $ProductImage;

    }
*/
    public function getProductList(): array
    {
        return \Db::$list;
    }

    public function getPrice(): float
    {
        return $this->price;
    }

    public function getCurrency(): string
    {
        return $this->currency;
    }

    public function getCategory(int $productId): string
    {

    }

    public static function getName(int $productId): string
    {
        $productName = \Db::$list[$productId]['name'];
        try {
            if (is_null($productName)) {
                throw new \Exception('ürün adı null', 5001);
            } elseif ($productName === 'Whiskas Dog Dry Feed') {
                throw new \Exception('çok güzel yakaladık !', 5002);
            }
            return $productName;
        } catch (\Exception $e) {
            /*echo $e->getFile().'<br />';
            echo $e->getLine().'<br />';
            echo $e->getCode().'<br />';
            echo $e->getMessage().'<br />';*/
            if ($e->getCode() === 5001) {

                return '';
            } else {
                return $productName;
            }
        }
    }

    public function productStatus(int $productId): string
    {

    }

    public function __get($name)
    {
        if (isset($this->$name)) {
            $this->cpu;
        } else {
            return null;
        }
    }

}