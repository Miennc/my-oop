<?php 
class person{
    public $name;          // public ở đâu cũng có thể truy cập được.
    public function sleep(){
    echo ' i am sleep';
    }
}
$s = new person(); // tạo một biến sinh ra từ lớp;
$s->name= 'mien';
echo $s->name;
echo $s->sleep();
?>

