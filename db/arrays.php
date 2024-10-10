<?php 
require_once __DIR__ . '/../classes/Genre.php';
require_once __DIR__ . '/../classes/Movie.php';

$green_book = new Movie('Green book', new Genre('biografico'), 130, '', '', [], 'https://pad.mymovies.it/filmclub/2018/09/091/locandina.jpg', new Genre('drammatico'));
$lady_bird = new Movie('Lady bird', new Genre('commedia'),93, '', '', [], 'https://musicimage.xboxlive.com/catalog/video.movie.8D6KGWXNV1WP/image?locale=en-us&mode=crop&purposes=BoxArt&q=90&h=300&w=200&format=jpg');
$man_who_knew_infinity = new Movie("L'uomo che vide l'infinito", new Genre('biografico'), 108, '', '', [], 'https://pad.mymovies.it/filmclub/2015/08/117/imm.jpg');
// var_dump($green_book);
// var_dump($lady_bird);
?>
