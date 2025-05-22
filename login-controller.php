<?php

include('connection.php');

session_start();

if(isset($_SESSION['username'])) {
    header("Location: main.html");
    exit;
}

if(isset($_POST['login'])) {
    
    $username = $_POST['username'];
    $password = $_POST['password'];
    
    $query = "SELECT `username`, `password` FROM `login` WHERE `username`= '$username' AND `password`= '$password'";

    $result = mysqli_query($my_connection, $query);
    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
    $count = mysqli_num_rows($result);

    if($count == 1) {
       
        $_SESSION['username'] = $username;
        echo "<script>
                alert('Successfully login...');
            </script>";
        header("Location: main.php");
        exit;
    } else {
        echo "<script>
                window.location.href = 'login.php';
                alert('Wrong Username or Password');
            </script>";
    }
}


?>
