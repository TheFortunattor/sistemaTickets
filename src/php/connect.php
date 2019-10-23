<?php
	$db_host="localhost";
	$db_name="diluce";
	$db_user="root";
    $db_pass="";
    $db_charset="utf8";
    try {
       $conn = new PDO( "mysql:host=$db_host;dbname=$db_name;charset=$db_charset", "$db_user", "$db_pass");
       $conn->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }
    catch(PDOException $e)
    {
        echo $sql . "<br>" . $e->getMessage();
    }
?>