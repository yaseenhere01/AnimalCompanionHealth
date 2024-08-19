<?php
include('db_conn.php');
?>

<?php
session_start();
?>

<?php
session_unset();
?>

<?php
session_destroy();
?>

<?php
header('location:./user_login.php');
?>