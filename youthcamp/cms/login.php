<!DOCTYPE html>
<html lang="en">
    <head>
        <title> Camp | Login </title>
        <meta name="description" content="Camp Admin login page">
        <meta name="keywords" content="people, database">
        <script src="staff.js"></script>

    </head>

    <body>
        <h1>Admin Login</h1>
        <?php 
            echo "<h3>";
            if($_REQUEST["loginRequired"]) { 
                echo "Login Required"; 
            } else if ($_REQUEST["invalidLogin"]) {
                echo "Invalid username and/or password.";
            }
            echo "</h3>";
        ?>
        <form name="loginForm" method="post" action="processLogin.php" onsubmit="return validateForm()">
            <table class="formTable">
                <tr>
                    <td class="formLabel">Username:</td>
                    <td>
                        <input type="text" name="username"> <br>
                    </td>
                </tr>
                <tr>
                    <td class="formLabel">Password:</td>
                    <td>
                        <input type="password" name="password"> <br>
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td>
                    <input name="submit" type="submit" value="Login">
                    </tr>
            </table>
        </form>
    </body>
</html>
