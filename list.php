<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title></title>
    </head>
    <body>
        <div>
            <?php 
                $listOfNavLinks = array("index", "calculator", "madLibsGame", "login");
                $listOfNavLinks[0] = "home";
                echo $listOfNavLinks[0] . "<br>";
                echo count($listOfNavLinks);
            ?>
            <a href="/index.php">home</a>
            <a href="/calculator.php">Calculator</a>
            <a href="/madLibsGame.php">Mad Libs Game</a>
        </div>
        <h2>List of Stuff</h2>
        <form action="list.php" method="post">
            Apples: <input type="checkbox" name="fruits[]" value="apples"><br>
            Oranges: <input type="checkbox" name="fruits[]" value="oranges"><br>
            Pears: <input type="checkbox" name="fruits[]" value="pears"><br>
            <br>
            Student's name: <input type="text" name="student">

            <input type="submit">
        </form>
        <?php 
            //asociated arrays is like a dictionary in Python or object in js
            $grades = array("Jim" => "A+", "Bill" => "C", "Jeffery" => "D");
            $fruits = $_POST["fruits"];

            

            echo $grades[$_POST["student"]]
        ?>
    </body>
</html>