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
            // function for the Fizz Buzz issue
            for( $i = 1; $i <= 100; $i++ ) {
                if ( $i % 15 == 0 ) {
                    echo "FizzBuzz<br>";
                } elseif ( $i % 3 == 0 ) {
                    echo "Fizz<br>";
                } elseif ( $i % 5 == 0 ) {
                    echo "Buzz<br>";
                } else {
                    echo $i . '<br>';
                }         
            }
        ?>
    </body>
</html>