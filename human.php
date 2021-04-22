<?php 
class human{
public $name;   // attribute: thuộc tính  đặt bằng danh từ
public $age;
public function __construct($name)   // đây là hàm khởi tạo. có thể value trực tiếp vao đây luôn
{
   echo ' thêm tên';
     $this->name=$name;        // dùng this để trỏ đến value.
}
public function __destruct()     // đây là hàm hủy // method: hành vi đặt là động từ
{
    echo ' hủy hết cho annh';
}
public function eat(){
    echo ' i amm eat';
}
}
class teacher extends human{   

    public function sleep(){
        echo 'i am sleep';
    }
}
$mien=new human('thaiis');
$mien->age='20';
echo $mien->name;
echo $mien->age;
echo $mien-> eat(); 
$thai=new teacher('thai');   // tính kế thừa  php chỉ hỗ trợ đơn kế thừa 1 con 1 cha
$thai->age='40';
echo $thai->age;
echo $thai->eat();
echo $thai->sleep();
?>
