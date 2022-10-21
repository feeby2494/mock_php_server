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
        <h2>Login</h2>
        <form action="login.php" method="post">
            Username: <input type="text" name="username">
            <br>
            Password: <input type="password" name="password">

            <input type="submit">
        </form>
        <?php 
            //echo dirname(__dir__);
            echo $_POST["password"];
        ?>
    </body>
</html>