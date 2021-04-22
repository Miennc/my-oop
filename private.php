<?php 
class person{
  private $name =' nguyễn văn b';
  public function getName(){  // public vẫn nằm trong class nên vẫn có thể truy cập;
     return  $this->name;
  }
}
$s= new person();
echo $s->getName();
?>