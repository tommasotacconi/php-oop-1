<?php 
class Movie {
  // Defines istance variables
  private string $title;
  private array $genre;
  private int $duration;
  private string $original_language;
  private string $release_date;
  private array $cast;

  // Defines constructor function
  public function __construct(string $_title, int $_duration, string $_original_language, string $_release_date, $_cast, Genre $_genre_main, Genre $_genre_secondary = null)
  {
    $this->title = $_title;
    $this->genre[] = $_genre_main;
    if ($_genre_secondary) {$this->genre[] = $_genre_secondary;}
    $this->duration = $_duration;
    $this->original_language = $_original_language;
    $this->release_date = $_release_date;
    $this->cast = $_cast;
  }

  public function showGeneralInfo() {
    "Film $this->title, genere $this->genre, lingua originale $this->original_language, durata $this->duration";
  }
}

?>
