<?php 
require_once __DIR__ . '/db/arrays.php';
$filmsList[] = $green_book;
$filmsList[] = $lady_bird;
$filmsList[] = $man_who_knew_infinity; 
$json = json_encode($filmsList, JSON_PRETTY_PRINT);
echo "<script>var data = $json;</script>";
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Movie OOP</title>
  <!-- Link -->
  <!-- Custom style -->
  <link rel="stylesheet" href="./style/style.css">
</head>
<body>
  
  
  <div id="app">
    <main>
      <div class="container-md">
        <h1>I miei film</h1>

        <!-- Contenuti mostrati sotto forma di elenco di singoli blocchi o card -->
          <ul class="row film-list">
            <li class="col" v-for="film in filmList">
              <img :src="film['poster url']" alt="">
              <div class="text-content-wrapper">
                <span v-html="film.title" class="title"></span><br>
                <span v-html="film.genre[0]" class="genre"></span><br>
                <span v-html="film.duration" class="duration"></span>
              </div>
            </li>
          </ul>     
      </div>
    </main>
  </div>
  
  <!-- Vue cdn -->
  <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
  <!-- Vue app -->
  <script src="./jscript/script.js"></script>
</body>
</html>

<!-- final commit -->
