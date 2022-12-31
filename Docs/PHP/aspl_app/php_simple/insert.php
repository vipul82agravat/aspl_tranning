<?php
    include 'db_conn.php';
    $db_conn=$conn;

    $emData=$_POST;
    function insertRecords($db_conn,$emData){
        $customer_name=isset($emData['first_name']) ? $emData['first_name'] : '';
        $customer_address=isset($emData['last_name']) ?  $emData['last_name'] : '';

        try{

            $query='INSERT INTO customer (customer_name, customer_address, customer_status) VALUES ("'.$customer_name.'", "'.$customer_address.'", 1)';
            mysqli_query($db_conn,$query);
            echo "Insert Records Susccfully";
            header('Location:employee_reg.php');
        }
        catch(Exception $e){
            return $e.'Error in Insert Records';
        }
    }

    insertRecords($db_conn,$emData);
?>
