
//GOAL: nell'ottica di quanto visto a lezione, generare una classe User definendo alcune variabili d'istanza che rappresentino alcune informazioni rilevanti nella registrazione di un utente in un qualsiasi sito a vostra scelta. Generare inoltre costruttore e metodo toString nelle modalita' viste in classe. Generare inoltre alcune istanze della classe e stamparne il valore attraverso la toString

<?php

//creo la classe
class User {
  public $name;
  public $mail;
  public $age;

  public function __construct($nameConstruct, $mailConstruct, $ageConstruct) {
    $this -> name = $nameConstruct;
    $this -> mail = $mailConstruct;
    $this -> age = $ageConstruct;
  }
  public function __toString() {
    return "User: <br>" . $this -> name . "<br>"
          ."mail: " . $this -> mail . "<br>"
          ."age: " . $this -> age . "<br>";
  }
}
//istanzio gli due oggetti con la stessa classe
$user1 = new User("Albert", "albert@gmail.com", 71);
$user2 = new User("Richard", "richard@gmail.com", 28);

echo $user1;
echo "<br>";
echo $user2;
