<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title></title>
    </head>
    <body>
        <?php 
            $isTall = false;
            $isMale = false;

            if ($isMale && $isTall){
                echo "You are a tall male.";
            } elseif ($isMale && !$isTall){
                echo "You are a short male.";
            } elseif (!$isMale && $isTall){
                echo "You are a tall, but not a male.";
            } else {
                echo "You are short, but not a male.";
            }
        
        ?>
    </body>
</html>