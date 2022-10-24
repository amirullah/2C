<?php 
session_start();
    if(empty($_SESSION['usernamexyz'])){
        header('location:index.php');
        exit();
    }
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        echo "Ini adalah halaman home ".$_SESSION['usernamexyz'];
    ?> 
    <a href="logout.php">logout</a>
</body>
</html>