<?php
  session_start();
  if(is_null($_SESSION["username"])) {
    header("Location:login.php?loginRequired=true");
  }
?>
