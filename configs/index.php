<?php 

// Sessions 
session_start();

// login info from session


// database
$db = 'adil';
$host = 'localhost';
$user = "root";
$pass = "";


// Create connection
$conn = null;
try {
    $conn = new PDO("mysql:host=$host;dbname=$db", $user, $pass);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  } catch(PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
  }