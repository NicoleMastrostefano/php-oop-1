<!-- Creare una classe Book per modellare il concetto di libro, pensando a quali proprietà e metodi potrebbero essere utili.
Poi provare a creare istanze di quella classe, ad accedere alle proprietà e metodi degli oggetti creati, a stampare gli oggetti con var_dump. -->

<?php

// creazione classe Book
class Book {

  //variabili creazione istanza
  public $title;
  public $author;
  public $year;
  
  public $genres=[];

  //costruttore con variabili creazione istanza
  function __construct($_title, $_author, $_year){
    $this->title = $_title;
    $this->author = $_author;
    $this->year = $_year;
  }

  // metodo per stampare le info dell'oggetto
  public function printBook(){
    $info = [
      'title' => $this->title,
      'author'=> $this->author,
      'year' => $this->year,
      'genres' => $this->genres,
    ];

    echo '<h2>'. $info['title'].'</h2>';
    foreach ($info as $info_key => $info_value) {
      // filtro per genere
      if ($info_key == 'genres') {
          echo '<p>'.$info_key.': ';
          foreach ($info_value as $genre_key => $genre_value) {
            echo $genre_value.' ';
          }
          echo '</p>';
      } else {
          echo '<p>'.$info_key.': '.$info_value.'<p>';
      }
    }
  }

  //metodo per ottenere le info dell'oggetto
  public function getInfo(){
    $info = [
      'title' => $this->title,
      'author'=> $this->author,
      'year' => $this->year,
      'genres' => $this->genres,
    ];
    return $info;
  }
}

//creazione nuova istanza classe book
$the_gods_themselves = new Book('The God Themeselves', 'Isaac Asimov', 1972);
// var_dump($the_gods_themselves);
$the_gods_themselves->printBook();
$the_gods_themselves=$the_gods_themselves->getInfo();


//creazione nuova istanza classe book
$the_fountains_of_paradise = new Book('The Fountains of Paradise','Arthur C. Clarke', 1979);
$the_fountains_of_paradise->printBook();
$the_fountains_of_paradise=$the_fountains_of_paradise->getInfo();
?>
