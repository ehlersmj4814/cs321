<!--ADD A NEW STAFF MEMBER-->
<?php 
    include 'requireLogin.php';
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Add Staff CMS</title>
        <meta charset="utf-8">
        <link rel="shortcut icon" href="images/favicon.ico">
    </head>
    <body>
        <h1>ILC Camp - Add A New Staff Member</h1>
        <form action="update-staff.php" method="post">
            <label for="firstName">Staff First Name: *</label>
            <br>
            <input type="text" id="firstName" name="firstName">
            <br>
            <br>
            <label for="lastName">Staff Last Name: *</label>
            <br>
            <input type="text" id="lastName" name="lastName">
            <br>
            <br>
            <label for="email">Staff Email Address: *</label>
            <br>
            <input type="text" id="email" name="email">
            <br>
            <br>
            <label for="role">Staff Role: *</label>
            <br>
            <select name="role">
                <option value="">Select Role...</option>
                <option value="director">Director</option>
                <option value="predirector">Pre-Camp Director</option>
                <option value="counselor">Counselor</option>
                <option value="precounselor">Pre-Counselor</option>
                <option value="Kitchen Staff">Kitchen Staff</option>
                <option value="Nurse">Nurse</option>
            </select>
            <br>
            <br>
        <label for="bio">Short Bio:</label>
        <br>
        <textarea name='bio' id='bio'></textarea>
            <br>
            <input type="submit" value="Save">
        </form>
    </body>
</html>