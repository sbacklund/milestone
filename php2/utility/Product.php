<?php

class Product
{
    private $id;
    private $name;
    private $price;
    private $unittype;
    private $picturepath;
    private $stock;
   
    public function __construct($id,$n,$picpath,$prodprice,$untype,$amount)
    {
        $this->id = $id;
        $this->name = $n ;
        $this->picturepath = $picpath;
        $this->price =$prodprice ;
        $this->unittype = $untype;
        $this->stock = $amount ;
    }
    ///////////////////////////////////GETTERS//////////////////////////////////
    public function getId()
    {
        return $this->id;
    }
    public function getName()
    {
        return $this->name;
    }
    public function getPrice()
    {
        return $this->price;
    }
    public function getUnittype()
    {
        return $this->unittype;
    }
    public function getPicturepath()
    {
        return $this->picturepath;
    }
    public function getStock()
    {
        return $this->stock;
    }
    //////////////////////////SETTERS/////////////////////////////////////////
    public function setId($id)
    {
        $this->id = $id;
    }
    
    public function setName($name)
    {
        $this->name = $name;
    }
    public function setPrice($price)
    {
        $this->price = $price;
    }
    public function setUnittype($unittype)
    {
        $this->unittype = $unittype;
    }
    public function setPicturepath($picturepath)
    {
        $this->picturepath = $picturepath;
    }
    public function setStock($stock)
    {
        $this->stock = $stock;
    }
    
    
}

