<?php
    $email = $_POST['email']
    $password = $_POST['password']
    $username = $_POST['username']

    $conn = new mysqli('localhost','root','','user credentials');
    if($conn->connect_error){
        die('connection Failed :' .$conn->connect_error);
    }else{
        $stmt = $conn->prepare("insert into registration(email, password,username)
        values(?,?,?");
        $stmt->bind_param("sss",$email,$password,$username);
        $stmt->execute();
        echo "registration successful...";
        $stmt->close()
        $conn->close()
    }
    }

?>