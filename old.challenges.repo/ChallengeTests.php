<?php

require('./AutoLoader/AutoLoader.php');

use tmp\challenges\ChallengeTwo\ChallengeTwo;
use tmp\challenges\ChallengeThree\ChallengeThree;

$challengeTwo = new ChallengeTwo();
$challengeTwo->test([[9, 8, 3, 4, 6]], [4, 6, 8, 9, 3]);
$challengeTwo->test([[9, 8, 3, 4, 6, 15, 22, 1, 2]], [2, 4, 6, 8, 22, 15, 9, 3, 1]);
$challengeTwo->test([[1, 2, 1, 2, 5, 25, 22, 11, 66, 46]], [2, 2, 22, 46, 66, 25, 11, 5, 1, 1]);

$challengeThree = new ChallengeThree();
$initDate = new DateTime('1985-10-22'); $finalDate = new DateTime('2020-10-30'); 
$dDiff = $initDate->diff($finalDate);
$challengeThree->test(['22/10/1985', '30/10/2020'], $dDiff->format('%r%a'));
$initDate1 = new DateTime('2018-10-25'); $finalDate1 = new DateTime('2020-10-31'); 
$dDiff = $initDate1->diff($finalDate1);
$challengeThree->test(['25/10/2018', '31/10/2020'], $dDiff->format('%r%a'));
$initDate2 = new DateTime('2019-04-23'); $finalDate2 = new DateTime('2020-04-29');
$dDiff = $initDate2->diff($finalDate2);
$challengeThree->test(['23/04/2019', '29/04/2020'], $dDiff->format('%r%a'));


