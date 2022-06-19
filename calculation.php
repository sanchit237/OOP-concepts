<?php

class Calculation{
    public $a, $b, $c;

    public function multiply() {
        $this->c = $this->a * $this->b;
        return $this->c;
    }

    public function add() {
        $this->c = $this->a + $this->b;
        return $this->c;
    }

    public function sub() {
        $this->c = $this->a - $this->b;
        return $this->c;
    }

    public function divide() {
        $this->c = $this->a / $this->b;
        return $this->c;
    }

}

//class initialization
$c1 = new Calculation();

//assigning values to properties
$c1->a = 20;
$c1->b = 10;

//calling methods

echo "<p>" . $c1->multiply() . "</p>";
echo "<p>" . $c1->add() . "</p>";
echo "<p>" . $c1->sub() . "</p>";
echo "<p>" . $c1->divide() . "</p>";