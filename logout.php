<?php

session_start();

session_destroy();
header('../13_sessions.php');

echo '<h1>You have been logged out <?h1>';
?>
