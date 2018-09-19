<?php
session_start();
foreach ($_SESSION as $elem)
    $elem = NULL;
unset($_SESSION);
$_SESSION = NULL;
session_unset();
session_destroy();
session_reset();
header("location: login.php");