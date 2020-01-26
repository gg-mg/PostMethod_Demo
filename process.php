<?php

if (isset($_POST['submit'])) {
    $first_name=$_POST['first_name'];
    $last_name=$_POST['last_name'];
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <p><?php echo $first_name;?></p>
    <p><?php echo $last_name;?></p>
    
    
</body>
</html>

