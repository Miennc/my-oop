<?php 
// Lớp Cha
class DongVat
{
    // Động Vật Ăn
   public function An()
    {
        echo 'Động Vật Đang Ăn';
    }
}
// Lớp Con
class ConHeo extends DongVat
{
    public function An()
    {
        parent::An(); // cái này là chống gi đè 
        echo 'Con Heo Đang Ăn Cám';
    }
}
// Khai Báo Lớp on
$conheo = new ConHeo();
// Gọi Hàm Ăn Trong Lớp ConHeo
$conheo->An();


?>