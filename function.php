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
        <!-- <h2>Login</h2>
        <form action="login.php" method="post">
           

            <input type="submit">
        </form> -->
        <?php 
            // function to say "hi" to user
            function sayHi($name){
                echo "Hello $name" . "<br>";
            }

            function cube($num){
                return $num * $num * $num;
                
            }

            sayHi("Jamie");
            sayHi("Sumi");
            $cubeResult = cube(4);
            echo $cubeResult . "<br>";
        ?>
    </body>
</html>