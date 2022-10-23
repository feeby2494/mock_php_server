<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title></title>
    </head>
    <body>
        <form action="betterCalculator.php" method="post">
            First Number: <input type="number" step="0.1" name="num1"> <br>
            OP: <input type="text" name="op"> <br>
            Second Number: <input type="number" step="0.1" name="num2"> <br>
            
        
            <input type="submit">
        </form>
        <?php 
            $num1 = $_POST["num1"];
            $op = $_POST["op"];
            $num2 = $_POST["num2"];

            function calculate($num1, $op, $num2) {
                if($op == "+") {
                    return $num1 + $num2;
                } elseif($op == "-") {
                    return $num1 - $num2;
                } elseif($op == "*") {
                    return $num1 * $num2;
                } elseif($op == "/") {
                    return $num1 / $num2;
                } else {
                    return "ERROR: Please use only: +, -, *, or / as operators.";
                }
            }

            if($num1 && $op && $num2) {
                echo "<br>Result: <br>" . calculate($num1, $op, $num2);
            }

        ?>
    </body>
</html>