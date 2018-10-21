<?php
/*
 *Given a sequence of integers as an array, determine whether it is possible to obtain a strictly 
 *increasing sequence by removing no more than one element from the array.
 */
$sequence = [1, 3, 2, 1];
almostIncreasingSequence($sequence);

function almostIncreasingSequence($sequence) {
    $sizeSequence = count($sequence);
    for($j = 0; $j < $sizeSequence;$j++){
        $increasingOk = true;
        $testArray = $sequence;
        unset($testArray[$j]);
        foreach($testArray as $number){
            $currentNumber = current($testArray);
            $nextNumber = next($testArray);
            if($nextNumber !== false){
                prev($testArray);
                if($currentNumber >= $nextNumber){
                    $increasingOk = false;
                    break;
                }
            }
        }
        if($increasingOk){
            return true;
        }
    }
    return false;
}