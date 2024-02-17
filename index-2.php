<?php
# NESTED ARRAYS

# NESTED CONST ARRAYS


define("my_array", [
   "fruits" => [
       'apple', 'orange',
   ] ,
    "vegetables"=>[
        'onion', 'lettuce'
    ]
]);


print_r(my_array['fruits'][0]);