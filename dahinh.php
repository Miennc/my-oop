<?php 
class animal{
    public function eat(){
        echo 'động vật ăn';
    }

}
class heo extends Animal{
    public function eat(){
        echo 'heo ăn cám';
    }
}
class dog extends Animal{
    public function eat(){
        echo 'dog ăn nkfrkk';
    }
}
function geteat($a){
    foreach($a as $animal){
        echo $animal->eat().'<br/>';
    }
}
$a =[
    new Animal,
    new heo,
    new dog
];
geteat($a);
?>