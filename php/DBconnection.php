<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "web";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
if($conn)
{

}
else
  echo"database is not connected";