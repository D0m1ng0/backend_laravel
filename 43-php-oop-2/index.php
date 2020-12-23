<!-- //nell'ottica di quanto visto a lezione definire classe Square e classe Cube (2 e 3 dimensioni); definire, oltre a variabili d'istanza, costruttore, e toString, i metodi per il calcolo dell'area/volume e del perimetro/superficie cercando di sfruttare al meglio ereditarieta' e polimorfismo; testare le classi definite con alcune istanze per verificare che sia tutto corretto
//NOTES :
//area quadrato: lato * lato
//perimetro quadrato: 4 * lato
//volume cubo: lato * lato * lato
//superficie cubo: 6 * lato * lato
//N.B.: definire ogni variabile e metodo pubblico come detto in classe -->

<?php

//creo la classe quadrato, la costruisco, e creo una funzione di informazioni che verranno prese da toString()
class Square {
  public $side;
  public function __construct($side) {
    $this -> side = $side;
  }
  public function area() {
    return $this -> side * $this -> side;
  }
  public function perimeter() {
    return 4 * $this -> side;
  }
  public function getInfo() {
    return "side: " . $this -> side . "<br>"
        . "area: " . $this -> area() . "<br>"
        . "perimeter: " . $this -> perimeter() . "<br>";
  }
  public function __toString() {
    return "Square: <br>" . $this -> getInfo();
  }
}

//estendo la classe quadrato alla classe cubo
class Cube extends Square {
  public function volume() {
    return $this -> area() * $this -> side;
  }
  public function surface() {
    return 6 *  $this -> area();
  }
  public function getInfo() {
    return "side: " . $this -> side . "<br>"
        . "volume: " . $this -> volume() . "<br>"
        . "surface: " . $this -> surface() . "<br>";
  }
  public function __toString() {
    return "Cube: <br>" . $this -> getInfo();
  }
}

//istanzio un quadrato e ne stampo le proprietà
$s1 = new Square(10);
echo $s1;

echo "<br>////////////////<br>";


//istanzio un cubo e ne stampo le proprietà
$c1 = new Cube(10);
echo $c1;
