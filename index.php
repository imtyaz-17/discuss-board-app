<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Discuss Board Project</title>
    <?php include('./client/commonFiles.php'); ?>
</head>
<body>
<?php
session_start();
include('./client/header.php');
if (isset($_GET['signup']) && empty($_SESSION['user']['email']))
    include('./client/signup.php');
elseif (isset($_GET['login']) && empty($_SESSION['user']['email']))
    include('./client/login.php');

?>
</body>
</html>
