<?php
/*
 *Given a sequence of integers as an array, determine whether it is possible to obtain a strictly 
 *increasing sequence by removing no more than one element from the array.
 */
$sequence = [1, 3, 2];
almostIncreasingSequence($sequence);

function almostIncreasingSequence($sequence) {
    $sizeSequence = count($sequence);
    for($i=0;$i<$sizeSequence;$i++){
        $almostIncreasingSequence = true;
        $newArray = $sequence;
        unset($newArray[$i]);
        unset($prevNumber);
        foreach($newArray as $number){
            if(isset($prevNumber) && $prevNumber >= $number){
                $almostIncreasingSequence = false;
                break;
            }
            $prevNumber = $number;
        }
        if($almostIncreasingSequence){
            return true;
        }
    }
    return false;
}