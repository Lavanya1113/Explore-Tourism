<?php

$username="root";
$host="127.0.0.1:3307";
$password="";
$db='test';

$mysqli=new mysqli($host,$username,$password,$db);
    if($mysqli->connect_errno){
        echo "connected";
    }

    $display=@$_POST['user'];
    $entered_psw=@$_POST['password'];
    $old_query=@$_POST['query'];
    $modified_query=@$_POST['new_query'];

    $user_psw="SELECT USER_PASSWORD FROM user_info WHERE USERNAME= '$display'";
    $res=$mysqli->query($user_psw);
    if($row=$res->fetch_assoc())
    {
            $pwd=$row['USER_PASSWORD'];
            if($entered_psw==$pwd){
            $del_query="UPDATE queries SET query='$modified_query' WHERE username='$display' AND query='$old_query'";
            if($mysqli->query($del_query)){
                header("Location: ../queries.html");
            }
            else{
                echo "ERROR";
            }
        }
        else{
            echo "INCORRECT PASSWORD...YOu you are not the user to delete this query. ";
            echo "TRY AGAIN";
        }
        
    }
    
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
        <form method='POST' action="<?php $_SERVER['PHP_SELF'] ?>">
        <?php
          $name=$_POST['username'];
          $query=$_POST['query'];
        ?>
        <input type="hidden"  name="user" value=<?php echo $_POST['username'];?> >
        <!-- old query -->
        <input type="hidden"  name="query" value='<?php echo $query ?>'>
        Update  :<input type="text"  name="new_query" value='<?php echo $query ?>'><br>
        Password:<input type="password" name="password"/><br>
        <button type="submit">update</button>
    </form>
</body>
</html>
