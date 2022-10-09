<!DOCTYPE html>
<?php include "connect.php" ?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $stmt = $pdo->prepare("SELECT * from member WHERE username=?");
    $stmt->bindParam(1,$_GET["username"]);
    $stmt->execute();
    $row = $stmt->fetch();
    ?>
    
    username: <?=$row["name"]?><br>
    address: <?=$row["address"]?><br>
    mobile: <?=$row["mobile"]?><br>
    email: <?=$row["email"]?><br>
    
</body>
</html>