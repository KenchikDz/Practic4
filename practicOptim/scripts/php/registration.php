<?php 
    header("Content-Type: text/html; charset=utf-8");
    session_start();
    require('connect.php');
    $name = $_POST["Name"];
    $secondname = $_POST["SecondName"];
    $lastname = $_POST["LastName"];
    $phonenumber = $_POST["PhoneNumber"];
    $passworduser = $_POST["passwordUser"];

    $sql = "INSERT INTO client (Name, SecondName, LastName, numberPhone, password)
    VALUES ('$name', '$secondname', '$lastname', '$phonenumber', '$passworduser')";

    if ($conn->query($sql) === TRUE) {
        header("Location: ../../../auth.php");
        $_SESSION['useremail'] = $useremail;
        $_SESSION['password'] = $passworduser;
        exit;
    } else {
      echo "Error: " . $sql . "<br>" . $conn->error;
    } 
?>