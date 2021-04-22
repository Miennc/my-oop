<?php
// lop truu tuong Animal
abstract class Animal
{
    protected $name;
    
    abstract function run();  // phuong thuc truu tuong voi khai báo với tu khoa abstract và không có thân hàm
}

// lớp Dog kế thừa từ lớp trừu tượng Animal  
class Dog extends Animal
{
    public function run () //phương thức này được override lại và viết thân hàm cho nó
    {
        echo "Con chó chạy bằng 4 chân";
    }
}

// lớp Person kế thừa từ lớp trừu tượng Animal 
class Person extends Animal
{
    public function run () //phương thức này được override lại và viết thân hàm cho nó
    {
        echo "Con người chạy bằng 2 chân";
    }
}
$s = new Dog();
echo $s->run();