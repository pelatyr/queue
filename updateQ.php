<?php
    include('connection.php');  
    $quantity = $_POST["customer_quantity"]; 
    $Q = $_POST["Q"];

    $sql = "UPDATE q SET customer_quantity = '$quantity' WHERE Q = '$Q' ";
    
    $query = mysqli_query($conn,$sql);
    
    if($query){
        
        header('location:manageQ.php');
    }
        

?>
