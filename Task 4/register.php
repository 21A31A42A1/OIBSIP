<?php
    $fname=$_POST['fname'];
    $lname=$_POST['lname'];
    $dob=$_POST['dob'];
    $email=$_POST['email'];
    $password=$_POST['password'];

    $conn=new mysqli('localhost','root','','login');
    if($conn->connect_error){
        die('Connection Failed : '.$conn->connect_error);
    }else{
        $stmt = $conn->prepare("insert into details(fname,lname,dob,email,password)values(?,?,?,?,?)");
        $stmt->bind_param("sssss",$fname, $lname,$dob, $email, $password);
        $stmt->execute();
        echo "Registered Successfullyy!!";
        $stmt->close();
        $conn->close();
    }
?>