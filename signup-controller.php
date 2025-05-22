<?php

include('connection.php');

if(isset($_POST['create'])) {
    
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $confirm = $_POST['confirm'];
    
    $stmt = $my_connection->prepare("INSERT INTO `login`(`firstname`, `lastname`, `username`, `password`) VALUES(?, ?, ?, ?)");
    
    if($password === $confirm) {
        $stmt->bind_param('ssss', $firstname, $lastname, $username, $password);
        if($stmt->execute()){
            echo "<script>
                window.location.href = 'login.php';
                alert('Success!.');
            </script>";
        }else{
            echo "<script>
                window.location.href = 'sign-up.php';
                alert('Error: ".addslashes($stmt->error)."');
            </script>";
        }

    }else{
        echo "<script>
                window.location.href = 'sign-up.php';
                alert('Password do not match!.');
            </script>";
    }

    // if($count == 1) {
       
    //     $_SESSION['username'] = $username;
    //     echo "<script>
    //     alert('Successfully login...');
    // </script>";
    //     // header("Location: account.php");
    //     exit;
    // } else {
    //     echo "<script>
    //             window.location.href = 'login.php';
    //             alert('Wrong Username or Password');
    //         </script>";
    // }
}


?>
