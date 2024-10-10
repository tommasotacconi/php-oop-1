<?php 
  class Genre implements JsonSerializable {
    private string $name;
    
    public function __construct(string $_name)
    {
      $this->name = $_name;
    }

    public function jsonSerialize(): mixed {
      return $this->name;
    }
  }
?>
