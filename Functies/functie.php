<?php
require('Database.php');

function ledgerOverzicht()
{

    $merchantId = $_SESSION["merchant"];

    $mysqli = db_connect();
    $data = db_getData("SELECT p_id, p_standard ,p_naam, p_aantal, p_gold FROM products WHERE p_merchantId = $merchantId");


    if ($data->num_rows > 0) {
        echo "<table><tr><th>Productnaam</th><th>Aantal</th><th>Gold</th></tr>";
        // output data of each row
        while ($row = $data->fetch_assoc()) {
            echo "<tr><td>" . $row["p_naam"] . "</td>
            <td>" . $row["p_aantal"] . " </td>
            <td>" . $row["p_gold"] . "</td>
            <td><a href=../Functies/addAmount.php?id=" . $row['p_id'] . ">+1</a></td>
            <td><a href=../Functies/lowerAmount.php?id=" . $row['p_id'] . ">-1</a></td>
            </td>";
        }
        echo "</table>";
    } else {
        echo "0 results";
    }
}

function moneyOverzicht()
{

    $merchantId = $_SESSION["merchant"];

    if (isset($merchantId)) {

        $mysqli = db_connect();
        $data = db_getData("SELECT m_gold FROM merchants WHERE m_id = $merchantId");


        if ($data->num_rows > 0) {
            echo "<table><tr><th>gold</th></tr>";
            // output data of each row
            while ($row = $data->fetch_assoc()) {
                echo "<tr><td>" . $row["m_gold"] . "</td>
                </td>";
            }
            echo "</table>";
        } else {
            echo "0 results";
        }
    }
}

function ledgerAdd()
{

    if (isset($_POST['toDB'])) {
        $dbhost = "localhost";
        $dbuser = "root";
        $dbpass = "";
        $db = "ledger";

        $url = $_SESSION["URL"];
        $merchantId = $_SESSION["merchant"];
        $name = $_POST['naam'];
        $amount = $_POST['aantal'];
        $gold = $_POST['gold'];
        $silver = $_POST['silver'];
        $copper = $_POST['copper'];


        $conn = mysqli_connect($dbhost, $dbuser, $dbpass, $db);
        $sqlInsert = "INSERT INTO products(`p_merchantId`,`p_naam`, `p_aantal`, `p_gold`) VALUES ( '$merchantId', '$name', '$amount', '$gold.$silver$copper' )";

        if (mysqli_query($conn, $sqlInsert)) {
            //echo "Records inserted successfully.";
            header("Location:" . $url);
            exit;
        } else {
            echo "ERROR: Could not able to execute $sqlInsert. " . mysqli_error($conn);
        }
    }
}

function login()
{
    $dbhost = "localhost";
    $dbuser = "root";
    $dbpass = "";
    $db = "ledger";

    $conn = mysqli_connect($dbhost, $dbuser, $dbpass, $db);
}
