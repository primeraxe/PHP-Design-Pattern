<?php
class ProductCommand {
  protected $prodCmd = array();
  protected $prod;
  
  // fabriquer le produit.
  protected function make($type=null)
  {
    if($type == 'a')
      return $this->prod = new ProductA();
  else
      return $this->prod = new ProductB();
  }
  // Commander le produit.
  public function command($type=null)
  {
    $prod = $this->make($type);
    $this->prodCmd[] = $prod->getName();
  }
  public function getProdCmd()
  {
    return $this->prodCmd;
  }
}
?>