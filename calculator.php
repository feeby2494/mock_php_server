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
        <h2>Calculator</h2>
        <form action="calculator.php" method="get">
            Number one: <input type="number" name="num1">
            <br>
            Number two: <input type="number" name="num2">

            <input type="submit">
        </form>
        Answer: <?php echo $_GET["num1"] + $_GET["num2"]?>
    </body>
</html>