<?php



function ledgerOverzicht()
{
    $dbhost = "localhost";
    $dbuser = "gheetebrij_Qyrilan";
    $dbpass = "MNM2YNGzu1BFLaow";
    $db = "gheetebrij_Merchant";

    $conn = mysqli_connect($dbhost, $dbuser, $dbpass, $db);
    $query = "SELECT p_id, p_naam, p_aantal, p_gold, p_silver, p_copper FROM products";
    $sql = mysqli_query($conn, $query);


    if ($sql->num_rows > 0) {
        echo "<table><tr><th>Productnaam</th><th>Aantal</th><th>Gold</th><th>Silver</th><th>Copper</th></tr>";
        // output data of each row
        while ($row = $sql->fetch_assoc()) {
            echo "<tr><td>" . $row["p_naam"] . "</td>
            <td>" . $row["p_aantal"] . " </td>
            <td>" . $row["p_gold"] . "</td>
            <td>" . $row["p_silver"] . "</td>
            <td>" . $row["p_copper"] . "</td>
            <td><a href=./Functies/addAmount.php?id=" . $row['p_id'] . ">+1</a></td>
            <td><a href=./Functies/lowerAmount.php?id=" . $row['p_id'] . ">-1</a></td>
            </td>";
        }
        echo "</table>";
    } else {
        echo "0 results";
    }
}

function ledgerAdd()
{

    if (isset($_POST['toDB'])) {
        $dbhost = "localhost";
        $dbuser = "gheetebij_Qyrilan";
        $dbpass = "MNM2YNGzu1BFLaow";
        $db = "gheetebrij_Merchant";

        $name = $_POST['naam'];
        $amount = $_POST['aantal'];
        $gold = $_POST['gold'];
        $silver = $_POST['silver'];
        $copper = $_POST['copper'];

        $conn = mysqli_connect($dbhost, $dbuser, $dbpass, $db);
        $sqlInsert = "INSERT INTO products(`p_naam`, `p_aantal`, `p_gold`,`p_silver`,`p_copper`) VALUES ( '$name', '$amount', '$gold', '$silver','$copper' )";

        if (mysqli_query($conn, $sqlInsert)) {
            //echo "Records inserted successfully.";
            header("Location:index.php");
            exit;
        } else {
            echo "ERROR: Could not able to execute $sqlInsert. " . mysqli_error($conn);
        }
    }
}
