<?php

$initialData = ['name' => 'Brian', 'town' => 'Caerphilly', 'age' => 41];

$json = '{"g":7, "e":5, "e":5, "k":11, "s":19}';

$numArray = array( 1, 2, 4, 6, 8, 11, 32, 54, 3, 5, 10, 25, 12);



function arraySlice($array, $start = null, $end=null){
   
    if(is_null($start) && is_null($end)){

        return $array; //checks if any of the required inputs are null , it just returns the array if they are
    }

    foreach (array_keys($array) as $keys) {
        if (!is_int($keys)) {
            
            echo "Not a numeric array.";  //error checking to make sure that the input is not an Assoc Array
            return false;   
        }
    }
    
    if(!is_array($array)){

        $array = json_decode($array, true);

    }
      
    $sliceResult = [];

    for($i = $start; $i <= $end; $i++){
        //iteration through the array to slice results 

        array_push($sliceResult, $array[$i]);
          
    }

    return $sliceResult;


}


print_r(arraySlice($numArray,3,5)); //Run Numeric Array


print_r(arraySlice($initialData, 1, 2)); //Run Assoc Array 


/*

Array
(
    [0] => 6
    [1] => 8
    [2] => 11
)
Not a numeric array. <-- result for $initialData

*/

