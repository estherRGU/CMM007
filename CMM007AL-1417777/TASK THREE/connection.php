<?php
/**
 * Created by PhpStorm.
 * User: 1417777
 * Date: 04/05/2016
 * Time: 12:05
 */
define('DB_SERVER', 'ap-cdbr-azure-east-c.cloudapp.net');
 define('DB_USERNAME', 'b054b8d2e13b2f');
define('DB_PASSWORD', '3e9407ae');
 define('DB_DATABASE', 'CMM007ALDB-1417777');
 $db = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);

 if ($db) {

   //  echo "Successful Connection to the database <br>"  ;
 } else {

     echo "Failed to connect to the database";
 }




 ?>
