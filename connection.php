<?php
/**
 * Created by PhpStorm.
 * User: 1311059
 * Date: 14/03/2016
 * Time: 10:19
 */

// Defining constants for Db

define(DBSERVER,"ap-cdbr-azure-east-c.cloudapp.net");
define(DB_USERNAME, "b550786636ba9d");
define(DB_PASSWORD, "70e4e13b");
define(DB_DATABASE, "appstorage");


//creating a database connection
$db = mysqli_connect(DBSERVER, DB_USERNAME, DB_PASSWORD, DB_DATABASE);


?>