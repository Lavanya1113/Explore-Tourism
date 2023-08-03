<?php 
    $username="root";
    $host="127.0.0.1:3307";
    $password="";
    $db='test';

    $mysqli=new mysqli($host,$username,$password,$db);
    if($mysqli->connect_errno){
        echo "connected";
    }
    $display=$_POST['user'];
    $entered_psw=$_POST['password'];
    $query=$_POST['query'];
    $user_psw="SELECT USER_PASSWORD FROM user_info WHERE USERNAME= '$display'";
    
    $res=$mysqli->query($user_psw);
    if($row=$res->fetch_assoc())
    {
       
            $pwd=$row['USER_PASSWORD'];
            if($entered_psw==$pwd){
            $del_query="DELETE FROM  queries WHERE username='$display' AND query = '$query'";
            if($mysqli->query($del_query)){
                header("Location: ../queries.html");
            }
            else{
                echo "ERROR";
            }
        }
        else{
            echo "INCORRECT PASSWORD...You are not the user to delete this query.";
            echo "TRY AGAIN";
        }
        
    }
    

?>