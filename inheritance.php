<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title></title>
    </head>
    <body>
        <?php
            class Chef {
                private $title;

                function __construct($title){
                    $this->setTitle($title);
                }

                function getTitle(){
                    return $this->title;
                }

                function setTitle($title){
                    $this->title = $title;
                }

                function makeChicken(){
                    echo "The " . $this->getTitle() . " makes chicken <br>";
                }
                function makeSalad(){
                    echo "The " . $this->getTitle() .  " makes salad <br>";
                }
                function makeSpecialDish(){
                    echo "The " . $this->getTitle() .  " makes bbq ribs <br>";
                }
            }
            
            class ItalianChef extends Chef{
                function makePizza(){
                    echo "The " . $this->getTitle() . " makes pizza <br>";
                }
                //over ridding function
                function makeSpecialDish(){
                    echo "The " . $this->getTitle() . " makes Chicken Parm <br>";
                }
            }

            $chef = new Chef("General Chef");

            $chef->makeChicken();
            $chef->makeSpecialDish();

            $italianChef = new ItalianChef("Italian Chef");

            $italianChef->makeChicken();
            $italianChef->makeSpecialDish();

        ?>
    </body>
</html>