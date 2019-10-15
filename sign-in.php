<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

    $firstname = $_POST['fname'];
    $lastname = $_POST['lname'];
    $email = $_POST['email'];
    $contact = $_POST['contact'];
    $password = $_POST['password'];
    
    $conn = mysqli_connect("localhost", "root", "", "sample project");
    
    $q = "insert into registration(firstname, lastname, email, contact, password)
          values('$firstname', '$lastname', '$email', '$contact', '$password')";
    
    $run = mysqli_query($conn, $q);
    
    if($run == TRUE){
        echo 'data inserted successfully';
    } else {
        echo 'Error :';
    }
    
?>