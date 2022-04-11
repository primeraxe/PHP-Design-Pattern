<?php  
class Car {
    public $name;
 
    public $model;
 
    public function __construct(){}
}


interface CarBuilderInterface{
   public function setName(); 
   public function setModel();
   public function getCar();
}

class BmwCarBuilder implements CarBuilderInterface{
  private $car;
   
  public function __construct(Car $car)
  {
    $this->car = $car;
  }
  public function setName()
  {
    $this->car->name = "Bmw";
  }
   
  public function setModel()
  {
    $this->car->model = "X90";
  }
  public function getCar()
  {
    return $this->car;
  }
}
 
class AudiCarBuilder implements CarBuilderInterface{
  private $car;
   
  public function __construct(Car $car)
  {
    $this->car = $car;
  }
  public function setName()
  {
    $this->car->name = "Audi";
  }
   
  public function setModel()
  {
    $this->car->model = "A7";
  }
  public function getCar()
  {
    return $this->car;
  }
}
