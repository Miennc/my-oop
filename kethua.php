<?php 
class a{
var $name =' mien';
public function m(){
    echo ' hello word';
}
}
class b extends a{   // đây là class b kế thừa lại class a và có thể thêm thuộc tính hoặc phương thưc;
 public function n(){
     echo ' đây là function con';
 }
}
$s = new b();
echo $s->name;
echo $s->m();
echo '<br/>';
echo $s-> n();
?>