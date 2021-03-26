<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>


<?php
    $choosenNumber = rand (1,100);

    echo "The randon number is $choosenNumber";
    echo "<br>";

    $reminder = $choosenNumber % 10;

    $decimalBracket = ($choosenNumber-$reminder)/10;

    echo "The number is in the bracket # $decimalBracket";
    echo "<br>";

    echo "The number has a reminder of $reminder when divided by 10";
    echo "<br>";

    $suffix1 = "toista";
    $suffix2 = "kummenta";
    $prefix1a = "sata";
    $suffix3 = "sataa";
    $suffix4 = "tuhatta"; 


    $decimalBracketText;

    switch($decimalBracket){
    
        case 0:
            $decimalBracketText = "";
            break;
        case 1:
            $decimalBracketText = "";
            break;
        case 2:
            $decimalBracketText = "Kaksi";
            break;
        case 3:
            $decimalBracketText = "Kolme";
            break;
        case 4:
            $decimalBracketText = "Neljä";
            break;
        case 5:
            $decimalBracketText = "Viisi";
            break;
        case 6:
            $decimalBracketText = "Kuusi";
            break;
        case 7:
            $decimalBracketText = "Seitseman";
            break;
        case 8:
            $decimalBracketText = "Kädesään";
            break;            
        case 9:
            $decimalBracketText = "Yhdesään";
            break;
        case 10:
            $decimalBracketText = "Sata";
            break;
        } 
    
    
    // This is a dialog to help verify that the right bracket was being selected.
    echo "Text 10th bracket: $decimalBracketText";
    echo "<br>";


    echo "This is how the number is written in Finnish: ";

    // For the numbers 0-9
        
    if ($decimalBracket == 0) { 
        
        switch($reminder){
        
            case 1:
                echo "yksi";
                break;
            case 2:
                echo "kaksi";
                break;
            case 3:
                echo "kolme";
                break;
            case 4:
                echo "neljä";
                break;
            case 5:
                echo "viisi";
                break;
            case 6:
                echo "kuusi";
                break;
            case 7:
                echo "seitseman";
                break;
            case 8:
                echo "kädesään";
                break;            
            case 9:
                echo "yhdesään";
                break;
            default:
                echo "nolla";
                break;
            } 
        
        }

    // For numbers 10-19

    else if ($decimalBracket == 1) { 
        switch($reminder){

            case 1:
                echo "yksi".$suffix1;
                break;
            case 2:
                echo "kaksi".$suffix1;
                break;
            case 3:
                echo "kolme".$suffix1;
                break;
            case 4:
                echo "neljä".$suffix1;
                break;
            case 5:
                echo "viisi".$suffix1;
                break;
            case 6:
                echo "kuusi".$suffix1;
                break;
            case 7:
                echo "seitseman".$suffix1;
                break;
            case 8:
                echo "kädesään".$suffix1;
                break;            
            case 9:
                echo "yhdesään".$suffix1;
                break;
            default:
                echo "kymmenen";
                break;
            } 
        }

// For numbers 20-100

    else if ($decimalBracket>=2 && $decimalBracket<=10) { 
        switch($reminder){
            case 1:
                echo $decimalBracketText.$suffix2."yksi";
                break;
            case 2:
                echo $decimalBracketText.$suffix2."kaksi";
                break;
            case 3:
                echo $decimalBracketText.$suffix2."kolme";
                break;
            case 4:
                echo $decimalBracketText.$suffix2."neljä";
                break;
            case 5:
                echo $decimalBracketText.$suffix2."viisi";
                break;
            case 6:
                echo $decimalBracketText.$suffix2."kuusi";
                break;
            case 7:
                echo $decimalBracketText.$suffix2."seitseman";
                break;
            case 8:
                echo $decimalBracketText.$suffix2."kädesään";
                break;            
            case 9:
                echo $decimalBracketText.$suffix2."yhdesään";
                break;
            case 10:
                echo $decimalBracketText;
                break;
            default:
                echo $decimalBracketText;
                break;
            } 
        }
    // else if {
    //     echo "something else";
    // }
    
    // endif;
?>
    
</body>
</html>