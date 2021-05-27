<?php
define('DB_SERVER', 'gheetebrij.gc-webhosting.nl');
define('DB_USERNAME', 'gheetebrij_gheetebrij');
define('DB_PASSWORD', 'bHdmHP1FrKHH');
define('DB_NAME', 'gheetebrij_Merchant');



function db_connect(){
    $mysqli = new mysqli(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
    return $mysqli;
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
