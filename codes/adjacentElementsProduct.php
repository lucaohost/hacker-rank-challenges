<?php

// function adjacentElementsProduct($inputArray) {
//     $largestProduct = null;
//     foreach($inputArray as $key => $number){
//         if($key == 0 || $key == count($inputArray) - 1){
//             $rightAdjascent = $number * $inputArray[$key+1];
//             $leftAdjascent = null;
//         }else{
//             $rightAdjascent = $number * $inputArray[$key+1];
//             $leftAdjascent = $number * $inputArray[$key-1];;
//         }
//         if(is_null($largestProduct) || ($leftAdjascent > $largestProduct || $rightAdjascent > $largestProduct)){
//             $largestProduct = $rightAdjascent > $leftAdjascent ? $rightAdjascent : $leftAdjascent; 
//         }
//     }
//     return $largestProduct;
// }

function adjacentElementsProduct($inputArray) {
    $largestProduct = null;
    foreach($inputArray as $number){
    	$rightAdjascent = next($inputArray) === false ? null : $number * $rightAdjascent;
    	$leftAdjascent = prev($inputArray) === false ? null : $number * $rightAdjascent;
        if(is_null($largestProduct) || ($leftAdjascent > $largestProduct || $rightAdjascent > $largestProduct)){
            $largestProduct = $rightAdjascent > $leftAdjascent ? $rightAdjascent : $leftAdjascent; 
        }
    }
    return $largestProduct;
}
