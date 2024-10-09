<?php 
class Movie {
  // Defines istance variables
  private string $title;
  private string $genre;
  private int $duration;
  private string $original_language;
  private string $release_date;
  private array $cast;

  // Defines constructor function
  public function __construct(string $_title, string $_genre, int $_duration, $_original_language, $_release_date, $_cast)
  {
    $this->title = $_title;
    $this->genre = $_genre;
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
