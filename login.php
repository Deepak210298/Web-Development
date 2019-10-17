<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
    
    $cnect = mysqli_connect("localhost", "root", "", "sample project");
    
    $Email_id = $_POST['emailId'];
    $security = $_POST['passwd'];
    
    $passcode = "select email, password from registration where email ='".$Email_id."' and  password = '". $security."'";
    $rnnn = mysqli_query($cnect, $passcode);          

    if(mysqli_num_rows($rnnn)>0)
    {
        echo 'Data is exist';
    }
    else
        echo 'Wrong credential';
?>
