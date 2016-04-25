<?php
/**
 * Created by PhpStorm.
 * User: 1417777
 * Date: 25/04/2016
 * Time: 10:42
 *
 * •	Create an array with the names of some of the people in your class and your lecturers. These people will be entered into the lottery. Aim for about 10-15 people in total.
 * •	After you’ve created your list, sort it and randomly select a name from the list.
 * •	When you have your winning name, print it to the screen in caps so everyone knows how awesome the winner is. This person has won all of the specs.
 * •	Take this name out of the array and create a winner for all of the mugs, and finally for all of the sausage rolls.
 *
 */

//Create the array
$lotteryArray = array("Esther", "Emmanuel", "Fred", "Rachel", "Yemi", "Lud-wig", "Michal", "Shiva" , "Chris", "Obed");

//Sort the array
sort($lotteryArray);

//Select the winner
$winner = (rand(0,count($lotteryArray))) - 1;

//Prints the winner
echo "<p>The winner of all the specs is " . strtoupper($lotteryArray[$winner]) . "</p>";

//Remove the person from the array
unset($array[$winner]);

//Do the same again for mugs
$winner = (rand(0,count($lotteryArray))) - 1;
echo "<p>The winner of all the mugs is " . strtoupper($lotteryArray[$winner]) . "</p>";
unset($array[$winner]);

//and the sausuage rolls
$winner = (rand(0,count($lotteryArray))) - 1;
echo "<p>The winner of all the sausage rolls is " . strtoupper($lotteryArray[$winner]) . "</p>";

?>