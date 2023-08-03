<?php
    //get user details
    $user_email=$_POST['email'];
    $email_pwd=$_POST['password'];

    $errors=[];
    if(empty($user_email)){
        $errors="email required";
    }
    if(empty($email_pwd)){
        $errors="password required";
    }
    if(!empty($errors)){
        echo "errors";
        header("Location : ../index.html");
    }

    $username="root";
    $host="127.0.0.1:3307";
    $password="";
    $db="test";

    $mysqli=new mysqli($host,$username,$password,$db);
    if($mysqli->connect_errno){
        die("failed to connect" . $mysqli->connect_error);
    }

    $email_existance="SELECT * FROM User_info WHERE EMAIL= '$user_email'";
    $pwd_existance="SELECT * FROM User_info WHERE USER_PASSWORD= '$email_pwd'";
    if(($mysqli->query($email_existance))->num_rows >0){
        if(($mysqli->query($pwd_existance)) -> num_rows >0){
            header("Location: ../main.html");
        }
        else{
           header("Location: ../index.html");
        }
    }
    else{
        echo "user not exists";
    }
    
?>