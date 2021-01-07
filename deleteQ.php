<?php
    include('connection.php');  

    

    $cancelqueue = $_POST['queue'];

    $sql = "UPDATE q SET queue = null WHERE queue = '$cancelqueue' AND queue_date >= CURDATE()";
    
    $query = mysqli_query($conn,$sql);

   

    if($query){
       

        
        header('location:manageQ.php');
    }
        

?>
