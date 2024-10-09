<?php 
require_once __DIR__ . '/classes/Movie.php';

$green_book = new Movie('Green book', 'biografico', 130, '', '', []);
$lady_bird = new Movie('Lady bird', 'commedia', 93, '', '', []);
var_dump($green_book);
var_dump($lady_bird);
?>
