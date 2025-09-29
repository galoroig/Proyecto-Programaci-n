<?php
session_start();
session_unset();
session_destroy();
header("Location: Login.php?cerrado=1");
exit();
?>