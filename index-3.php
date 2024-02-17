<?php
# LOOPS


//for($i = 0; $i <= 10; $i++){
//    echo $i."</br>";
//}

# FOR
//$numbers = readline("Enter the numbers: ");
//$num_array = explode(",", $numbers);
//
//for($i=0; $i<count($num_array); $i++):
//    echo $num_array[$i]."</br>";
//endfor;


#FOREACH

//$my_numbers = [1,2,'Hi', 'What\'s up', true, false, 22.5];
//
//foreach ($my_numbers as $element):
//    echo $element."</br>";
//endforeach;


$my_products = [
  'name'=>'TV',
  'price'=>'999$',
  'mark'=>'Samsung'
];

foreach ($my_products as $my_key => $my_value):
    echo $my_key."-->".$my_value."</br>";
endforeach;