<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jackpot PHP</title>
</head>
<body>

<h1>Jackpot PHP</h1>

<br>

<?php

$win_probability = (1/2**5)*100;

// Code for number 1
$chosenNumber1 = rand (0,1);

if ($chosenNumber1 == 1) {
    echo "The first random number is 1";
    echo "<br>";
    }
    else {
    echo "The first random number 0";
    echo "<br>";
    }

// Code for number 2
$chosenNumber2 = rand (0,1);

if ($chosenNumber2 == 1) {
    echo "The second random number is 1";
    echo "<br>";
    }
    else {
    echo "The second random number 0";
    echo "<br>";
    }

// Code for number 3
$chosenNumber3 = rand (0,1);

if ($chosenNumber3 == 1) {
    echo "The third random number is 1";
    echo "<br>";
    }
    else {
    echo "The third random number 0";
    echo "<br>";
    }

// Code for number 4
$chosenNumber4 = rand (0,1);

if ($chosenNumber4 == 1) {
    echo "The fourth random number is 1";
    echo "<br>";
    }
    else {
    echo "The fourth random number 0";
    echo "<br>";
    }

// Code for number 5
$chosenNumber5 = rand (0,1);

if ($chosenNumber5 == 1) {
    echo "The fifth random number is 1";
    echo "<br>";
    }
    else {
    echo "The fifth random number 0";
    echo "<br>";
    }

// Jackpot calculation and messaging.

$jackpot = ($chosenNumber1+$chosenNumber2+$chosenNumber3+$chosenNumber4+$chosenNumber5);

switch($jackpot) {
    case 5:
        echo "<br>";
        echo "Congratulations! You've won the jackpot!";
        echo "<br>";
        echo "There was a probability of $win_probability% for winning it! You got lucky!";
        break;
    case 0:
        echo "<br>";
        echo "Almost congratulations! You found five zeros, which is really difficult to do! Unfortunately, you didn't win anything.";
        break;
    default:
        echo "<br>";
        echo "Thanks for playing! Try again some other time.";
        break; 
    }
?>

</body>
</html>