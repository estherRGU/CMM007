<?php
?>
/**
 * Created by PhpStorm.
 * User: 1417777
 * Date: 02/05/2016
 * Time: 19:39
 */
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Superhero System</title>
</head>
<body>
<header>
    <h1>The Super-Superhero System</h1>
    <h2>Display all Battles</h2>
    <p><a href="index.php">Return to home...</a></p>
</header>
<main>
    <?
    include("Database.php");

    if(isset($_GET['id'])) {
    $superheroID = $_GET['id'];
    $sql_query = "SELECT * FROM superherobattles where superheroID = '$superheroID'";
    }
    else{
    $sql_query = "SELECT * FROM superherobattles";
    }
    $result = $db->query($sql_query);
    while($row = $result->fetch_array())
    {
        $firstname = $row['firstName'];
        $lastname = $row['lastName'];
        $mainSuperpower = $row['mainSuperpower'];
        $villianFought = $row['villianFought'];
        echo "<article>
                <p>This superhero known as <strong>{$firstname} {$lastname}</strong> recently fought<strong>{$villianFought}</strong>Using
   <strong>{$mainSuperpower}</strong></p>";
    }
    ?>
</main>
</body>
</html>
