<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Day_05</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php
    echo"HELLO WORLD";
    $sum=10;
    echo $sum;
    $str="<br>Hello ,this is a news";
    echo $str;
    $userRoll="admin";
    if ($userRoll=="user") {
        # code...
        echo "<br>Access granted.";
    } else {
        # code...
        echo "<br>Access denied.";

    }
    for ($i=0; $i<=5; $i++) { 
        # code..
        echo('<div class="x">hello world!</div>');
    }
    
    ?>
    <?php
    $UserName="Karan";
    if ($UserName=="admin") {
        # code...
    ?>
    <div class="autha">Authorization Complete.</div>
    <?php
    }
    else {
    ?>
    <div class="auth2">Authorization Incomplete.</div>
    <?php
    }
    ?>

    <h1>hello world!</h1>
</body>
</html>