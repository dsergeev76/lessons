<?php
  header('Content-Type: text/html; charset=utf-8');
  
  class BigAnimal {
    function getSize(){
      return "как динозавр";
    }
  }
  
  class SmallAnimal {
      function getSize(){
      return "как кошка";
    }
  }
  
  class Goose extends SmallAnimal {
    function getSize(){
      return "Гусь маленький, ".parent::getSize();;
    }
  }
  
  class Dragon extends BigAnimal {
    function getSize(){
      return "Дракон большой, ".parent::getSize();;
    }
  }
  
  $goose = new Goose();
  $dragon = new Dragon();
  echo $goose->getSize()."<br>";
  echo $dragon->getSize();
?>
