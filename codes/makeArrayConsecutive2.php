<?php

/*
 * Ratiorg got statues of different sizes as a present from CodeMaster for his birthday, 
 * each statue having an non-negative integer size. Since he likes to make things perfect,
 * he wants to arrange them from smallest to largest so that each statue will be bigger 
 * than the previous one exactly by 1. He may need some additional statues to be able 
 * to accomplish that. Help him figure out the minimum number of additional statues needed.


 */
makeArrayConsecutive2([6, 2, 3, 8]);

function makeArrayConsecutive2($statues) {
    $additionalStatues = 0;
    $maxValue = max($statues);
    $numberStatues = count($statues);
    for($i = 0; $i < $numberStatues; $i++){
        if(in_array($statues[$i]+1,$statues)){
            continue;
        }else if($statues[$i]+1 < $maxValue){
            $statues [] = $statues[$i]+1;
            $additionalStatues++;
            $numberStatues++;
            $i = -1;
        }
    }
    return $additionalStatues;
}
