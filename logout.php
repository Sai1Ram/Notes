<?php
session_start();
session_destroy();
header("Location: /Notes/Sign-in.php");
?>