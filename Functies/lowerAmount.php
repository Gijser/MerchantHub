<?php


if (isset($_GET['id'])){
$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$db = "ledger";

$conn = mysqli_connect($dbhost, $dbuser, $dbpass, $db);
$p_id = $_GET['id'];
$query = ("UPDATE products SET `p_aantal` = `p_aantal` -1 WHERE p_id = $p_id");
$sql = mysqli_query($conn, $query);

}

header("Location: ../index.php");