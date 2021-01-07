<?php
  include('connection.php');
    
  $amount = $_POST['amount'];
  $queue = $_POST['queue'];
  $id_token = $_POST['id_token'];
  // $addQueueStatement = "INSERT INTO q (queue_date, customer_quantity, queue) VALUES (NOW(), '".$amount."', '".$queue."') ";

  $addQueueStatement = "INSERT INTO q (queue_date, customer_quantity, customer_ID, queue, status) VALUES (
    NOW(),
    '".$amount."',
    '".$id_token."',
    '".$queue."',
    'in'
  )";


  if ($result = $conn->query($addQueueStatement)) {
    print_r($result);
  } else {
    echo false;
  }
 
?> 

