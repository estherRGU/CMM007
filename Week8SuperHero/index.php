<?php
?>
/**
 * Created by PhpStorm.
 * User: 1417777
 * Date: 02/05/2016
 * Time: 19:27
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
    <h2>Superhero Home Page</h2>
</header>
<p>What would you like to do?</p>
<ul>
    <li><a href="insertSuperhero.php">Insert a superhero</a></li>
    <li><a href="displaySuperheros.php">Insert a superhero</a></li>
    <li><a href="battle.php.php">Insert a superhero</a></li>
    <li><a href="displayBattles.php.php.php">Insert a superhero</a></li>
    <ul>
        <?
        include("Database.php");
        $sql_query = "SELECT * FROM superheros";
        $result = $db->query($sql_query);
        while($row = $result->fetch_array())
        {
            $firstname = $row['firstName'];
            $lastname = $row['lastName'];
            $id = $row['superheroID'];
            echo "<li><a href='displayBattles.php?id={$id}'>Battles for {$firstname} {$lastname}</a></li> ";

        }
        ?>
    </ul>

</ul>
</body>
</html>

