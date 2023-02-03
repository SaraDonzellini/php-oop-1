<?php

class Movies {
  public $title;
  public $year;
  public $genre;
  public $director;


  function __construct($_title, $_year, $_genre, $_director)
  {
    $this->title = $_title;
    $this->year = $_year;
    $this->genre = $_genre;
    $this->director = $_director;
  }


  public function GetTitle(){
    return $this->title;
  }
  public function GetYear(){
    return $this->year;
  }
  public function GetGenre(){
    return $this->genre;
  }
  public function GetDirector(){
    return $this->director;
  }

  public function toString() {
    return $this->GetTitle() .' - '. $this->GetYear() .' - '. $this->GetGenre() .' - '. $this->GetDirector();
}
}