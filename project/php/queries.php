<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .shadow{
            border: 1px solid black;
            width: 400px;
            height: max-content;
            border-radius:10px;
            background:transparent;
            margin:5px;
            padding:5px;
            position: relative;
    
        }
        #delete{
            position: absolute;
            right:5px;
            top:50px;
        }
        #edit{
            position: absolute;
            right:5px;
            top:80px;
        }
        .user{
            color:hotpink;
            font-size:larger;
        }
        .query{
            color:white;
            font-size:large;
        }
        .time{
            color:white;    
            font-size:small;
        }
        button{
            border:none;
            background-color:transparent;
        }

    </style>
</head>
<body>
<?php
    $username="root";
    $host="127.0.0.1:3307";
    $password="";
    $db='test';

    $mysqli=new mysqli($host,$username,$password,$db);
    if($mysqli->connect_errno){
        echo "connected";
    }

    $queries="SELECT username, query , timestamp_column FROM  queries ORDER BY timestamp_column ASC ";
    $result=$mysqli->query($queries);

    if($result->num_rows > 0){
        
        while($row=$result->fetch_assoc()){
            $display_user=$row['username'];
            $display_query=$row['query'];  
            $display_time=$row['timestamp_column'] ;

            echo "<div class='shadow'>";
            echo "<p class='user'>" . $display_user . "</p><p class='query'>" .  $display_query . "</p>" ;
            echo "<p class='time'>" . $display_time . "</p>";

            echo "<form action='php/check_user_to_delete.php ', method='POST'>";
            echo  "<input type='hidden' name='username' value='" . $display_user . "'>";
            echo "<input type='hidden' name='query' value='" . $display_query . "'>";
            echo "<button type='submit' id='delete'><i class='fas fa-trash'></i></button>";
            // echo "<button type='submit' id='edit'><i class='fas fa-edit'></i></button>";
            echo "</form>";

            echo "<form action='php/update_query.php ', method='POST'>";
            echo  "<input type='hidden' name='username' value='" . $display_user . "'>";
            echo "<input type='hidden' name='query' value='" . $display_query . "'>";
            echo "<button type='submit' id='edit'><i class='fas fa-edit'></i></button>";
            echo "</form>";
            echo "</div>";
        }
    }

?>


</body>
</html>