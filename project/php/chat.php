<?php
    $username="root";
    $host="127.0.0.1:3307";
    $password="";
    $db='test';

    $mysqli=new mysqli($host,$username,$password,$db);
    if($mysqli->connect_errno){
        echo "connected";
    }

    $errors=[];
    $user=$_POST['user'];
    $query=$_POST['query'];
    if(empty($user)){
        $errors="user not empty";
    }
    if(empty($query)){
        $errors="no query entered";
    }
    if(!empty($errors)){
        header("Location : ../queries.html");
        exit();
    }

    $user_check="SELECT * FROM user_info WHERE USERNAME = '$user'";
    if($mysqli->query($user_check)->num_rows >0){
        $query_to_insert="INSERT INTO queries (username, query) VALUES('$user','$query') ";
        if($mysqli->query($query_to_insert)){
            header("Location: ../queries.html");
        }
        else{
            echo "error";
        }
    }
    else{
        echo "<script>";
        $msg="user not found.. please once check user";
        echo "alert('" . $msg . "');";
        echo "window.location.href = '../queries.html';";
        echo "</script>";
        
    }

    $mysqli->close();

?>
