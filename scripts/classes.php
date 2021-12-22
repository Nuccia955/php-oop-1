<?php
class Movie {
    //VARIABLES
    public $title;
    public $duration;
    public $country;
    public $year;
    public $genre;
    public $weft;
    public $favorite;

    //CONSTRUCT
    function __construct($title, $genre, $weft, $favorite)
    {
        $this->title = $title;
        $this->genre = $genre;
        $this->weft = $weft;
        $this->favourite = $favorite;
    }

    //METHODS
    public function addFavorite() {
        if($this->favourite) {
            return 'Favorite';
        } //boolean
    }
}
?>