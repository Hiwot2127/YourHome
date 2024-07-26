<?php
session_start();
session_unset();
session_destroy();
setcookie("first_name", "", time() - 3600, "/"); // Expire the cookie
header("Location: ../app/pages/signIn.php");
exit();
?>
