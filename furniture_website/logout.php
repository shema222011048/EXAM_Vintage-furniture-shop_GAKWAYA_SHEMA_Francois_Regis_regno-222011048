<?php
session_start();

// Your code here, e.g., checking if a user is logged in
if (!isset($_SESSION['user_id'])) {
    header("Location: index.php");
    exit();
}
?>
