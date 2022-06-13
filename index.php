<?php
    class Movie {
      public $title;
      public $genre;
      public $language;
      public $vote;
      function __construct($_title, $_genre, $_language, $_vote = []) {
        $this->title = $_title;
        $this->genre = $_genre;
        $this->language = $_language;
        $this->vote = $_vote;
      }
      public function getMovieDetails() {
        return $this->title . "<br>" . $this->genre ."<br>". $this->language ."<br>". $this->vote; 
      }
    }

    $interStellar = new Movie("Interstellar", "Science Fiction", "Eng", "9");
    $butterflyEffect = new Movie("Butterfly Effect", "Thriller", "Eng", "7");
    $paulette = new Movie("Paulette", "Comedy", "Fra", "7" );
   $movies = [];
   $movies[] = $interStellar;
   $movies[] = $butterflyEffect;
   $movies[] = $paulette;
   var_dump($movies);
?>