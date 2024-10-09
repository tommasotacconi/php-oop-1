<?php 
require_once __DIR__ . '/../classes/Genre.php';
require_once __DIR__ . '/../classes/Movie.php';

$green_book = new Movie('Green book', 130, '', '', [], new Genre('biografico'), new Genre('drammatico'));
$lady_bird = new Movie('Lady bird', 93, '', '', [], new Genre('commedia'));
var_dump($green_book);
var_dump($lady_bird);
?>
