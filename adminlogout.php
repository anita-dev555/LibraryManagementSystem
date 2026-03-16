<?php
session_start();
session_unset();
session_destroy();
header("Location: Admin.html"); // back to login page
exit();
?>
