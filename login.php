<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
    
    $cnect = mysqli_connect("localhost", "root", "", "sample project");
    
    $Email_id = $_POST['email-id'];
    $security = $_POST['passwd'];
    
    
    $i = 1;
    while ($i <= 3){
        $mail = "select email from registration";
        $rnn = mysqli_query($cnect, $mail);
        $passcode = "select password from registration";
        $rnnn = mysqli_query($cnect, $passcode);
        $dataa = mysqli_fetch_assoc($rnn);
        $dataaa = mysqli_fetch_assoc($rnnn);
        //if($Email_id == dataa && $security == dataaa){
        if("select email, password from registration where email = $Email_id or 
                password = $security"){
        ?>
        <a href="https://www.google.com">google</a>
        <?php
        }
        else{
            echo 'login unsuccessful<br>';
        }
        /*if($rnn == TRUE && $rnnn == TRUE){
            $dataa = mysqli_fetch_assoc($rnn);
            print_r($dataa);
            echo '<br>';
            $dataaa = mysqli_fetch_assoc($rnnn);
            print_r($dataaa);
        }
        else {
            echo '!!!!!!!!!!!!!!!!!!!!!!!!!!!!';
        }*/
        $i++;
    }
    

















    /*$user_check_query = "select email, password from 'sample project'.registration where"
            . "username = '$Email_id' or password = '$security' LIMIT 1";
    
    $results = mysqli_query($cnect, $user_check_query);
    $user = mysqli_fetch_assoc($results);
    
    if($user){
        if($user['username'] === $Email_id){            
            array_push($errors, "user already exist");    
        }
        if($user['password'] === $security){
            array_push($errors, "incorrect password");
        }
    }*/
    
?>
