<?php
require_once './configs/index.php';
$user = empty($_SESSION['user']) ?  null : $_SESSION['user'] ;
$role = $user['role'];
if (empty($user)){
    header('Location: login.php');
}
?>

<html>

<head>

    <?php include './layout/head.php' ?>
    <link rel="stylesheet" href="./css/login.css">
</head>


<body>

    <?php
        include "./console/$role/index.php"
    ?>




    <?php include './layout/scripts.php' ?>

</body>

</html>