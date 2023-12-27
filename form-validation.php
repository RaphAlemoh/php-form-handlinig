<?php
require_once("connect.php");

$nameErr = $emailErr = $numberErr = $passwordErr = $messageErr = "";
$name = $email = $number = $password = $message = "";

if ($_SERVER['REQUEST_METHOD'] == "POST" || isset($_POST['submit'])) {

    if (empty($_POST['name'])) {

        $nameErr = 'Please enter a name';
    } else {
        $name = test_input($_POST['name']);
        if (!preg_match("/^[a-zA-Z-' ]*$/", $name)) {
            $nameErr = "Letters, hyphens, and spaces allowed";
        }
    }


    if (empty($_POST['email'])) {

        $emailErr = 'Please enter a valid email address';
    } else {
        $email = test_input($_POST['email']);
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $emailErr = 'Invalid email format';
        }
    }


    if (empty($_POST['password'])) {
        $passwordErr = 'Please enter a valid password';
    } elseif (!preg_match('/^(?=.*[a-zA-Z])(?=.*[^\w\d\s])/', $_POST['password'])) {
        $passwordErr = 'Use letters, numbers, and symbols in your password';
    } else {
        $password = $_POST['password'];
    }

    if (empty($_POST['message'])) {

        $messageErr = 'Please enter your comment';
    } else {
        $message = test_input($_POST['message']);
    }


    $sql = "INSERT INTO users (username, email, password, message)
    VALUES ('$name', '$email', '$password', '$message')";

    if (mysqli_query($dbc, $sql)) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($dbc);
    }

    mysqli_close($dbc);
}



function test_input($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
