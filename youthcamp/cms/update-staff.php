<!--ADD A NEW STAFF MEMBER-->
<?php
    include 'requireLogin.php';
	include 'config.php';
    $lastName = $_REQUEST["lastName"];
    $firstName = $_REQUEST["firstName"];
    $email = $_REQUEST["email"];
    $role = $_REQUEST["role"];
    $bio = $_REQUEST["bio"];
    $imagePath = $lastName."-".$firstName.".jpg"; 
?>
<!DOCTYPE html>
<html lang="en">
    TEST
    <head>
        <title>Update Staff CMS</title>
        <meta charset="utf-8">
        <link rel="shortcut icon" href="images/favicon.ico">
    </head>
    <body>
        <?php
            $query ="INSERT INTO staff_member (lastName, firstName, email, role, imagePath, bio)
            VALUES ('$lastName', '$firstName', '$email', '$role', '$imagePath', '$bio')";
            $result = mysql_query($query)
                or die("SQL Error: <b>".mysql_error()."</b><br>");
        ?>
        <h1>New Staff Member Added Successfully!</h1>
        <a href="add-staff.php">Add A New Staff Member</a>
        <br>
        <a href="insert-staff.php">Update A Current Staff Member</a>
        <br>
        <a href="../index.php">Back to Home Page</a>
    </body>
</html>