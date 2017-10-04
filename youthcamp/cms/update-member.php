<!--UPDATE EXISTING STAFF MEMBER-->
<?php
    include 'requireLogin.php';
	include 'config.php';
    $id = $_REQUEST["id"];
    $lastName = $_REQUEST["lastName"];
    $firstName = $_REQUEST["firstName"];
    $email = $_REQUEST["email"];
    $role = $_REQUEST["role"];
    $imagePath = $_REQUEST["imagePath"];
    $bio = $_REQUEST["bio"];
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Update Staff CMS</title>
        <meta charset="utf-8">
        <link rel="shortcut icon" href="images/favicon.ico">
    </head>
    <body>
        <?php
            $query ="UPDATE staff_member
                SET lastName = '$lastName', firstName = '$firstName', email = '$email', role = '$role', imagePath = '$imagePath', bio ='$bio'
                WHERE id = '$id'";
            $result = mysql_query($query)
                or die("SQL Error: <b>".mysql_error()."</b><br />");
        ?>
        <h1>Existing Staff Member Successfully Updated!</h1>
        <a href="add-staff.php">Add A New Staff Member</a>
        <br>
        <a href="insert-staff.php">Update A Current Staff Member</a>
        <br>
        <a href="../index.php">Back to Home Page</a>
    </body>
</html>