<?php
    include 'db_conn.php';
    $db_conn=$conn;

    $emData=$_POST;
    function insertRecords($db_conn,$emData){
        $customer_name=isset($emData['first_name']) ? $emData['first_name'] : '';
        $customer_address=isset($emData['last_name']) ?  $emData['last_name'] : '';

        try{

            $query='DELETE  FROM customer WHERE customer_id=3';
            mysqli_query($db_conn,$query);
            echo "Delete Records Susccfully";
        }
        catch(Exception $e){
            return $e.'Error in Delete Records';
        }
    }

    insertRecords($db_conn,$emData);
?>
