<!--UPDATE EXISTING STAFF MEMBER-->
<?php
    include 'requireLogin.php';
	include 'config.php';
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
            $query = "SELECT id, lastName, firstName, email, role, imagePath, bio
                    FROM staff_member 
                    ORDER BY lastName";
            $result = mysql_query($query)
                    or die("SQL Error: <b>".mysql_error()."</b><br />");
        
        ?>
        <h1>Updating Existing Staff Member</h1>
        <form action="update-member.php" method="post">
            <label> Select Last Name: 
                <select name="id">
                    <?php 
                        while ($row = mysql_fetch_array($result)){
                    ?>
                        <option value="<?php echo $row["id"]; ?>">
                            <?php echo $row["lastName"]; ?>
                        </option>
                    <?php } ?>
                </select>
            </label>
            <br>
            <label>First Name: <input type="text" id="firstName" name="firstName"></label>
            <br>
            <label>Last Name: <input type="text" id="lastName" name="lastName"></label>
            <br>
            <label>Email Address: <input type="text" id="email" name="email"></label>
            <br>
            <label>Role:
                <select name="role">
                    <option value="Director">Director</option>
                    <option value="Counselor">Counselor</option>
                    <option value="Pre-Councelor">Pre-Counselor</option>
                    <option value="Kitchen Staff">Kitchen Staff</option>
                    <option value="Nurse">Nurse</option>
                </select>
            </label>
            <br>
            <label>Image Path: <input type="text" id="imagePath" name="imagePath"></label>
            <br>
            <label>Bio: <input type="text" id="bio" name="bio"></label>
            <br>
            <input type="submit" value="Save">
        </form>
    </body>
</html>