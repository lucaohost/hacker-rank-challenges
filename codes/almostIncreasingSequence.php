<?php
/*
 *Given a sequence of integers as an array, determine whether it is possible to obtain a strictly 
 *increasing sequence by removing no more than one element from the array.
 */
$sequence = [1, 2, 1, 2];
almostIncreasingSequence($sequence);

function almostIncreasingSequence($sequence) {
      $numOfChanges = 0;
      $removingNumber = 0;
      $removingPrevNumber = 0;
      $possibleChange = 0;
      foreach($sequence as $key => $number){
            if(isset($prevNumber) && $prevNumber >= $number){
                  $numOfChanges++;
                  if(array_key_exists($key-2,$sequence)){
                        $antePrevNumber = $sequence[$key-2];
                        if($antePrevNumber >= $number){
                              $removingNumber++;         
                        }
                  }
                  if(array_key_exists($key+1,$sequence)){
                        $nextNumber = $sequence[$key+1];
                        if($prevNumber >= $nextNumber){
                              $removingPrevNumber++;         
                        }
                  }
                  if($removingPrevNumber > $removingNumber){
                        $possibleChange = $removingNumber;                         
                  }else{
                        $possibleChange = $removingPrevNumber;
                  }
                  if($numOfChanges + $possibleChange > 1){
                        return false;
                  }
                  $possibleChange = 0;
                  $removingPrevNumber = 0;
                  $removingNumber = 0;
            }
            $prevNumber = $number;
      }
      if($numOfChanges === 1){
            return true;
      }else{
            return false;
      }
}
