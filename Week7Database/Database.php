<?php
/**
 * Created by PhpStorm.
 * User: 1417777
 * Date: 25/04/2016
 * Time: 22:22
 */
dedefine('DB_SERVER','ap-cdbr-azure-east-c.cloudapp.net');
define('DB_USERNAME','b6d74ce4980e5b');
define('DB_PASSWORD','f19b9429');
define('DB_DATABASE','rgu1417777');
$db = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);
?>