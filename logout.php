<?php
session_start();
$user=$Session['user'];
session_destroy();
header('Location:index.php');
?>