<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title></title>
    </head>
    <body>
        <div>
            <a href="/index.php">home</a>
            <a href="/calculator.php">Calculator</a>
            <a href="/madLibsGame.php">Mad Libs Game</a>
        </div>
        <h2>Mad Libs Game</h2>
        <form action="madLibsGame.php" method="get">
            Color: <input type="text" name="color"> <br>
            Plural Noun: <input type="text" name="pluralNoun"> <br>
            Celebrity: <input type="text" name="celebrity"> <br>
            <input type="submit">
        </form>
        <br><br>
        <h2>Our Story</h2>
        <?php 
            $color = $_GET["color"];
            $pluralNoun = $_GET["pluralNoun"];
            $celebrity = $_GET["celebrity"];

            echo "Roses are $color <br>";
            echo "$pluralNoun are blue <br>";
            echo "I love $celebrity <br>";
        ?>
    </body>
</html>