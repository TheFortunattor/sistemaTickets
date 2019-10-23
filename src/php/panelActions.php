<?php
    include_once "connect.php";

    function truncate($conn){
        $stmt = $conn->prepare( "TRUNCATE productos");
        $stmt->execute();
    }

    function password($conn, $old, $new){
        $stmt = $conn->prepare( "SELECT * FROM identificacion WHERE id = 2;");
        $stmt->execute();
        foreach($stmt as $r){
            $pass = $r['pass'];
        }
        if($pass == $old){
            $stmt = $conn->prepare( "UPDATE identificacion SET pass = '$new' WHERE id = 2;");
            $stmt->execute();
            echo "Cambiado con exito";
        }else{
            echo "Error en Contraseña";
        }

    }

    foreach($_POST as $key => $value){
        if($key == "action"){
            switch ($value){
                case "truncate": truncate($conn);
                    break;
                case "password": password($conn, $_POST['old'], $_POST['new']);
                    break;
            }
        }
    }

?>