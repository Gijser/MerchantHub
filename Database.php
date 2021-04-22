<?php

function OpenCon()
{
    $dbhost = "localhost";
    $dbuser = "gheetebij_Qyrilan";
    $dbpass = "MNM2YNGzu1BFLaow";
    $db = "gheetebrij_Merchant";
$conn = mysqli_connect($dbhost, $dbuser,$dbpass, $db) or die("Connect failed: %s\n". $conn -> error);

return $conn;
}

function CloseCon($conn)
{
$conn -> close();
}