<?php

session_start();

if (isset($_GET['id'])) {

    $url = $_SESSION["URL"];
    $merchant = $_SESSION["merchant"];

    $p_id = $_GET['id'];

    $mysqli = db_connect();
    $data = db_getData("UPDATE products SET `p_aantal` = `p_aantal` +1 WHERE p_id = $p_id");

    $mysqli = db_connect();
    $data = db_getData("SELECT merchants.m_gold, products.p_gold FROM merchants INNER JOIN products ORDER BY m_gold");

    $row = $sqlGold->fetch_assoc();
    $addGold = $row["p_gold"];

    $mysqli = db_connect();
    $data = db_getData("UPDATE merchants SET `m_gold` = `m_gold` - $addGold WHERE m_id = $merchant ");

    header("Location:../pages/" . $url);
}
