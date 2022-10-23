<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title></title>
    </head>
    <body>
        <h2>While Loop</h2>
        <?php 
            $index = 1;

            while($index <= 10) {
                echo $index . "<br>";
                $index ++;
            }
        ?>
        <h2>Do-While Loop</h2>
        <?php 
            $index = 6;

            do {
                echo $index . "<br>";
                $index ++;
            } while($index <= 5);
        ?>
    </body>
</html>