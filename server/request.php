<?php
session_start();
include("../common/dbConfig.php");
if (isset($_POST['signup'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $confirmPassword = $_POST['confirm-password'];

    if ($password !== $confirmPassword) {
        die('Passwords do not match.');
    }
    $user = $conn->prepare("Insert into `users` ( `name`, `email`, `password`) values('$name','$email', '$password')");
    $result = $user->execute();
    if ($result) {
        $_SESSION["user"] = ["name" => $name, "email" => $email];
        header("location: /");
    } else {
        echo "Error!!";
    }
} elseif (isset($_POST['login'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];

    $query = "select * from users where email ='$email' and password = '$password'";
    $result = $conn->query($query);
    if ($result->num_rows == 1) {
        $name = "";
        foreach ($result as $row) {
            $name = $row['name'];
        }
        $_SESSION["user"] = ["name" => $name, "email" => $email];
        header("location: /");
    } else {
        echo "Credentials did not matched!!";
    }
} elseif (isset($_GET['logout'])) {
    session_unset();
    header("location: /");

}
