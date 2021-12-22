<?php
class Movie {
    //VARIABLES
    public $title;
    public $duration;
    public $country;
    public $year;
    public $genre;
    public $weft;

    //CONSTRUCT
    function __construct($title, $genre, $weft)
    {
        $this->title = $title;
        $this->genre = $genre;
        $this->weft = $weft;
    }

    //METHODS
    
}
?>