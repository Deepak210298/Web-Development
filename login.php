<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

    $username = $_POST['uname'];
    $password = $_POST['password'];
    
    $cnect = mysqli_connect("localhost", "root", "", "sample project");
    
    $queri = "insert into login(username, password) values('$username', '$password')";
    
    $rn = mysqli_query($cnect, $queri);
    
    if($rn == TRUE){
        echo 'data inserted';
    } else {
        echo 'error !!';
    }
    
?>