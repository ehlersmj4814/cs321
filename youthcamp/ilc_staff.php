<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Staff | CLC Youth Camp at ILC | Eau Claire, Wisconsin</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="koyquin.css" rel="stylesheet" type="text/css">
        <link href="ilc.css" rel="stylesheet" type="text/css">
        <link rel="shortcut icon" href="images/favicon.ico">
    </head>
    <body>
        <?php 
            include 'ilc_navigation.php'; 
            include 'cms/config.php';
            $query = "SELECT *
                FROM staff_member";
            $result = mysql_query($query)
                or die("SQL Error: <b>".mysql_error()."</b><br>");
        ?>
        <main>
			<div id="staff">
                <h1>Meet the Staff!</h1>
                <div class="team">
                <?php 
                    while ($row = mysql_fetch_array($result)){

                ?>
                        <div class="person">
                            <img src="<?php echo "images/staff/".$row["imagePath"]; ?>" width="108" height="144" alt="<?php echo $row["firstName"]." ".$row["lastName"]; ?>">
                            <p>
                                <span><?php echo $row["firstName"]." ".$row["lastName"]; ?></span><br>
                                <?php echo $row["role"]; ?>
                            </p>
                        </div> 
                <?php
                    }
                ?> 
                </div>
                <div style="clear:both;">&nbsp;</div>
			</div>
        </main>
        <?php include 'ilc_footer.php.';?>
        <div id="cms"><a href="cms/login.php"><img src="images/cms.png" alt="cms"></a></div>
    </body>
</html>