<?php
////echo 'salam';
//
//$my_name = 'Intigam';
//$my_age = 25;
//$my_2_age = '26';
//echo "$my_age , $my_2_age";

//define("_name", "intigam");
//echo _name;
//echo "</br> is my friend";



//$my_value = 'Intigam';
//$my_number = 557;
//echo $my_value[6];
//
//echo "</br>";
//print $my_number %3 ;


//$my_value = 453;
//
//$my_value %= 2;
//
//echo $my_value;


//$my_name = 'Intigam';
//$my_name .= ' Guluzade';
//
//echo $my_name;


//$number = 222;
//
//echo $number++;
//++$number;
//
//echo $number;


//$num_1 = 34;
//$num_2 = 43;
//
//echo $num_2 < $num_1;


//echo 'salam';
//
//$a = 88;
//
//if($a === '88'){
//    echo '$a deyiseni 88\'e beraberdir';
//}
//elseif($a=='88'){
//    echo '$a deyiseni 88\'e mueammali beraberdir';
//}
//else{
//    echo 'Baloglan';
//}

$value = 333;
$x = null;
switch ($value){
    case 333:
        $x = '333';
        break;
    case 444:
        $x = '444';
        break;
    default:
        $x = '222';
        break;
}

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<?= $x ?>
</body>
</html>
