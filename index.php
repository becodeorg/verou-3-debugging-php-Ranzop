<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Mountain</title>
</head>
<body>
   <p> Everybody is different, the norm doesn't even exist. Only inside of our own heads. </p>
<?php

// This is a comment. 
$num1 = 1;
$num2 = 22;
// Line 16 is the exact same as line 19
$num1 += $num2;
// Line 19 does the same as line 16
$num1 = $num1 + $num2;
echo $num1;
phpinfo();


//Overwriting ini_set:
ini_set('displayt_errors', '1');
ini_set ('display_startup_errors', '1');
// mine 28 defines how strict we are with finding errors
error_reporting(E_ALL);

function new_exercise($x)
{
    $block = "<br/><hr/><br/><br/>Exercise $x starts here:<br/>";
    echo $block;
}

new_exercise(1);

$week = ["monday", "tuesday", "wednesday", "thursday", "friday", "saturday", "sunday"];
$monday = $week[0];

echo $monday;

// This should echo ` "Debugged !" `, fix it so that that is the literal text echo'ed

$str = "\"Debugged !\" Also very fun";
echo substr($str, 0, 12);




?>

<p> Everybody is different, the norm doesn't even exist. Only inside of our heads. </p>




</body>
</html>