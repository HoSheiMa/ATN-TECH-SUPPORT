<?php 

// Sessions 
session_start();

// login info from session


// database
$db = 'adil';
$host = 'localhost';
$user = "root";
$pass = "";
// server
// $db = "id14792636_test";
// $host = "localhost";
// $user = "id14792636_root";
// $pass = "jq{7X[Rl[j}H/28Y";

// Create connection
$conn = null;
try {
    $conn = new PDO("mysql:host=$host;dbname=$db", $user, $pass);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  } catch(PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
  }