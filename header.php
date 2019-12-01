<?php session_start();
    include_once("model/user.php");
   if (!isset($_SESSION["user"])) {
    header("location: login.php");
    }
    $user = unserialize($_SESSION["user"]) ; 
    

?>
<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" href="images/foneeshoe.png">
    <link rel="stylesheet" href="css/bootstrap1.min.css">
    <script defer src="js/all.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Noto+Serif&display=swap&subset=vietnamese" rel="stylesheet">
    <style>
        @import url('https://fonts.googleapis.com/css?family=Dancing+Script&display=swap&subset=vietnamese');
    </style>

    <link rel="stylesheet" href="style.css">
    <title>FoneeShoe</title>
</head>

<body>