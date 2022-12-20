<?php
session_start();
session_unset();
header("Location: /Notes/Sign-in.php");
?>