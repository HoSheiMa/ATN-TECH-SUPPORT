<?php
include './configs/index.php';
if (empty($_SESSION['user'])){
    header('Location: login.php');
} else {
    header('Location: console.php');
}