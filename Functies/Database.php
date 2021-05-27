<?php
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_NAME', 'ledger');



function db_connect(){
    $mysqli = new mysqli(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
    return $mysqli;
}

function OpenCon()
{
    $dbhost = "localhost";
    $dbuser = "root";
    $dbpass = "";
    $db = "ledger";
    $conn = mysqli_connect($dbhost, $dbuser, $dbpass, $db) or die("Connect failed: %s\n" . $conn->error);


    return $conn;
}

function db_getData($query){
    $mysqli = db_connect();
    $result = $mysqli->query($query);
    $mysqli -> close();
    return $result;

}

function CloseCon($conn)
{
    $conn->close();
}
