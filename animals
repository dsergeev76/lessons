<?php
  header('Content-Type: text/html; charset=utf-8');
  abstract class Animal {
    private $weight;
    private $age;
    private $color;
    function __construct($weight,$age,$color){
      $this->weight = $weight;
      $this->age = $age;
      $this->color = $color;
    }
    function getWeight(){return $this->weight;}
    function getAge(){return $this->age;}
    function getColor(){return $this->color;}
    
  }
  
  class Horse extends Animal {
    function run(){return "Игого, я поскакал(а)";}
  }
  
  class Pegasus extends Horse {
    function fly(){return "Игого, я полетел(а)";}
  }

  $animal_1 = new Horse (200,5,"Белый");
  $animal_2 = new Pegasus (180,3,"Серый");
  
  //echo "Лошадь - возраст: ".$animal_1->getAge()."<br>";
  //echo "Лошадь - вес: ".$animal_1->getWeight()."<br>";
  //echo "Лошадь - цвет: ".$animal_1->getColor()."<br>";
  
  //echo "Пегас - возраст: ".$animal_2->getAge()."<br>";
  //echo "Пегас - вес: ".$animal_2->getWeight()."<br>";
  //echo "Пегас - цвет: ".$animal_2->getColor()."<br>";
  
  
  echo "Лошадь: ".$animal_1->run()."<br>";
  
  //echo "Пегас: ".$animal_2->run()."<br>";
  echo "Пегас: ".$animal_2->fly()."<br>";
  
?>
