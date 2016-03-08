<?php
/**
 * Created by PhpStorm.
 * User: 1311059
 * Date: 07/03/2016
 * Time: 09:47
 */

$modules = array("CMM007", "CMM020");
foreach ($modules as $mod)
    echo $mod;


/**
 * • A persons name
• The number of specs they own
• The number of mugs they own
• The Number of sausage rolls they own
The function must then print out a ‘wanted’ banner similar to below:
Wanted: Joe Bloggs
Known to be in possession of the following items:
Specs (x)
Mugs (x)
Sausage Rolls (x)
Award for capture: £xx
Use the following equation to work out the award for capture.
????? ??? ??????? = 10 ?
(?????????? ? ????????? ? ?????????????????);
2
Call 3 instances of this method to produce wanted banners for people.
 */


function wanted($name, $specs, $mnum, $snum){
    echo "Wanted". ' ' . $name . '<br>';
    echo "Known to be in possession of the following items:";
    echo "Specs". ' ' . $specs . '<br>';
    echo "Mugs". ' ' . $mnum . '<br>';
    echo "Suausage Rolls". ' ' . $snum . '<br>';

    $award = 10 * ((pow(2, $specs*$mnum*$snum))/2);
    echo "Award for capture". ' £' . number_format($award) . '<br>';
    //echo "Award for capture". ' £' . '<br>';
}


wanted('Mavin', 5, 10, 20);
?>