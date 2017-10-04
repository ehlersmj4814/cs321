<?php
    session_start();
    include("requireLogin.php");
?>
<!--https://www.w3schools.com/php/php_file_upload.asp>-->
<!DOCTYPE html>
<html>
    <head>
        <title>User Home</title>
    </head>
    <body>
        <h1>Hello <?php echo $_SESSION["username"] ?>!</h1>
        
        <a href="add-staff.php">Add A New Staff Member</a>
        <br>
        <a href="insert-staff.php">Update A Current Staff Member</a>
        <br>
        <a href="../index.php">Back to Home Page</a>
    </body>
</html>