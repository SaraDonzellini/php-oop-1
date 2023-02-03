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
}