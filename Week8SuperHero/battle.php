<?php
?>
/**
 * Created by PhpStorm.
 * User: 1417777
 * Date: 02/05/2016
 * Time: 19:38
 */
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title> insert Superhero</title>
</head>
<body>
<header>
    <h1>The Super-Superhero System</h1>
    <h2>Record a Battle</h2>
    <p><a href="index.php">Return to home...</a></p>
</header>
<main>
    <form action="insertBattle.php" method="post">
        <p>Select the Superhero that faught in this battle</p><select name="superhero">
            <?
            include("Database.php");
            $sql_query = "SELECT * FROM superheros";
            $result = $db->query($sql_query);
            while($row = $result->fetch_array()) {
                $firstname = $row['firstName'];
                $lastname = $row['lastName'];
                $superheroID = $row['superheroID'];
                echo "<option value='{$superheroID}'>{$firstname} {$lastname}</option>";
            }
            ?>
        </select><br>
        <input type="text" name="villian" placeholder="villian Faught"><br>
        <input type="submit" text="Record Battle">
    </form>
</main>
</body>
</html>
