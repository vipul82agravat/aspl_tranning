<?php
 include 'db_conn.php';
    $db_conn=$conn;

$sql = "SELECT * FROM customer";
if ($res = mysqli_query($db_conn, $sql)) {
    if (mysqli_num_rows($res) > 0) {
        echo "<table>";
        echo "<tr>";
        echo "<th>Cusomter name</th>";
        echo "<th>Cusomter Address</th>";
        echo "<th>Status</th>";
        echo "</tr>";
        while ($row = mysqli_fetch_array($res)) {
            echo "<tr>";
            echo "<td>".$row['customer_name']."</td>";
            echo "<td>".$row['customer_address']."</td>";
            echo "<td>".$row['customer_status']."</td>";
            echo "</tr>";
        }
        echo "</table>";
        mysqli_free_result($res);
    }
    else {
        echo "No matching records are found.";
    }
}
else {
    echo "ERROR: Could not able to execute $sql. "
                                .mysqli_error($db_conn);
}
mysqli_close($db_conn);
?>
