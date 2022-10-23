<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title></title>
    </head>
    <body>
        <?php
            class Movie {
                public $title; //visability modifiiers
                private $rating;

                function __construct($title, $rating){
                    $this->title = $title;
                    $this->setRating($rating);
                }

                function getRating(){
                    return $this->rating;
                }

                // We cannot set rating to invalid value, if we do then it's set as Not Rated
                function setRating($rating){
                    if($rating == "G" || $rating == "PG" || $rating == "PG-13" || $rating == "R" || $rating == "NR"){
                        $this->rating = $rating;
                    } else {
                        $this->rating = "NR";
                    }
                    
                }
            }

            $avengers = new Movie("Avengers", "PG-13");
            
            // trying to change rating which is a private attribute
            // $avengers->rating = "Doggy";

            echo $avengers->getRating();
            $avengers->setRating("R");
            echo $avengers->getRating();
            
        ?>
    </body>
</html>