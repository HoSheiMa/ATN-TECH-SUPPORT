<?php
include './configs/index.php';
?>

<html>

<head>

    <?php include './layout/head.php' ?>
    <link rel="stylesheet" href="./css/login.css">
</head>





<body>
    <section class="ftco-section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6 text-center mb-5">
                    <h2 class="heading-section">Welcome to Amgeniesworldwide</h2>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-7 col-lg-5">
                    <div class="wrap">
                        <div class="img"
                            style="background-image:url(https://preview.colorlib.com/theme/bootstrap/login-form-15/images/xbg-1.jpg.pagespeed.ic.EtoN2PmO7Y.webp)">
                        </div>
                        <div class="login-wrap p-4 p-md-5">
                            <div class="d-flex">
                                <div class="w-100">
                                    <h3 class="mb-4">Sign In</h3>
                                </div>

                            </div>
                            <form action="controller/loginController.php" method="post" class="signin-form">
                                <input name="method" type="hidden" value="login" class="form-control">

                                <div class="form-group mt-3">
                                    <input name="user-email" type="text" class="form-control" required="">
                                    <label class="form-control-placeholder" for="username">Username/Email</label>
                                </div>
                                <div class="form-group">
                                    <input name="password" id="password-field" type="password" class="form-control"
                                        required="">
                                    <label class="form-control-placeholder" for="password">Password</label>
                                    <span toggle="#password-field"
                                        class="fa fa-fw fa-eye field-icon toggle-password"></span>
                                </div>
                                <div class="form-group">
                                    <button type="submit" class="form-control btn btn-primary rounded submit px-3">Sign
                                        In</button>
                                </div>
                                <?php
                                    if(isset($_SESSION['errors']) && sizeof($_SESSION['errors']) > 0) {
                                        foreach($_SESSION['errors'] as $key => $val) {
                                            echo "<div class=\"alert alert-danger\" role=\"alert\">
                                            $val!
                                          </div>";
                                        }
                                        $_SESSION['errors']  = null; 

                                    }
                                ?>
                                <div class="form-group d-md-flex">
                                    <div class="w-50 text-left">
                                        <label class="checkbox-wrap checkbox-primary mb-0">Remember Me
                                            <input type="checkbox" checked="">
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                    <div class="w-50 text-md-right">
                                        <a href="https://preview.colorlib.com/theme/bootstrap/login-form-15/#">Forgot
                                            Password</a>
                                    </div>
                                </div>
                            </form>
                            <p class="text-center">Not a member? <a data-toggle="tab"
                                    href="https://preview.colorlib.com/theme/bootstrap/login-form-15/#signup">Sign
                                    Up</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>



    <?php include './layout/scripts.php' ?>

</body>

</html>