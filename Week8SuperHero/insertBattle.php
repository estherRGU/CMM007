<?php
/**
 * Created by PhpStorm.
 * User: 1417777
 * Date: 02/05/2016
 * Time: 21:19
 */

include("Database.php");

$superheroID = $_POST["superhero"];
$villian = $_POST["villian"];

$sql = "INSERT INTO battles (superheroID, villianFought) VALUES ('$superheroID', '$villan')";

if (mysqli_query($db, $sql)) {
}else {
    echo "Error" . $sql . "<br>" . mysqli_error($db);
}
header("location:index.php");
?>