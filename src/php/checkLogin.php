<?php
    include_once "connect.php";
    
	foreach($_POST as $key => $value) {
        switch ($key){
            case 'user': $user = $value;
                break;
            case 'password': $password = $value;
                break;
        }
    }

    if(isset($user) && isset($password)){
        $stmt = $conn->prepare( "SELECT * FROM identificacion WHERE usuario = ? AND pass = ?");
        $stmt->bindParam( 1, $user);
        $stmt->bindParam( 2, $password);
        $stmt->execute();
        foreach($stmt as $r){
            if($r['usuario'] == $user && $r['pass'] == $password){
                session_start();
                $_SESSION['usuario'] = $user;
                $_SESSION['contra'] = $password;
                echo "ok";
            }
            else{
                session_start();
                session_destroy();
                echo "error";
            }
        }
    }
?>