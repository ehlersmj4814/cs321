<?php
    session_start();
    include "config.php";

    try {
        $conn = new PDO("mysql:host=".$server.";dbname=".$db_username, $db_username, $db_password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $query = "SELECT admin_id, username " . "FROM admin_login2 " . "WHERE username = :username AND password = :password";
        $stmt = $conn->prepare($query);
        $stmt->bindParam(":username", $_REQUEST["username"]);
        $stmt->bindParam(":password", $_REQUEST["password"]);
        $stmt->execute();
    }
    catch(PDOException $e) {
        echo "Connection failed (PDO): ". $e->getMessage();
    }
    $conn = null;
    $username=$_REQUEST["username"];
    $password=$_REQUEST["password"];
    
    if ($stmt->rowCount() > 0) {
        foreach($stmt as $row) {
            $_SESSION["username"] = $row["username"];
            $_SESSION["admin_id"] = $row["admin_id"];
            header("Location:userHome.php");
        }
    }
    else {
        unset($_SESSION["username"]);
        unset($_SESSION["admin_id"]);
        header("Location:login.php?invalidLogin=true");
        
    }
?>
