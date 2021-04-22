<?php 
interface a{
    public function b();
}
class c{
    public function m(){
        echo ' i am m';
    }
}          // kế thừa được một class nhưng implements được nhiều interface;
class d extends c implements a{ // nói trung interface hỗ trợ đa kế thừa con abs thì không;5
    public function b(){
        echo ' i am interface';
    }
}
$s = new d();
echo $s->b();
echo $s->m();