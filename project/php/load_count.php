<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .block{
            position: relative;
            /* display:flex; */
            border:0 px solid black;
            border-radius:5px;
            width:200px;
            height:max-content;
            margin:5px;
        }
        .district{
            display:absolute;
            left:2px;
            top:3px;

            
        }
        .count{
            display:absolute;
            top:10px;
            right:5px; 
              
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
        $count="SELECT DISTRICT, COUNT FROM likes ";
        $result=$mysqli->query($count);

        if($result->num_rows > 0){
            
            while($row=$result->fetch_assoc()){
                $display_count=$row['COUNT'];
                $display_district=$row['DISTRICT'];
                echo "<div class='block'";
                echo "<p class='district'>" . $display_district . "</p><p class='count'>" . $display_count . "</p><br>";
                echo "</div>";
            }
        }
    ?>

</body>
</html>