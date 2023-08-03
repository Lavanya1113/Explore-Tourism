<?php
    $username="root";
    $host="127.0.0.1:3307";
    $password="";
    $db='test';

    $mysqli=new mysqli($host,$username,$password,$db);
    if($mysqli->connect_errno){
        echo "connected";
    }
    $email_addr=$_POST['email'];
    $new_pwd=$_POST['password'];

    $retrieve_row="SELECT * FROM user_info WHERE EMAIL= '$email_addr' ";
    $result=$mysqli->query($retrieve_row);
    if($result->num_rows>0){
        while($row=$result->fetch_assoc()){
            $update="UPDATE user_info SET USER_PASSWORD='$new_pwd' WHERE EMAIL='$email_addr' ";
            if($mysqli->query($update)){
                echo "successfully updated";
            }
        }
    }
    else{
        echo "no user found";
    }

?>