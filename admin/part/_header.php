<?php require('config/database.php');
if (empty($_SESSION['user'])) {
    header('location:login');
}