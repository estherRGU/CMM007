<?php
define('DB_SERVER', 'ap-cdbr-azure-east-c.cloudapp.net ');
define('DB_USERNAME', 'b6d74ce4980e5b');
define('DB_PASSWORD', 'f19b9429');
define('DB_DATABASE', 'rgu1417777');
$db = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);

 if ($db) {
     //    echo 'Successful Connection to the database <br>';
 } else {
        echo 'Failed to connect to the database';
 }

 ?>
