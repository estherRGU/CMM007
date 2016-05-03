<?php

/**
 * Created by PhpStorm.
 * User: 1417777
 * Date: 02/05/2016
 * Time: 20:40
 */
include("Database.php");
$username = $_POST['firstname'];
$password = $_POST['lastname'];
$password = $_POST['Superpower'];

$sql = "INSERT INTO superheros (firstName, lastName, mainSuperpower) VALUES ('$firstname', '$lastname','$superpower')";

if (mysqli_query($db, $sql)) {
} else {
    echo "Error:" . $sql . "<br>" . mysqli_error($db);
}
header("location:index.php");
?>