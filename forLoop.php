<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title></title>
    </head>
    <body>
        <div>
            <?php 
                include "nav.php";
            ?>
        </div>
        <div>
            <?php 
            $title = "My First Post";
            $author = "Jay";
            $wordcount = 400;
            include "article-header.php"; ?>

        </div>
        <h2>For Loop</h2>
        <?php 
            /*
                Comment Block
            */
            for($i = 1; $i <= 5; $i++) {
                echo "$i <br>";
            }
        ?>
        
    </body>
</html>