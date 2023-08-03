<?php
    $username="root";
    $host="127.0.0.1:3307";
    $password="";
    $db="test";
    //connect database
    $mysqli = new mysqli($host, $username, $password, $db);
    if ($mysqli->connect_errno) {
        echo "Failed to connect to MySQL: " . $mysqli->connect_error;
        exit();
    }
    else{
        echo "connected" . "<br>";
    }

    // create table
        // $creat_table="CREATE TABLE User_info (
        // ID INT(10) AUTO_INCREMENT PRIMARY KEY,
        // USERNAME VARcHAR(50) NOT NULL,
        // EMAIL VARCHAR(100) NOT NULL,
        // USER_PASSWORD VARCHAR(50) NOT NULL,
        // CONFIRM_PASSWORD VARCHAR(50) NOT NULL
        // )";
        // if($mysqli->query($creat_table)==TRUE){
        //     echo  "Table 'users' created successfully";
        // }
        // else{
        //     echo "Error creating table: " . $mysqli->error;
        // }


        $user=$_POST['username'];
        $emailid=$_POST['email'];
        $psw1=$_POST['password'];
        // $psw2=$_POST['confirm-password'];

        $check_user="SELECT * FROM User_info WHERE USERNAME='$user'";
        $check_email="SELECT * FROM User_info WHERE EMAIL='$emailid'";
        $user_res=$mysqli->query($check_user);
        $email_res=$mysqli->query($check_email);
        if($user_res->num_rows > 0 || $email_res->num_rows > 0){
            header("Location: ../registration.html");
            // echo '<span style="visibility: visible; color: red" >' . $_POST['display'] . '</span>' ;
          exit();
        }
        else{
            $insert_record="INSERT INTO User_info (USERNAME , EMAIL , USER_PASSWORD ) VALUES('$user','$emailid','$psw1')";
            $check_insert=$mysqli->query($insert_record);
            if(!$check_insert){
                echo 'data not recorded.';
                exit();
            }
            else{
                // echo "data recorded successfully";
                header("Location: ../main.html");
            }
        }
?>