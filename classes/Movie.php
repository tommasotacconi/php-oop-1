<?php 
class Movie implements JsonSerializable {
  // Defines istance variables
  private string $title;
  private array $genre;
  private int $duration;
  private string $original_language;
  private string $release_date;
  private array $cast;
  private string $poster;

  // Defines constructor function
  public function __construct(string $_title, Genre $_genre_main, int $_duration, string $_original_language, string $_release_date, $_cast, string $_poster, Genre $_genre_secondary = null)
  {
    $this->title = $_title;
    $this->genre[] = $_genre_main;
    if ($_genre_secondary) {$this->genre[] = $_genre_secondary;}
    $this->duration = $_duration;
    $this->original_language = $_original_language;
    $this->release_date = $_release_date;
    $this->cast = $_cast;
    $this->poster = $_poster;
  }

  public function showGeneralInfo() {
    "Film $this->title, genere $this->genre, lingua originale $this->original_language, durata $this->duration";
  }

  public function jsonSerialize(): mixed {
    $data  = [
      'title' => $this->title,
      'genre' => $this->genre,
      'duration' => $this->duration,
      'poster url' => $this->poster,
    ];
    return $data;
  }
}

?>
