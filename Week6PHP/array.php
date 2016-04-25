<?php
/**
 * Created by PhpStorm.
 * User: 1417777
 * Date: 25/04/2016
 * Time: 10:17
 *
 * In an attempt to stop the chaos that is engulfing Aberdeen, the provision of specs, mugs, and sausage rolls is being examined. Create a web page then initiate an array called $provisionedActivities. In this array store the stings Specs, Drugs, and Rock and Roll.
 * Print out the array using code similar to the following:
 * foreach($provisionedActivity as $x) {
 * print "<p>$x</p>";
 * }
 * Create a line of code that does each of the following, followed by a print statement of the array as a whole
 *      1.	Mugs are being modified to the friendly alternative of hugs
 *      2.   Sausage Rolls are to be removed. (the print output for this may be strange…why?)
 */

$provisionedActivity = array("specs", "mugs", "sausage rolls");

echo "<h1>Original Array</h1>";
printmyArray($provisionedActivity);

$provisionedActivity[1] = "hugs"; // modifies position 1 (re)

echo "<h1>Swap in Hugs</h1>";
printmyArray($provisionedActivity);

unset($provisionedActivity[2]); // removes the array in position 2

echo "<h1>Take out Sausage Rolls</h1>";
printmyArray($provisionedActivity);



//I've made a function to print out the array instead of writing the same code repeatedly above.
function printmyArray($provisionedActivity)
{
    foreach($provisionedActivity as $x) {
        echo "<p>" . $x . "</p>";
    }
}