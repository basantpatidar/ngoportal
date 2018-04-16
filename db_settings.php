<?php
/**
 * Created by PhpStorm.
 * User: ag94123n
 * Date: 3/7/2018
 * Time: 12:22 AM
 */

//DB connection details
$db_host = "localhost";         //host address
$db_name = "ngoportal";       //DB name
$db_user = "root";              //DB username
$db_pass = "root";              //DB password (if any)

//Creating a new sqli object with database connection parameters
$mysqli = new mysqli($db_host, $db_user, $db_pass, $db_name);
GLOBAL $mysqli;

if(mysqli_connect_errno()){
    //displaying the error for connection
    print("Connection Failure: ".mysqli_connect_errno());
    exit();
}else{
    //displaying success for conncection
    print("Connection Successfull");
}
?>