<?php
    $Name = $_POST['name'];
    $Email = $_POST['email'];
    $Phone= $_POST['phone'];
    $Message = $_POST['message'];
        

    //Database connection
    $conn = new mysqli('fdb28.awardspace.net','3511701_flame','flame711','3511701_flame');
   
    if(!$conn){
        die("Connection Failed :". $conn->connection_error);
    }else{
        $stmt = $conn->prepare("insert into contact(name, email, phone, message)values(?,?,?,?)");
        $stmt->bind_param("ssis",$Name, $Email, $Phone, $Message);
        $stmt->execute();
        echo "Message Sent.....";
        $stmt->close();
        $conn->close();
    }
?>