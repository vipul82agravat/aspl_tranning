<?php
    include 'db_conn.php';
    $db_conn=$conn;

    function insertRecords($db_conn){
        try{

            $query='UPDATE customer SET customer_name="newadded" where customer_id=2';
            mysqli_query($db_conn,$query);
            echo "Updated Records Susccfully";
        }
        catch(Exception $e){
            return $e.'Error in Updated Records';
        }
    }

    insertRecords($db_conn);
?>
