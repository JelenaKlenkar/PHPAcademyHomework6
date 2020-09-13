<?php


class Product{

    private $name;
    private $price;


  public function _construct($name =null,$price=null){
      $this ->name =$name;
      $this ->price=$price;

  }
  public function _get($name){
      if(property_exists($this,$name)){
          return $this->$name;
      }
      else{
          throw new Exception("Property doesn't exist.");
      }
  }
  public function _set($name,$value){
     if(property_exists($name,$value)){
         $this->$name=$value;
     }


  }


}



/*
$p=new Product();
$p -> name='Sunflower oil';
$p -> price='10 HRK';
echo '<br/>';
var_dump($p);*/