<?php
    $username="root";
    $host="127.0.0.1:3307";
    $password="";
    $db="test";

    $mysqli=new mysqli($host,$username,$password,$db);
    if($mysqli->connect_errno){
        echo "connected";
    }
//-----------------------------------CREATE TABLE FOR LIKES--------------------------------------------------------
    // $table_likes="CREATE TABLE likes(
    //     ID INT AUTO_INCREMENT PRIMARY KEY,
    //     DISTRICT VARCHAR(100) NOT NULL,
    //     COUNT INT NOT NULL
    // )";
    // if($mysqli->query($table_likes)php/likes.php){
    //     echo "successfully created.";
    // }
//=========-----------------------------INERT ROWS INTO TABLE 'likes'-----------------------------------------------------    
    // $districts=array('Rajahmundry','west godawari','kakinada','krishna','vijayawada','guntur','vizag','vijayanagram','kurnul');
    // foreach($districts as $district){
    //     $insert="INSERT INTO likes(DISTRICT,COUNT) VALUES('$district',0)";
    //     if($mysqli->query($insert)){
    //         echo "recorded successfully";
    //     }
    //     else{
    //         echo "oops...!";
    //     }
    // }
//-----------------------------------UPDATE COUNT---------------------------------------------------------
    $district=$_POST['district'];
    $count="SELECT COUNT FROM likes WHERE DISTRICT='$district' ";
    if($mysqli->query($count)){
        if($row=($mysqli->query($count))->fetch_assoc()){
            $new_count=$row['COUNT']+1;
            $update_count="UPDATE likes SET COUNT=$new_count WHERE  DISTRICT='$district'";
            if($mysqli->query($update_count)){
                header('Location:  ../queries.html');
            }
            else{
                echo "not updated";
            }
           
        }
    }
    else{
        echo "no district found";
    }
?>
