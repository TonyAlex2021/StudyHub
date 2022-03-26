<?php

/* Fuction to Open the Connection */

function OpenCon()
{
//Define your host here.
$hostname = "127.0.0.1";

//Define your database username here.
$username = "root";

//Define your database password here.
$password = "";

//Define your database name here.
$dbname = "mydb";

 $conn = new mysqli($hostname, $username, $password,$dbname);
 
 if (!$conn)
 
 {
 
 die('Could not connect: ' . $conn->error);
 
 }

 return $conn;
 
}

/*  Function to Close the connection */
 
 function CloseCon($conn)
 {
 $conn -> close();
 }



?>