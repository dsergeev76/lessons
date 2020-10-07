<?php
  header('Content-Type: text/html; charset=utf-8');
  class Cat{
    public $age;
    public $weight;
    public $strength;
    function __construct($a,$w,$s){
      $this->age = $a;
      $this->weight = $w;
      $this->strength = $s;
    }
    function fight($another_cat){
      $score_cat = 0;
      $score_another_cat = 0;
      if ($this->age > $another_cat->age) {
        $score_cat++;
      } else if ($this->age < $another_cat->age) {
        $score_another_cat++;
      }
      if ($this->weight > $another_cat->weight) {
        $score_cat++;
      } else if ($this->weight < $another_cat->weight) {
        $score_another_cat++;
      }
      if ($this->strength > $another_cat->strength) {
        $score_cat++;
      } else if ($this->strength < $another_cat->strength) {
        $score_another_cat++;
      }
      if ($score_cat>$score_another_cat) {
        return "Победа";
      } else if ($score_cat<$score_another_cat) {
        return "Поражение";
      } else {
        return "Ничья";
      }
    }
  }
  $barsik = new Cat(4,8,8);
  $vaska = new Cat(5,5,8);
  echo $barsik->fight($vaska);
?>
