<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP test</title>
</head>
<body>
    
    <?php
        $sentence = "Good morning";
        $somone = "Alfonso";

        echo("<h1>Hello World</h1>");
        echo "<hr>";
        echo "<p> some more text </p>";
        echo $sentence;
        echo "<br>";
        echo $sentence." ".$somone;
        echo "<br>";
        echo "This is a sentence: $sentence for '$somone'. My name is stored under the '\$someone' variable";

        $value = 1000; // integer = whole number
        echo "<br>";
        echo "\$value is $value";
        echo "<br>";
        echo "\$value is a ". gettype($value);
        echo "<br>";

        echo $value;
        echo "<br>";
        $dec_value = 1000.00; // floating points / doubles / real numbers
        echo "\$dec_value is $dec_value";
        echo "<br>";
        echo "\$dec_value is a ". gettype($dec_value);
        echo "<br>";

        echo is_int($value); // This equals to 1 if true.

        echo "<br>";
        $value = "some string test";
        echo $value;
        echo "<br>";
        echo "\$value is now a " . gettype($value);


        // if statement test
        echo "<br>";
        $a = 5;
        $b = 5;
        
        if ($a > $b) {
            echo "a is bigger than b";
        } else if ($a==$b) {
            echo "a and b are equal";
        } else {
            echo "b is bigger than a";
        }
        // alternative method using the colon approach with elseif and endif
        if ($a > $b) {
            echo "a is bigger than b";
        } else if ($a==$b) {
            echo "a and b are equal";
        } else {
            echo "b is bigger than a";
        }


    ?>

</body>
</html>