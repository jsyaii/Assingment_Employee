<?php

$servername = "localhost";
$username = "root";
$password= "";
$dbname ="company_management";

$connection=new mysqli('localhost', 'root', '', 'company_management');

// if($connection->connect_error)
// {

// echo "fail";
// }
// else
// {
// echo "successful" . "<br>";
// }
 
$connection->select_db($dbname);
// $connection = new mysqli($servername, $username, $password);

// if($connection->connect_error)
// {

// echo "fail";
// }
// else
// {
// echo "successful" . "<br>";
// }



?>