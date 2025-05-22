<?php

session_start();
session_unset();
// $_SESSION = [];
// $_SESSION = array();
session_destroy();
header('Location: login.php', true, 301);
exit;

?>