<?php

session_start();

if (isset($_GET['id'])){
$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$db = "ledger";

$url = $_SESSION["URL"];
$merchant = $_SESSION["merchant"];

$conn = mysqli_connect($dbhost, $dbuser, $dbpass, $db);
$p_id = $_GET['id'];
$queryUpdate = ("UPDATE products SET `p_aantal` = `p_aantal` -1 WHERE p_id = $p_id");
$sqlUpdate = mysqli_query($conn, $queryUpdate);

$queryGold = ("SELECT merchants.m_gold, products.p_gold FROM merchants INNER JOIN products ORDER BY m_gold");
$sqlGold = mysqli_query($conn, $queryGold);

$row = $sqlGold->fetch_assoc();
$addGold = $row["p_gold"];

$queryLower = ("UPDATE merchants SET `m_gold` = `m_gold` + $addGold WHERE m_id = $merchant ");
$sqlLower = mysqli_query($conn, $queryLower);

header("Location:../Pages/" . $url);


}
