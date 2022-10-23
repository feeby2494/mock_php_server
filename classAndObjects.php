<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title></title>
    </head>
    <body>
        <?php 
            class Book {
                var $title;
                var $author;
                var $pages;

                //constructor
                function __construct($aTitle, $aAuthor, $aPages){
                    $this->title = $aTitle;
                    $this->author = $aAuthor;
                    $this->pages = $aPages;
                }
            }

            // An object- an instance of a class
            $book1 = new Book("Harry Potter", "JK Rowling", 400);
            // $book1->title = "Harry Potter";
            // $book1->author = "JK Rowling";
            // $book1->pages = 400;

            $book2 = new Book("Lord of the Rings", "Tolkien", 700);
            // $book2->title = "Lord of the Rings";
            // $book2->author = "Tolkien";
            // $book2->pages = 700;


            echo $book1->author;
            echo $book2->author;

        ?>
    </body>
</html>