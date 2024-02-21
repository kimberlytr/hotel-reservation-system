<?php
session_start();
unset($_SESSION['book']);
header("Location: Book.php");
?>
