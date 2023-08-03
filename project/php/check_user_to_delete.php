<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delete_query</title>
</head>
<body>
    <form method='POST' action="delete.php">
        <?php
          $name=$_POST['username'];
          $query=$_POST['query'];
        ?>
       USERNAME: <input type="text"  name="user" value=<?php echo $_POST['username'];?> >
        <input type="hidden"  name="query" value='<?php echo $query ?>'>
       PASSWORD:  <input type="password" name="password"/>
        <button type="submit">delete</button>
    </form>
    
</body>

</html>
