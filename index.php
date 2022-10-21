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
        <?php 
            echo("Hello World");
            echo "<h1>My title</h1>";
            echo "<hr>";
            echo "<p>This is my site.</p>";
        ?>
        <h2>My story:</h2>
        <?php 
            $characterName = "John";
            $characterAge = 35;

            echo "There once was a man named $characterName. <br>";
            echo "He was $characterAge years old. <br>";
            echo "He really liked the name $characterName.  <br>";
            echo "But didn't like being $characterAge. <br>";
        ?>

        <h2>Data Types</h2>
        <?php 
            $phrase = "This is a string"; //This is a string
            $age = 30; //This is an integer
            $gpa = 3.7; //This is a float
            $isMale = false; //This is a boolean
            $isNull = NULL; //This is null

            echo "<p>This is a string: $phrase</p>";
            echo "<p>This is an integer: $age</p>";
            echo "<p>This is a float: $gpa</p>";
            echo "<p>This is a boolean: $isMale</p>";
            echo "<p>This is null: $isNull</p>";

        ?>
        <h2>Working with strings</h2>
        <?php 
            $phrase = "Stuff";
            echo strtolower($phrase) . "<br>";

            echo strtoupper($phrase) . "<br>";
            echo strlen($phrase) . "<br>";

            echo $phrase[0] . "<br>";

            $phrase[0] = "B";
            echo $phrase . "<br>";
            echo "Replace" . "<br>";
            echo str_replace("B", "S", $phrase) . "<br>";

            
            echo substr($phrase, 1, 4);
        ?>
        <h2>Working with numbers</h2>
        <?php 
            echo 4;
            echo -40;
            echo 3.8;
            echo "<br>";

            echo 5+9;
            echo "<br>";
            echo 10 % 3;
            echo "<br>";

            echo (4 + 5) * 10;
            echo "<br>";

            $num  = 10;
            echo $num;

            echo "<br>";

            $num++;
            echo $num;
            echo "<br>";
            $num--;
            echo $num;

            echo "<br>";

            $num += 25;
            echo $num;

            echo "<br>";

            echo abs(-100);
            echo "<br>";

            echo pow(2, 4);

            echo "<br>";

            echo sqrt(144);
            echo "<br>";

            echo max(2, 10);
            echo "<br>";

            echo min(2, 10);
            echo "<br>";

            echo round(3.2);
            echo "<br>";

            echo ceil(3.3);
            echo "<br>";

            echo floor(3.9);
            echo "<br>";
        ?>
        <h2>Getting user input</h2>
        <form action="index.php" method="get">
            Name: <input type="text" name="name"/>
            <br>
            Age: <input type="number" name="age"/>
            <input type="submit"/>
        </form>
        
        Your name is: <?php echo $_GET["name"]?><br>
        Your age is: <?php echo $_GET["age"]?>
        <br>
    </body>
</html>